// addLoadEvent JS
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			oldonload();
			func();
		}
	}
}

//addClass JS
function addClass(element,value) {
  if (!element.className) {
    element.className = value;
  } else {
    newClassName = element.className;
    newClassName+= " ";
    newClassName+= value;
    element.className = newClassName;
  }
}

//insertAfter JS
function insertAfter(newElement,targetElement) {
  var parent = targetElement.parentNode;
  if (parent.lastChild == targetElement) {
    parent.appendChild(newElement);
  } else {
    parent.insertBefore(newElement,targetElement.nextSibling);
  }
}


//	startLinks JS (fixes CSS Dropdown menu display for IE 5/6)
function startList() {
	if (!document.getElementById || !document.getElementsByTagName) return false;
	if (document.all && document.getElementById) {
	var navRoot = document.getElementById("nav");
	for (i=0; i<navRoot.childNodes.length; i++) {
		node = navRoot.childNodes[i];
		if (node.nodeName == "LI") {
			node.onmouseover = function() {
				this.className+=" over";
			}
			node.onmouseout = function() {
				this.className = this.className.replace
					(" over", "");
				}
			}
		}
	}
}
addLoadEvent(startList);