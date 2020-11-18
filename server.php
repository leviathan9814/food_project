<?php
$_POST = json_decode(file_get_content("php://input"), true);
echo var_dump($_POST);