<?php

$xml = simplexml_load_file("reestr.xml");

$postdata = file_get_contents('php://input');
$request = json_decode($postdata);
$xml_id = (string)$request->id;

foreach ($xml->children() as $key) {
	$companies[] = array('MEMBERNAME' => (string)$key->MEMBERNAME);
}

print json_encode($companies);

?>

