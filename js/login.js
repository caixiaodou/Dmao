function checkLogin()
	{	var tempa0 = document.getElementById("userName");
		if(tempa0.value == "" || tempa0.value == null)
		{	alert("用户名不能为空");
			tempa0.focus();
			return false;
		}
		var tempa1 = document.getElementById("password");
		if(tempa1.value == "" || tempa1.value == null)
		{	alert("密码不能为空");
			tempa1.focus();
			return false;
		}
	}
function addLoadEvent(func)
{	var oldonload = window.onload;
	if(typeof window.onload != "function")
		window.onload = func;
	else 
	{	window.onload = function()
			{	oldonload();
				func();
			}
	}
}
addLoadEvent(register);