<?php

/**
 * headFootNavSBar_map.php
 *
 * functions for displaying the header, navigation, sidebar contents (Little Red Bus & Book) and footer
 * the div#mainContent will be located in each page to allow for customization
 */

include(dirname(__FILE__) . "/inc/baseUrl.php");

function displayHead() {

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>The Center for Organizational Development</title>
<link type="text/css" rel="stylesheet" href="<?php echo getBaseUrl(); ?>styles/CODstyles.css" media="screen, print" />
<link type="text/css" rel="stylesheet" href="<?php echo getBaseUrl(); ?>styles/dd-formmailer.css" media="screen" />
<script type="text/javascript" src="<?php echo getBaseUrl(); ?>javascript/jquery-min.js"></script>
<script type="text/javascript" src="<?php echo getBaseUrl(); ?>javascript/cod_core.js"></script>

<script type="text/javascript" src="<?php echo getBaseUrl(); ?>javascript/global.js"></script>
<script type="text/javascript" src="<?php echo getBaseUrl(); ?>javascript/googleMaps.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAA2E_XzudohetC1N8v2BcuMBT4E60cgbhrvbuDvOgHYDiU0zEdyhRh0twtq13hyJgCN81uxlk06cgZKg"></script>
</head>

<body>

<div id="wrapper">

	<div id="header">
		<a href="<?php echo getBaseUrl(); ?>index.php">
			<img class="Logo" src="<?php echo getBaseUrl(); ?>images/COD_logo.gif" alt="" width="265" height="65" />
		</a>
		<div id="quote">
	<!--	Quote Text and Author inserted via changeQuotes.js -->
		</div>

	</div>	<!-- END HEADER -->

	<div id="navigation">
		<div id="menu">
			<ul id="nav">
				<li><a href="<?php echo getBaseUrl(); ?>index.php">Home</a></li>
		       	<li><a href="<?php echo getBaseUrl(); ?>about_us.php">About Us</a>
					<ul>
						<li><a href="<?php echo getBaseUrl(); ?>center_organizational_development.php">Center for Organizational Development</a></li>
						<li><a href="<?php echo getBaseUrl(); ?>profile.php">Jim Storm</a></li>
					</ul>
				</li>
				<li><a href="<?php echo getBaseUrl(); ?>comments.php">Client/Colleague Comments</a></li>
				<li><a href="<?php echo getBaseUrl(); ?>redbus.php">Little Red Bus</a></li>
				<li><a href="<?php echo getBaseUrl(); ?>mocphilanthropy.php">Master of Creative Philanthropy</a></li>
				<li><a href="<?php echo getBaseUrl(); ?>funding.php">Funding Information</a>
	    			<ul>
		      			<li><a href="<?php echo getBaseUrl(); ?>funding_athwin.php">Athwin Foundation</a></li>
						<li><a href="<?php echo getBaseUrl(); ?>funding_vmb.php">VMB Fund</a></li>
		      			<li><a href="<?php echo getBaseUrl(); ?>funding_private_philanthropists.php">Private Philanthropists</a></li>
	    			</ul>
	    		</li>
	    		<!-- <li><a href="<?php echo getBaseUrl(); ?>contact.php">Contact Us</a></li> -->
			</ul>
		</div>
	</div>	<!-- END NAVIGATION -->
<?php
}
?>

<?php

function displayBus_SB() {
?>
		<div class="sidebarnotes">
			<img class="floatleft" src="<?php echo getBaseUrl(); ?>images/redBus.jpg" alt="C'mon Aboard the Little Red Bus" />
			<div class="sidebarNote">
				<p>Could you and your organization benefit from a better under-<br />standing of organizational governance? <a href="redbus.php">We have a ticket for you</a> on the <a href="redbus.php">Little Red Bus</a>.</p>
			</div>
		</div>
<?php
}
?>
<?php

