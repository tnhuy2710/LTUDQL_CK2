<?php
    //include 'connect.php';
    $serverName = "10.100.26.34";
    $connectionInfo = array( "Database"=>"Alibaba", "CharacterSet" => "UTF-8", "UID"=>"QuanLyTSCNTT", "PWD"=>"QuanLyTSCNTT");
	$conn = sqlsrv_connect($serverName, $connectionInfo);

	if(true)
	{
		echo "false";
		//echo $result =  $_POST['i_MA_ND'];
		// $result = 'false';
        // try { 

	    //         $wsdl = 'http://192.168.200.20:8015/AuthenticatePortal/AuthenPortal.asmx?wsdl';
	    //         $soapClient = new SoapClient($wsdl);
	    //         // SOAP header---------------------------------------------
	    //         $key = 'eijaE0ePClM34UnXLxFikrk21fXJ4iKLOVmz+pO9rxw=';
	    //         $data = 'Authenticate';
	    //         $elementName = 'PortalSecurityHeader';
	    //         $namespace = "http://tempuri.org/";
	    //         $authenticationHeader = array
	    //         (
	    //             'AccessKey' => $key,
	    //             'Action' => $data,
	    //             'Signature' => base64_encode(hash_hmac('sha1', $key, $data, true)),
	    //             'Timestamp' => null
	    //         );
	    //         $authvalues = new SoapVar($authenticationHeader, SOAP_ENC_OBJECT, $elementName, $namespace);
	    //         $soapHeader = new SoapHeader($namespace, $elementName, $authvalues, false);
	    //         $soapClient->__setSoapHeaders(array($soapHeader));

	    //         // SOAP call--------------------------------------------------
	    //         $users = array
	    //             (
	    //             'userName' => '820883',
	    //             'password' => 'klb123456#',
	    //         );
		// 		$result = $soapClient->Authenticate($users)->AuthenticateResult;
				
	 	// 		if($result=='true')
	 	// 		{
	 	// 			$usernameinfo=array('username'=>$_POST('i_MA_ND')); 
		// 			echo $resultuser = $soapClient->GetUserByUserName_V2($usernameinfo)->GetUserByUserName_V2Result; 				    
		// 	    }

        // } catch (SoapFault $fault) {
        //     $result = "false";
        //     if ($soapClient != null) {
        //         $soapClient = null;
        //     }
        //     exit();
        // }
        // echo $result;
	}
	
	sqlsrv_close($conn);
?>