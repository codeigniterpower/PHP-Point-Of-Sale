<?php
function postToQuickbooks($action, $data)
{
	$CI =& get_instance();
	$data = array_merge(array('action' => $action), $data);

	//open connection
	$ch = curl_init();
	
	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL,'http://localhost/post.php');
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,'data='.urlencode(json_encode($data)));
	
	//execute post
	$result = curl_exec($ch);

}
?>