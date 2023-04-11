<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {


    public function __construct()
	{
		parent::__construct();
        $this->load->model('Api_model');
    }

    public function get_data_barang()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $result['value'] = "1";
                $result['pesan'] = "response ok!";
                $result['hasil'] = $this->Api_model->get_data_barang()->result_array();
                
            } else {
                $result['value'] = "0";
                $result['pesan'] = "invalid request method!";
            }

        echo json_encode($result);
    }

    public function get_barang_keluar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $result['value'] = "1";
                $result['pesan'] = "response ok!";
                $result['hasil'] = $this->Api_model->get_barang_keluar()->result_array();
                
            } else {
                $result['value'] = "0";
                $result['pesan'] = "invalid request method!";
            }

        echo json_encode($result);
    }

    public function get_barang_masuk()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $result['value'] = "1";
                $result['pesan'] = "response ok!";
                $result['hasil'] = $this->Api_model->get_barang_masuk()->result_array();
                
            } else {
                $result['value'] = "0";
                $result['pesan'] = "invalid request method!";
            }

        echo json_encode($result);
    }

    public function get_jenis()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $result['value'] = "1";
                $result['pesan'] = "response ok!";
                $result['hasil'] = $this->Api_model->get_jenis()->result_array();
                
            } else {
                $result['value'] = "0";
                $result['pesan'] = "invalid request method!";
            }

        echo json_encode($result);
    }

    public function get_satuan()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $result['value'] = "1";
                $result['pesan'] = "response ok!";
                $result['hasil'] = $this->Api_model->get_satuan ()->result_array();
                
            } else {
                $result['value'] = "0";
                $result['pesan'] = "invalid request method!";
            }

        echo json_encode($result);
    }

    public function get_supplier()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $result['value'] = "1";
                $result['pesan'] = "response ok!";
                $result['hasil'] = $this->Api_model->get_supplier()->result_array();
                
            } else {
                $result['value'] = "0";
                $result['pesan'] = "invalid request method!";
            }

        echo json_encode($result);
    }

    public function get_user()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $result['value'] = "1";
                $result['pesan'] = "response ok!";
                $result['hasil'] = $this->Api_model->get_user()->result_array();
                
            } else {
                $result['value'] = "0";
                $result['pesan'] = "invalid request method!";
            }

        echo json_encode($result);
    }

    //-------------------------------------- add data_barang ------------------------------------------------

    public function add_data_barang()
    {
        $data_barang = array(
            'id_barang'     => $this->post('id_barang'),
            'nama_barang'   => $this->post('nama_barang'),
            'stok'          => $this->post('stok'));
            //'satuan_id'     => $this->post('satuan_id'),
            //'jenis_id'      =>  $this->post('jenis_id'));
        $insert = $this->db->insert('barang', $data_barang);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }    

        
    }
}