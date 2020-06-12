<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{

    protected function passwordValidator(array $data)
    {
        return Validator::make($data, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'oldpassword' => ['required', 'string', 'min:8'],
        ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //dd($request);
        $messages = [
            'passwordok' => 'Clave de acceso modificada correctamente',
            'passwordko' => 'No se ha podido modirficar la clave de acceso',
            'useredit'   => 'Usuario editado',
        ];
        $opSession = $request->session()->get('op');
        $alertMessage = null;
        if(isset($messages[$opSession])) {
            $alertMessage = $messages[$opSession];
        }
        return view('auth.edit')->with(['alertMessage' => $alertMessage]);
    }

    public function password(Request $request)
    {
        $this->passwordValidator($request->all())->validate();
        $oldpassword = $request->input('oldpassword');
        $user = Auth::user();
        if(Hash::check($oldpassword, $user->password))
        {
            $password = $request->input('password');
            $user->password = Hash::make($password);
            $user->save();
            $request->session()->flash('op', 'passwordok');
        }
        else
        {
            $request->session()->flash('op', 'passwordko');
        }
        return redirect(url('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $target = 'user';
        $input = $this->validator($request->all())->validate();
        $user = Auth::user();
        if($input['email'] !== $user->email) {
            $user->email_verified_at = null;
        }
        $user->name = $input['name'];
        $user->email = $input['email'];
        try {
            //$user->update($input);//no se puede usar por email_verified_at
            $user->save();
            if($user->email_verified_at === null) {
                $target = '/';
                $user->sendEmailVerificationNotification();
                \Illuminate\Support\Facades\Auth::logout();
            }
        } catch(\Exception $e) {
            $error = ['email' => 'Correo duplicado.'];
            return redirect('user')->withErrors($error)->withInput();        
        }
        $request->session()->flash('op', 'useredit');
        return redirect(url($target));
    }

    private function checkEmail(string $email) {
        return User::where('email', $email)->first() === null;
    }
}


/*
        $error = ['email' => 'El nombre utilizado ya existe en otro producto.'];
        return redirect('user')->withErrors($error)->withInput();        
        echo $oldpassword . ' ' . $password . ' ' . $passwordConfirmation;
        $user = auth()->user();
        //$user = Auth::user();
        $r = Hash::check($oldpassword, $user->password);
        var_dump($r);
        dd($request);
        \Hash::make($request->password)
        //$passwordConfirmation = $request->input('password_confirmation');
        */