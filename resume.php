<?php
	/**
	 * resume.php (Jim's Resume)
	 */
	include("headFootNavSBar.php");
	displayHead();
?>

<div id="mainContent">
	<div id="content">
		<p>
		  Jim Storm, Ph.D.<br/>
		  1313 Fifth Street S.E.<br/>
		  Minneapolis, MN 55414<br/>
		  612-379-3817<br/>
		  <a href="mailto:jstormcod1@aol.com" title="email Jim">jstormcod1@aol.com</a>
		</p>

		<h2 class='section-header'>MISSION</h2>
		<p>Enable individuals and organizations to identify and reach their desired goals.</p>

		<h2 class='section-header'>PROFESSIONAL QUALIFICATIONS</h2>
		<p>
			<ul class="bodyBullets">
				<li>Accomplished professional recognized locally, nationally and internationally.</li>
				<li>Proven success assisting individuals and organizations find clarity within complexity and guiding
them through their growth and development</li>
				<li>Highly respected professional working within an ethical framework based upon open
communication, mutual trust and respect for self-determination</li>
				<li>Demonstrated ability in working effectively with individuals and organizations of diverse
backgrounds</li>
				<li>Visionary based upon life-long learning and continual scanning of multiple and diverse environments</li>
				<li>Excellent communication skills</li>
				<li>Balanced and realistic perspective on life</li>
			</ul>
		</p>

		<h2 class='section-header'>PROFESSIONAL EXPERIENCE</h2>
		<h5>Center for Organizational Development</h5>
		<ul class="bodyBullets">
			<li>Organizational Consultant: work with organizations locally, nationally and internationally on
organizational intervention and change.</li>
			<li>Consultant: Advise philanthropists on the development and implementation of gifting strategies
that meet their charitable goals.</li>
			<li>Executive Coach: Assist individuals in self-identification of their professional goals and
implementation of strategies necessary to reach these goals.</li>
			<li>Educator: Keynote speaker, instructor and published author on topics related to organizational
growth and development, with speaking engagements throughout the United States.</li>
			<li>Grants Consultant: United States Department of Education and AmeriCorps.</li>
			<li>Governing Board Consultant: Work with organizations to strengthen their governing boards via an
integrated focus on "what" boards do and "how" they work most effectively as a team.</li>
		</ul>

		<h2 class='section-header'>PROFESSIONAL EXPERIENCE - PAST</h2>
		<h3>Executive Director, Loring Nicollet-Bethlehem Community Centers, Inc., Minneapolis, MN</h3>
		<ul class="bodyBullets">
			<li>Led a highly-respected community-based nonprofit organization with a budget of $1.8
million, known throughout the community for program and administrative excellence.</li>
		</ul>

  		<h5>Assistant Professor, University of Texas Graduate School of Social Work</h3>
		<ul class="bodyBullets">
			<li>Designed and implemented action-oriented learning experiences focused on organizational development and change.
			  Initiated a comprehensive mental health program within a metropolitan county hospital setting.</li>
		</ul>

		<h5>Captain, United States Army, Department of Neuropsychiatry, Ft. Sam Houston, TX</h3>
		<ul class="bodyBullets">
			<li>Educator and practitioner for crisis management and mental health issues during the Vietnam conflict.</li>
		</ul>
		<h5>Coordinator, VISTA Training Center, Pillsbury Citizens Services, Minneapolis, MN.</h5>

		<h2 class='section-header'>EDUCATION</h2>

		<h5>University of Minnesota, Minneapolis, MN</h5>
		<ul class="bodyBullets">
			<li>Ph.D. Degree, Focus on organizational change and development</li>
			<li>Master's Degree, Focus on group psychotherapy</li>
			<li>Bachelor's Degree, Liberal Arts</li>
		</ul>

  		<h5>Yeshiva University - Einstein College of Medicine</h5>
		<ul class="bodyBullets">
			<li>Robert Hargrove, <em>Masterful Coaching</em></li>
			<li>Dr. Mona Lisa Schulz, <em>Personality, Intuition and Illness</em></li>
			<li>Dr. William Bridges, <em>Organizational and Individual Transitions</em></li>
			<li>Dr. Edgar Schein, <em>Process Consultation and Organizational Culture</em></li>
			<li>Dr. Will Schutz, <em>Organizational Climate</em></li>
			<li>Dr. Edith Whitfield Seashore, <em>Transformative Organizational Change</em></li>
			<li>Dr. Terrance Deal, <em>Organizational Behavior and Cultures</em></li>
			<li>Dr. Warren Bennis, <em>Leadership</em></li>
			<li>Multiple seminars and workshops at Harvard University, Tulane University, <br/>Case Western Reserve University, Smith College and other institutions</li>
		</ul>

  		<h2 class='section-header'>SELECTED AWARDS</h2>
		<ul class="bodyBullets">
			<li>Bush Foundation Leadership Fellow</li>
			<li>United States Delegate to Salzburg Seminar, Salzburg, Austria</li>
			<li>Heart of Rotary Award for Community Service</li>
			<li>Military Honors</li>
			<li>Governor's Proclamation</li>
			<li>Leadership Minneapolis Award</li>
		</ul>

		<h2 class='section-header'>COMMUNITY PARTICIPATION</h2>
		<p>Many governing boards and leadership positions</p>

		<h2 class='section-header'>PUBLICATIONS</h2>
		<ul class="bodyBullets">
			<li>
				<em>Loring Nicollet-Bethlehem Community Centers 1954-2008: A Lively History</em>
				(Created by Laura Ayers &amp; Jim Storm on behalf of the Project for Pride in Living as a celebration of its merger with LNB)<br />
				<a class='external' href='images/LNBfinal-lowres.pdf' title='Loring Nicollet-Bethlehem Community Centers: A Lively History 2008'>Click here to see a copy of the book</a>
		  	</li>
			<li>
				<em>Master of Creative Philanthropy - The Story of Russell V. Ewald, Biography-2000</em><br/>
			  	(Mr. Ewald was the founding executive of The McKnight Foundation, one of the United States' leading foundations.)
			</li>
			<li><em>Minneapolis Federation of Alternative Schools: Program and Organizational Development, 1993</em></li>
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