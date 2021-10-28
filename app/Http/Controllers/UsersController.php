<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    //

    public function list(){



    }


    public function index(){

        $users  = User::all();
        return view('users.liste',compact('users'));
    }
    public function create()
    {
        return view('users.add');
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

        $user->save();
        Session::flash('success', 'Utilisateur ajouté avec succès ');

        return redirect()->back();
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('users.update',compact('user'));
    }


    public function update(Request $request,$id)
    {
        $user  = User::findOrFail($id);
        $user->name  = $request->name;
        $user->email  = $request->email;
        $user->role = $request->role;
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
