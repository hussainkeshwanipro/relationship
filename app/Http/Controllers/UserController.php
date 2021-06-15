<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id){
       
        $user = User::find($id);
        if($user)
        {
            echo 'name:'. $user->name.'<br>';
            echo 'email:'. $user->email.'<br>';
            echo "phone".($user->phone->phones);
        }
        else
        {
            echo 'no record found';
        }
        
    }


    public function add(){
        
        $user = new User();
       $user->name = 'Hussain';
       $user->email = 'hussain@me.com';
       $user->save();
       
       $phone = new Phone();
       $phone->phones = '11111111';
       $user->phone()->save($phone);

        echo 'data inserted';

        
    }

    public function update()
    {
        $user = User::find(1);

        $user->name = 'test';
        $user->phone->phones = '11111121';
        $user->push();
    }

    public function delete($id)
    {
        $user = User::find(1);
        $user->delete();
    }
    
}
