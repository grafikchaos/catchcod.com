<?php

//	profile.php

include("headFootNavSBar.php");

displayHead();

?>

	<div id="mainContent">
		<div id="content">
		  <h1>About Us</h1>
			<ul class="bodyBullets">
				<li><a href="center_organizational_development.php">Center for Organizational Development</a></li>
				<li><a href="profile.php">Jim Storm</a></li>
				<li><a href="laura_ayers_profile.php">Laura Ayers</a></li>
			</ul>
		</div>	<!-- END CONTENT -->
	</div>	<!-- END MAIN CONTENT -->

	<div id="sidebar">

<?php

//	display Little Red Bus image and sidebar note
displayBus_SB();

//	display Master of Creative Philanthropy Book and sidebar note
displayBook_SB();
?>
	</div>	<!-- END SIDEBAR -->
<?php

//	display footer
displayFooter();
?>