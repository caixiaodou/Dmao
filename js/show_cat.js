function highlightPage()
{
	var nav = document.getElementById('nav');
	var links = nav.getElementsByTagName('a');
	var linkurl;
	for(var i=0;i<links.length;i++)
	{
		linkurl = links[i].getAttribute('href');
		//字符串linkurl首次出现的位置，没有则返回-1
		if(window.location.href.indexOf(linkurl) != -1)
		{
			links[i].className = "here";
		}
	}
}
window.onload = highlightPage;