<?php namespace ImagesManager\Http\Controllers;

use ImagesManager\Http\Requests;
use ImagesManager\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AccountController extends Controller {




    public function redirectToProvider() {
        return Socialize::with('github')->redirect();
    }

    public function handleProviderCallback() {
        $user = Socialize::with('github')->user();
        $user->getId();
        $user->getNickname();
        $user->getName();
        $user->getEmail();
        $user->getAvatar();
    }

    public function github_redirect() {
        return Socialize::with('github')->redirect();
    }
    // to get authenticate user data
    public function github() {
        $user = Socialize::with('github')->user();
        // Do your stuff with user data.
        print_r($user);die;
    }

}
