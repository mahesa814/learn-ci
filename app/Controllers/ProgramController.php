<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Program;

class ProgramController extends BaseController
{
    public function index()
    {
        $programs = $this->db->table('programs')->get()->getResult();
        return view("program/index", compact('programs'));
    }

    public function create()
    {
        return view("program/create");
    }

    public function store()
    {
        $data = $this->request->getPost();
        $insert_programs = $this->db->table('programs')->insert($data);
        
        if($insert_programs === true)
        {
            return redirect()->to(base_url('/program'))->with('success', 'Program successfully created');
        }

        return redirect('/program')->with('failed', 'Program failed created');



        
    }

    public function show($id)
    {
        return view("program/show");
    }

    public function edit($id = null)
    {
        // var_dump($id);
        $program = new Program();
        $programs = $program->where('id',$id)->first();
        // var_dump($programs);
        return view("program/edit",compact('programs'));
    }

    public function update($id)
    {

        $data = $this->request->getPost();
        $program_update = $this->db->table('programs')->where(['id' => $id])->update($data);
        if($program_update == true){
            return redirect()->to(base_url('/program'))->with('success', 'Program successfully updated');
        }else{
            return redirect()->to(base_url('/program'))->with('failed', 'Program failed updated');
        }
    }

    public function destroy($id)
    {   

        $is_delete = $this->db->table('programs')->where(['id' => $id])->delete();
        
        if($is_delete == true){
            return redirect()->to(base_url('/program'))->with('success', 'Program successfully deleted');
        }else{
            return redirect()->to(base_url('/program'))->with('failed', 'Program failed deleted');
        }
        
    }
}
