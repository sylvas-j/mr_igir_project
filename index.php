
<?php 

  //this insert data in my data base
$dsn1='localhost';
$user= 'root';
$password='';  
$dbname  = 'mr_igiri_project';

$conn = new mysqli($dsn1, $user, $password, $dbname);



  // $conn = new mysqli("localhost", "root", "comment");
  if($conn->connect_error){
    echo 'Connection Failed----'.$conn->connect_error;
  }else{
    // echo "posting this is also working";
  };


 ?>

<?php
// define variables and set to empty values

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $address = test_input($_POST["address"]);
  $com = test_input($_POST["com"]);
  $matno = test_input($_POST["matno"]);
  // $gender = test_input($_POST["gender"]);

  if($fname == "" && $lname == "" && $matno == ""){
    // echo "hmmmmmmmmm";
    // echo $fname;
  // $fname = test_input($_POST["fname"]);

   $req = "INSERT INTO users (fname,lname, address,comment,mat_no) VALUES('$fname','$lname','$address','$comment','$matno')";
    $result = $conn->query($req);

    if($result == true){
      echo "You Have Successfully Submitted Your Data to the ------";
      // echo $msg;
    }else{
      echo "ERROR: " . $req . "<br>"  . $conn->error;
    };
  // $msg .= "And Your Account has been Updated"."\r\n";
  }else{
    echo "Please Fill The Form Below To Be Identify In Dr Igiri Class";
  }
}else{
  echo "Please Fill the form below";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<!DOCTYPE HTML>  
<html>
<head>
     <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/page-loading-animation.css">
   <link rel="stylesheet" href="css/styles-light.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link href="css/video-js.min.css" rel="stylesheet">
   <link href="css/videos-html.css" rel="stylesheet">
   <link rel="stylesheet" href="css/videojs-seek-buttons.css">
   <link rel="stylesheet" href="css/videojs-errors.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<p><a href="index-2.php">View Your Info</a></p>


<h2>GROUP 8 FORM</h2>
<p><span class="error">* required field</span></p>
<form action="index.php" method="post">
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="">
  </div>
    <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required="">
  </div>
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="com">Comment</label>
    <textarea type="text" class="form-control" id="com" name="com"
    placeholder="Place your comment about the project"></textarea>
  </div>

    <div class="form-group">
    <label for="matno">Mat No.</label>
    <input type="text" class="form-control" id="matno" name="matno" placeholder="Mat No." required="">
  </div>

  <div class="form-group">
    <label for="matno">Submit Button.</label>
    <input type="submit" class="btn btn-success" >
  </div>

</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>