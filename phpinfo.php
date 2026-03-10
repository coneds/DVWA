<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated') );

// Security fix: Replace phpinfo() with limited system information
// that doesn't expose sensitive configuration details
echo "<h1>System Information</h1>";
echo "<table border='1'>";
echo "<tr><td><strong>PHP Version</strong></td><td>" . PHP_VERSION . "</td></tr>";
echo "<tr><td><strong>Server Software</strong></td><td>" . (isset($_SERVER['SERVER_SOFTWARE']) ? htmlspecialchars($_SERVER['SERVER_SOFTWARE']) : 'N/A') . "</td></tr>";
echo "<tr><td><strong>Document Root</strong></td><td>" . (isset($_SERVER['DOCUMENT_ROOT']) ? htmlspecialchars($_SERVER['DOCUMENT_ROOT']) : 'N/A') . "</td></tr>";
echo "<tr><td><strong>PHP SAPI</strong></td><td>" . PHP_SAPI . "</td></tr>";
echo "</table>";

?>
