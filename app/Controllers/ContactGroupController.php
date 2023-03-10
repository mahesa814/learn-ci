<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ContactGroupController extends BaseController
{
    public function index()
    {
        return view('contact_group/index');
    }

    public function create()
    {
        return view('contact_group/create');
    }

    public function store()
    {

    }

    public function show($id)
    {
        return view('contact_group/detail');
    }

    public function edit($id)
    {
        return view('contact_group/edit');
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {
        
    }

}
