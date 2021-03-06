<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Armys extends CI_Controller
{
    public function __construct()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $army = $this->http_request("https://cms.maungaji.co.id/user/getUser");

        $x['army'] = json_decode($army, TRUE);

        $x['url'] = "https://cms.maungaji.co.id/images";

        $this->load->view("header");
        $this->load->view("army/army", $x);
        $this->load->view("footer");
    }

    function http_request($url){
        // persiapkan curl
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url);
        
        // set user agent    
        curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

        // return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // tutup curl 
        curl_close($ch);      

        // mengembalikan hasil curl
        return $output;
    }

}
