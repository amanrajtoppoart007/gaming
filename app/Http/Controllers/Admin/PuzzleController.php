<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePuzzleRequest;
use App\Http\Requests\Admin\UpdatePuzzleRequest;
use App\Models\Option;
use App\Models\Puzzle;
use App\Models\Score;
use App\Models\Solution;
use App\Models\UserPuzzle;
use Illuminate\Support\Facades\DB;
class PuzzleController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $puzzles = Puzzle::cursorPaginate(10);
        return view("admin.puzzle.index",compact('puzzles'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $puzzle = Puzzle::orderBy('level', 'DESC')->first();
        $level = 1;
        if ($puzzle) {
            $level = $puzzle->level + 1;
        }

        return view("admin.puzzle.create",compact('level'));
    }

    /**
     * @param StorePuzzleRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StorePuzzleRequest $request)
    {
         DB::beginTransaction();
        try {
            $puzzle = Puzzle::create([
                'level'=>$request->input('level'),
                'description'=>$request->input('description'),
                'solution_description'=>$request->input('solution_description'),
                'link'=>$request->input('link'),
                'time_limit'=>6
            ]);
            foreach($request->input('option') as $key=>$value)
            {
                $option['puzzle_id'] = $puzzle->id;
                $option['key']    = $key;
                $option['option'] = $value;
                Option::create($option);
            }
            $answer = Option::where(['puzzle_id'=>$puzzle->id,'key'=>$request->input('correct_answer')])->first();
            Solution::create(["puzzle_id"=>$puzzle->id,"option_id"=>$answer->id]);

             if ($request->input('question', false)) {
                $puzzle->addMedia(storage_path('tmp/uploads/' . $request->input('question')))->toMediaCollection('questions');
            }

             if ($request->input('solution', false)) {
                $puzzle->addMedia(storage_path('tmp/uploads/' . $request->input('solution')))->toMediaCollection('solutions');
            }
              DB::commit();
            $result = ["status"=>1,"response"=>"success","message"=>"Puzzle created successfully"];

        }
        catch (\Exception $exception)
        {
            DB::rollBack();
           $result = ["status"=>0,"response"=>"exception_error","message"=>$exception->getMessage()];
        }

        return response()->json($result,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $puzzle = Puzzle::find($id);
        return view("admin.puzzle.show",compact('puzzle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $puzzle = Puzzle::find($id);
        return view("admin.puzzle.edit",compact('puzzle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdatePuzzleRequest $request, int $id): \Illuminate\Http\JsonResponse
    {
        DB::beginTransaction();
        try {
            $puzzle = Puzzle::find($id);
            $puzzle->update([
                'description'=>$request->input('description'),
                 'solution_description'=>$request->input('solution_description'),
                 'link'=>$request->input('link'),
            ]);
            foreach($request->input('option') as $option)
            {
                Option::where(['id'=>$option['id']])->update([
                    'key'=>$option['key'],
                    'option'=>$option['option']
                ]);
            }

            $puzzle->solution()->update(['option_id'=>$request->input('correct_answer')]);


            if ($request->has('question')) {
                if (!$puzzle->question || $request->input('question') !== $puzzle->question->file_name) {
                    $puzzle->question?->delete();
                    $puzzle->addMedia(storage_path('tmp/uploads/' . $request->input('question')))->toMediaCollection('questions');
                }
            }

            if ($request->has('solution')) {
                if (!$puzzle->solutions || $request->input('solution') !== $puzzle->solutions->file_name) {
                    $puzzle->solutions?->delete();
                    $puzzle->addMedia(storage_path('tmp/uploads/' . $request->input('solution')))->toMediaCollection('solutions');
                }
            }
               DB::commit();
            $result = ["status"=>1,"response"=>"success","message"=>"Puzzle updated successfully"];
        }
        catch (\Exception $exception)
        {
             DB::rollBack();
            $result = ["status"=>0,"response"=>"exception_error","message"=>$exception->getMessage()];
        }
        return response()->json($result,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $id): \Illuminate\Http\JsonResponse
    {
         DB::beginTransaction();
        try {
            $puzzle = Puzzle::find($id);
            $puzzle->solution()->delete();
            $puzzle->options()->delete();
            $puzzle->solutions?->delete();
            $puzzle->question?->delete();
            Score::where(['puzzle_id'=>$puzzle->id])->delete();
            UserPuzzle::where(['puzzle_id'=>$puzzle->id])->delete();
            $puzzle->delete();
            DB::commit();
            $result = ["status" => 1, "response" => "success", "message" => "Puzzle deleted successfully"];
        }
        catch (\Exception $exception)
        {
             DB::rollBack();
            $result = ["status"=>0,"response"=>"exception_error","message"=>$exception->getMessage()];
        }
        return response()->json($result,200);
    }
}
