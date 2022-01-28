<?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($conn,"update faculty set Name='$n',designation='$desg',programme='$prg',semester='$sem',mobile='$mob' where email='".$_SESSION['faculty_login']."'");	

$err="<font color='green'>Faculty Details updated</font>";
	}
$con=mysqli_query($conn,"select * from faculty where email='".$_SESSION['faculty_login']."'");
$res=mysqli_fetch_assoc($con);	
?>

<div class="col-lg-8">
    <h1 class="page-header">Update Profile</h1>
	<form method="post">
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$res['Name'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Designation:</label>
                <select name="desg" class="form-control" required>
                    <option <?php if($res['designation']== 'Instructor'){ echo 'selected'; }?>>Instructor</option>
                    <option <?php if($res['designation']== 'Assistant Professor'){ echo 'selected'; }?>>Assistant Professor</option>
                    <option <?php if($res['designation']== 'Associate Professor'){ echo 'selected'; }?>>Associate Professor</option>
                    <option <?php if($res['designation']== 'Professor'){ echo 'selected'; }?>>Professor</option>
                </select>
        </div>
   	</div>
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$res['email'];?>"  name="email" readonly="true" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Programme:</label>
                <select name="prg" class="form-control" required>
                    <option <?php if($res['programme']== 'BS Information Technology'){ echo 'selected'; }?>>BS Information Technology</option>
                    <option <?php if($res['programme']== 'BS Information Systems'){ echo 'selected'; }?>>BS Information Systems</option>
                    <option <?php if($res['programme']== 'BS Computer Science'){ echo 'selected'; }?>>BS Computer Science</option>
                    <option <?php if($res['programme']== 'BS Entertainment and Multimedia Computing'){ echo 'selected'; }?>>BS Entertainment and Multimedia Computing</option>
                    <option <?php if($res['programme']== 'Bachelor of Library and Information Science'){ echo 'selected'; }?>>Bachelor of Library and Information Science</option>
                </select>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Semester</label>
                <select name="sem" class="form-control" required>
                    <option <?php if($res['semester']== 'First Sem'){ echo 'selected'; }?>>First Sem</option>
                    <option <?php if($res['semester']== 'Second Sem'){ echo 'selected'; }?>>Second Sem</option>
                </select>
        </div>
    </div>
                  
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mobile Number:</label>
            	<input type="number" id="mob" value="<?php echo @$res['mobile'];?>" class="form-control" maxlength="10" name="mob"  required>
        </div>
  	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  Profile">
        </div>
  	</div>
	</form>
</div>