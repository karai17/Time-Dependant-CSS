$(document).ready(function(){
	var d	= new Date();
	var h	= d.getHours();
	var css	= -1;
	
	switch(h)
	{
		case 0:
		case 1:
			css = '00';
			break;
		case 2:
		case 3:
			css = '02';
			break;
		case 4:
		case 5:
			css = '04';
			break;
		case 6:
		case 7:
			css = '06';
			break;
		case 8:
		case 9:
			css = '08';
			break;
		case 10:
		case 11:
			css = '10';
			break;
		case 12:
		case 13:
			css = '12';
			break;
		case 14:
		case 15:
			css = '14';
			break;
		case 16:
		case 17:
			css = '16';
			break;
		case 18:
		case 19:
			css = '18';
			break;
		case 20:
		case 21:
			css = '20';
			break;
		case 22:
		case 23:
			css = '22';
			break;
		default:
			css = '00';
	}
	
	$('head').append('<link rel="stylesheet" type="text/css" href="css/'+css+'.css"/>');
});