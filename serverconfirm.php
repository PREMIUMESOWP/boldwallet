<?php


$refid = $_GET['refid'];
$json = "https://bwalletpay.com/processor/verify";
$masterkey = "";
$refdy = $json."?masterkey=".$masterkey."&refid=".$refid;
      
      $url = $json+""+$refdy;
       $jsonfile =  file_get_contents($url);
       $var = json_decode($jsonfile);
	   
	   if($var->status_request == "1"){
       if($var->status == "1"){
       
        echo "Payment was successfull";
        
        }else{
		
		echo "Payment Decline/Cancelled";

         };

          }else{

           echo "Request Not Recognized";

           } ;





?>