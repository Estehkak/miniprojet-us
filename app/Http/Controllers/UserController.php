<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Traits\CrudActions;
use App\User;

class UserController extends Controller
{
    const MODEL = User::class;
    use CrudActions;

    public function authentification(Request $request){
        try{
           $email=$request->input('email');
           $password=$request->input('password');

           $user=User::where('email',$email)->first();
           if($user){
            if($user->password === $password){
                $rslt['status']=true;
                return response(true,200);
            }
            else{
                $rslt['status']=false;
                return response(false,200);
            }
           }
           else{
            $rslt['status']=false;
            $rslt['message']='user not found';
            return response(false,200);
           }
        }
        catch(\Illuminate\Databse\QueryException $ex){
        	$res['status']=false;
        	$res['message']=$ex->getMessages();

            return response($res,500);
        }
        }
}
    

