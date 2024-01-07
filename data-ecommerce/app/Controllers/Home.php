<?php

namespace App\Controllers;

use App\Models\datanormalisasi_model;
use App\Models\data_model;
use App\Models\datakeputusan_model;
use App\Models\datakonversi_model;
use App\Models\datamaxmin_model;
use App\Models\dataoptimasi_model;
use App\Models\dataperangkingan_model;
use App\Models\detail_model;
use App\Models\Alternatif_model;


class Home extends BaseController {

    protected $helpers = ['url', 'form'];

    public function __construct() {
        $this->session = \Config\Services::session();
    }

    public function index() {
        return view('form_kriteria');
    }

    public function dashboard() {
        echo view('admin_header');
        echo view('admin_navigasi');
        echo view('dashboard');
        echo view('admin_footer');
    }

    public function viewdetail() {
        $detail = new data_model();
        $datadetail = $detail->tampildetail();
        $data = array('dataDetail' => $datadetail, );
        echo view("admin_header");
        echo view("admin_navigasi");
        echo View("data_detail", $data);
        echo view("admin_footer");
    }

    public function viewbobot() {
        $bobot = new data_model();
        $databobot = $bobot->tampilbobot();
        $data = array('dataBobot' => $databobot, );
        echo view("admin_header");
        echo view("admin_navigasi");
        echo View("data_bobot", $data);
        echo view("admin_footer");
    }

    public function viewkriteria() {
        $kriteria = new data_model();
        $datakriteria = $kriteria->tampilkriteria();
        $data = array('dataKriteria' => $datakriteria, );
        echo view("admin_header");
        echo view("admin_navigasi");
        echo View("data_kriteria", $data);
        echo view("admin_footer");
    }
    public function viewalternatif() {
        $alternatif = new alternatif_model();
        $dataalternatif = $alternatif->tampilalternatif();
        $data = array('dataAlternatif' => $dataalternatif, );
        echo view("admin_header");
        echo view("admin_navigasi");
        echo View('view_alternatif', $data);
        echo view("admin_footer");
    }

    public function callviewhitung() {
        $mb = new datakonversi_model();
        $datamb = $mb->tampilminmax();
        $data = array('dataMb' => $datamb, );

        echo View('admin_header');
        echo View('admin_navigasi');
        echo View('view_hitung', $data);
        echo View('admin_footer');
    }

    public function callviewnormalisasi() {

        $mb = new datanormalisasi_model();
        $datamb = $mb->carinormalisasi();
        $data = array('dataMb' => $datamb);

        echo View('admin_header');
        echo View('admin_navigasi');
        echo View('viewnormalisasi', $data);
        echo View('admin_footer');
    }

    public function callviewoptimasi() {

        $mb = new Dataoptimasi_model();
        $datamb = $mb->carioptimasi();
        $data = array('dataMb' => $datamb);

        echo View('admin_header');
        echo View('admin_navigasi');
        echo View('viewoptimasi', $data);
        echo View('admin_footer');
    }

    public function callviewranking() {
        $mb = new dataperangkingan_model();
        $datamb = $mb->tampilranking();
        $data = array('dataMb' => $datamb);

        echo View('admin_header');
        echo View('admin_navigasi');
        echo View('viewperangkingan', $data);
        echo View('admin_footer');
    }

    // public function callviewkeputusan() {
    //     $mb = new datakeputusan_model();
    //     $datamb = $mb->tampilkeputusan();
    //     $data = array('dataMb' => $datamb);

    //     echo View('admin_header');
    //     echo View('admin_navigasi');
    //     echo View('viewkeputusan', $data);
    //     echo View('admin_footer');
    // }

    public function callviewmaxmin() {
        $mb = new Datamaxmin_model();
        $datamb = $mb->hitungmaxmin();
        $data = array('dataMb' => $datamb);

        echo View('admin_header');
        echo View('admin_navigasi');
        echo View('viewmaxmin', $data);
        echo View('admin_footer');
    }


