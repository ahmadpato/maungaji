<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        error_reporting(E_ALL);
		ini_set('display_errors', 1);

        parent::__construct();
        $this->load->helper('url');
     
    }

	public function index()
	{
		error_reporting(E_ALL);

		ini_set('display_errors', 1);

		//end point for count data teacher and student
        $countData = $this->http_request("http://13.59.145.203/v1/landing");
        
        //end point for article
        $article = $this->http_request("https://maungaji.co.id/artikel/wp-json/wp/v2/posts");

        //end point for testimoni
        $testimoni = $this->http_request("https://cms.maungaji.co.id/testimoni/getTestimoni");

		// change string JSON to array
		$x['count'] = json_decode($countData, TRUE);

		$x['article'] = json_decode($article, TRUE);

		$x['testimoni']= json_decode($testimoni, TRUE);
		
		//get url image
		$x['url'] = "https://cms.maungaji.co.id/images";

        $this->load->view("welcome_message", $x);
	}

	public function about()
	{
		$this->load->view('about.php');
	}

	public function contact()
	{
		$this->load->view('contact.php');
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
