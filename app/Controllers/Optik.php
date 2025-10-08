<?php

namespace App\Controllers;

use App\Models\OptikModel;

class Optik extends BaseController{

    protected $OptikModel;

    public function __construct(){
        $this->OptikModel = new OptikModel();
    }

    public function index(){
        $current = $this->request->getVar('page_optik') ? $this->request->getVar('page_optik') : 1; // ubah 1
        $cari = $this->request->getVar('cari');
        if($cari){
            $optik = $this->OptikModel->findOptik($cari); // ubah 1
        }else{
            $optik = $this->OptikModel->getOptik();
        }

        $data = [
            'title' => 'Daftar Optik',
            'optik' => $this->OptikModel->getOptik(),
            'current' => $current
        ];
        return view('optik/index', $data);
    }

    public function hapus($idoptik){
            $this->OptikModel->delete($idoptik);
            session()->setFlashdata('pesan', 'Data optik berhasil dihapus.');
            return redirect()->to('/optik');
    }

    public function ubah($idoptik){
        $data = [
            'title' => 'Form Ubah Data Penjualan',
            'validation' => \Config\Services::validation(),
            'optik' => $this->OptikModel->getOptik($idoptik)
        ];

        return view('optik/ubah', $data);
    }

    public function update($idoptik)
    {
        // Cek No. Ref: Validasi unik (is_unique) di form ubah.
        $optikLama = $this->OptikModel->getOptik($this->request->getVar('no_order'));
        if ($optikLama['no_ref'] == $this->request->getVar('no_ref')) {
            $rule_noref = 'required';
        } else {
            $rule_noref = 'required|is_unique[orders.no_ref]';
        }

        // Validasi Form
        if (!$this->validate([
            'no_ref' => [
                'rules' => $rule_noref,
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ]
        ])) {
            return redirect()->to('/optik/ubah/' . $this->request->getVar('no_order'))->withInput();
        }

        // Simpan data yang diperbarui ke database
        $this->OptikModel->save([
            'no_order' => $idoptik,
            'no_ref' => $this->request->getVar('no_ref'),
            'nama' => $this->request->getVar('nama'),
            'telepon' => $this->request->getVar('telepon'),
            'tgl_pesan' => $this->request->getVar('tgl_pesan'),
            'karyawan' => $this->request->getVar('karyawan'),
            'total_modal' => $this->request->getVar('total_modal'),
            'total_jual' => $this->request->getVar('total_jual'),
            'total_bayar' => $this->request->getVar('total_bayar'),
            'keuntungan' => $this->request->getVar('keuntungan')
        ]);

        session()->setFlashdata('pesan', 'Data penjualan berhasil diubah.');

        return redirect()->to('/optik');
    }
}