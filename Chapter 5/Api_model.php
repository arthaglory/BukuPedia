<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Api_model extends CI_Model {

    public function get_data_barang()
    {
        return $this->db->query("SELECT id_barang, nama_barang, stok, satuan_id, jenis_id FROM barang");
    }

    public function get_barang_keluar()
    {
        return $this->db->query("SELECT id_barang_keluar, user_id, barang_id, jumlah_keluar, tanggal_keluar FROM barang_keluar");
    }

    public function get_barang_masuk()
    {
        return $this->db->query("SELECT id_barang_masuk, supplier_id, user_id, barang_id, jumlah_masuk, tanggal_masuk FROM barang_masuk");
    }

    public function get_jenis()
    {
        return $this->db->query("SELECT id_jenis, nama_jenis FROM jenis");
    }

    public function get_satuan()
    {
        return $this->db->query("SELECT id_satuan, nama_satuan FROM satuan");
    }

    public function get_supplier()
    {
        return $this->db->query("SELECT id_supplier, nama_supplier, no_telp, alamat FROM supplier");
    }

    public function get_user()
    {
        return $this->db->query("SELECT id_user, nama, username, email, no_telp, role, password, created_at, foto, is_active FROM user");
    }

}