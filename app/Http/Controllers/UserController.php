<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id = null)
    {
         return 'user profile for ID'.$id; 
    }
}
