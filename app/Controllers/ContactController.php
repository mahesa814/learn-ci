<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ContactController extends BaseController
{
    public function index()
    {
        return view('contact/index');
    }

    public function create()
    {
        return view('contact/create');
    }

    public function store()
    {

    }

    public function show($id)
    {
        return view('contact/detail');
    }

    public function edit($id)
    {
        return view('contact/edit');
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {
        
    }
}
