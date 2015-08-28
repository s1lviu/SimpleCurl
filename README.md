<h1 id="simplecurl">SimpleCurl</h1>

<p>Simple and easy to use php curl class with examples</p>

<pre><code>&lt;?php 
//Simple Curl
//Author: Silviu Bogdan Stroe 
//Contact: silviu[at]silviu-s.com - www.silviu-s.com
include('curl.php');

$obj = new curl;
$obj-&gt;url("https://www.whatismybrowser.com/developers/what-http-headers-is-my-browser-sending"); //set url
$obj-&gt;referer("https://rstforums.com/"); //set referer
$obj-&gt;cookies(true);  //disable or enable cookies from file
$obj-&gt;followredirect(true);  //follow or not HTTP redirects
$obj-&gt;timeout(10); //connection timeout
$obj-&gt;setcookies("Cookie: cookie1=cookie; cookie2 = anothercookie"); //set your own cookies
$obj-&gt;setheaders(array("X: Y")); //set your own headers in netscape format
$obj-&gt;useragent('User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:34.0) Gecko/20100101 Firefox/34.0'); //set your own user-agent
//$obj-&gt;post(array('field1' =&gt; 'value1', 'field2'=&gt; 'value2')); //example for make HTTP-POST for fields or files. 

echo $obj-&gt;getdata(); //get result

?&gt;
</code></pre>
