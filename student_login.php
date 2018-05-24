<?php
include '../mobile_detect/Mobile_Detect.php';
$detect = new Mobile_Detect();
// Check for any mobile device.
if($detect->isMobile())
{
    echo "Kindly visit our website www.testune.com through desktop pc for better test viewing experience.";  
}
else
{
   //echo "pc use";
}
?>
 <script type="text/javascript" src="../Home/fancybox/jquery.min.js"></script>
 <link rel="stylesheet" href="../website/assets3/css/main.css" />
<section class="wrapper style5">
                                                           <div class="inner">
                                                           <h4>Student Login</h4>
									<form method="post" action="">
									    <div class="row uniform">
                                                                                   <div class="12u 12u$(xsmall)">

<input type="text" id="institute_id" name="institute_id"  placeholder="Institute Id" required >
 
											</div>
                                                                                        <div class="12u 12u$(xsmall)">
												<input type="text" id="username" name="username" placeholder="Username"  required >
											</div>
                                                       
                                                                                         <div class="12u 12u$(xsmall)">
		                                                                                 <input type="password" id="password" name="password" placeholder="Password" required >
                                                                                         </div>
											 
											<div class="12u$">
												<ul class="actions">
													<li><input type="button" id="sub" name="sub"  value="Login" onClick="login()" class="special" /></li>
												</ul>
											</div>
										</div>	</form>
</section>

<script language="javascript">
function enable_button()
{
    $('#sub').removeAttr('disabled');
}


$("#password").keyup(function(event){
    if(event.keyCode == 13){
         login();
    }
});

function login()
    {
          var user=$.trim($('#username').val());
     	  var pass=$.trim($('#password').val());
          var institute_id=$.trim($('#institute_id').val());
          var login_check='student';
          if(institute_id == '' || user == '' || pass == '')
          {
               alert('Institute Id/Email Id/Password Required');
          } 
          else { 
	           $.ajax({
			  type: 'POST',
			  url: '../Home/login_check.php',
			  data: { username:user,password:pass,institute_id:institute_id,logintype:'student_institute'},
			  beforeSend: function() {
			  },
			  success: function(response){    
                                 if(response == 'student_institute')
				 {
				    parent.window.location="student/index.php";  
                                 }
                                 else
				 {
				     alert("Incorrect username & password.");
				 } 
			  }
			 });
         }
  }
</script>