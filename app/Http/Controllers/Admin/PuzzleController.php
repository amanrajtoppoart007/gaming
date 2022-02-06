<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePuzzleRequest;
use App\Models\Option;
use App\Models\Puzzle;
use App\Models\Solution;
use Illuminate\Http\Request;

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
        try {
            $puzzle = Puzzle::create([
                'level'=>$request->input('level'),
                'description'=>$request->input('description'),
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
            $result = ["status"=>1,"response"=>"success","message"=>"Puzzle created successfully"];

        }
        catch (\Exception $exception)
        {
           $result = ["status"=>0,"response"=>"exception_error","message"=>$exception->getMessage()];
        }

        return response()->json($result,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
