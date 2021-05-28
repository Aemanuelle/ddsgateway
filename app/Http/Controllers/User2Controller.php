<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use DB;
use App\Services\User2Service;

Class User2Controller extends Controller {
    use ApiResponser;

    use $user2Service;

    //private $request;

    public function __construct(User1Service $user2Service){
        $this->user1Service = $user2Service;
    }

    public function getUsers()
    {
       
    }

    public function index()
    {
        
    }

    public function add (Request $request)
    {
       
    }

    public function show ($id)
    {
        
    }

    public function update (Request $request, $id)
    {
        
    }

    public function delete ($id)
    {
       
    }

}   