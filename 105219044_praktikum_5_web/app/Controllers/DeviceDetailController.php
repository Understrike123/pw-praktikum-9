<?php

namespace App\Controllers;
use App\Models\DeviceDetail;
class DeviceDetailController extends BaseController
{
    protected $devModel;
    public function Controll()
    {
        
        echo view('Devices detail.php');
    }
    public function detail($id)
    {
        
        $Detail = $this->devModel->where(['id' => $id])->first();
        $data = [
            'title' => 'DeviceDetail',
            'devices detail' => $Detail,
        ];

        return view('device/Devices detail', $data);
    }
}
