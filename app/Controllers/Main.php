<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\AdminModel;


class Main extends BaseController
{
    public function index()
    {
        $usersModel = new UserModel;
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $data = [
            'title' => 'Dashboard',
            'userInfo' => $userInfo
        ];
        
        return view('main/index', $data);
    }
    public function dashboard(){
        $adminModel = new AdminModel;
        $loggedAdminID = session()->get('loggedAdmin');
        $adminInfo = $adminModel->find($loggedAdminID);
        $data = [
            'title' => 'adminDashboard',
            'adminInfo' => $adminInfo
        ];


        return view('main/admindashboard', $data);
    }
    public function introductory()
    {
        return view('main/welcome');
    }

}
