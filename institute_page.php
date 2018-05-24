
<!DOCTYPE HTML>
<html>
	<head>
		<title>Testune Institute Login Panel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../assets3/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../website/assets3/css/main.css" />
               <link rel="stylesheet" href="dummy/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets3/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets3/css/ie9.css" /><![endif]-->
                 <script type="text/javascript" src="../Home/fancybox/jquery.min.js"></script>
                <script type="text/javascript" src="../Home/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
                <script type="text/javascript" src="../Home/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
                <link rel="stylesheet" type="text/css" href="../Home/fancybox/jquery.fancybox-1.3.4.css" />
                <script type="text/javascript">
		$(document).ready(function() {
				$("a.pop2").fancybox({
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});
		      	$("a.pop").fancybox({
			           'type': 'iframe',
				   'autoScale': true,
				   'autoDimensions': true,
					//'title'	  : 'By domain E',
				   'fitToView' : true,
			     	 //  'width'	: 'auto',
			      //'height'	: 'auto',
				//  'overlayShow'	: true,
				//'transitionIn'	: 'elastic',
				//'transitionOut'	: 'elastic',
                                 'onComplete': function() {
                                 // $("#fancybox-wrap").css({'left':'700px','right':'auto'});
                                 }
			});
                       $("a.view_comment").fancybox({
				    'type':'iframe',
			       'width' : 570,
                                'height':100,
                                'href':this.href,
                                'showCloseButton'   : true,
                                 'hideOnOverlayClick': false,
                                  'hideOnContentClick' :   false,
				});  
                        
                       $("a.teacher_login_form").fancybox({
			        'type':'iframe',
				'width' :750,
                                'height':530,
                                'href':this.href,
                                'showCloseButton'   : true,
                                'hideOnOverlayClick': false,
                                'hideOnContentClick' :   false,
				});   
                    }); 

$(function(){
$("#password").keyup(function(event){
    if(event.keyCode == 13){
        login();
    }
});
});
               </script>
	</head>
	<body>
             <!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
                                                   <div class="logoBox">
            <h1 class="logoBox-header"><a href="../index.php">TES<span>T</span>UNE</a></h1>
        </div>
					<!--	<h1><a href="../index.php">Testune</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="../index.php">Home</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav> -->
					</header>

				<!-- Main -->
			 		<article id="main">
				                <section class="wrapper style5">
							<div class="inner">
                                                         <section class="wrapper style5">
                                                            <div class="inner">
                                                           <h4>Institution Login</h4>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="username" id="username"   placeholder="Username" required />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="password" name="password" id="password"   placeholder="Password" required />
											</div>
											 
											<div class="12u">
                                                                                            <div class="6u">
												<ul class="actions">
													<li><input type="button" value="Login" class="special" onclick="login()" /></li>
												</ul>
                                                                                             </div>
                                                                                            <div class="6u">
                                                                                               <a href="renewpassword.php?id=institute" class="pop"><img src="../bankexams/img/forgot_password.png" height="35px" width="35px"/> Forgot Password?</a> 
                                                                                            </div>    
											</div>
										</div>
									</form>
								  </div>  
</section>
 </article>  


 
        
    <a href="creator_login.php" class="pop"><h4>For Creator Login</h4></a> 

 <a href="student_login.php" class="pop"><h4>For Student Login</h4></a> 
    


              
                                                            </div>
                   <!-- Scripts -->
			<script src="../website/assets3/js/jquery.scrollex.min.js"></script>
			<script src="../website/assets3/js/jquery.scrolly.min.js"></script>
			<script src="../website/assets3/js/skel.min.js"></script>
			<script src="../website/assets3/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets3/js/ie/respond.min.js"></script><![endif]-->
			<script src="../website/assets3/js/main.js"></script>
<script language='javascript'>
function login()
    {
          var user=$.trim($('#username').val());
  	  var pass=$.trim($('#password').val());
           if(user == '' || pass == '')
           { 
               alert('Please enter the username & password'); 
           }
           else
           {  
               // alert(user+pass);
                  $.ajax({
			  type: 'POST',
			  url: '../Home/login_check.php',
			  data: { username:user, password:pass, logintype:'institute' },
			  beforeSend: function() {
			  },
			  success: function(response){   
                                 if(response == 'institute')
				 {
				    parent.window.location="inst_dashboard.php";
				 }
				 else
				 {
				    alert("Incorrect username & password");
				 }  
			  }
			 }); 
}  }
</script>
</body>
</html>