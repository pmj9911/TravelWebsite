<!DOCTYPE HTML>  
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").focus(function(){
    $(this).css("background-color", "#cccccc");
  });
  $("input").blur(function(){
    $(this).css("background-color", "#ffffff");
  });
});
</script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/slideshowImages.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
   <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
   <link rel="stylesheet" type="text/css" href="../css/homePageImages.css">
   <link rel="stylesheet" type="text/css" href="../css/sidebarCSS.css">

   <h1  align="center" > FAQ'S </h1>
   <script type="text/javascript" src="faqForm.js"></script>
   
</head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;Hi!!!</span>
    <script>
        function openNav() {
         document.getElementById("myNav").style.width = "25%";
        }
      
        function closeNav(temp) {
          document.getElementById("myNav").style.width = "0%";
           console.log(temp);
        }
       </script>
      
      
      <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav('hello')">&times;</a>
        <div class="overlay-content">
          <a href="Home.html">Home</a>
          <a href="FAQ.html">FAQ's</a>
          <a href="Contact Us.html">Contact Us</a>
        </div>
        <div class="overlay-content">
            <div style="border: 2px solid rgba(0,0,0, 0.0)">
              <select>
            <option value="CITIES" onclick="">CITIES</option>
             <option value="mumbai" onclick="window.location.href='mumbai.html';">MUMBAI</option>
             <option value="delhi" onclick="window.location.href='delhi.html';">DELHI</option>
             <option value="kolkata" onclick="window.location.href='kolkata.html';">KOLKATA</option>
             <option value="chennai" onclick="window.location.href='chennai.html';">CHENNAI</option>
           </select>
           </div> 
        </div>
      </div>
<br>
Hope the following frequently asked questions will help you solve your queries. If not, you can write to us on the form page given below or contact us using the details provided in the Contact Us tab.
<div>
<ol>

<li> What places does the website cover?<br>
Ans- This website covers the four metropolitian cities of India namely- Mumbai, Chennai, Kolkata and Delhi.
</li>
<br><br>

<li> Why do we need to visit this website?<br>
Ans- This website provides the details of tourists spots in the metro cities of India. Also, it has a list of the upcoming events in the cities like concerts, fests, etc.</li>
<br><br>

<li> Who will the person of contact for events, if you want to take part in any?<br>
Ans- The list of upcoming events includes all the details like whom to contact, where to go, how to register etc.

</li>
<br> <br>

<?php

  // define variables and set to empty values
  $nameErr = $emailErr = $genderErr = $websiteErr = "";
  $name = $email = $gender = $comment = $website = "";
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }
      
    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
      // check if URL address syntax is valid
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
      }    
    }

    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
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

  $servername = "localhost";
  $database = "test";
  $username = "root@localhost";
  $password = "";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO students (name, email , website , comment , gender) VALUES ('$name' , '$email' , '$website', '$comment' , '$gender' )";
  if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  echo "<br> Connected successfully";
  mysqli_close($conn);
?>

</body>
</html>