<?php
class Home extends CI_Controller
{
    public function index()
    {
        $this->homePage();
    }
    public function homePage()
    {
        $data['main_contents'] = 'front/view_home';
        $this->load->view('template', $data);
    }
}
?>