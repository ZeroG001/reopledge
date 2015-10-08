<?php

	$POST = [
		"pledge_type" => "reo_agent",
		"name" => "Blayne Holland",
		"address" => "2847 Greenbrooke Lane",
		"company" => "jamco-front-aamc",
		"office_number" => "n/a",
		"pledge_amount" => "other",
		"number_of_checks" => "all",
		"comments" => "this is a comment"
	];

	if($POST['pledge_type'] == "reo_staff") {
		$msg = "<h2 style='background-color: red; width: 250px; text-align: center'> REO Staff - Pledge Form </h2>";
	} 

	elseif($POST['pledge_type'] == "reo_agent") {
		$msg = "<h2 style='background-color: blue; width: 250px; text-align: center'> REO Agent - Pledge Form </h2>";	
	}

	$msg .= "<table width='200'>";

	foreach ($POST as $k => $v) {
		$msg .=	"<tr>";
		$msg .=		"<td>";
		$msg .=			$k;
		$msg .=		"</td>";
		$msg .=		"<td>";
		$msg .=			$v;
		$msg .=		"</td>";
		$msg .=	"</tr>";

	}

	$msg .= "</table>";

	echo $msg


?>
