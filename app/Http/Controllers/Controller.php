<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function indexUpdateProfile($id)
    {
        $user = User::find($id);
        return view('profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = User::find($request->user_id);
        $request->validate([
            'email' => 'required|unique:users,email,'.$request->user_id,
        ]);

        $data = $request->all();

        if($request->dob == null)
        {
            $data['dob'] = $user->dob;
        }
        
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->dob = $data['dob'];
        $user->gender = $data['gender'];
        $user->country = $data['country'];
        $user->save();

        return redirect('/');
    }
}
