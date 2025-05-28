<?php
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->database();
    }

    // Menampilkan halaman login
    public function login() {
        if ($this->session->userdata('logged_in')) {
            redirect('cloudpage');
        }

        $this->load->view('login/login');
    }

    // Proses login
    public function authenticate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password'); // Password tanpa enkripsi

        $user = $this->User_model->get_user_by_username($username);

        if ($user && $user->password == $password) {
    // Jika username dan password cocok, set session
    $this->session->set_userdata([
        'logged_in' => TRUE,
        'user_id' => $user->user_id, // ✅ Tambahkan ini
        'role' => $user->role,
        'username' => $user->username
    ]);

    // Redirect berdasarkan role
    if ($user->role == 'admin') {
        redirect('cloudpage');
    } elseif ($user->role == 'user') {
        redirect('user');
    } else {
        redirect('guest');
    }
}

    }

    // Proses logout
    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
