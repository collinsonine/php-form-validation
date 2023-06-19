
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Webpage</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<?php
      // define vairables and to empty values

      $name = $email = $gender = $comment = $website = "";
      $nameErr = $emailErr = $genderErr = $websiteErr = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["name"])){
          $nameErr = "Name is required";
        }else{
          $name = test_input($_POST["name"]);
        }
        if(empty($_POST["email"])){
          $emailErr = "Email is required";
        }else{
          $email = test_input($_POST["email"]);
        }
        if(empty($_POST["website"])){
          $websiteErr = "Website is required";
        }else{
          $website = test_input($_POST["website"]);
        }
        if(empty($_POST["comment"])){
          $comment = "";
        }else{
          $comment = test_input($_POST["comment"]);
        }
        if(empty($_POST["gender"])){
          $genderErr = "Gender is required";
        }else{
          $gender = test_input($_POST["gender"]);
        }
      }

      function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
    <div class="container">
      <div class="row d-flex justify-content-center m-auto mt-5">
        <div class="col-10">
          <div class="card shadow border border-3  border-start-0  border-end-0  border-bottom-0  border-primary">
            <div class="card-header">
              <div class="text-center h3">Sample Form</div>
              <small>Feilds with <span class="text-danger">*</span> are compulsory</small>
              <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                  <div class="form-group mb-3">
                    <label for="name"> Name: <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" class="form-control <?php if ($nameErr) { echo "is-invalid"; } ?>">
                    <small class="text-danger"><?php echo $nameErr; ?></small>
                  </div>
                  <div class="form-group mb-3">
                    <label for="email"> Email: <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control <?php if ($emailErr) { echo "is-invalid"; } ?>">
                    <small class="text-danger"><?php echo $emailErr; ?></small>
                  </div>
                  <div class="form-group mb-3">
                    <label for="website">Website</label>
                    <input type="text" name="website" id="website" class="form-control <?php if ($websiteErr) { echo "is-invalid"; } ?>">
                    <small class="text-danger"><?php echo $websiteErr; ?></small>
                  </div>
                  <div class="form-group mb-3">
                    <label for="comment">Comment</label>
                    <textarea name="comment" class="form-control" id="comment" rows="3"></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Gender:</label>
                    <input type="radio" name="gender" value="Male" class="form-radio">
                    <label for="gender">Male</label>
                    <input type="radio" name="gender" value="Female" class="form-radio">
                    <label for="gender">Female <span class="text-danger">*</span></label>
                    <br>
                    <small class="text-danger"><?php echo $genderErr; ?></small>
                  </div>
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                  </div>
                </form>
              </div>
              <hr>
              <h5>Your Response</h5>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    

<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>