function displayBook_SB() {
?>
		<div class="sidebarnotes">
			<img class="floatleft" src="<?php echo getBaseUrl(); ?>images/bookCover.jpg" alt="Master of Creative Philanthropy: The Story of Russel V. Ewald" />
			<div class="sidebarNote">
				<p>
				  <a href="<?php echo getBaseUrl(); ?>mocphilanthropy.php"><em>Master of Creative Philanthropy: The Story of Russell V. Ewald</em></a>
				  by Jim Storm and Michael Vitt.<br /><br />
				  A book recognized as a valuable resource for learning about excellence in philanthropy.
				  <a href="<?php echo getBaseUrl(); ?>mocphilanthropy.php" title="more information">Click here for more information</a> or <a href="<?php echo getBaseUrl(); ?>mocphilanthropy-read-book.php" title='read the book'>read the book here</a>.
				</p>
			</div>
		</div>

		<div class="sidebarnotes">
			<img class="floatleft" src="<?php echo getBaseUrl(); ?>images/bookCover_LNB.jpg" alt="Book cover of: Loring Nicollet-Bethlehem Community Centers, Inc. - A History" />
			<div class="sidebarNote">
				<p>
				  <a class='external' href="<?php echo getBaseUrl(); ?>images/LNBfinal-lowres.pdf"><em>Loring Nicollet-Bethlehem Community Centers, Inc. - A Lively History</em></a>
				  by Laura Ayers and Jim Storm.<br /><br />
				  A lively, very accessible history of LNB and the powerful good that individuals create when they hold themselves to high standards. <a class='external' href="<?php echo getBaseUrl(); ?>images/LNBfinal-lowres.pdf" title='Click here to see a copy of the book'>Click here</a> to see a copy of the book.
				</p>
			</div>
		</div>

		<div class="sidebarnotes">
		    <img class='floatleft' src='<?php echo getBaseUrl(); ?>images/bookUnderConstruction.jpg' alt='A Boy from Nisswa - A work in progress. Focus on the life and professional practice of COD owner Jim Storm. Watch this space for availability.'>
		    <div class="sidebarNote">
		        <p>
		            <em>A Boy From Nisswa</em>
		            <br /><br />
		            <a href="<?php echo getBaseUrl(); ?>a-boy-from-nisswa-short-sample.php">Short Samples</a>
		        </p>
		    </div>
		</div>

<?php
}
?>

<?php

function displayFooter() {
?>
	<div id="footerBorderTop">&nbsp;</div>

	<div id="footer">
		<div id="footerContent">
			<p>
				Center for Organizational Development&nbsp;&nbsp;|&nbsp;&nbsp;
				5200 Willson Road, #307&nbsp;&nbsp;|&nbsp;&nbsp;
				Edina, MN 55424&nbsp;&nbsp;|&nbsp;&nbsp;
				612-379-3817&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="mailto:jstormcod1@aol.com">jstormcod1@aol.com</a>
			</p>
			<br/>
			<ul>
				<li><a href="<?php echo getBaseUrl(); ?>index.php" title="Home">Home</a></li>
				<li><a href="<?php echo getBaseUrl(); ?>about_us.php" title="About Us">About Us</a></li>
				<li><a href="<?php echo getBaseUrl(); ?>comments.php" title="Client/Colleague Comments">Client/Colleague Comments</a></li>
				<li><a href="<?php echo getBaseUrl(); ?>redbus.php" title="Little Red Bus">Little Red Bus</a></li>
				<li><a href="<?php echo getBaseUrl(); ?>mocphilanthropy.php" title="Master of Creative Philanthropy">Master of Creative Philanthropy</a></li>
				<li><a href="<?php echo getBaseUrl(); ?>funding.php" title="Funding Information">Funding Information</a></li>
				<!-- <li><a href="<?php echo getBaseUrl(); ?>contact.php" title="Contact Us">Contact Us</a></li> -->
			</ul>
			<br/>
			<p style="color:#ccc;">site designed by <a href="http://www.grafikchaos.com">grafikchaos</a></p>
		</div>
	</div>	<!-- END FOOTER -->


</div><!-- END WRAPPER -->
</body>
</html>
<?php
}
?>
