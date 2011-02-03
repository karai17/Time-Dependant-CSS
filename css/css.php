<?php
	header('Content-type: text/css');
	
	//-- Are cookies  or JaveScript disabled? --
	if(isset($_COOKIE['c_zone']))
	{
		$x = $_COOKIE['c_zone'];
	}
	else
	{
		$x = -1; //-- If there is no cookie set, just use the default value [This could be used as an easter egg?] --
	}
	
	#$x = -1; //-- Uncomment this to manually set the hour to test your skins. --
	
	//-- Each case number represents an hour of the day --
	switch($x)
	{
		case 0: //-- Midnight --
		case 1:
			$img = '00';
			$bg = '5c402a';
			break;
		case 2:
		case 3:
			$img = '02';
			$bg = '5f4931';
			break;
		case 4:
		case 5:
			$img = '04';
			$bg = '6a6158';
			break;
		case 6: //-- 6:00 am --
		case 7:
			$img = '06';
			$bg = '768089';
			break;
		case 8:
		case 9:
			$img = '08';
			$bg = '92a3b7';
			break;
		case 10:
		case 11:
			$img = '10';
			$bg = 'a4b3c8';
			break;	
		case 12: //-- Noon --
		case 13:
			$img = '12';
			$bg = 'acb9c9';
			break;
		case 14:
		case 15:
			$img = '14';
			$bg = 'a3b3c3';
			break;
		case 16:
		case 17:
			$img = '16';
			$bg = '939eb2';
			break;
		case 18: //-- 6:00 pm --
		case 19:
			$img = '18';
			$bg = '777d8d';
			break;
		case 20:
		case 21:
			$img = '20';
			$bg = '6e645b';
			break;
		case 22:
		case 23:
			$img = '22';
			$bg = '5e4a2f';
			break;
		default:
			$img = '12';
			$bg = 'afbfd8';
	}	
?>
body{background-color: #<?php echo $bg; ?>;}

#timelapse
{
	margin: 0 auto;
	background: #<?php echo $bg; ?> url("../img/<?php echo $img; ?>.jpg");
	border: 1px solid black;
	width: 123px;
	height: 625px;
}