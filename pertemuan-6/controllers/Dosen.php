<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
      
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nama = 'Tifani Nabarian, S.Kom., M.T.I';
        $this->dsn1->nidn = '011022';
        $this->dsn1->gender = 'P';
        $this->dsn1->pendidikan = 'UI & UX';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nama = 'Sirojul Munir, S.Si, M.Kom';
        $this->dsn2->nidn = '011022';
        $this->dsn2->gender = 'L';
        $this->dsn2->pendidikan = 'Pemograman Web 2';

        $list_dsn = [$this->dsn1, $this->dsn2,];
        $data['list_dsn'] = $list_dsn;

        $this->load->view('head');
        $this->load->view('dosen/index', $data);
        $this->load->view('foot');
       
    }
}