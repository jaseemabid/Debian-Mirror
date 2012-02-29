<?php
	/**
	* TUWD MIRROR API
	*/
	
	/**
	* Global Variables
	*/
	$mirror_url	=	"http://localhost/debian/dists/unstable";
	$timezone	=	'Asia/Kolkatta';
	
	//Server Default Time Zone Set
	date_default_timezone_set($timezone);
	
	/**
	* API Functions
	*/
	if(isset($_GET['lastupdate'])){
		echo getLastUpdateTimeJSON();
	}
	
	/**
	* Function Definition
	*/
	function getLastUpdateTimeJSON(){
		$lu = explode("\n",file_get_contents($mirror_url));
		$t = strtotime(substr($lu[4],5));
		$d = date(DATE_RFC822,$t);
		$a = array();
		$a["title"] = "TUWD Last Update";
		$a["timestamp"] = $t;
		$a["date"] = $d;
		return json_encode($a);
	}
?>
