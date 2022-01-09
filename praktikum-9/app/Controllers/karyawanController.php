<?php namespace App\Controllers;
 
use CodeIgniter\Controller;

use App\Models\karyawanModel;

class karyawanController extends BaseController{
    protected $KaryawanModel;
    public function __construct(){

        $this->KaryawanModel=new karyawanModel();
    }
    public function index(){
        
        $karyawan = $this->KaryawanModel->findAll();
    

        $data=[
            'karyawan' =>$karyawan
        ];
        return view('/table.php',$data);
    }
    public function create(){
        $data=[
            'tittle' =>'Tambah Data'
        ];
        return view('tambah',$data);
    }
    public function detail($name){
        $data=[
            'karyawan'=>$this->karyawanModel->getkaryawan($name)

        ];
        if(empty($data['karyawan'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User tidak ditemukan');
        }
    }
    public function save(){

        $this->KaryawanModel->save([
        'nama' => $this->request->getVar('name'),
        'email' => $this->request->getVar('email'),
        'alamat' => $this->request->getVar('address'),
        'jenis_kelamin' => $this->request->getVar('gender'),
        'posisi' => $this->request->getVar('position'),
        'status'=> $this->request->getVar('status')

        ]);
        return redirect()->to('/karyawanController');
    }
    public function delete($id){

        $this->KaryawanModel->delete($id);
        return redirect()->to('/karyawanController');
    }
}