<?php

//	redbus.php

include("headFootNavSBar.php");

displayHead();

?>
	<div id="mainContent">
		<div id="content">
			<?php include("redbus_stories.php"); ?>
			<?php include("red_bus_stories/redbus_checkup.html"); ?>
		</div>	<!-- END CONTENT -->
	</div>	<!-- END MAIN CONTENT -->
	<div id="sidebar">
		<h2>Little Red Bus Archive</h2>
		<ul id="stories">
			<li><a href="?story=charting">Charting the Course</a></li>
			<li><a href="?story=driving">Who's Driving the Bus?</a></li>
			<li><a href="?story=doubting">Intelligent Doubting</a></li>
			<li><a href="?story=resources">Insufficient Resources</a></li>
			<li><a href="?story=founder">The Founder</a></li>
			<li><a href="?story=chemistry">The Chemistry</a></li>
			<li><a href="?story=maintenance">Maintenance and Repair</a></li>
			<li><a href="?story=listening">Listening to New Voices</a></li>
			<li><a href="?story=checkup">The Check Up</a></li>
		</ul>
		<br/><br/>
		<div class="sidebarnotes">	
			<div class="sidebarNoteBig">
				<p>We have developed a series of vignettes that focuses on important lessons about governance. Each vignette uses a bus/driver/passenger metaphor to illustrate specific aspects of the subject. Watch for new stories. <em>It's fun. It's free. It's educational. Welcome aboard!</em></p>
			</div>
		</div>
		
<?php

//	display Little Red Bus image and sidebar note
//	displayBus_SB();

//	display Master of Creative Philanthropy Book and sidebar note
displayBook_SB();
?>
	</div>	<!-- END SIDEBAR -->
<?php

//	display footer
displayFooter();
?>