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
    if (! isset($_POST['csrf'])) {
        echo 'No Permission.. missing csrf';
        exit;
    }

    if ($_SESSION['csrf'] !== $_POST['csrf']) {
        echo 'No Permission.. invalid csrf';
        exit;
    }
}

function showErr($err) {
    $str = "<ul class='alert alert-danger'>";
    foreach ($err as $msg) {
        $str .= "<li>$msg</li>";
    }
    $str .= "</ul>";
    return $str;
}