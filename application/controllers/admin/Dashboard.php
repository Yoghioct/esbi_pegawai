<?php
    class Dashboard extends CI_Controller{
        public function index() {
            $data['title'] = "Dashboard Pegawai - ESBI Indonesia";

            $pegawai = $this -> db -> query ("SELECT * FROM data_pegawai");
            $data['pegawai'] = $pegawai -> num_rows();

            $users = $this -> db -> query ("SELECT * FROM data_users");
            $data['users'] = $users -> num_rows();

            $jabatan = $this -> db -> query ("SELECT * FROM data_jabatan");
            $data['jabatan'] = $jabatan -> num_rows();

            $this -> load -> view ('templates/header', $data);
            $this -> load -> view ('templates/sidebar');
            $this -> load -> view ('admin/dashboard', $data);
            $this -> load -> view ('templates/footer');
        }
    }

?>