<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		$this->load->model('Model_app');
	}


	function index()
	{
		$data['title'] = 'Login';
		$this->load->view('login/header', $data);
		$this->load->view('login');
		$this->load->view('login/footer');
	}

	public function register()
	{

		$data['title'] = 'Register';
		$this->load->view('login/header', $data);
		$this->load->view('register');
		$this->load->view('login/footer');
	}

	public function register_data()
	{
		$this->load->model('M_user');
		$id = date('YmdHis');
		$data_user = array(
			'id_user' => $id,
			'username' => $this->input->post('username'),
			'password' => md5(trim($this->input->post('password'))),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('no_telp'),
			'level' => 'USER'
		);

		$data_karyawan = array(
			'id_karyawan' => $id,
			'nik' => $this->input->post('username'),
			'nama' => $this->input->post('nama_lengkap'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'jk' => $this->input->post('jenis_kelamin'),
			'id_bagian_dept' => '1',
			'id_institusi' => '1',
			'id_jabatan' => '5'
		);

		$data_user = $this->M_user->register_user($data_user, $data_karyawan);

		if ($data_user) {

			$this->session->set_flashdata(
				"msg",
				'<div class="alert alert-light" role="alert">
  Proses Pendaftaran Berhasil <a href="http://localhost/izziservice/login" class="alert-link">Login Lagi</a> Yuk!
</div>'
			);
			redirect('login');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
 Yah Proses Pendaftaran Belum Berhasil, Coba Lagi Nanti Ya!
</div>');
		}

		redirect('register');
	}


	function login_akses()
	{


		$username = trim($this->input->post('username'));
		$password = md5(trim($this->input->post('password')));
		// $test = $this->Model_app->getUserDataByUser($username, $password);
		// var_dump($test);
		// die;
		$akses = $this->db->query("select A.username, B.nama, A.level, B.id_jabatan, C.id_dept FROM user A 
		LEFT JOIN karyawan B ON B.nik = A.username
        LEFT JOIN bagian_departemen C ON C.id_bagian_dept = B.id_bagian_dept
	 WHERE (A.username = '$username' OR A.email = '$username') AND A.password = '$password'");

		if ($akses->num_rows() == 1) {

			foreach ($akses->result_array() as $data) {

				$session['id_user'] = $data['username'];
				$session['nama'] = $data['nama'];
				$session['level'] = $data['level'];
				$session['id_jabatan'] = $data['id_jabatan'];
				$session['id_dept'] = $data['id_dept'];

				$this->session->set_userdata($session);
				redirect('home');
			}
		} else {
			$this->session->set_flashdata("msg", "<div class='alert bg-danger' role='alert'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <svg class='glyph stroked empty-message'><use xlink:href='#stroked-empty-message'></use></svg> Wrong Username and Password.
			    </div>");
			redirect('login');
		}
	}


	public function logout()
	{


		$this->session->sess_destroy();
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");

		$this->session->set_flashdata('msgs', '<div class="alert alert-info text-center" role="alert">
	Berhasil Logout
  </div>');

		redirect('login');
	}
}
