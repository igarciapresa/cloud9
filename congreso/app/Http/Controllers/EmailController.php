<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Mail;
use Illuminate\Support\Facades\Auth;
class EmailController extends Controller
{
    public function viewEmail($id_ponencia)
    {
        
        $ponencia = DB::table('ponencias')->where('id', $id_ponencia)->get()->first();
        
       $data['title'] = $ponencia->titulo;
      
        $data['body'] = $ponencia->descripcion;
        
        $data['url'] = $id_ponencia;
       
        Mail::send('email', $data, function($message) {
            
        // $data_user = DB::table('users')->where('id',$id_user)->get()->first();
       
        $user_email = Auth::user()->email;
        $user_name = Auth::user()->name;
 
            $message->to($user_email, $user_name)
 
                    ->subject('Ponencia visualizada!');
        });
        return redirect('/');
        if (Mail::failures()) {
           return 'Error';
         }
    }
    
    // public function registerEmail($data){
        
    // }
}