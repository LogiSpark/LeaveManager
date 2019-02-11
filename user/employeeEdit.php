<?php
require("../functions.php");
$result=listWhere("employee",$_GET);
while ($row=fetch_array($result)) {
?>
<div id="page-content-wrapper">

    <div class="jumbotron well-lg">
        <h2 class = "text-success">Edit Employee</h2>
    </div>
    <div class="section-wrapper">
        <form class = "form-horizontal" role = "form" method="POST" action="editEmployee.php?id=<?php echo $_GET['id']?>">

            <div class="fluid-container">
                <div class = "form-group">
                    <label for = "name" class = "control-label col-sm-2">Name: </label>
                    <div class = "col-sm-5">
                        <input type = "text" class = "form-control" name="name" id="name" value="<?php echo $row['name']?>">
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "contNo" class = "control-label col-sm-2">Contact No: </label>
                    <div class = "col-sm-5">
                        <input type = "text" class = "form-control" name = "contactNo" id="contactNo" value="<?php echo $row['contactNo']?>">
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "username" class = "control-label col-sm-2">Email: </label>
                    <div class = "col-sm-5">
                        <input type = "text" class = "form-control" name="username" id="username" value="<?php echo $row['username']?>">
                    </div>
                </div>

                <div class = "form-group ">
                    <label for = "isAdmin" class = "control-label col-sm-2" >Role: </label>
                    <div class = "col-sm-5">
                        <select class="form-control" name= "isAdmin" value="<?php echo $row['isAdmin']?>">
                            <option value="1">Admin</option>
                            <option value="0">Employee</option>
                        </select>
                    </div>
                </div>

                <div class = "form-group">
                    <div class = "col-sm-10 col-sm-offset-2">
                        <input class="btn btn-primary" role="button" value="SUBMIT" type="submit"></a>

                    </div>
                </div>
            </div>


        </form>

<?php } ?>

    </div>
</div>


