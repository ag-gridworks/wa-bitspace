<?php
require_once("header.php");

if ($user['role'] == 2) {
	echo "página de admin";
}

else {
	echo "você não pode visitar essa página";
}