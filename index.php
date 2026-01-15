<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
header("X-Frame-Options: DENY");
header("Content-Security-Policy: frame-ancestors 'none';");
header("Permissions-Policy: camera=(), microphone=(), geolocation=()");
http_response_code(200);
?>
