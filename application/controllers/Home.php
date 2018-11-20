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
        $data['id'] = 0;
        $this->load->view('template', $data);
    }
}
?>