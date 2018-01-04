<html>
<head>
<title>Upload Error</title>
</head>
</html>
<!--- Styling Error if you access directly inserting URL --->
<style>
.no-paste {
	font-size: 34px;
	font-family: monospace;
}
.no-paste1 {
	font-size: 29px;
	font-family: monospace;
}

@keyframes machine {
	from {
		width: 61%;
	}
	to {
		width: 37%;
	}
}
span {
	position: absolute;
	right: 0px;
	width: 0px;
	background: white;
	border-left: 3px solid #000;
	animation: machine 4.5s infinite alternate steps(17);
</style>
<?php
if ( isset ($_POST['input']) ) { // checking if you entered data in paste
$data = $_POST['input'];
$length = 7; // the length of random string choosen, example: y2Vf9aH
$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); // the random string and selecting length
$my_file = "paste/$randomString.txt"; // saving paste in .txt
$handle = fopen($my_file, 'w') or die('Cannot open file: '.$my_file);
fwrite($handle, $data);
$ffinal = "paste/$randomString";
header( 'Location: /'.$ffinal.'' ) ; // this direct you to the paste without .txt, because a .htaccess remove the extension
}
else{ // else show cool css error text
	echo "<center><div class=\"no-paste\">ERROR</div></center>";
	echo "<br />";
	echo "<center><div class=\"no-paste1\"><span>&#160;</span>Paste Text Empty</div></center>";
}
?>
