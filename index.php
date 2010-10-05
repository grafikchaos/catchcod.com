<?php

//	index.php

include("headFootNavSBar.php");

displayHead();

?>

	<div id="mainContent">
		<div id="content">
			<h1>Center for Organizational Development</h1><br/><br/>
			<h2>Professionals in:</h2>
				<p>
					<ul class="bodyBullets">
						<li>Philanthropic Consultation</li>
						<li>Organizational Development</li>
						<li>Leadership Mentoring</li>
					</ul>
				</p>
			<h2>Our values:</h2>
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
				<br/>
			<p><em>Providing the knowledge, experience, and expertise necessary to create solutions that work.</em></p>
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
