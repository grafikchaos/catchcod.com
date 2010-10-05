// Google Maps Javascript

function loadGoogleMap() {
	if(!document.getElementsByTagName) return false;
	if(!document.getElementById) return false;
	if (GBrowserIsCompatible()) {
    	var map = new GMap2(document.getElementById("map"));
		map.addControl(new GSmallMapControl());
		map.addControl(new GMapTypeControl());
        map.setCenter(new GLatLng(44.981900, -93.236000), 15); // (Lat, Long) and Zoom Level (from 0 - 16)
		GDownloadUrl("javascript/points.json", function(data, responseCode) {parseJson(data);});

//	Creates the markers from the maker array located in the "points.json" file
		function createMarker(input) {
			var marker = new GMarker(input.point);
			GEvent.addListener(marker, "click", function() {
				marker.openInfoWindowHtml(formatWindow(input));
				});
			return marker;
		}

//	Parses the JSON file passed to it from the GDownloadUrl argument from above
		function parseJson (doc) {
			var jsonData = eval("(" + doc + ")");
			for (var i = 0; i < jsonData.markers.length; i++) {
				var marker = createMarker(jsonData.markers[i]);
				map.addOverlay(marker);
				}
			}

//	Format Googles default information window using the CSS class "bubble"
		function formatWindow(input) {
			var html = "<div class=\"bubble\">";
			html +="<p>"+input.information+"</p>";
			html +="<br/><br/></div>";
			return html;
		}
	} 
}

addLoadEvent(loadGoogleMap);