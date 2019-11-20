<?php

require_once "../utils/sessionExecutor.php";
require_once "../utils/dirPaths.php";

if (SessionExecutor::isUserAuthorized()) {
    echo file_get_contents(AVATARS_PATH . SessionExecutor::getUserData()['avatar']);
}
