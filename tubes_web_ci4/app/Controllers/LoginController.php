<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    } 
 
    public function auth()
    {
        $session=session();
        $model=new UserModel();
        $email=$this->request->getVar('email');
        $password=$this->request->getVar('password');
        $data=$model->where('email',$email)->first();

        if($data){
            $pw=$data['password'];
        }

 
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 