<?php

if(isset($_codetest['submit']))
{
 $client_name = $_POST['client_name'];
 $client_email = $_POST['client_email'];




 $text = 'client name: '. $client_name. ',email: '. $client_email ;
 $fp = fopen('info.txt', 'a+');

   if(fwrite($fp, $text))  {
       echo 'saved';

   }
fclose ($fp);
}

?>

$client_color = $_post['client_color'];
$client_horscope = $_post['client_horscope'];
$client_totallove = $_post['client_totallove'];
$client_newlove = $_post['client_newlove'];




'client color' . $client_color . 'client horscope'. $client_horscope .'client total love'. $client_totallove .'client now love'. $client_newlove ."\n";


'p1 name'. $person_1 .'p1 horscope'. $p1_horscope .'q1'. $p1_q1 .'q2'. $p1_q2 .'q3'. $P1_q3 .'q4'. $p1_q4 .'q5'. $p1_q5 .'q6'. $p1_q6 .
'p2 name'. $person_2 .'p2 horscope'. $p2_horscope .'q1'. $p2_q1 .'q2'. $p2_q2 .'q3'. $P2_q3 .'q4'. $p2_q4 .'q5'. $p2_q5 .'q6'. $p2_q6 .
'p3 name'. $person_3 .'p3 horscope'. $p3_horscope .'q1'. $p3_q1 .'q2'. $p3_q2 .'q3'. $P3_q3 .'q4'. $p3_q4 .'q5'. $p3_q5 .'q6'. $p3_q6 .'finish line'




$person_1 = $_post['person_1'];
$p1_horscope = $_post['p1_horscope'];
$p1_q1 = $_post['p1_q1'];
$p1_q2 = $_post['p1_q2'];
$P1_q3 = $_post['P1_q3'];
$p1_q4 = $_post['p1_q4'];
$p1_q5 = $_post['p1_q5'];
$p1_q6 = $_post['p1_q6'];

$person_2 = $_post['person_2'];
$p2_horscope = $_post['p2_horscope'];
$p2_q1 = $_post['p2_q1'];
$p2_q2 = $_post['p2_q2'];
$P2_q3 = $_post['P2_q3'];
$p2_q4 = $_post['p2_q4'];
$p2_q5 = $_post['p2_q5'];
$p2_q6 = $_post['p2_q6'];

$person_3 = $_post['person_3'];
$p3_horscope = $_post['p3_horscope'];
$p3_q1 = $_post['p3_q1'];
$p3_q2 = $_post['p3_q2'];
$P3_q3 = $_post['P3_q3'];
$p3_q4 = $_post['p3_q4'];
$p3_q5 = $_post['p3_q5'];
$p3_q6 = $_post['p3_q6'];
