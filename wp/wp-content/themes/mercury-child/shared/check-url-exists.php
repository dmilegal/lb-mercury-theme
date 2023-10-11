<?php
function check_url_exists($url) {
    $headers = @get_headers($url);

    if($headers && strpos($headers[0], '200') !== false) {
        return true;
    }

    return false;
}