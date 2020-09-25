<?php
    if (isset($_GET['clientip'])) {
        $clientIp = $_GET['clientip'];
    }

    if (isset($_GET['sendid'])) {
        $sendId = $_GET['sendid'];
    }

    if (isset($_GET['sendpass'])) {
        $sendPass = $_GET['sendpass'];
    }

    $redirectUrl = null;
    if (isset($_GET['redirect_url'])) {
        $redirectUrl = $_GET['redirect_url'];
    }

    if (isset($_GET['redirect_back_url'])) {
        $redirectBackUrl = $_GET['redirect_back_url'];
    }

    if ($redirectUrl) {
        header("Location: $redirectUrl?member_id=$sendId&clientip=$clientIp&password=$sendPass");
    }

    echo "Don't allow access!";
