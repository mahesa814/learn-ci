<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $users = $this->db->table('users')->get()->getResult();
        return view('user/index',compact('users'));
    }

    public function create()
    {
        return view('user/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
        
        $this->db->table('users')->insert();

        if($this->db->affectedRows() > 0)
        {
            return redirect('user/index')->with('success','Data Berhasil Di simpan');
        }else{
            
        }
    }
}
