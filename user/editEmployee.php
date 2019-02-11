<?php
require("../functions.php");
update($_POST,$_GET,"employee");
//print_r($_POST);
//print_r($_GET);
header("Location:listUser.php");
