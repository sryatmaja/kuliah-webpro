<?php
class modul_7 extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('modul_7/tes_akhir');
        $this->load->helper('url_helper');
    }

    // Menampilkan semua data
    public function index() {
        $data['mobil'] = $this->tes_akhir->get_mobil();
        $this->load->view('modul_7/index', $data);
    }

    // Menambahkan data
    public function create() {
        // Form submission
        if ($_POST) {
            $data = array(
                'nomor_tnkb' => $this->input->post('nomor_tnkb'),
                'nama_pemilik' => $this->input->post('nama_pemilik'),
                'nomor_mesin' => $this->input->post('nomor_mesin'),
                'nomor_sasis' => $this->input->post('nomor_sasis'),
                'jenis_mobil' => $this->input->post('jenis_mobil'),
                'kapasitas_mesin_mobil' => $this->input->post('kapasitas_mesin_mobil'),
                'tahun_pembuatan_mobil' => $this->input->post('tahun_pembuatan_mobil')
            );
            $this->tes_akhir->add_mobil($data);
            redirect('modul_7/index');
        } else {
            // Menampilkan form
            $this->load->view('modul_7/create');
        }
    }

    // Menampilkan data berdasarkan ID
    public function read($id) {
        $data['mobil'] = $this->tes_akhir->get_mobil_by_id($id);
        $this->load->view('modul_7/read', $data);
    }

    // Mengupdate data berdasarkan ID
    public function update($id) {
        // Form submission
        if ($_POST) {
            $data = array(
                'nomor_tnkb' => $this->input->post('nomor_tnkb'),
                'nama_pemilik' => $this->input->post('nama_pemilik'),
                'nomor_mesin' => $this->input->post('nomor_mesin'),
                'nomor_sasis' => $this->input->post('nomor_sasis'),
                'jenis_mobil' => $this->input->post('jenis_mobil'),
                'kapasitas_mesin_mobil' => $this->input->post('kapasitas_mesin_mobil'),
                'tahun_pembuatan_mobil' => $this->input->post('tahun_pembuatan_mobil')
            );
            $this->tes_akhir->update_mobil($id, $data);
            redirect('modul_7/index');
        } else {
            // Menampilkan form
            $data['mobil'] = $this->tes_akhir->get_mobil_by_id($id);
            $this->load->view('modul_7/update', $data);
        }
    }

    // Menghapus data berdasarkan ID
    public function delete($id) {
        $this->tes_akhir->delete_mobil($id);
        redirect('modul_7/index');
    }
}
