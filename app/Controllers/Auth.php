<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\AdminModel;
use App\Libraries\Hash;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        return view("auth/login");
    }
    public function register()
    {
        return view("auth/register");
    }
    public function admlog()
    {
        return view("auth/adminlogin");
    }
    public function admreg()
    {
        return view("auth/adminregister");
    }
    public function save()
    {
        // Requests validations but this are not more customizable 
        // $validation = $this->validate([
        //     'name' => 'required',
        //     'email'=> 'required|valid_email|is_unique[users.email]',
        //     'password'=>'required|min_lenght[5]|max_lenght[12]',
        //     'cpassword'=>'required|min_length[5]|max_lenght[12]|matches[password]'
        // ]);


        //now lets create more customised validations

        helper('form');

        $validation = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your full name is required'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email is required',
                    'valid_email' => 'You must enter a valid email',
                    'is_unique' => 'Email alreadt taken'

                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password is required',
                    //'min_lenght[5]'=>'Pasword must have altleast 5 characters',
                    // 'max_lenght[12]'=>'Pasword lenght must be less than 12 characters'
                ],
            ],
            'cpassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'confirm password reguired',
                    'matches' => 'Confirm password not matches with password field'
                ]
            ]
        ]);



        if (!$validation) {
            return view('auth/register', ['validation' => $this->validator]);
        } else {




            //     $name = $this->request->getPost('name');
            //     $email = $this->request->getPost('email');
            //     $password = $this->request->getPost('password');



            //     $values = [
            //         'name'=>$name,
            //         'email'=>$email,
            //         'password'=>$password,
            //     ];

            //     $usersModel = new \App\Models\UserModel();
            //     $query = $usersModel->insert($values);
            //     if(!$query){
            //         return redirect()->back()->with('fail', 'something went wrong');

            //     }else{
            //         return redirect()->to('register')->with('success', 'Your are now registered successfull');   
            //     }
            // }

            // If validation passes, create a new user
            $userModel = new UserModel();

            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => Hash::make($this->request->getPost('password'))
            ];

            // $userModel->insert($data);
            $query = $userModel->insert($data);
            if (!$query) {
                return redirect()->back()->with('fail', 'Something went wrong');
            } else {
                return redirect()->to('signup')->with('success', 'You are now registered successfully');
                //lets direct user to homepage directly after the registration
                // $last_id = $userModel->insertID();
                // session()->get('loggedUser', $last_id);
                // return redirect()->to('home');
            }

            // Redirect or show success message
            // return view('main/index');
            // return view("successfull login");
        }
    }
    public function check()
    {
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'Email is required',
                    'valid_email' => 'You must enter a valid email',
                    'is_not_unique' => 'Email is not register'

                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password is required',
                    //'min_lenght[5]'=>'Pasword must have altleast 5 characters',
                    // 'max_lenght[12]'=>'Pasword lenght must be less than 12 characters'
                ],
            ],

        ]);
        if (!$validation) {
            return view('auth/login', ['validation' => $this->validator]);
        } else {

            //lets get values from the form and compare the password for that user of that email
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $userModel = new UserModel();
            $user_info = $userModel->where('email', $email)->first();
            $check_password  = Hash::valid($password, $user_info['password']);

            if(!$check_password){
                session()->setFlashdata('fail', 'Incorrect password');
                return redirect()->to('login')->withInput();
            }else{
                $user_id = $user_info['Id'];
                session()->set('loggedUser', $user_id);
                return redirect()->to('home');
            }

        }
    }
    public function logout(){
        if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            return redirect()->to('login')->with('fail', 'You are logged out!');
        }
    }
    public function adminsave()
    {
        // Requests validations but this are not more customizable 
        // $validation = $this->validate([
        //     'name' => 'required',
        //     'email'=> 'required|valid_email|is_unique[users.email]',
        //     'password'=>'required|min_lenght[5]|max_lenght[12]',
        //     'cpassword'=>'required|min_length[5]|max_lenght[12]|matches[password]'
        // ]);


        //now lets create more customised validations

        helper('form');

        $validation = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Your full name is required'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[admin.email]',
                'errors' => [
                    'required' => 'Email is required',
                    'valid_email' => 'You must enter a valid email',
                    'is_unique' => 'Email alreadt taken'

                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password is required',
                    //'min_lenght[5]'=>'Pasword must have altleast 5 characters',
                    // 'max_lenght[12]'=>'Pasword lenght must be less than 12 characters'
                ],
            ],
            'cpassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'confirm password reguired',
                    'matches' => 'Confirm password not matches with password field'
                ]
            ]
        ]);



        if (!$validation) {
            return view('auth/adminregister', ['validation' => $this->validator]);
        } else {




            //     $name = $this->request->getPost('name');
            //     $email = $this->request->getPost('email');
            //     $password = $this->request->getPost('password');



            //     $values = [
            //         'name'=>$name,
            //         'email'=>$email,
            //         'password'=>$password,
            //     ];

            //     $usersModel = new \App\Models\UserModel();
            //     $query = $usersModel->insert($values);
            //     if(!$query){
            //         return redirect()->back()->with('fail', 'something went wrong');

            //     }else{
            //         return redirect()->to('register')->with('success', 'Your are now registered successfull');   
            //     }
            // }

            // If validation passes, create a new user
            $adminModel = new AdminModel();

            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => Hash::make($this->request->getPost('password'))
            ];

            // $userModel->insert($data);
            $query = $adminModel->insert($data);
            if (!$query) {
                return redirect()->back()->with('fail', 'Something went wrong');
            } else {
                return redirect()->to('adminsignup')->with('success', 'You are now registered successfully');
                //lets direct user to homepage directly after the registration
                // $last_id = $userModel->insertID();
                // session()->get('loggedUser', $last_id);
                // return redirect()->to('home');
            }

            // Redirect or show success message
            // return view('main/index');
            // return view("successfull login");
        }
    }
    public function admincheck()
    {
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[admin.email]',
                'errors' => [
                    'required' => 'Email is required',
                    'valid_email' => 'You must enter a valid email',
                    'is_not_unique' => 'Email is not register'

                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password is required',
                    //'min_lenght[5]'=>'Pasword must have altleast 5 characters',
                    // 'max_lenght[12]'=>'Pasword lenght must be less than 12 characters'
                ],
            ],

        ]);
        if (!$validation) {
            return view('auth/adminlogin', ['validation' => $this->validator]);
        } else {

            //lets get values from the form and compare the password for that admin of that email
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $adminModel = new AdminModel();
            $admin_info = $adminModel->where('email', $email)->first();
            $check_password  = Hash::valid($password, $admin_info['password']);

            if(!$check_password){
                session()->setFlashdata('fail', 'Incorrect password');
                return redirect()->to('adminlogin')->withInput();
            }else{
                $admin_id = $admin_info['Id'];
                session()->set('loggedAdmin', $admin_id);
                return redirect()->to('dashboard');
            }

        }
    }
    public function adminlogout(){
        if(session()->has('loggedAdmin')){
            session()->remove('loggedAdmin');
            return redirect()->to('adminlogin')->with('fail', 'You are logged out!');
        }
    }
}
