function setCookie()
{
	//-- GET TIMEZONE --
	var myDate = new Date();
	var myHour = myDate.getHours();
	
	//-- COOKIE VARIABLES --
	var c_name = 'c_zone';
	var expiredays = 1;
	
	//-- SET COOKIE --
	var exdate = new Date();
	exdate.setDate(exdate.getDate() + expiredays);
	document.cookie = c_name + "=" + escape(myHour) + ((expiredays == null) ? "" : ";expires=" + exdate.toGMTString());
}

setCookie();