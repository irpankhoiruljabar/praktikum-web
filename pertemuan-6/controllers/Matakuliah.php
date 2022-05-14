<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('matakuliah_model', 'matkul1');
        $this->matkul1->id = 1;
        $this->matkul1->nama = 'UI/UX';
        $this->matkul1->sks = '2';
        $this->matkul1->kode = '2ti09';

        $this->load->model('matakuliah_model', 'matkul2');
        $this->matkul2->id = 2;
        $this->matkul2->nama = 'Pemograman Web 2';
        $this->matkul2->sks = '2';
        $this->matkul2->kode = '2ti09';

        
        $list_matkul = [$this->matkul1, $this->matkul2,];
        $data['list_matkul'] = $list_matkul;
        $this->load->view('head');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('foot');
  
    }
}