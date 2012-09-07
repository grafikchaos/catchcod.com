<?php
	/**
	 * comments.php
	 */
	include("headFootNavSBar.php");
	displayHead();
?>

<div id="mainContent">
	<div id="content">
		<h1>An excerpt from <em>A Boy From Nisswa</em></h1>

		<blockquote class='excerpt'>
			<h1 class="title">Sixth Grade Class Trip</h1>

			<p>
				Spring 1953 – my sixth grade class trip. The destinations of class trips vary greatly. Some are
				to mind-expanding places like Washington, D.C. while others are designed more like service projects
				designed to address some existing need.
			</p>

			<p>
				In my case, my class trip was a one-day adventure from small-town Nisswa to Minneapolis and St. Paul.
				It was like an extended field trip.
			</p>

			<p>
				The trip began early in the morning as we boarded the yellow school bus for a journey that would
				take us to the Armour meatpacking plant, lunch with the governor and on to the Zinsmaster baking
				plant in south Minneapolis. Perhaps the trip could be described as a hot dog on a bun with the
				governor.
			</p>

			<p>
				First stop: the Armour meatpacking plant in South St. Paul. I came to the realization that this
				stop must have been planned by a vegetarian among us. How else to explain an experience where live
				animals become meat products? Yes, we saw, heard and smelled the entire process.
			</p>

			<p>
				On to lunch with the governor, probably thought of as a &quot;big deal.&quot; However, in this case,
				the governor, C. Elmer Anderson, was our neighbor in Nisswa and we didn’t need to travel all the way
				to St. Paul to have lunch with him.
			</p>

			<p>
				Next and final stop: the Zinsmaster baking plant in south Minneapolis. Having adequately regained our
				senses and color following the experience at the Armour plant, we experienced wave upon wave of the
				sweet and mouth-watering smells of dough becoming a variety of delicate and delicious bakery products.
			</p>

			<p>
				Time to return home. A snack was served on the bus as we headed north &mdash; a bologna sandwich.
				However, please skip the bologna.
			</p>
		</blockquote>
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