<?php

  header("Content-type: application/json");

  $uri = $_POST['uri'];
  $day = $_POST['day'];
  $region = $_POST['region'];
  $regionuri = $region == '' ? $region : $region.'/';
  $host = "http://www.bbc.co.uk/";
  $date = findDate($day);

  function findDate($d) {
	  $JS_DATE_FORMAT = "Y/m/d";
	  if ($d == 'yesterday') {
		  return date($JS_DATE_FORMAT, mktime(0,0,0,date("m"),date("d")-1,date("Y")));
	  }
	  elseif ($d == 'today') {
		  return date($JS_DATE_FORMAT);
	  }
	  elseif ($d == 'tomorrow') {
		  return date($JS_DATE_FORMAT, mktime(0,0,0,date("m"),date("d")+1,date("Y")));
	  }
	  else {
		  return str_replace('-', '/', $d);
	  }
  }

  $js = file_get_contents($host.$uri.'/programmes/schedules/'.$regionuri.$date.'.json');
  $alljson = json_decode($js);

  print json_encode($alljson->schedule->day->broadcasts);

?>
