<?php

namespace DigitalsiteSaaS\Usuario\Http;
use DigitalsiteSaaS\Usuario\getUser;

use App\Http\Controllers\Controller;

class getuserController extends Controller {

    public function postData()
    {
       $user_id = Input::get('user');
  
       $user = User::find($user_id);
       
     
        
        $data = array(
            'success' => true,
            'id' => $user_id,
            'name' => $user->name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'address' => $user->address,
            'phone' => $user->phone,
            'username' => $user->username,
            'level' => $user->level
            
        );
        
        return Response::json($data);
        
    }

}