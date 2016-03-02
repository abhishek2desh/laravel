(function(d) {
	var fe = d.createElement("script"),t;
	fe.type = "text/javascript";
	fe.async = true;
	if ($FE.cache)
		fe.src = "//tag.fanexam.com/js/" + $FE.id + ".js?" + Math.random();
	else
		fe.src = "//tag.fanexam.com/js/" + $FE.id + ".js";
	t = d.getElementsByTagName("script")[0];
	t.parentNode.insertBefore(fe, t);
})(document);