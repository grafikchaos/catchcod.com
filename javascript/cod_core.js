/**
 * @copyright  Copyright (c) 2007 August Ash Inc. (http://www.augustash.com)
 * @version    $Id: aailib.js 30 2008-04-02 17:56:43Z dficker $
 */

/**
 * Prepare Links - using jQuery
 * 
 * Checks the document, when ready, for all link nodes with a class
 * name "external" and opens them in a new window when clicked.
 */
$(document).ready(function(){
	$("a").filter(".external").click(function (){
		var NewWindow = new OpenWindow($(this).attr("href"));
		return NewWindow.open();
	})
    .end();
});

/**
 * OpenWindow Class
 * 
 * Creates an OpenWindow object that allows you to define the URL, 
 * window name, and features for firing a pop-up window.
 * 
 * @param {String} href
 */
function OpenWindow(href)
{
	// Set default values
	var _href     = href;
	var _name     = "external";
	var _features = "";
	
	function __construct() {
		// Define methods		
		this.getHref     = function() { return _href; }
		this.setHref     = function(href) { _href = href; }
		this.getName     = function() { return _name; }
		this.setName     = function(name) { _href = name; }
		this.getFeatures = function() { return _features; }
		this.setFeatures = function(features) { _features = features; }
		
		this.open = function() {
			window.open(_href, _name, _features);
			return false;
		}
	};
	
	return new __construct();
}

/**
 * Son of Suckerfish Drop Down Menu
 * http://www.htmldog.com/
 */
$(document).ready(function(){
	var sfEls = $("ul#nav li");
	for (var i = 0; i < sfEls.length; i++) {
		$(sfEls[i]).mouseover(function(){
			$(this).addClass("sfhover");
		});
		$(sfEls[i]).mouseout(function(){
			$(this).removeClass("sfhover");
		});
	}
});

/**
 * Prepare Links - using jQuery
 * 
 * Checks the document, when ready, for all link nodes with a class
 * name "popup" and opens them in a new window when clicked.
 */
$(document).ready(function() {
	$("a").filter(".popup").click(function () {
	    var width = 700;
        var height = 600;
        var win_left = (screen.width-width)/2;
        var win_top = (screen.height-height)/2;
		var NewWindow = new OpenWindow($(this).attr("href"));
		NewWindow.setFeatures('width='+width+',height='+height+',top='+win_top+',left='+win_left+',toolbar=no,directories=no,status=no,scrollbars=yes,resizable=yes');
		
		return NewWindow.open();
	})
    .end();
});

/* play sound clip
--------------------------------------------------------------- */
function honk(soundobj) {
    document.getElementById("busHorn").innerHTML = '<embed id="honker" src="truckhorn.wav" autostart="true" loop="false" hidden="true"></embed>';
    // var sound = document.getElementById(soundobj);
    // sound.Play();
}