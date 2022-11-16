<?php
function _log($text) {
openlog("phperrors", LOG_PID | LOG_PERROR);
syslog(LOG_ERR, $text);
closelog();
....
....
}
?>
