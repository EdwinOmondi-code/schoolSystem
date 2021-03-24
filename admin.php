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
              <input type="text" name="studentName" id="studentName" class="form-control" placeholder="student Name" value="Enter your student Name " required="" >
                    
            </div>
              <div class="form-group">
              <input type="email" name="email" id="studentEmail" class="form-control" placeholder="Email" value="Enter email address" required="">

            </div>
              <div class="form-group">
              <input type="text" name="studentPhone" id="phone" class="form-control" placeholder="Enter Phone Number" value="Enter phone number" required="">

            </div>
              <div class="form-group">
              <select name="studentGender" class="form-control" required="">
                <option value="<?php echo $gender  ?>" > Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>

            </div>
              <div class="form-group">
              <input type="number" name="studentAge" id="studentAge" class="form-control" placeholder="Age" value="<?php echo $age  ?>" required="">
                    
 
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

 <form action="index.php" method="post">
                <input type="text" name="searchValue" id="searchValue" placeholder="Search Using First Name" class="form-control col-sm-4">
                <br>
                <input type="submit" name="search" id="search" class="btn btn-info" value="Search Student">
            </form>
            <br>
            <caption>Students</caption>
            <table class="table table-dark">
           
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Student Image</th>
                    <th colspan="2">Actions</th>

                </tr>
    
                <tr>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="index.php?edit=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="index.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                 </tr>
          
            </table>
             
         </div>




<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/script.js"></script>
</body>
</html>