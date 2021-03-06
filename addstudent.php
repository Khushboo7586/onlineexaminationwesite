<!doctype html>
<html lang="en">
   <head>
    <meta charset="utf-8">
   	  <link rel="stylesheet"  href="addstudentcss.css">
      <title>EXAMINER PAGE</title>
      <script type="text/javascript">{
        function myFunction() {
  alert("Hello! I am an alert box!");
      };

</script>
    </head>
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
   <body>
      
   	  	 <div class="inner_header">
   	  	 	<h1>VESIT ONLINE EXAMINATION</h1> 
   	  	 </div>
   	  	 <div class="navbar">
            <a href="dashboard.html">HOME&nbsp</a>
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
                    <a href="addsubject">Add Subject</a>
                    <a href="viewsubject">View Subject</a>
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
          <h1>ADD STUDENT</h1> 

         </div>
         <form method="post" name="Form" onsubmit="return validateForm()" action="">
         <div class="container">
          
      <table width="1350px"  height="300px" border="1">
        <tr class="d0">
          <td>NAME</td>
          <td><input type="text" placeholder="Enter Name" name="uname" id="uname" style="width:400px; height:25px;"required ><br></td>
        </tr>
        <tr class="d1">
          <td>EMAIL ID</td>
          <td><input type="text" placeholder="Enter Email" name="email" id="email" style="width:400px; height:25px;" required><br></td>
        </tr>
        <tr class="d0">
          <td>DEPARTMENT</td>
          <td><label for="course"></label>
  <select class="course" name="course" style="width:300px; height:25px;">
    <option value="CMPN">CMPN</option>
    <option value="EXTC">EXTC</option>
    <option value="INFT">INFT</option>
    <option value="ETRX">ETRX</option>
    <option value="INSTRU">INSTRU</option>
  </select>
</td>
</tr>
<tr class="d1">

  <td>YEAR</td>
  <td><label for="course"></label>
  <select class="course" name="course" style="width:300px; height:25px;">
    <option value="CMPN">FE</option>
    <option value="EXTC">SE</option>
    <option value="INFT">TE</option>
    <option value="ETRX">BE</option>
    <option value="INSTRU">DIRECT-SE</option>
  </select>
</td>
</tr>
<tr class="d0">
          <td>USERNAME</td>
          <td><input type="text" placeholder="Enter UserName" name="uname" id="uname" style="width:400px; height:25px;"required ><br></td>
        </tr>
<tr>
<tr class="d1">
  <td>PASSWORD</td>
  <td><label for="psw"></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" style="width:400px; height:25px;"required><br>
  </td>
</tr>
<tr class="d0">
  <td>CONFIRM PASSWORD</td>
   <td><label for="psw"></label>
    <input type="password" placeholder="Re-Enter Password" name="psw" id="psw" style="width:400px; height:25px;" required><br>
  </td>
</tr>
</table>

<div class="button">
  <center>
<input type="button" value="submit" id="mybutton"  class="float-left submit-button">SUBMIT</input>
</center>
</div>
</form>
  </table>




  </body>
  </html>