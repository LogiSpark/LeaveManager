<?php
require("../functions.php");
delete("employee",$_GET);

header("Location:../listEmployee.php");
exit;
