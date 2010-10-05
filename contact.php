<?php

//	contact.php

//	loads different header that includes necessary <script> tags for the Google Map
include("headFootNavSBar_map.php");

displayHead();

?>

	<div id="mainContent">
		<div id="content">
			<h1>Our Location</h1><br/><br/>
			
			<div id="mapNote">
				<div id="map">
					<noscript>
						<h2>We're sorry...</h2>
						<p>
						This map requires that Javascript be enabled. <a href="http://maps.google.com/maps?f=q&hl=en&q=1313+5th+St+SE,+Minneapolis,+MN+55414&sll=37.0625,-95.677068&sspn=47.569986,82.265625&layer=&ie=UTF8&z=16&om=1&iwloc=addr">Click here</a> to view a Google&reg; Map of this location.
						</p>
					</noscript>
				</div>
			</div>
		</div>	<!-- END CONTENT -->
	</div>	<!-- END MAIN CONTENT -->
	
	<div id="sidebar">
	<h1>E-mail Contact Form</h1><br/><br/>
<?php

//	display Little Red Bus image and sidebar note
//	displayBus_SB();

//	display Master of Creative Philanthropy Book and sidebar note
//	displayBook_SB();

include("dd-formmailer.php");

?>
	</div>	<!-- END SIDEBAR -->
<?php

//	display footer
displayFooter();
?>