<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use  App\User;
use Illuminate\Http\Request; 


class UserController extends Controller
{
    /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */

    /**
     * Get the authenticated User.
     *
     * @return Response
     */
    public function index()     
    {         
        $users = User::all();         
        return response()->json($users);     
    }    
    public function register(Request $request)
    {
        //validate incoming request 
        $this->validate($request, [
            'username' => 'required|string|unique:users',
            'password' => 'required|confirmed',
        ]);

        try {

            $user = new User;
            $user->username = $request->input('username');
            $plainPassword = $request->input('password');
            $user->password = app('hash')->make($plainPassword);

            $user->save();

            //return successful response
            return response()->json(['user' => $user, 'message' => 'CREATED'], 201);

        } catch (\Exception $e) {
            //return error message
            return response()->json(['message' => 'User Registration Failed!'], 409);
        }

    }

    public function update(Request $request, $id)     
    {         
        // $users = User::find($id);         
        // $users->update($request->all());         
        // return response()->json([             
        //     'message' => 'Successful update user'         
        // ]);    
         $this->validate($request, [
            'username' => 'required|string|unique:users',
            'password' => 'required|confirmed',
        ]);

        try {

            $user = User::find($id);    
            $user->username = $request->input('username');
            $plainPassword = $request->input('password');
            $user->password = app('hash')->make($plainPassword);

            $user->update($request->all());

            //return successful response
            return response()->json(['user' => $user, 'message' => 'UPDATE'], 201);

        } catch (\Exception $e) {
            //return error message
            return response()->json(['message' => "User update Failed!$e"], 409);
        } 
    }     
    public function delete($id)     
    {         
        User::destroy($id);         
        return response()->json([             
            'message' => 'Successful delete user'         
        ]);     
    } 

    public function show($id)     
    {         
        $user = User::find($id);         
        return response()->json($user);     
    }     

    

}