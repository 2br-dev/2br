<?php

http_response_code(204);

$report = file_get_contents('php://input');
$report = json_decode($report, true);

if (empty($report)) {
	exit;
}

$report = $report['csp-report'];

$delimiter = '|';
$csvLine = '';
$csvLine .= !empty($report['document-uri']) ? $report['document-uri'] : $delimiter;
$csvLine .= !empty($report['referrer']) ? $delimiter . $report['referrer'] : $delimiter;
$csvLine .= !empty($report['violated-directive']) ? $delimiter . $report['violated-directive'] : $delimiter;
$csvLine .= !empty($report['original-policy']) ? $delimiter . $report['original-policy'] : $delimiter;
$csvLine .= !empty($report['blocked-uri']) ? $delimiter . $report['blocked-uri'] : $delimiter;
$csvLine .= !empty($report['status-code']) ? $delimiter . $report['status-code'] : $delimiter;
$csvLine .= "\r\n";

file_put_contents(__DIR__ . 'report.csv', $csvLine, FILE_APPEND);

// $data = json_decode($HTTP_RAW_POST_DATA,true);
// $to = 'myemail@example.com';
// $subject = 'CSP Violations';
// $message="Following violations occured:<br/><br/>";
// if($document_uri!="")
//     $message.="<b>Document URI:</b> ".$data['csp-report']['document-uri']."<br/><br/>";
// if($referrer!="")
//     $message.="<b>Referrer:</b> ".$data['csp-report']['referrer']."<br/><br/>";
// if($blocked_uri!="")
//     $message.="<b>Blocked URI:</b> ".$data['csp-report']['blocked_uri']."<br/><br/>";
// if($violated_directive!="")
//     $message.="<b>Violated Directive:</b> ".$data['csp-report']['violated_directive']."<br/><br/>";
// if($original_policy!="")
//     $message.="<b>Original Policy:</b> ".$data['csp-report']['original_policy']."<br/><br/>";
// // To send HTML mail, the Content-type header must be set
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// $headers .= 'From: Example Website <noreply@example.com>' . "\r\n";
// // Mail it
// mail($to, $subject, $message, $headers);
