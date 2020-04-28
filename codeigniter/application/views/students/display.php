<?php 
    // session_destroy('user');
    // header("Location:http://localhost/codeigniter/index.php/login/index");
    
    // unset(
    //     $_SESSION['user'],
    //     $_SESSION['login']
    // );
    // header("Location:http://localhost/codeigniter/index.php/login/index");

?>

<?php
    include_once "/var/www/html/codeigniter/application/views/partials/header.php";
    include_once "/var/www/html/codeigniter/application/views/partials/footer.php";
    include_once "/var/www/html/codeigniter/application/views/partials/navbar.php";
?>
    
    <div class="container mt-5 mb-5">
    <h2>Student List</h2>
    <a href="savedata"  class="btn btn-success">Create Students</a><br><br>
    <!-- <a href="#" name="logout_btn"  class="btn btn-success">Logout</a><br><br> -->
        
        <table class="table table-hover" id="myTable">
            <thead>
            <tr>
            <th>Sr No</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Password</th>
            <th>Mobile Number</th>
            <th>Image</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            
                <tr>
                <?php
                        $i=1;
                        foreach($data as $row)
                        {
                            echo "<tr>";
                                echo "<td>".$i."</td>";
                                echo "<td>".$row->first_name."</td>";
                                echo "<td>".$row->last_name."</td>";
                                echo "<td>".$row->email."</td>";
                                echo "<td>".$row->password."</td>";
                                echo "<td>".$row->mobile_number."</td>";
                                echo "<td>".$row->image."</td>";
                                echo "<td>".$row->gender."</td>";
                                echo "<td>".$row->dob."</td>";
                                echo "<td>".$row->address."</td>";
                                echo "<td><a href='updatedata?id=".$row->id."'>Edit</a></td>";
                                echo "<td><a href='deletedata?id=".$row->id."'>Delete</a></td>";
                            echo "</tr>";
                        $i++;
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
    
	
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>

    </body>
</html>
  