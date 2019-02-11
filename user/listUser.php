<?php
require("../functions.php");//including functions.php will automatically start session also
//$id = $_SESSION['LoggedInUser'];
//$id = 1;
?>
<div id="page-content-wrapper">

    <div class="jumbotron well-lg">
        <h2 class = "text-success">Employee List</h2>
    </div>
    <div class="section-wrapper">

        <div class="container ">
            <div class="table-responsive">
                <table class="table table-stripped">
                    <thead>
                    <tr class="active">
                        <th style= "width: 3%">SN</th>
                        <th style= "width: 13%">Full Name</th>
                        <th style= "width: 15%">Contact No.</th>
                        <th style= "width: 15%">Email</th>
                        <th style= "width: 15%">Edit</th>
                        <th style= "width: 15%">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sn =1;// declare var to print serial no
                    //                    $id=$_GET['id'];// get id to use it to generate the required query
                    $query = "select id, name, contactNo, username from employee order by employee.id";
                    $result = execute($query);
                    if(total_rows($result)>0){ //total_rows() function in functions.php
                        while ($row = fetch_array($result))
                        { // fetch_array() function in function.php
                            ?>
                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['contactNo'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><a href="employeeEdit.php?id=<?php echo $row['id']?>">Edit</a></td>
                                <td><a href="deleteEmployee.php?id=<?php echo $row['id']?>">Delete</a></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div></div>

