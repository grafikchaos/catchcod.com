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
		<p>
			Private philanthropists residing in the Twin Cities and Brainerd Lakes areas of Minnesota
			and the San Antonio/Austin area of south Texas working with Jim operate in a proactive manner
			and do not respond to unsolicited requests for funding.
		</p>
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