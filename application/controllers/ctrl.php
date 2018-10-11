<?php
class ctrl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        $this->home();
    }
    public function home()
    {
        $data['main_contents'] = 'front/view_home';
        $this->load->view('template', $data);
    }
}
?>