    ////// FUNGSI CRUD DETAIL
    public function insertDetail() {
        helper(['form']); // Load the Form Helper
        $detailModel = new detail_model();

        if($this->request->getMethod() === 'post') {
            // Validation rules, adjust as needed
            $validationRules = [
                'nama_alternatif' => 'required',
                'nama_aplikasi' => 'required',
                // Add other validation rules as needed
            ];

            // Run the validation
            if($this->validate($validationRules)) {
                // Get validated data
                $data = [
                    'nama_alternatif' => $this->request->getPost('nama_alternatif'),
                    'nama_aplikasi' => $this->request->getPost('nama_aplikasi'),
                    // Add other fields as needed
                ];

                // Insert data using the model
                $detailModel->insertDetail($data);

                // Set a success flash message
                $this->session->setFlashdata('success', 'Detail added successfully.');

                // Redirect to the Kriteria view or any other page as needed
                return redirect()->to(base_url('home/viewdetail'));
            } else {
                // If validation fails, pass errors to the view
                $data['validation'] = $this->validator;
            }
        }

        // Load the form_kriteria view with any validation errors
        echo view("admin_header");
        echo view("admin_navigasi");
        echo view("form_detail", $data ?? []);
        echo view("admin_footer");
    }
    public function deleteDetail($id) {
        $detailModel = new detail_model();

        // Hapus kriteria berdasarkan ID
        $detailModel->deleteDetail($id);

        // Set pesan sukses
        $this->session->setFlashdata('success', 'Detail deleted successfully.');

        // Redirect ke halaman tampil kriteria
        return redirect()->to(base_url('home/viewdetail'));
    }

    public function editDetail($id) {
        $detailModel = new detail_model();

        // Ambil data kriteria berdasarkan ID
        $data['detail'] = $detailModel->getDpt($id);

        // Jika data tidak ditemukan, redirect ke halaman tampil kriteria
        if(!$data['detail']) {
            return redirect()->to(base_url('home/viewdetail'));
        }

        // Jika form disubmit
        if($this->request->getMethod() === 'post') {
            // Validation rules, adjust as needed
            $validationRules = [
                'nama_alternatif' => 'required',
                'nama_aplikasi' => 'required',
                // Add other validation rules as needed
            ];

            // Run the validation
            if($this->validate($validationRules)) {
                // Get validated data
                $updateData = [
                    'nama_alternatif' => $this->request->getPost('nama_alternatif'),
                    'nama_aplikasi' => $this->request->getPost('nama_aplikasi'),
                    // Add other fields as needed
                ];

                // Update data menggunakan model
                $detailModel->updateDetail($id, $updateData);

                // Set pesan sukses
                $this->session->setFlashdata('success', 'Detail updated successfully.');

                // Redirect ke halaman tampil kriteria
                return redirect()->to(base_url('home/viewdetail'));
            } else {
                // Jika validasi gagal, kirim error ke view
                $data['validation'] = $this->validator;
            }
        }

        // Load view untuk menampilkan form edit
        echo view("admin_header");
        echo view("admin_navigasi");
        echo view("edit_detail", $data);
        echo view("admin_footer");
    }

    public function showEditForm($id) {
        $detailModel = new detail_model();

        // Ambil data kriteria berdasarkan ID
        $data['detail'] = $detailModel->getDpt($id);

        // Jika data tidak ditemukan, redirect ke halaman tampil kriteria
        if(!$data['detail']) {
            return redirect()->to(base_url('home/viewdetail'));
        }

        // Load view untuk menampilkan form edit
        echo view("admin_header");
        echo view("admin_navigasi");
        echo view("edit_detail", $data);
        echo view("admin_footer");
    }

