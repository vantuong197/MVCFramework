<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * @package app\controllers
 */
class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->setLayout('auth');
        if($request->isPost()){
            return 'Handle submitted data';
        }
        return $this->render('login');
    }
    public function register(Request $request)
    {
        $this->setLayout('auth');

        if($request->isPost()){
            return 'Handle submitted data';
        }
        return $this->render('register');
    }
}