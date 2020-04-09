<?php
class Rest_client_model extends CI_Model {


	public function __construct() {
	// $this -> load -> database();
    $this->load->library('xmlrpc');
    $this->load->library('xmlrpcs');
	}


  public function get_services() {

    $query = $this -> db -> query("
      SELECT 
        A.*
      FROM 
        APP_SERVICE A
      order by 
      A.SERVICE_ID ASC 
        ");
     return $query -> result(); 
  }

  public function get_service($SERVICE_ID='1') {

    $query = $this -> db -> query("
      SELECT 
        A.*
      FROM 
        APP_SERVICE A
      WHERE 
      A.SERVICE_ID = '$SERVICE_ID' 
      LIMIT 1
        ");
     return $query -> row_array(); 
  }

	// public function get_token()
 //    {
 //      $url = url_token;
 //      $request_headers = array();
 //      // $request_headers[] = 'Authorization: Bearer ' . $secretKey;
 //      $request_headers[] = 'Content-Type: application/x-www-form-urlencoded';
 //      $request_headers[] = 'origin: http://localhost:20000';
 //      $ch = curl_init();
 //      curl_setopt($ch, CURLOPT_URL, $url);
 //      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 //      // curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 //      curl_setopt($ch, CURLOPT_TIMEOUT, 30);
 //      curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
 //      curl_setopt($ch, CURLOPT_POSTFIELDS, "client_id=".client_id."&grant_type=client_credentials" ); 
 //      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 //      $data = curl_exec($ch);

 //      if (curl_errno($ch))
 //        {
 //        print "Error: " . curl_error($ch);
 //        }
 //        else
 //        {

 //        $transaction = json_decode($data, TRUE);
 //        curl_close($ch);
	// 	return $transaction;
 //      }
 //    }

	public function unit_get()
    {
      // $token = $this->get_token();
      // $Authorization = $token['token_type']." ".$token['access_token'];
      


      $url = SITE_API.'master/unit';
      // echo $url;
      // echo $url;
      $request_headers = array();
      // $request_headers[] = $Authorization;
      // $request_headers[] = 'Content-Type: application/x-www-form-urlencoded';
      // $request_headers[] = 'Authorization: '.$Authorization;
      // $request_headers[] = 'origin: http://localhost:20000';

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 60);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
      // curl_setopt($ch, CURLOPT_POSTFIELDS, "client_id=".client_id."&grant_type=client_credentials" ); 
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      // print_r($ch);

      $data = curl_exec($ch);

      if (curl_errno($ch))
        {
        print "Error: " . curl_error($ch);
        }
        else
        {

        $transaction = json_decode($data, TRUE);
        curl_close($ch);
		// return json_decode($transaction, TRUE);
    return json_encode($transaction, TRUE);
      }
    }

}