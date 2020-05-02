<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class karyawanModel extends CI_model
{
	public function getAllKaryawan()
	{
		return $this->db->get('slip_gaji')->result_array();
	}

	public function hapusKaryawan($no)
	{
		$this->db->where('no', $no) ;
		$this->db->delete('slip_gaji');
	}

	public function tambahKaryawan()
	{
		$data = [
			
			'no'									=> $this->input->post('no',true),
			'nip'									=> $this->input->post('nip',true),
			'nama'									=> $this->input->post('nama',true),
			'gaji_untuk_bulan'						=> $this->input->post('gaji',true),
			'bagian'								=> $this->input->post('bagian',true),
			'golongan'								=> $this->input->post('golongan',true),
			'rp'									=> $this->input->post('uang',true),
			'iyuran_kopri'							=> $this->input->post('iuran',true),
			'simpana_koperasi_bantuan_kemalangan'	=> $this->input->post('simpan',true),
			'dharma_wanita'							=> $this->input->post('darma',true),
			'asuransi'								=> $this->input->post('asuransi',true),
			'bank_ke'								=> $this->input->post('bank',true),
			'kpn_ke'								=> $this->input->post('kpn',true),
			'Jumlah_penerimaan_bersih'				=> $this->input->post('seluruh',true),
			'Digital_signature'						=> $this->input->post('digital',true)
			
		];

		$this->db->insert('slip_gaji', $data);
		

	}
}





