function addLoadEvent(func)
{	var oldonloaad = window.onload;
	if(typeof window.onload != "function")
		window.onload = func;
	else
	{	window.onload = function()
		{	oldonload();
			func();
		}
	}
}

function checkRegister()
{	var password = document.getElementById("password");
	var password2 = document.getElementById("password2");
	var userName = document.getElementById("userName");
	if(userName.value.length < 5)
	{	alert("用户名太短");
		userName.focus();
		return false;
	}
	if(password.value != password2.value)
	{	alert("两次密码不一致");
		password.focus();
		return false;
	}
	if(password.value.length < 8)
	{	alert("密码太短，不得少于8位");
		password.focus();
		return false;
	}
	return true;
}
function preCheckRegister()
{	var forms = document.getElementsByTagName("form");
	forms[0].onsubmit = function()
	{	return checkRegister();
	}
}
addLoadEvent(preCheckRegister);