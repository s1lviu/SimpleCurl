 
<?php
include('curl.php');
$obj = new curl;
	$obj->url("https://www.whatismybrowser.com/developers/what-http-headers-is-my-browser-sending"); //set url
	$obj->referer("https://rstforums.com/"); //set referer
	$obj->cookies(true);  //disable or enable cookies from file
	$obj->followredirect(true);  //follow or not HTTP redirects
	$obj->timeout(10); //connection timeout
    $obj->setcookies("Cookie: cookie1=cookie; cookie2 = anothercookie"); //set your own cookies
    $obj->setheaders(array("X: Y")); //set your own headers in netscape format
	$obj->useragent('User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:34.0) Gecko/20100101 Firefox/34.0'); //set your own user-agent
	//$obj->post(array('field1' => 'value1', 'field2'=> 'value2')); //example for make HTTP-POST for fields or files. 
	echo $obj->getdata(); //get result

?>