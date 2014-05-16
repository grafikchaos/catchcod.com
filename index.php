<?php

//	index.php

include("headFootNavSBar.php");

displayHead();

?>

	<div id="mainContent">
		<div id="content">
			<h1>Center for Organizational Development</h1>

			<div class='hero-unit'>
				<h2 class='section-header'>Professionals in:</h2>
				<p>
					<a href="<?php echo getBaseUrl(); ?>comments.php">Click to Testimonials</a>
					<ul class="bodyBullets">
						<li>Philanthropic Consultation</li>
						<li>Organizational Development</li>
						<li>Leadership Mentoring</li>
						<!-- <li>Individual and Organization Transitions</li> -->
					</ul>
				</p>

				<h2 class='section-header'>Our values:</h2>
				<p>
					<ul id="values" class="bodyBullets">
						<li>We place paramount importance on the <strong>professionalism</strong> of our practice.</li>
						<li>We respect our clients' <strong>integrity</strong> and <strong>self-determination</strong>.</li>
						<li>We <strong>embrace diversity</strong> and demonstrate our <strong>commitment</strong> to this value.</li>
						<li>We maintain a <strong>balanced and realistic perspective</strong> on life.</li>
						<li><strong>Humor</strong> is important.</li>
						<li>We believe that much is learned by <strong>listening.</strong></li>
					</ul>
				</p>
			</div>
			<p><em>Providing the expertise necessary to create client-owned solutions that work.</em></p>
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
