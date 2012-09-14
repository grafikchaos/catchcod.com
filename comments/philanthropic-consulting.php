<?php
	/**
	 * comments.php
	 */
	include("../headFootNavSBar.php");
	displayHead();
?>

<div id="mainContent">
	<div id="content">

		<h1>Philanthropic Consulting Testimonials</h1>

		<p>The following are excerpts from comments received by COD:</p>

		<p class="quoteComment">
			<em>
				&quot;Jim is a first-rate professional. His commitment to positive, high-trust, long-term relationships
				starts with his superb listening skills. He offers depth of character and a wealth of experience with
				institutions, individuals and situations. And he provides a good measure of creativity and interpersonal
				skills. It all works together for constructive, durable solutions.&quot;
			</em>
		</p>
		<p class="quoteAuthor">Jerry Fisher &mdash; Past President, University of Minnesota Foundation</p>

		<p class="quoteComment">
			<em>
				&quot;I have been privileged not only to observe, but also to benefit from, the professional organizational development practiced by Jim Storm. I am greatly impressed with the high respect shown him by his peers as well as his clients. Jim is a good listener, excellent analyst, and, perhaps above all, person who embodies the highest standards of integrity and ethical conduct in his work. I strongly recommend him to clients who are searching for professional counseling and direction in meeting their own mission and goals.&quot;
			</em>
		</p>
		<p class="quoteAuthor">
			Daryl Natz &mdash; Past Vice-President for Public Affairs, Continental Grain Company;<br/>
			Consultant to NonProfit Organizations
		</p>

		<p class='quoteComment'>
			<em>
				&quot;The Athwin Foundation has worked with Jim Storm for the last several years and we have found the
				experience to be excellent. Jim's knowledge of and credibility in the nonprofit community is very high,
				and that helps us to sort through grant applications in a very efficient and effective manner. All of our trustees have extensive backgrounds at the board and volunteer level in the nonprofit world, so we have a good basis for making that judgment. In addition, Jim’s background in Organization Development has helped the trustees to review our operation and our mission in a congenial and productive way. We are a better organization because of his work with us. We have enjoyed working with Jim and we would expect that others will, too.&quot;
			</em>
		</p>
		<p class='quoteAuthor'>Bruce W. Bean - Managing Trustee, The Athwin Foundation</p>

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