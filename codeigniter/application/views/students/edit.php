<?php
    include_once "/var/www/html/codeigniter/application/views/partials/header.php";
    include_once "/var/www/html/codeigniter/application/views/partials/footer.php";
    include_once "/var/www/html/codeigniter/application/views/partials/navbar.php";
?>
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center">Edit Form</h2>
                <?php
                    $i=1;
                    foreach($data as $row)
                    {
                ?>
              

                <form method="post" id="registration_form" action="<?php echo site_url('User/update_image')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="uname">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" value="<?php echo $row->first_name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="uname">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" value="<?php echo $row->last_name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="uname">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo $row->email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="uname">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" value="<?php echo $row->password; ?>">
                    </div>
                    <div class="form-group">
                        <label for="uname">Mobile Number</label>
                        <input type="number" class="form-control" placeholder="Enter Mobile Number" name="mobile_number" value="<?php echo $row->mobile_number; ?>">
                    </div>
                    <div class="form-group">
                        <label for="uname">Image</label>
                        <input type="file" class="form-control" placeholder="Select Image" name="image" ><img style="width:50%;height:70px;" src="<?php echo base_url().'image/'.$row->image; ?>">
                    </div>
                    <div class="form-group">
                        <label for="uname">Gender</label>
                        <input type="radio" name="gender" value="male" <?php if($row->gender == 'male') echo "checked='checked'" ?>>Male
                        <input type="radio" name="gender" value="female" <?php if($row->gender == 'female') echo "checked='checked'" ?>>Female
                        <input type="radio" name="gender" value="other" <?php if($row->gender == 'other') echo "checked='checked'" ?>>Other
                    
                    </div>
                    <div class="form-group">
                        <label for="uname">DOB</label>
                        <input type="date" class="form-control" placeholder="Enter DOB" name="dob" value="<?php echo $row->dob; ?>">
                    </div>
                    <div class="form-group">
                        <label for="uname">Address</label>
                        <input type="text" class="form-control" placeholder="Enter Address" name="address" value="<?php echo $row->address; ?>">
                    </div>
                    
                    <input type="submit" name="update" value="save data" class="col-md-8 offset-md-2 btn btn-success" style="width:100%;">
                </form>
                <?php } ?>
            </div>
        </div>
        
  