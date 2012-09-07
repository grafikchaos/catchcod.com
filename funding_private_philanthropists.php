<?php
/**
 * funding_private_philanthropists.php
 */

include("headFootNavSBar.php");
displayHead();
?>

<div id="mainContent">
	<div id="content">
		<h1>Funding Information: Private Philanthropists</h1>
		<p>Private philanthropists are engaged in a proactive manner and are not accepting proposals.</p>
	</div>	<!-- END CONTENT -->
</div>	<!-- END MAIN CONTENT -->

<div id="sidebar">
	<?php
		// display Little Red Bus image and sidebar note
		displayBus_SB();

		// display Master of Creative Philanthropy Book and sidebar note
		displayBook_SB();
	?>
</div>	<!-- END SIDEBAR -->
<?php
	// display footer
	displayFooter();
?>