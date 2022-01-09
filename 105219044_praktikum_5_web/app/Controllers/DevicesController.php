<?php

namespace App\Controllers;

use App\Models\DevicesModel;

class DevicesController extends BaseController
{
    protected $devicesModel;
    public function __construct()
    {
        $this->devicesModel=new DevicesModel();
 
    }

    public function index()
    {
        $Devices=$this->devicesModel->findAll();
        $data=[
            'tittle'=>'Devices | praktikum_5',
            'Devices'=>$Devices
        ];
        
     
        return view('/device/Devices',$data);
    }
}
