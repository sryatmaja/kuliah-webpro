<?php
class coba_libraries extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('Table'); // panggil helper URL untuk pengelolaan URL.
    }

    public function index() {
        $data['heading'] = ['id', 'nama produk', 'harga'];
        $data['row1'] = ['p01', 'ades', 4500];
        $data['row2'] = ['p02', 'aqua', 5500];
        $data['row3'] = ['p03', 'adidas', 6500];
        $data['row4'] = ['p04', 'aedes', 4520];
        $data['row5'] = ['p05', 'akuaw', 2200];
        $data['row6'] = ['p06', 'awkwah', 4650];
        $data['row7'] = ['p07', 'itu', 2400];
        $data['row8'] = ['p08', 'amidis', 6600];
        $data['row9'] = ['p09', 'lehidrogen', 4500];
        $data['row10'] = ['p10', 'h20', 4300];

        $this->load->view('coba_library/coba_libraries_view', ['data' => $data]);
    }
}
?>