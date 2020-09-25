<?php
    if (isset($_POST['clientip'])) {
        $clientIp = $_POST['clientip'];
    }

    if (isset($_POST['sendid'])) {
        $sendId = $_POST['sendid'];
    }

    if (isset($_POST['money'])) {
        $money = $_POST['money'];
    }

    if (isset($_POST['usrtel'])) {
        $telNo = $_POST['usrtel'];
    }

    if (isset($_POST['usrmail'])) {
        $email = $_POST['usrmail'];
    }

    if (isset($_POST['rebill_param_id'])) {
        $rebillParamId = $_POST['rebill_param_id'];
    }

    $redirectUrl = null;
    if (isset($_POST['redirect_url'])) {
        $redirectUrl = $_POST['redirect_url'];
    }

    if (isset($_POST['redirect_back_url'])) {
        $redirectBackUrl = $_POST['redirect_back_url'];
    }

    if ($redirectUrl) {
        header("Location: $redirectUrl?money=$money&clientip=$clientIp&sendid=$sendId&telno=$telNo&email=$email&user_name=&rel=yes&cont=&rebill_param_id=$rebillParamId");
    }

    echo "Don't allow access!";