<!doctype html>
<html>
   <head>
   	  <link rel="stylesheet"  href="dashboardcss.css">
      <title>EXAMINER PAGE</title>
      
      
    </head>
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
                    <a href="addsubject.html">Add Subject</a>
                    <a href="viewsubject.html">View Subject</a>
                    <a href="addsub.html">Add Subjective Question</a>
                   <a href="addobj.html">Add Objective Question</a>
                   <a href="viewobj.html">View Subjective Question</a>
                   <a href="viewsub.html">View Objective Question</a>
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
            <div style="text-align: right; color: white; font-weight: bold;margin-right: 5px; margin-top: 5px; line-height: 10px;font-family:verdana; padding-top: 5px; font-style: normal;">
              <?php
      if (isset($_POST['submit']))
        {
      $user=$_POST['uname'];
      echo ("Hello!  $user");
      }
?> </div>
         </div>
          <div class="header">
          <h1>DASHBOARD</h1> 
         </div>
         <div class="indash">
          <button>List of Students</button>
          <hr>
          <button>List of Courses</button>
          <hr>
          <button>List of Subjects</button>
          <hr>
          <button>List of Exams</button>
          <hr>
           <button>List of Examiners</button>
           <hr>
         </div>
   	  

   </body>
</html>