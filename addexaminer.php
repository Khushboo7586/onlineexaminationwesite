<!doctype html>
<html>
 
<head>
    <link rel="stylesheet" href="addstudentcss.css">
    <title>EXAMINER PAGE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        function test_str() {
            var res;
            var str = document.getElementById("psw").value;
            var x = document.getElementById("uname").value;
            var y = document.getElementById("email").value;
            var z = document.getElementById("design").value;
            var w = document.getElementById("username").value;
            var t = document.getElementById("pswc").value;
 
            if (x == "") {
                $("#span1").css('display', 'block');
                $("#uname").css('border', ' solid red');
            }
            if (y == "") {
                $("#span2").css('display', 'block');
                $("#email").css('border', ' solid red')
            }
            if (z == "") {
                $("#span5").css('display', 'block');
                $("#design").css('border', ' solid red')
            }
            if (w == "") {
                $("#span6").css('display', 'block');
                $("#username").css('border', ' solid red')
            }
            if (str == "") {
                $("#span7").css('display', 'block');
                $("#psw").css('border', ' solid red')
            }
            if (t == "") {
                $("#span8").css('display', 'block');
                $("#pswc").css('border', ' solid red')
            }
            if (t != str) {
                alert("password not matching");
 
            }
 
            if (str.match(/[a-z]/g) && str.match(
                /[A-Z]/g) && str.match(
                    /[0-9]/g) && str.match(
                        /[^a-zA-Z\d]/g) && str.length >= 8) {
                
            }
            else {
                alert(" Password should contain 8 characters ,1 digit,1 capital alphabet and 1 small alphabet")
                
            }
 
        }
 
 
        
 
 
 
 
 
 
 
 
    </script>
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
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
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
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</head>
 
<body>
 
    <div class="inner_header">
        <h1>VESIT ONLINE EXAMINATION</h1>
    </div>
    <div class="navbar">
        <a href="#home">HOME&nbsp</a>
        <div class="ACCOUNT">
            <button class="accountbtn"><i>USER&nbsp</i>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="ACCOUNT-content">
                <a href="addstudent.html">Add Student</a>
                <a href="viewstudent.html">View Student</a>
                <a href="addexaminer.html">Add Examiner</a>
                <a href="viewexaminer.html">View Examiner</a>
            </div>
        </div>
        <div class="QUESTIONS">
            <button class="questionsbtn"><i>SETTINGS&nbsp&nbsp</i>
                <i class="fa fa-caret-down"></i>
            </button>
 
            <div class="QUESTIONS-content">
                <button type="button">
 
                    <a href="addsubject.html">Add Subject</a>
                    <a href="viewsubject.html">View Subject</a>
                    <a href="addsub.html">Add Subjective Question</a>
                    <a href="addobj.html">Add Objective Question</a>
                    <a href="viewsub.html">View Subjective Question</a>
                    <a href="viewobj.html">View Objective Question</a>
                </button>
 
            </div>
        </div>
        <div class="EXAM">
            <button class="exambtn"><i>EXAMS&nbsp&nbsp</i>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="EXAM-content">
                <a href="EXAMS.html">schedule exam</a>
                <a href="#">scheduled exam</a>
            </div>
        </div>
        <a href="#home">REPORTS&nbsp&nbsp</a>
        <a href="#home">LOGOUT&nbsp&nbsp</a>
    </div>
    <div class="header">
        <h1>ADD EXAMINER</h1>
 
    </div>
    <form name="myform" method="post" name="Form" action="">
        <div class="container">
            <table width="1350px" height="300px" border="1">
                <tr class="d0">
                    <td>NAME</td>
                    <td><input type="text" placeholder="Enter Name" name="uname" id="uname"
                            style="width:400px; height:25px;" required>
                        <span id="span1">PLEASE ENTER NAME</span></td>
                </tr>
                <tr class="d1">
                    <td>EMAIL ID</td>
                    <td><input type="text" placeholder="Enter Email" name="email" id="email"
                            onkeyupstyle="createusername()" style="width:400px; height:25px;" required>
                        <span id="span2">PLEASE ENTER UR EMAIL</span></td>
                </tr>
                <tr class="d0">
                    <td>DEPARTMENT</td>
                    <td><label for="course"></label>
                        <select class="course" name="course" id="depart" style="width:300px; height:25px;">
 
                            <option value="select">select</option>
                            <option value="CMPN">CMPN</option>
                            <option value="EXTC">EXTC</option>
                            <option value="INFT">INFT</option>
                            <option value="ETRX">ETRX</option>
                            <option value="INSTRU">INSTRU</option>
                        </select>
                        <span id="span3">SELECT DEPARTMENT</span>
                    </td>
                </tr>
                <tr class="d1">
                    <td>USERTYPE</td>
                    <td><label for="course"></label>
                        <select class="course" name="course" style="width:300px; height:25px; ">
                            <option value="CMPN">select</option>
                            <option value="EXAMINER">EXAMINER</option>
                            <option value="ADMINISTRATOR">ADMINISTRATOR</option>
                        </select>
                        <span id="span4">SELECT USERTYPE</span>
                    </td>
                </tr>
                <tr class="d0">
 
                    <td>DESIGNATION</td>
                    <td><input type="text" placeholder="Enter Position" name="email" id="design"
                            style="width:400px; height:25px;" required>
                        <span id="span5">ENTER YOUR DESIGNATION</span></td>
 
 
                </tr>
                <tr class="d1">
                    <td>USERNAME</td>
                    <td><input type="text" placeholder="Enter UserName" name="username" id="username"
                            style="width:400px; height:25px;" required>
                        <span id="span6">THIS FIELD CAN'T BE EMPTY</span></td>
                </tr>
                <tr class="d0">
                    <td>PASSWORD</td>
                    <td><label for="psw"></label>
                        <input type="password" placeholder="Enter Password" name="psw" id="psw"
                            style="width:400px; height:25px;" required>
                        <span id="span7">THIS FIELD CAN'T BE EMPTY</span>
                    </td>
 
                </tr>
                <tr class="d1">
                    <td>CONFIRM PASSWORD</td>
                    <td><label for="pswc"></label>
                        <input type="password" placeholder="Re-Enter Password" name="pswc" id="pswc"
                            style="width:400px; height:25px;" required>
                        <span id="span8">THIS FIELD CAN'T BE EMPTY</span>
                    </td>
                </tr>
            </table>
            <center>
                <div class="button">
                    <button type="button" value="submit" onclick="test_str()">SUBMIT</button>
                </div>
            </center>
 
            </table>
        </div>
    </form>
</body>
 
</html>
