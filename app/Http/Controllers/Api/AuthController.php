<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
     public function register(Request $request)
     {
        $user = User::where('email', $request->email)->count();
        if($user != 0){
            return $this->sendError('Vous êtes déjà inscrits. Veuillez vous connecter.', ['error'=>'Erreur d\'inscription']);
        }

        else{
            $data = [];
            $input = $request->all();

            $data['email'] = $input['email'];
            $data['password'] = $input['password'];

            // $input['password'] = bcrypt($input['password']);
            $input['password'] = bcrypt($input['password']);

            $user = User::create($input);
            
            auth()->attempt($data);

            $user = auth()->user();
            // $token =  auth()->user()->createToken('SSOApp')->accessToken;
            $token =  config('auth.token');

            $response = [
                'user' => $user, 'token' => $token
            ];
            return $this->sendResponse($response, 'Utilisateur enregistré avec succès');
        }
        return null;
    }


     public function login(Request $request)    {

        $data = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        if(!auth()->attempt($data))
        {
            return response(['message' => 'Adresse mail ou mot de passe invalide.'], 401);
        }
        else{

            $user = auth()->user();
            // $token =  auth()->user()->createToken('SSOApp')->accessToken;
            $token =  config('auth.token');
            $response = [
                'success' => true,
                'user'    => $user,
                'token' => $token,
            ];
            return response()->json($response, 200);
        }
    }

    public function logout(Request $request){
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
         }
         return response(["succces"=>true, "message"=>"Vous êtes déconnecter avec succes"]
            , 200);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
