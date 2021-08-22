<?php

namespace App\Http\Controllers;

use App\Exceptions\GeneralException;
use App\Helper\GeneralResponse;
use App\Services\User\RegisterUserService;
use App\Services\User\ValidationRegisterUserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function registerUser(Request $request){

        try{
            $body = $request->request->all();
            ValidationRegisterUserService::validate($body);
            $user = RegisterUserService::registerUser($body);
            return GeneralResponse::buildResponse("true","Usuario registrado con éxito",[$user]);
        }catch (GeneralException $e){
            return GeneralResponse::buildResponse(false,$e->getMessage(),$e->getData());
        }
    }

}
