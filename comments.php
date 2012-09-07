<?php
	/**
	 * comments.php
	 */
	include("headFootNavSBar.php");
	displayHead();
?>

<div id="mainContent">
	<div id="content">
		<h1>Client/Colleague Comments</h1>

		<ul class='bodyBullets'>
			<li><a href="/comments/philanthropic-consulting.php">Philanthropic Consulting</a></li>
			<li><a href="/comments/organizational-development.php">Organizational Development</a></li>
			<li><a href="/comments/leadership-mentoring.php">Leadership Mentoring</a></li>
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