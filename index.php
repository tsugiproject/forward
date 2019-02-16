<?php
// https://github.com/tsugiproject/trophy
require_once "../config.php";
require_once "key.php";

use \Tsugi\Core\LTIX;
use \Firebase\JWT\JWT;
use \Tsugi\Util\LTI13;

// Handle all forms of launch
$LTI = LTIX::requireData();

$json = $_SESSION['lti'];
$jwt_claim = LTI13::base_jwt("iss","subj");
$jwt_claim["lti"] = $json;

$jwt = LTI13::encode_jwt($jwt_claim, $PRIVATE_KEY);


echo(LTI13::build_jwt_html("http://localhost:8000/launch/", $jwt, true));
