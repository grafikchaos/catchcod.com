<?php

// janky way of figuring out relative urls (local vs staging vs production)
function getBaseUrl() {
	$baseUrl = ($_SERVER['HTTP_HOST'] == 'development.grafikchaos.com') ? '/catchcod/' : '/';
	return $baseUrl;
}
