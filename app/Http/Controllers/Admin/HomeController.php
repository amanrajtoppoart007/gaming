<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangePasswordRequest;
use App\Models\Admin;
use App\Models\Puzzle;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $puzzles = Puzzle::all();
        $puzzle_count = $puzzles->count();
        $puzzle_user=0;
        foreach($puzzles as $puzzle)
        {
            $puzzle_user += $puzzle->users()->count();
        }
        $user_count = User::count();
        return view("admin.home",compact("puzzle_count",'puzzle_user','user_count'));
    }
    public function password()
    {
        return view("admin.account.password");
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        try {
            $email = auth('admin')->user()->email;
            if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $request->input('current_password')])) {
                if (Admin::where(['id' => auth('admin')->user()->id])->update([
                    'password' => Hash::make($request->input('new_password'))
                ])) {
                    $result = ["status" => 1, "response" => "success", "message" => "Admin password changed successfully"];
                } else {
                    $result = ["status" => 0, "response" => "error", "message" => "Password not changed"];
                }
            } else {
                $result = ["status" => 0, "response" => "error", "message" => "Incorrect current password"];
            }
        } catch (\Exception $exception) {
            $result = ["status" => 0, "response" => "exception", "message" => $exception->getMessage()];
        }

        return response()->json($result,200);
    }
}
