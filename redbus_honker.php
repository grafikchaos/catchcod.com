<?php

if (!function_exists('getBaseUrl')) {
	include(dirname(__FILE__) . "/inc/baseUrl.php");
}

?>

<h1>Little Red Bus &mdash; Your Vehicle for Building a Stronger Governing Board</h1>
<img id="noisyBus" class="floatleft" src="<?php echo getBaseUrl(); ?>images/RedBus_150x159.jpg" alt="Little Red Bus icon" onclick="honk();"/>
<span id="busHorn"></span>