<?php
// collection of frequently use function

// generate a long hash token
function csrf() {
    $hash = password_hash(date('Y-m-d H:i:s'), PASSWORD_BCRYPT);
    $_SESSION['csrf'] = $hash;
    return $hash;
}

function verifyCsrf() {
    // check CSRF form
    if (isset($_SESSION['csrf'])) {
        echo 'No Permission';
        exit;
    }

    if ($_SESSION['csrf'] !== $_POST['csrf']) {
        echo 'No Permission';
        exit;
    }
}