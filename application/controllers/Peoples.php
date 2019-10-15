<?php

class Peoples extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'List Of Peoples';
        $this->load->model('Peoples_model', 'peoples');

        // initial pagenation
        $this->load->library('pagination');

        // configurasi 
        $config['base_url'] = 'http://localhost/CI-REKWEB/peoples/index';
        $config['total_rows'] = $this->peoples->countAllPeoples();
        $config['per_page'] = 12;

        $config['full_tag_open'] = '<nav aria-label="Page navigation example">
        <ul class="pagination">';
        $config['full_tag_open'] = '<nav aria-label="Page navigation example">
        <ul class="pagination">';
        // initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start']);

        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
}
