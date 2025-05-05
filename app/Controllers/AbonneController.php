<?php

namespace App\Controllers;

use App\Models\AbonneModel;

class AbonneController extends BaseController
{
    protected $abonneModel;

    public function __construct()
    {
        $this->abonneModel = new AbonneModel();
    }

    public function index()
    {
        $abonnes = $this->abonneModel->findAll();
        return view('abonne/index', ['abonnes' => $abonnes]);
    }

    public function create()
    {
        return view('abonne/create');
    }

    public function store()
    {
        $this->abonneModel->save($this->request->getPost());
        return redirect()->to('/abonnes');
    }

    public function edit($id)
    {
        $abonne = $this->abonneModel->find($id);
        return view('abonne/edit', ['abonne' => $abonne]);
    }

    public function update($id)
    {
        $this->abonneModel->update($id, $this->request->getPost());
        return redirect()->to('/abonnes');
    }

    public function delete($id)
    {
        $this->abonneModel->delete($id);
        return redirect()->to('/abonnes');
    }
}


