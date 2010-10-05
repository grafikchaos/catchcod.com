<?php
    //	mocphilanthropy-read-book.php
    include("headFootNavSBar.php");
    displayHead();
?>

<div id="mainContent">
	<div id="content">
		<h1>Master of Creative Philanthropy</h1>
		<h3 class="subtitle">by Jim Storm and Michael Vitt</h3>
        
        <div><object style="width:600px;height:900px" ><param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;viewMode=presentation&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=100720041543-245802de8d5543ed85568b3319483c40&amp;docName=master-of-creative-philanthropy&amp;username=grafikchaos&amp;loadingInfoText=Master%20of%20Creative%20Philthanropy%3A%20The%20Story%20of%20Russell%20V.%20Ewald&amp;et=1280207705675&amp;er=75" /><param name="allowfullscreen" value="true"/><param name="menu" value="false"/><embed src="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf" type="application/x-shockwave-flash" allowfullscreen="true" menu="false" style="width:600px;height:900px" flashvars="mode=embed&amp;viewMode=presentation&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Flight%2Flayout.xml&amp;showFlipBtn=true&amp;documentId=100720041543-245802de8d5543ed85568b3319483c40&amp;docName=master-of-creative-philanthropy&amp;username=grafikchaos&amp;loadingInfoText=Master%20of%20Creative%20Philthanropy%3A%20The%20Story%20of%20Russell%20V.%20Ewald&amp;et=1280207705675&amp;er=75" /></object></div>
        
	</div>	<!-- END CONTENT -->
</div>	<!-- END MAIN CONTENT -->

<div id="sidebar">
<?php
    // display Little Red Bus image and sidebar note
	displayBus_SB();

    // display Master of Creative Philanthropy Book and sidebar note
	displayBook_SB();
?>
</div>	<!-- END SIDEBAR -->
<?php
    //	display footer
    displayFooter();
?>