
function sendJson()
{xhr = new XMLHttpRequest();
var url = "json1";
xhr.open("POST", url, true);
xhr.setRequestHeader("Content-type", "application/json");
xhr.onreadystatechange = function () { 
    if (xhr.readyState == 4 && xhr.status == 200) {
        var json = JSON.parse(xhr.responseText);
        console.log(json.email + ", " + json.password)
	    }
	}
var data = JSON.stringify({"email":"hey@mail.com","password":"101010"});
xhr.send(data);

}


function reciveJson(){
xhr = new XMLHttpRequest();

var url = "json1?data=" + encodeURIComponent(JSON.stringify({"email":"hey@mail.com","password":"101010"}));
xhr.open("GET", url, true);
xhr.setRequestHeader("Content-type", "application/json");
xhr.onreadystatechange = function () { 
    if (xhr.readyState == 4 && xhr.status == 200) {
        var json = JSON.parse(xhr.responseText);
        console.log(json.email + ", " + json.password)
    	}
	}
xhr.send();
}
