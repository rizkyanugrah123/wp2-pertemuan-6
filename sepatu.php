<?php 
class Sepatu extends CI_Controller
{
	public function index()
	{
		$this->load->view('v-form-sepatu');
	}

	public function proses()
	{
		$this->load->model('m_sepatu');
			$data = [
				'nama' => $this->input->post('nama'),
				'telp' => $this->input->post('telp'),
				'merk' => $this->input->post('merk'),
				'harga' => $this->m_sepatu->getHarga($this->input->post('merk')),
				'size' => $this->input->post('size')
			];
			$this->load->view('v-data-sepatu', $data);
		}
}
?> 