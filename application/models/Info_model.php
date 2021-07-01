<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Info_model extends CI_Model
{

    public $table = 'info';
    public $id = 'id_info';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id_info,nama_web,tentang,slogan,alamat,email,wa,logo_web');
        $this->datatables->from('info');
        //add this line for join
        //$this->datatables->join('table2', 'info.field = table2.field');
        $this->datatables->add_column('action', anchor(site_url('info/read/$1'),'Read')." | ".anchor(site_url('info/update/$1'),'Update'), 'id_info');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_info', $q);
	$this->db->or_like('nama_web', $q);
	$this->db->or_like('tentang', $q);
	$this->db->or_like('slogan', $q);
	$this->db->or_like('alamat', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('wa', $q);
	$this->db->or_like('logo_web', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_info', $q);
	$this->db->or_like('nama_web', $q);
	$this->db->or_like('tentang', $q);
	$this->db->or_like('slogan', $q);
	$this->db->or_like('alamat', $q);
	$this->db->or_like('email', $q);
	$this->db->or_like('wa', $q);
	$this->db->or_like('logo_web', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Info_model.php */
/* Location: ./application/models/Info_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-11-17 23:46:01 */
/* http://harviacode.com */