    ////// FUNGSI CRUD ALTERNATIF
    public function insertAlternatif() {
        helper(['form']); // Load the Form Helper
        $alternatifModel = new Alternatif_model();

        if($this->request->getMethod() === 'post') {
            // Validation rules, adjust as needed
            $validationRules = [
                'nama_aplikasi' => 'required',
                'C1' => 'required',
                'C2' => 'required',
                'C3' => 'required',
                'C4' => 'required'
                // Add other validation rules as needed
            ];

            // Run the validation
            if($this->validate($validationRules)) {
                // Get validated data
                $data = [
                    'nama_aplikasi' => $this->request->getPost('nama_aplikasi'),
                    'C1' => $this->request->getPost('C1'),
                    'C2' => $this->request->getPost('C2'),
                    'C3' => $this->request->getPost('C3'),
                    'C4' => $this->request->getPost('C4'),
                    // Add other fields as needed
                ];

                // Insert data using the model
                $alternatifModel->insertAlternatif($data);

                // Set a success flash message
                $this->session->setFlashdata('success', 'Alternatif added successfully.');

                // Redirect to the Kriteria view or any other page as needed
                return redirect()->to(base_url('home/viewalternatif'));
            } else {
                // If validation fails, pass errors to the view
                $data['validation'] = $this->validator;
            }
        }

        // Load the form_kriteria view with any validation errors
        echo view("admin_header");
        echo view("admin_navigasi");
        echo view("form_alternatif", $data ?? []);
        echo view("admin_footer");
    }
    public function deleteAlternatif($id) {
        $alternatifModel = new Alternatif_model();

        // Hapus kriteria berdasarkan ID
        $alternatifModel->deleteAlternatif($id);

        // Set pesan sukses
        $this->session->setFlashdata('success', 'Alternatif deleted successfully.');

        // Redirect ke halaman tampil kriteria
        return redirect()->to(base_url('home/viewalternatif'));
    }

    public function editAlternatif($id) {
        $alternatifModel = new Alternatif_model();

        // Ambil data kriteria berdasarkan ID
        $data['alternatif'] = $alternatifModel->getDpt($id);

        // Jika data tidak ditemukan, redirect ke halaman tampil kriteria
        if(!$data['alternatif']) {
            return redirect()->to(base_url('home/viewalternatif'));
        }

        // Jika form disubmit
        if($this->request->getMethod() === 'post') {
            // Validation rules, adjust as needed
            $validationRules = [
                'nama_aplikasi' => 'required',
                'C1' => 'required',
                'C2' => 'required',
                'C3' => 'required',
                'C4' => 'required'
                // Add other validation rules as needed
            ];

            // Run the validation
            if($this->validate($validationRules)) {
                // Get validated data
                $updateData = [
                    'nama_aplikasi' => $this->request->getPost('nama_aplikasi'),
                    'C1' => $this->request->getPost('C1'),
                    'C2' => $this->request->getPost('C2'),
                    'C3' => $this->request->getPost('C3'),
                    'C4' => $this->request->getPost('C4'),
                    // Add other fields as needed
                ];

                // Update data menggunakan model
                $alternatifModel->updateAlternatif($id, $updateData);

                // Set pesan sukses
                $this->session->setFlashdata('success', 'Alternatif updated successfully.');

                // Redirect ke halaman tampil kriteria
                return redirect()->to(base_url('home/viewalternatif'));
            } else {
                // Jika validasi gagal, kirim error ke view
                $data['validation'] = $this->validator;
            }
        }

        // Load view untuk menampilkan form edit
        echo view("admin_header");
        echo view("admin_navigasi");
        echo view("edit_alternatif", $data);
        echo view("admin_footer");
    }

    public function showEditAlternatif($id) {
        $alternatifModel = new Alternatif_model();

        // Ambil data kriteria berdasarkan ID
        $data['alternatif'] = $alternatifModel->getDpt($id);

        // Jika data tidak ditemukan, redirect ke halaman tampil kriteria
        if(!$data['alternatif']) {
            return redirect()->to(base_url('home/viewalternatif'));
        }

        // Load view untuk menampilkan form edit
        echo view("admin_header");
        echo view("admin_navigasi");
        echo view("edit_alternatif", $data);
        echo view("admin_footer");
    }
    
    

}
