<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><!DOCTYPE html>
<html lang="da">
<head>
	<style>
		@font-face{
			font-family:"TDC NET";
			font-weight:400;
			font-style:normal;
			src:url(/TDCconfluence/fonts/TDCNetCo-Regular.eot?#iefix) format("embedded-opentype"),url(/TDCconfluence/fonts/TDCNetCo-Regular.woff2) format("woff2"),url(/TDCconfluence/fonts/TDCNetCo-Regular.woff) format("woff");
			font-display:swap;
		}
		@font-face{
			font-family:"TDC NET Bold";
			font-style:normal;
			font-weight:500;
			src:url(/TDCconfluence/fonts/TDCNetCo-Bold.eot?#iefix) format("embedded-opentype"),url(/TDCconfluence/fonts/TDCNetCo-Bold.woff2) format("woff2"),url(/TDCconfluence/fonts/TDCNetCo-Bold.woff) format("woff");
			font-display:swap;
		}
		body{
			font-family:"TDC NET",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
			color:#3c3c3c;
			background-color:#fff; # nat blå
		}
		.fc_logoblaa   { color: rgb( 55, 85,215);}
		.fc_natblaa    { color: rgb( 25, 40, 95);}
		.fc_havblaa    { color: rgb(115,160,225);}
		.fc_himmelblaa { color: rgb(190,215,245);}
		.fc_Jordbrun   { color: rgb( 80, 60, 60);}
		.fc_sand       { color: rgb(240,220,200);}
		.fc_teglroed   { color: rgb(210, 85, 85);}
		.fc_graesgroen { color: rgb( 90,170,120);}
		
		div.center {
		  margin: auto;
		  width: 100%;
		  height: 100%;
		  text-align: center;
		}
		
		h1,h2{
			font-family:"TDC NET Bold",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
		}
	</style>
	<meta charset="utf-8" />
	<script src="js/jquery-3.6.1.min.js"></script>
	<script>
	var counter = 10;
	function reloadBodyContent(){
		counter++;
		console.log(counter);
		if (counter >= 10){
			$.get("https://www.keikoware.dk/TDCvideowall/ws/content.php", function(data, status){
				$('body').html(data);
			});
			counter = 0;
		}
		setTimeout(reloadBodyContent, 1000); // tæller op hvert sekund
	}

	$(document).ready(function() {
		reloadBodyContent();
	});
	
	</script>
	<title>TDC NET - Cyber Defense Center</title>
</head>
<body>
<b>loading ... </b>
</body>
</html>