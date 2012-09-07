<?php
if(isset($_GET["story"])) {
	switch ($_GET["story"]) {
		case "charting":
			include("red_bus_stories/redbus_charting-course.html");
		    break;
		case "driving":
			include("red_bus_stories/redbus_driving-bus.html");
		    break;
		case "doubting":
			include("red_bus_stories/redbus_intelligent-doubting.html");
		    break;
		case "resources":
			include("red_bus_stories/redbus_insufficient_resources.html");
		    break;
		case "founder":
			include("red_bus_stories/redbus_the_founder.html");
		    break;
		case "chemistry":
			include("red_bus_stories/redbus_chemistry.html");
		    break;
		case "maintenance":
			include("red_bus_stories/redbus_maintenance.html");
		    break;
		case "listening":
		    include('red_bus_stories/redbus_listening_to_new_voices.html');
		    break;
		case "checkup":
		    include('red_bus_stories/redbus_checkup.html');
		    break;
		case "new-leader":
		    include('red_bus_stories/redbus_search_for_new_leader.html');
		    break;
		case "committees":
			include('red_bus_stories/redbus_committees.html');
			break;
	}
}
?>