
<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $firstError = null;
        $lastError = null;
        $ageError = null;
        $phoneError = null;
         
        // keep track post values
        $first = $_POST['first'];
        $last = $_POST['last'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
         
        // validate input
        $valid = true;
        if (empty($first)) {
            $firstError = 'Please enter First name';
            $valid = false;
        }
         
        if (empty($last)) {
            $lastError = 'Please enter Last name';
            $valid = false;
        } 
         
        if (empty($age)) {
            $mobileError = 'Please enter Age';
            $valid = false;
        }
        if (empty($phone)) {
            $mobileError = 'Please enter Phone';
            $valid = false;
        }
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO customer (first,last,age,phone) values(?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($first,$last,$age,$phone));
            Database::disconnect();
            header("Location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Create a Customer</h3>
                    </div>
             
                    <form class="form-horizontal" action="create.php" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">First name</label>
                        <div class="controls">
                            <input name="first" type="text"  placeholder="First name" value="<?php echo !empty($first)?$first:'';?>">
                            <?php if (!empty($firstError)): ?>
                                <span class="help-inline"><?php echo $firstError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($lastError)?'error':'';?>">
                        <label class="control-label">Last name</label>
                        <div class="controls">
                            <input name="last" type="text" placeholder="Last name" value="<?php echo !empty($last)?$last:'';?>">
                            <?php if (!empty($lastError)): ?>
                                <span class="help-inline"><?php echo $lastError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($ageError)?'error':'';?>">
                        <label class="control-label">Age</label>
                        <div class="controls">
                            <input name="age" type="text"  placeholder="Age" value="<?php echo !empty($age)?$age:'';?>">
                            <?php if (!empty($ageError)): ?>
                                <span class="help-inline"><?php echo $ageError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($phoneError)?'error':'';?>">
                        <label class="control-label">Phone</label>
                        <div class="controls">
                            <input name="phone" type="text" placeholder="Phone" value="<?php echo !empty($phone)?$phone:'';?>">
                            <?php if (!empty($phoneError)): ?>
                                <span class="help-inline"><?php echo $phoneError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Create</button>
                          <a class="btn" href="index.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>















