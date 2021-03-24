<!DOCTYPE html>
<html>
<head>
  <title>School System</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
</head>
<body>

<br>


<div class="container">
              <h3>Student Details</h3>
    <hr style="margin-left: 26px; margin-right: 26px;">
          <form action="connection.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id; ?>">
            <div class="form-group">
              <input type="text" name="studentName" id="studentName" class="form-control" placeholder="student Name" required="" >
                    
            </div>
              <div class="form-group">
              <input type="email" name="email" id="studentEmail" class="form-control" placeholder="Email"  required="">

            </div>
              <div class="form-group">
              <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number"  required="">

            </div>
              <div class="form-group">
              <select name="studentGender" class="form-control" required="">
                <option value="<?php echo $gender  ?>" > Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>

            </div>
              <div class="form-group">
              <input type="number" name="studentAge" id="studentAge" class="form-control" placeholder="Age"  required="">
                    
 
            </div>

                        <div class="form-group">
                    <label for="profileImage" style="padding: 10px;">Upload Student Image</label>
                    <input type="file" name="studentImage" id="studentImage" value="Upload image" class="form-control">
                        </div>

                        <div>
                          <input type="submit" name="save" id = "save" class="btn btn-success" value="Upload">
                        </div>
    </form> 

</div>




<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/script.js"></script>
</body>
</html>