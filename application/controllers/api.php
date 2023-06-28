<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
    public function index()
	{
		$this->load->view('movie_search');
	}
    public function search()
    {
        $searchValue = $this->input->post('searchValue');
        $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=195ab1c1&s='.$searchValue;

        $response = file_get_contents($url);
        $movies = json_decode($response)->Search;

        $data['movies'] = $movies;
        $this->load->view('movie_list', $data);

        
    }
}