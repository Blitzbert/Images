<?php namespace ImagesManager\Http\Controllers;

use ImagesManager\Http\Requests;
use ImagesManager\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OAuthController extends Controller {

    public function login()
    {
       return \Socialite::with->('github')->redirect ();


        }

}
