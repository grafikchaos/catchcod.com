// JavaScript Document

//	Changes the text in the #div id="quote" to match selected pages
function changeQuotes() {
	if(!document.getElementsByTagName) return false;
	if(!document.getElementById) return false;
	if(!document.getElementById("quote")) return false;
	
	var quote = document.getElementById("quote")
	
//	Store individual pages here
	var homePage 			= "http://www.catchcod.com/";
	var indexPage 			= "http://www.catchcod.com/index.php";
	var codPage 			= "http://www.catchcod.com/center_organizational_development.php";
	var profilePage 		= "http://www.catchcod.com/profile.php";
	var lauraProfilePage 	= "http://www.catchcod.com/laura_ayers_profile.php";
	var commentsPage 		= "http://www.catchcod.com/comments.php";
	var redbusPage 			= "http://www.catchcod.com/redbus.php";
	var mocpPage 			= "http://www.catchcod.com/mocphilanthropy.php";
	var fundingPage		 	= "http://www.catchcod.com/funding.php";
	var fundingAthwinPage 	= "http://www.catchcod.com/funding_athwin.php";
	var fundingVmbPage 		= "http://www.catchcod.com/funding_vmb.php";
	var fundingPhilPage 	= "http://www.catchcod.com/funding_private_philanthropists.php";
	var contactPage 		= "http://www.catchcod.com/contact.php";
	
//	Get the current URL of the page
	var currenturl = document.location.href;

	if(currenturl == homePage || currenturl == indexPage || currenturl == mocpPage || currenturl == fundingPage || currenturl == fundingVmbPage || currenturl == fundingPhilPage || currenturl == contactPage) {
			var para = document.createElement("p");
			var author = document.createElement("p");
			var emphasis = document.createElement("em");
			quote.appendChild(para);
			quote.appendChild(emphasis);
			var txt = document.createTextNode('"This is not the end. This is not even the beginning of the end, but it is perhaps the end of the beginning."');
			emphasis.appendChild(txt);
			quote.appendChild(emphasis);
			quote.appendChild(author);
			var txtBy = document.createTextNode("Winston Churchill");
			author.className = "quoteAuthor";
			author.appendChild(txtBy);
	} else if(currenturl == profilePage || currenturl == lauraProfilePage) {
			var para = document.createElement("p");
			var author = document.createElement("p");
			var emphasis = document.createElement("em");
			quote.appendChild(para);
			quote.appendChild(emphasis);
			var txt = document.createTextNode('"And the day came when the risk to remain tight in a bud was more painful than the risk it took to blossom."');
			emphasis.appendChild(txt);
			quote.appendChild(emphasis);
			quote.appendChild(author);
			var txtBy = document.createTextNode("Anais Nin");
			author.className = "quoteAuthor";
			author.appendChild(txtBy);
	} else if(currenturl == commentsPage) {
			var para = document.createElement("p");
			var author = document.createElement("p");
			var emphasis = document.createElement("em");
			quote.appendChild(para);
			quote.appendChild(emphasis);
			var txt = document.createTextNode('"Ability is what you\'re capable of doing. Motivation determines what you do. Attitude determines how well you do it."');
			emphasis.appendChild(txt);
			quote.appendChild(emphasis);
			quote.appendChild(author);
			var txtBy = document.createTextNode("Lou Holtz");
			author.className = "quoteAuthor";
			author.appendChild(txtBy);
	} else if(currenturl == redbusPage) {
			var para = document.createElement("p");
			var author = document.createElement("p");
			var emphasis = document.createElement("em");
			quote.appendChild(para);
			quote.appendChild(emphasis);
			var txt = document.createTextNode('"What you already know is merely a good departure point."');
			emphasis.appendChild(txt);
			quote.appendChild(emphasis);
			quote.appendChild(author);
			var txtBy = document.createTextNode("Keorapetse Kgasitsile");
			author.className = "quoteAuthor";
			author.appendChild(txtBy);
	} else if(currenturl == fundingAthwinPage) {
			var para = document.createElement("p");
			var author = document.createElement("p");
			var emphasis = document.createElement("em");
			quote.appendChild(para);
			quote.appendChild(emphasis);
			var txt = document.createTextNode('"In a Christmas heart there is no room for the irresistible \'I\'. Let us not be afraid of tomorrow no matter how darkly it looms. We can lose both self and fear in thinking of others."');
			emphasis.appendChild(txt);
			quote.appendChild(emphasis);
			quote.appendChild(author);
			var txtBy = document.createTextNode("Winifred Wollaeger Bean");
			author.className = "quoteAuthor";
			author.appendChild(txtBy);
	} else if(currenturl == codPage) {
			var para = document.createElement("p");
			var author = document.createElement("p");
			var emphasis = document.createElement("em");
			quote.appendChild(para);
			quote.appendChild(emphasis);
			var txt = document.createTextNode('"A society where people do not feel that they benefit from sharing with each other has already begun to break down."');
			emphasis.appendChild(txt);
			quote.appendChild(emphasis);
			quote.appendChild(author);
			var txtBy = document.createTextNode('"More Daily Wisdom: 365 Buddhist Inspirations," Edited by Josh Bartok');
			author.className = "quoteAuthor";
			author.appendChild(txtBy);
	} 
}

addLoadEvent(changeQuotes);