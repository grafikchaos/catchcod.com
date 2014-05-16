<?php
/**
 * profile.php
 */

include("headFootNavSBar.php");
displayHead();
?>

<div id="mainContent">
    <div id="content">
        <h1>Center for Organizational Development</h1>
        <p>
            The Center For Organizational Development (COD) has had a record of outstanding success in the fields of philanthropic consulting, leadership mentoring and organizational change since 1995.
        </p>

        <p>
            Owner Dr. Jim Storm is recognized for his expertise, understanding and ability to form professional relationships with clients, which produce positive client-owned results.
        </p>
        <p>
            COD has been successful at the local, national and international level with very diverse clients.
        </p>
        <p>
            Work is undertaken only when the mission of the client is in concert with the values of COD and only when it is determined that a strong positive working relationship exists.
        </p>
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
