<?php
class Profil extends CI_Controller
{
    public function index()
    {
        $data['main_contents'] = 'front/view_profil';
        $this->load->view('template', $data);
    }
}
?>