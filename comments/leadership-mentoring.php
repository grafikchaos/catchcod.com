<?php
	/**
	 * comments.php
	 */
	include("../headFootNavSBar.php");
	displayHead();
?>

<div id="mainContent">
	<div id="content">
		<h1>Leadership Mentoring Testimonials</h1>

		<p>The following are excerpts from comments received by COD:</p>

		<p class='quoteComment'>
			<em>
				&quot;When I was asked [in 2009] to take over as interim executive director for a 55-year-old organization that is widely respected as Minnesota's most powerful voice for parks and trails, the first thing I did was run as fast as I could to Jim Storm's office. I knew I would need coaching to live up to the responsibilities and my board of directors' trust. The decision to seek out Jim was one of the best I have ever made. Jim has provided me with the calm and wise counsel that only a seasoned nonprofit professional could provide. Today&hellip; I still check in with Jim to get honest assessments of the path I'm following and the progress I'm making.&quot;
			</em>
		</p>
		<p class='quoteAuthor'>Brett Feldman &mdash; Executive Director, Parks &amp; Trails Council of Minnesota</p>

		<p class='quoteComment'>
			<em>
				&quot;As manifest on the COD banner, Jim Storm's acute listening skills and keen insights bring a rare blend of knowledge, experience and vision to play. Amid three career transitions and multiple nonprofit management conundrums, I could always count upon him to light the way. I completely trust Jim Storm.&quot;
			</em>
		</p>
		<p class='quoteAuthor'>Mary E. Braun &mdash; Executive Director, Shenandoah Valley Discovery Museum</p>

		<p class="quoteComment">
			<em>
				&quot;Jim's expertise, knowledge about resources, and supportive, thoughtful manner were invaluable. He
				created a coaching environment that felt open and supportive while also being challenging, goal-oriented and pragmatic. I received useful, practical insight and information and felt rejuvenated and re-energized to face daily and strategic challenges. I would highly recommend Dr. Storm to anyone considering working with a coach or organizational development consultant.&quot;
			</em>
		</p>
		<p class="quoteAuthor">Tom Steinmetz &mdash; Program Director, Washburn Center for Children</p>



	</div>	<!-- END CONTENT -->
</div>	<!-- END MAIN CONTENT -->

<div id="sidebar">
	<h2>Client/Colleague Testimonials</h2>
	<ul class='side-nav'>
		<li>
			<a href="<?php echo getBaseUrl(); ?>comments/philanthropic-consulting.php">Philanthropic Consulting</a>
		</li>
		<li>
			<a href="<?php echo getBaseUrl(); ?>comments/organizational-development.php">Organizational Development</a>
		</li>
		<li>
			<a href="<?php echo getBaseUrl(); ?>comments/leadership-mentoring.php">Leadership Mentoring</a>
		</li>
	</ul>

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