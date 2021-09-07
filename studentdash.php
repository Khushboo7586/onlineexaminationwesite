<html>
<head>
<title>HOME</title>
 <link rel="stylesheet"  href="addcss.css">
 <script>
 function highlightBG(element, color) {
    element.style.backgroundColor = color;
}
function noBG(element){
element.style.background = "";
}
 </script>
</head>
</html>
<body>
<div class="page" height="700px">
      <div class="inner_header">
      <h1>VESIT ONLINE EXAMINATION</h1>
      </div>

<div class="navbar">
            <a href="myhome.html">HOME&nbsp</a>
            <div class="ACCOUNT">
                <button class="accountbtn"><i>MY ACCOUNT&nbsp</i>
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="ACCOUNT-content">
                <a href="myprofile.html">PROFILE</a>
<a href="changepassword.html">CHANGE PASSWORD</a>
                </div>
          </div>
 <a href="timetable.html">TIMETABLE</a>
  <a href="hallticket.html">HALL TICKET</a>
  <a href="attendexam.html">ATTEND EXAM</a>
   <a href="report.html">REPORTS</a>
<a href="login.html">LOGOUT</a>
   </div>


<div class="container">
<table border="1">
<tr>
<td onMouseOver="highlightBG(this, 'black')" onmouseout="noBG(this)" width="200" height="200" ><a href="myprofile.html"> My Profile</a>
</td>
<td onMouseOver="highlightBG(this, 'black')" onmouseout="noBG(this)" width="200"><a href="changepassword.html">Change Password </a> </td>
<td onMouseOver="highlightBG(this, 'black')" onmouseout="noBG(this)" width="200"><a href="timetable.html"> Exam Time Table</a></td></tr>
<tr>
<td onMouseOver="highlightBG(this, 'black')" onmouseout="noBG(this)" ><a href="hallticket.html">Hall Ticket</a>
<td onMouseOver="highlightBG(this, 'black')" onmouseout="noBG(this)" width="200" height="200"><a href="attendexam.html">Attend Exam</a></td>
<td onMouseOver="highlightBG(this, 'black')" onmouseout="noBG(this)" height="200"><a href="report.html">Exam Result</a></td>
</tr>
</table>
</div>
</body>
</html>

