<?php
    include("headFootNavSBar.php");
    displayHead();
?>

<div id="mainContent">
    <div id="content">
        <h1>Executive Directory Leadership Key Points</h1>
        <ul class="bodyBullets">
            <li>Point 1</li>
            <li>Point 2</li>
        </ul>
    </div>  <!-- END CONTENT -->
</div>  <!-- END MAIN CONTENT -->

<div id="sidebar">
    <?php
        //  display Little Red Bus image and sidebar note
        displayBus_SB();
        //  display Master of Creative Philanthropy Book and sidebar note
        displayBook_SB();
    ?>
</div>  <!-- END SIDEBAR -->

<?php
    //  display footer
    displayFooter();
?>
