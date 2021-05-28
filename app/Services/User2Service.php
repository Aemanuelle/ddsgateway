<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User2Service {

    use ConsumesExternalService;

    /** 
     * The base uri to consume the User1 Service
     * @var string
     */

     public $baseUri;

     public function_construct()
     {
         $this->baseUri = config('services.users2.base_uri');
     }
}