						(function(d) {
								var tag = d.createElement("script"),t;
								tag.type = "text/javascript";
								tag.async = true;
								if ($TC.cache)
									tag.src = "//tatvicnpsbulder.hol.es/js/" + $TC.id + ".js?"+ Math.random();
								else
									tag.src = "//tatvicnpsbulder.hol.es/js/" + $TC.id + ".js";//user customized js file , containing all settings , 
								t = d.getElementsByTagName("script")[0]; //design variables and all document variables.
								t.parentNode.insertBefore(tag, t);//attach a new script tag before the first one.
							})(document);