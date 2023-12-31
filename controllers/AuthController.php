<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

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
        
        $registerModel = new RegisterModel();
        if($request->isPost()){
            $registerModel->loadData($request->getBody());
            if($registerModel->validate() && $registerModel->register())
            {
                
            }
            return $this->render('register', [
                'model' => $registerModel
            ]);
        }
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }
}