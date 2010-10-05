// ajax.js


function prepareLinks() {
	if (!document.getElementById || !document.getElementsByTagName) {
		return;
	}
	if (!document.getElementById("stories")){
		return;
	}
	var list = document.getElementById("stories");
	var links = list.getElementsByTagName("a");

	for (var i=0; i<links.length; i++) {
		links[i].onclick = function() {
			var query = this.getAttribute("href").split("?")[1];
			var url = "redbus_stories.php?"+query;
			return !grabFile(url);
		};
	}
}

addLoadEvent(prepareLinks);

//	Grab file 
function grabFile(file) {
	var request = getHTTPObject();
	if(request) {
		displayLoading(document.getElementById("content"));
		request.onreadystatechange = function() {
			parseResponse(request);
		};
		request.open("GET", file, true);
		request.send(null);
		return true;
	} else {
		return false;
	}
}

//	Creates an instance of the XMLHttpObject
function getHTTPObject() {
	var xhr = false;
	if(window.XMLHttpRequest) {
		xhr = new XMLHttpRequest();
	} else if(window.ActiveXObject) {
		try {
			xhr = new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e) {
				xhr=false;
			}
		}
	}
	return xhr;
}

//	Parse Response of the requested document
function parseResponse(request) {
	if (request.readyState == 4) {
		if (request.status == 200 || request.status == 304) {
			var story = document.getElementById("content");
			story.innerHTML = request.responseText;
		}
	}
}

//	Loading Feedback
function displayLoading(element) {
	while (element.hasChildNodes()) {
    element.removeChild(element.lastChild);
	}
  	var image = document.createElement("img");
  	image.setAttribute("src","images/loading.gif");
  	image.setAttribute("alt","Loading...");
		image.setAttribute("width","25");
		image.setAttribute("height","25");
  	element.appendChild(image);
}


//	Display response
function displayResponse(request) {
	if (request.readyState == 4) {
		if (request.status == 200 || request.status == 304) {
			alert(request.responseText);	
		}
	}
}
