<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    //


    public function login(Request $request){

        try {
            $email = $request->input('email');
            $password = $request->input('password');
            $user = User::query()
                ->where('email', '=', $email)
                ->first();
            if($user == null) { // user not found
                return response()->json([
                    "message"=> "Cet utilisateur n'existe pas"
                ], Response::HTTP_UNAUTHORIZED);
            }

            // match password
            $match = Hash::check($password, $user->password);
            if($match) { // login successfully

                return response()->json($user, Response::HTTP_OK);
            } else {
                return response()->json([
                        "message"=> "Mot de passe incorrect"
                    ], Response::HTTP_UNAUTHORIZED);
            }
        }catch (QueryException $exception) {
            Log::error($exception->getMessage());
            return response()->json([
                "message"  => $exception->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }



    public function list(){

    }


    public function index(){

        $users  = User::all();

        if (Auth::user()->role =="ADMIN") {
            # code...
        $users  = User::where('role','SUPERVISEUR')->get();

        }
        return view('users.liste',compact('users'));
    }
    public function create()
    {

        $sites  = Site::all();

        return view('users.add',compact('sites'));
    }

    public function store(Request $request)
    {

        if ($request->password != $request->password_confirmation) {
        Session::flash('error', 'Mot de passe non identique');
            return back();
        }

        $user  = new User();
        $user->name  = $request->name;
        $user->email  = $request->email;
        $user->password  = Hash::make($request->password);
        $user->role  = $request->role;
        $user->site_id  = $request->site_id;
        $user->save();

        Session::flash('success', 'Utilisateur ajouté avec succès ');

        return redirect()->back();
    }


    public function edit($id)
    {
        $user = User::find($id);
        $sites  = Site::all();

        return view('users.update',compact('user','sites'));
    }


    public function update(Request $request,$id)
    {
        $user  = User::findOrFail($id);
        $user->name  = $request->name;
        $user->email  = $request->email;
        $user->role = $request->role;
        $user->site_id  = $request->site_id;

        $user->update();
        Session::flash('success', 'Mise à jours éffectuée avec succès ');

        return redirect()->back();
    }

    public function destroy($id)
    {

       try {

        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('success', 'Utilisateur à été retié avec succès');
      return redirect()->back();

       } catch (\Throwable $th) {
           //throw $th;
           Log::error($th->getMessage());
           abort(500);
       }

    }
}
