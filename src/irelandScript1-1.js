//Change this to be just for clicking the counter
//AND for updating the leaderboards
//since AJAX is nice for all that
//TG 3-11

var username;
var display_name;
document.getElementById("registerSubmit").onclick=function(){
//document.getElementById("main").innerHTML = "Click me to increment";
username = document.getElementById("registerUsername").value;
display_name = document.getElementById("registerDisplayName").value;
if(username==""||display_name=="")
{
	return;
}
//document.getElementById("username").disabled = true;
var xmlhttp;
if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState ==4 && xmlhttp.status == 200)
		{
			console.log("we are init");
			console.log(xmlhttp.responseText);
		}

	}
	console.log(username);
	xmlhttp.open("GET", "IrelandInit.php?q="+username+
		"d="+display_name, true);
	xmlhttp.send();

}
document.getElementById("loginSubmit").onclick=function(){
	username = document.getElementById("loginUsername").value;
	if(username="")
	{
		return;
	}

}

