<?php

//	funding.php

include("headFootNavSBar.php");

displayHead();

?>

	<div id="mainContent">
		<div id="content">
			<h1>Funding Information</h1>
			<ul class="bodyBullets">
				<li><a href="<?php echo getBaseUrl(); ?>funding_athwin.php">Athwin Foundation</a></li>
				<li><a href="<?php echo getBaseUrl(); ?>funding_vmb.php">VMB Fund</a></li>
				<li><a href="<?php echo getBaseUrl(); ?>funding_private_philanthropists.php">Private Philanthropists</a></li>
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