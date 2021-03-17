<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forget_password extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        error_reporting(0);
        $this->load->model('Model_app');
    }


    function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Forget Password';
            $this->load->view('login/header', $data);
            $this->load->view('forget_password');
            $this->load->view('login/footer');
        } else {
            $email = $this->input->post('email');
            $this->load->model('Model_app', 'app');

            $cekuserbymail['cekuserbymail'] = $this->app->cekuserbymail($email);
            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {
                $id = $user['username'];
                // encode
                $plain_text = $id;
                $encrypted_string = base64_encode($plain_text);
                $str =  rtrim(strtr($encrypted_string, '+/', '-_'), '=');
                var_dump($str);
                die;
                // config email
                $config['protocol'] = 'smtp';
                $config['smtp_host'] = 'ssl://smtp.googlemail.com';
                $config['smtp_port'] = '465';
                $config['smtp_timeout'] = '30';
                $config['smtp_user'] = 'oneschoolpayment@gmail.com';
                $config['smtp_pass'] = '$osp111222';
                $config['charset'] = 'utf-8';
                $config['newline'] = "\r\n";
                $config['wordwrap'] = TRUE;
                $config['mailtype'] = 'html';
                $this->email->initialize($config);
                $this->email->from('osp@gmail.com', 'One School Payment');
                $this->email->to($email);
                $this->email->subject('Reset Password IZZI SERVICE');
                $this->email->message('Click here to reset your password: <a href="' . base_url() . 'forget_password/rst/' . $str  . '">Reset!</a> ');
                if ($this->email->send()) {
                    redirect('login');
                } else {
                    echo $this->email->print_debugger();
                    die();
                };
            } else {
                redirect('forget_password');
            }
        }
    }
    // private function _sendEmail($email)
    // {
    //     $this->load->model('model_menu', 'menu');


    //     $email = $email;
    //     $user_email = $this->menu->getIdByEmail($email);


    //     $id = rtrim(strtr(base64_encode($user_email['id']), '+/', '-_'), '=');

    //     $config['protocol'] = 'smtp';
    //     $config['smtp_host'] = 'ssl://smtp.googlemail.com';
    //     $config['smtp_port'] = '465';
    //     $config['smtp_timeout'] = '30';
    //     $config['smtp_user'] = 'oneschoolpayment@gmail.com';
    //     $config['smtp_pass'] = '$osp111222';
    //     $config['charset'] = 'utf-8';
    //     $config['newline'] = "\r\n";
    //     $config['wordwrap'] = TRUE;
    //     $config['mailtype'] = 'html';
    //     $this->email->initialize($config);
    //     $this->email->from('osp@gmail.com', 'One School Payment');
    //     $this->email->to($email);
    //     if ($type == 'verify') {
    //         $this->email->subject('One School Payment Account Verification');
    //         $this->email->message('Click here to activated your account: <a href="' . base_url() . 'auth/verify?email=' . $email  . '&token=' . urlencode($token) . '">Activated!</a> ');
    //     } else {
    //         $this->email->subject('Reset Password OSP');
    //         $this->email->message('Click here to reset your password: <a href="' . base_url() . 'auth/reset_password/' . $id  . '">Reset!</a> ');
    //     }

    //     if ($this->email->send()) {
    //         return true;
    //     } else {
    //         echo $this->email->print_debugger();
    //         die();
    //     };
    // }


    public function rst($str)
    {
        $data['id_user'] = $str;
        $this->load->view('resetpassword', $data);
    }

    public function save_resetpassword($id)
    {
        $username = base64_decode($id);
        $password = md5(trim($this->input->post('password')));
        $cekuserbyuser['passwordkunci'] = $this->input->post('password');

        $update = $this->Model_app->save_resetpassword($username, $password);

        $cekuserbyuser['cekuserbyuser'] = $this->Model_app->cekuserbyuser($username);

        if ($cekuserbyuser) {
            $this->db->set('password', $password);
            $this->db->where('username', $username);
            $this->db->update('user');

            $this->session->set_flashdata(
                "msg",
                '<div class="alert alert-light" role="alert"> 
            ' . $username . ' Telah mengganti passwordnya.
</div>'
            );

            redirect('login');
        } else {
            $this->session->set_flashdata(
                "msg",
                '<div class="alert alert-light" role="alert"> 
           Gagal Mengganti password
</div>'
            );

            redirect('login');
        }


        // $config = [
        //     'mailtype'  => 'html',
        //     'charset'   => 'utf-8',
        //     'protocol'  => 'smtp',
        //     'smtp_host' => $this->config->item('email_host'),
        //     'smtp_user' => $this->config->item('email_username'),  // Email gmail
        //     'smtp_pass'   => $this->config->item('email_password'),  // Password gmail
        //     'smtp_crypto' => 'ssl',
        //     'smtp_port'   => 465,
        //     'crlf'    => "\r\n",
        //     'newline' => "\r\n"
        // ];

        // $this->load->library('email', $config);


        // $mesg = $this->load->view('mail/reset_password_success', $cekuserbyuser, true);

        // $this->email->from($this->config->item('email_username'), "ADMIN");
        // $this->email->to($this->config->item('email_admin'));
        // $this->email->subject($username . ' Telah mengganti Passwordnya');
        // $this->email->message($mesg);
        // $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        // $this->email->set_header('Content-type', 'text/html');

        // if ($this->email->send()) {
        //     $this->load->view('mail/success_resetpassword_end');
        // } else {
        //     redirect('login');
        // }
    }

    public function reset_password()
    {

        $email = $this->input->post('email');
        $this->load->model('Model_app', 'app');

        $cekuserbymail['cekuserbymail'] = $this->app->cekuserbymail($email);

        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => $this->config->item('email_host'),
            'smtp_user' => $this->config->item('email_username'),  // Email gmail
            'smtp_pass'   => $this->config->item('email_password'),  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->email->initialize($config);
        //        $this->load->library('email');
        // $this->email->initialize($config);

        // $mesg = $this->load->view('mail/reset_password', $cekuserbymail,true);
        foreach ($cekuserbymail as $key => $value) {
            $id_user = $value['username'];
        }

        $plain_text = $id_user;
        $encrypted_string = base64_encode($plain_text);

        // Outputs: This is a plain-text message!
        $str = preg_replace("/[^a-zA-Z]/", "", $encrypted_string);

        $mesgs = $this->load->view('mail/reset_password', $cekuserbymail, true);
        $this->email->from($this->config->item('email_username'), 'ADMIN');
        $this->email->to($email);
        $this->email->subject('izzi Password Change Request');
        $this->email->message('Click this link to reset Your Password : <a href="' . base_url() . 'forget_password/rst/' . urlencode($str) . '">Reset</a>');
        //   $this->email->message('Click this link to reset Your Password <a href="'.base_url().'forget_password/rst/'.$str."'>Reset Password</a>');
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');

        if ($this->email->send()) {
            $this->load->view('mail/success_resetpassword');
        } else {
            $this->email->print_debugger();
            die();
            // $this->load->view('mail/failed_resetpassword');
        }
    }
}
