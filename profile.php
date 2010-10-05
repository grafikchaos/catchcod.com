<?php

//	profile.php

include("headFootNavSBar.php");

displayHead();

?>

	<div id="mainContent">
		<div id="content">
			<h2>About Jim Storm, Ph.D.</h2>
			<img class="floatleft" src="images/jim.jpg" alt="Jim Storm, Ph.D." width="150" height="218"  />
		
			<p>
			  <em>Forbes</em> magazine has described Jim as a &quot;charity scout&quot; based on his philanthropic work with 
			  wealthy families and individuals.
			</p>
			<p>
			  Clients describe Jim as a person of knowledge, wisdom, inspiration, integrity and humanness. It is this combination 
			  which gives rise to the uncommon depth and breadth of Jim's professional gifts.
			</p>
			<p>
			  Jim is both book smart and life smart, and has a great appreciation for the restorative power of humor. His rare blend of 
			  mental, spiritual and emotional intelligence affords Jim an acute perceptiveness that allows him to balance the rigors of 
			  hard work with energy of spirit.
			</p>
			
			<p>
			  Jim's listening skills and his ability to connect with individuals of broadly diverse backgrounds result in treasured 
			  relationships with a wide spectrum of individuals.
			</p>
			<h3>Professional Qualifications and Experience:</h3>
			<ul class="bodyBullets">
				<li>Outstanding reputation in the fields of philanthropic consultation, organizational development and organizational 
				  leadership</li>
				<li>Ph.D. with a focus on organizational development, having interacted with the icons of philanthropy, leadership and 
				  organizational development</li>
				<li>Integrates extensive hands-on experience with in-depth understanding of organizational and individual growth and 
				  development</li>
				<li>Exceptional ability to distill clarity from complexity</li>
				<li>Keen listening skills enable him to guide others in the identification of their goals and the establishment of action 
				  steps to reach those goals</li>
				<li>Experienced in working with diverse clients, including:<br />
					<ul class="bodyBullets">
						<li><em>Forbes</em> 400</li>
						<li>Corporate and nonprofit leaders</li>
						<li>Higher education leaders</li>
					</ul>
				</li>
			</ul>
			<br/>
			<p>View <a href="resume.php">Jim's Resum&eacute;</a></p>
			
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