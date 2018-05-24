
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teacher Dashboard</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.form.js"></script>
<script src="js/jquery-2.1.0.js"></script>
<script src="js/common-script.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ajaxupload.3.5.js"></script>
<link href="../main.css" rel="stylesheet">
<<<<<<< HEAD
<link href="../fancybox/rupee.css" rel="stylesheet">
=======
<!-- <link href="../fancybox/rupee.css" rel="stylesheet"> -->
>>>>>>> b976e5f0ec5a9671d0cf24f9d24d555b8788c1b1
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
<style type="text/css">
.circular {
	width:40px;
	height:40px;
	border-radius:20px;
        border:#999999 2px solid !important;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	}
div#container {
         width: 200px;
         margin: 100px auto 0 auto;
         padding: 20px;
         background: #000;
         border: 1px solid #1a1a1a;
         }
      /* HOVER STYLES */
        div#pop-up {
        display: none;
        position: absolute;
        width: 200px;
        padding: 10px;
        background: #eeeeee;
        color: #000000;
         border: 1px solid #BBBBBB;
		border-radius: 15px;
         -moz-border-radius: 15px;
        -webkit-border-radius: 15px; 
        font-size: 90%;
      }
</style>
    <script type="text/javascript" src="../../Home/fancybox/jquery.min.js"></script>
	<script type="text/javascript" src="../../Home/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../../Home/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script language="javascript" type="text/javascript" src="../../Home/fancybox/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
	<link rel="stylesheet" type="text/css" href="../../Home/fancybox/jquery.fancybox-1.3.4.css" />
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
				   'fitToView' : true,
			   }); 
             $("a.submit_verdict").fancybox({
				'type':'iframe',
				 'width' : 550,
                                'height':520,
                                'href':this.href,
                                'showCloseButton'   : true,
                                'hideOnOverlayClick': false,
                                'hideOnContentClick' :   false,
				});  
                            $("a.view_notification_message").fancybox({
				   'type':'iframe',
				   'width' : 700,
                                'height':600,
                                'href':this.href,
                                'showCloseButton'   : true,
                                'hideOnOverlayClick': false,
                                'hideOnContentClick' :   false,
				});   
                            $("a.message_display").fancybox({
				'type':'iframe',
				'width' : '300',
                                'height':'300',
                                'href':this.href,
                                'showCloseButton'   : true,
                                'hideOnOverlayClick': false,
                                'hideOnContentClick' :   false,
				});      
                            $("a.teacher_login_form2").fancybox({
	                        'type':'iframe',
				 'width' : 700,
                                'height':535,
                                'href':this.href,
                                'showCloseButton'   : true,
                                'hideOnOverlayClick': false,
                                'hideOnContentClick' :   false,
				 });   
                               $("a.teacher_login_form").fancybox({
	                        'type':'iframe',
				  'width' : 700,
                                'height':380,
                                'href':this.href,
                                'showCloseButton'   : true,
                                'hideOnOverlayClick': false,
                                'hideOnContentClick' :   false,
				 }); 
                                $("a.view_notification_message1").fancybox({
				   'type':'iframe',
				  'width' : 550,
                                'height':600,
                                'href':this.href,
                                'showCloseButton'   : true,
                                'hideOnOverlayClick': false,
                                'hideOnContentClick' :   false,
				});  
                                $("a.view_check").fancybox({
				   'type':'iframe',
				  'width' : 1000,
                                'height':700,
                                'href':this.href,
                                'showCloseButton'   : true,
                                'hideOnOverlayClick': false,
                                'hideOnContentClick' :   false,
				});    
                                $("a.view_check2").fancybox({
				'type':'iframe',
				'width' : 1000,
                                'height':500,
                                'href':this.href,
                                'showCloseButton'   : true,
                                'hideOnOverlayClick': false,
                                'hideOnContentClick' :   false,
			  });         
                                  
                       });
                           $(document).ready(function(){
				         $('#login-trigger').click(function(){
					 $(this).next('#login-content').slideToggle();
					 $(this).toggleClass('active');          
					 if($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
					  else $(this).find('span').html('&#x25BC;')
					})
				});
          </script>
<script type="text/javascript">
//window.history.forward(1);
//function noBack(){
//window.history.forward();
$('#user_image').hide();
$('#user_image').load(function(){
     $('#user_image').show();
});
</script>
</head>
<body class="dark_theme" onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">


<div class="navigationBar">
        <div class="logoBox">
            <h1 class="logoBox-header">TES
                <span>T</span>UNE</h1>
        </div>
        <div class="menu-wrapper">
            <!--  <h1>Menu</h1> -->
            <i class="fas fa-bars" onClick="openNav()"></i>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
             
                <a href="edit_profile.php">
<<<<<<< HEAD
                    <i class="fas fa-angle-right"></i>Personal Profile</a>
                <a href="assign_test_batch.php">
                    <i class="fas fa-angle-right"></i>Assign Test</a>
                <a href="change_password.php">
                    <i class="fas fa-angle-right"></i>Change Password</a>
                <a href="?q=logout">
                    <i class="fas fa-angle-right"></i>Logout</a>
=======
                    <i class="fas fa-angle-right"></i >Personal Profile</a>
                <a href="assign_test_batch.php">
                    <i class="fas fa-angle-right"></i> Assign Test</a>
                <a href="change_password.php">
                    <i class="fas fa-angle-right"></i> Change Password</a>
                <a href="?q=logout">
                    <i class="fas fa-angle-right"></i> Logout</a>
>>>>>>> b976e5f0ec5a9671d0cf24f9d24d555b8788c1b1
           
        </div>
    </div>

<<<<<<< HEAD



=======
>>>>>>> b976e5f0ec5a9671d0cf24f9d24d555b8788c1b1
<div class="student-dashboard">
        <div class="dashboard-content">
            <h1>Creator Dashboard</h1> <br />
                <a href="edit_profile.php" class="academic_header_link">Welcome Amit</a>
	 </div>
    </div>
	
<<<<<<< HEAD

=======
>>>>>>> b976e5f0ec5a9671d0cf24f9d24d555b8788c1b1
<script language='javascript'>
  var parent_page_url= window.location.pathname;
   function selected_exam()
   {
      var exam=$('#exam').val();
      window.location=parent_page_url+'?exam_name='+exam;
   }   
  function exam_id(p)
   {
      $('#exam_name').html(p);
      $.fancybox.close();
      window.location.reload();
   }
</script>
<script language='javascript'>
function moddetail(p)
{
      $(function() {
        var moveLeft = 20;
        var moveDown = 10;
       $('a.trigger').hover(function(e) {
           $('div#pop-up').html(p);
           $('div#pop-up').show();
           }, function() {
          $('div#pop-up').hide();
        });
        $('a.trigger').mousemove(function(e) {
          $("div#pop-up").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
        });
        });
}
</script> 
<script src="../../Home/fancybox/jquery-ui.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../Home/fancybox/jquery-ui.css" />
<script type="text/javascript">
$(function() {
$("#dob").datepicker({
 changeMonth: true,
changeYear: true,
yearRange: "1950:2000"
});
});
function change_country()
{
var country=$('#country').val();
var countrycodelist = new Array();
countrycodelist['ax'] = '358';
countrycodelist['af'] = '93';
countrycodelist['al'] = '355';
countrycodelist['dz'] = '213';
countrycodelist['as'] = '684';
countrycodelist['ad'] = '376';
countrycodelist['ao'] = '244';
countrycodelist['ai'] = '1';
countrycodelist['aq'] = '672';
countrycodelist['ag'] = '1';
countrycodelist['ar'] = '54';
countrycodelist['am'] = '374';
countrycodelist['aw'] = '297';
countrycodelist['au'] = '61';
countrycodelist['at'] = '43';
countrycodelist['az'] = '994';
countrycodelist['bs'] = '1';
countrycodelist['bh'] = '973';
countrycodelist['bd'] = '880';
countrycodelist['bb'] = '1';
countrycodelist['by'] = '375';
countrycodelist['be'] = '32';
countrycodelist['bz'] = '501';
countrycodelist['bj'] = '229';
countrycodelist['bm'] = '1';
countrycodelist['bt'] = '975';
countrycodelist['bo'] = '591';
countrycodelist['ba'] = '387';
countrycodelist['bw'] = '267';
countrycodelist['bv'] = '47';
countrycodelist['br'] = '55';
countrycodelist['io'] = '246';
countrycodelist['bn'] = '673';
countrycodelist['bg'] = '359';
countrycodelist['bf'] = '226';
countrycodelist['bi'] = '257';
countrycodelist['kh'] = '855';
countrycodelist['cm'] = '237';
countrycodelist['ca'] = '1';
countrycodelist['cv'] = '238';
countrycodelist['ky'] = '1';
countrycodelist['cf'] = '236';
countrycodelist['td'] = '235';
countrycodelist['cl'] = '56';
countrycodelist['cn'] = '86';
countrycodelist['cx'] = '';
countrycodelist['cc'] = '';
countrycodelist['co'] = '57';
countrycodelist['km'] = '269';
countrycodelist['cg'] = '242';
countrycodelist['cd'] = '243';
countrycodelist['ck'] = '682';
countrycodelist['cr'] = '506';
countrycodelist['ci'] = '225';
countrycodelist['hr'] = '385';
countrycodelist['cu'] = '53';
countrycodelist['cy'] = '357';
countrycodelist['cz'] = '420';
countrycodelist['dk'] = '45';
countrycodelist['dj'] = '253';
countrycodelist['dm'] = '1';
countrycodelist['do'] = '1';
countrycodelist['ec'] = '593';
countrycodelist['eg'] = '20';
countrycodelist['sv'] = '503';
countrycodelist['gq'] = '240';
countrycodelist['er'] = '291';
countrycodelist['ee'] = '201';
countrycodelist['et'] = '251';
countrycodelist['fk'] = '500';
countrycodelist['fo'] = '298';
countrycodelist['fj'] = '679';
countrycodelist['fi'] = '358';
countrycodelist['fr'] = '33';
countrycodelist['fx'] = '33';
countrycodelist['gf'] = '594';
countrycodelist['pf'] = '689';
countrycodelist['tf'] = '33';
countrycodelist['ga'] = '241';
countrycodelist['gm'] = '220';
countrycodelist['ge'] = '995';
countrycodelist['de'] = '49';
countrycodelist['gg'] = '44';
countrycodelist['gh'] = '233';
countrycodelist['gi'] = '350';
countrycodelist['gr'] = '30';
countrycodelist['gl'] = '299';
countrycodelist['gd'] = '1';
countrycodelist['gp'] = '590';
countrycodelist['gu'] = '1';
countrycodelist['gt'] = '502';
countrycodelist['gn'] = '224';
countrycodelist['gw'] = '245';
countrycodelist['gy'] = '592';
countrycodelist['ht'] = '509';
countrycodelist['hm'] = '1';
countrycodelist['hn'] = '504';
countrycodelist['hk'] = '852';
countrycodelist['hu'] = '36';
countrycodelist['is'] = '354';
countrycodelist['in'] = '91';
countrycodelist['id'] = '62';
countrycodelist['ir'] = '98';
countrycodelist['iq'] = '964';
countrycodelist['ie'] = '353';
countrycodelist['il'] = '972';
countrycodelist['it'] = '39';
countrycodelist['jm'] = '1';
countrycodelist['jp'] = '81';
countrycodelist['jo'] = '962';
countrycodelist['kz'] = '7';
countrycodelist['ke'] = '254';
countrycodelist['ki'] = '686';
countrycodelist['kr'] = '82';
countrycodelist['kp'] = '850';
countrycodelist['kw'] = '965';
countrycodelist['kg'] = '996';
countrycodelist['la'] = '856';
countrycodelist['lv'] = '371';
countrycodelist['lb'] = '961';
countrycodelist['ls'] = '266';
countrycodelist['lr'] = '231';
countrycodelist['ly'] = '218';
countrycodelist['li'] = '423';
countrycodelist['lt'] = '370';
countrycodelist['lu'] = '352';
countrycodelist['mo'] = '853';
countrycodelist['mk'] = '389';
countrycodelist['mg'] = '261';
countrycodelist['mw'] = '265';
countrycodelist['my'] = '60';
countrycodelist['mv'] = '960';
countrycodelist['ml'] = '223';
countrycodelist['mt'] = '356';
countrycodelist['mh'] = '692';
countrycodelist['mq'] = '596';
countrycodelist['mr'] = '222';
countrycodelist['mu'] = '230';
countrycodelist['yt'] = '269';
countrycodelist['mx'] = '52';
countrycodelist['fm'] = '691';
countrycodelist['md'] = '373';
countrycodelist['mc'] = '377';
countrycodelist['mn'] = '976';
countrycodelist['me'] = '382';
countrycodelist['ms'] = '1';
countrycodelist['ma'] = '212';
countrycodelist['mz'] = '258';
countrycodelist['mm'] = '95';
countrycodelist['na'] = '264';
countrycodelist['nr'] = '674';
countrycodelist['np'] = '977';
countrycodelist['nl'] = '31';
countrycodelist['an'] = '599';
countrycodelist['nc'] = '687';
countrycodelist['nz'] = '64';
countrycodelist['ni'] = '505';
countrycodelist['ne'] = '227';
countrycodelist['ng'] = '234';
countrycodelist['nu'] = '683';
countrycodelist['nf'] = '6723';
countrycodelist['mp'] = '1';
countrycodelist['no'] = '47';
countrycodelist['om'] = '968';
countrycodelist['pk'] = '92';
countrycodelist['pw'] = '680';
countrycodelist['ps'] = '970';
countrycodelist['pa'] = '507';
countrycodelist['pg'] = '675';
countrycodelist['py'] = '595';
countrycodelist['pe'] = '51';
countrycodelist['ph'] = '63';
countrycodelist['pn'] = '870';
countrycodelist['pl'] = '48';
countrycodelist['pt'] = '351';
countrycodelist['pr'] = '1';
countrycodelist['qa'] = '974';
countrycodelist['re'] = '262';
countrycodelist['ro'] = '40';
countrycodelist['ru'] = '7';
countrycodelist['rw'] = '250';
countrycodelist['sh'] = '290';
countrycodelist['kn'] = '1';
countrycodelist['lc'] = '1';
countrycodelist['pm'] = '508';
countrycodelist['vc'] = '1';
countrycodelist['ws'] = '685';
countrycodelist['sm'] = '378';
countrycodelist['st'] = '239';
countrycodelist['sa'] = '966';
countrycodelist['sn'] = '221';
countrycodelist['rs'] = '381';
countrycodelist['sc'] = '248';
countrycodelist['sl'] = '232';
countrycodelist['sg'] = '65';
countrycodelist['sk'] = '421';
countrycodelist['si'] = '386';
countrycodelist['sb'] = '677';
countrycodelist['so'] = '252';
countrycodelist['za'] = '27';
countrycodelist['gs'] = '44';
countrycodelist['es'] = '34';
countrycodelist['lk'] = '94';
countrycodelist['sd'] = '249';
countrycodelist['sr'] = '597';
countrycodelist['sj'] = '79';
countrycodelist['sz'] = '268';
countrycodelist['se'] = '46';
countrycodelist['ch'] = '41';
countrycodelist['sy'] = '963';
countrycodelist['tw'] = '886';
countrycodelist['tj'] = '992';
countrycodelist['tz'] = '255';
countrycodelist['th'] = '66';
countrycodelist['tl'] = '670';
countrycodelist['tg'] = '228';
countrycodelist['tk'] = '690';
countrycodelist['to'] = '676';
countrycodelist['tt'] = '1';
countrycodelist['tn'] = '216';
countrycodelist['tr'] = '90';
countrycodelist['tm'] = '993';
countrycodelist['tc'] = '1';
countrycodelist['tv'] = '688';
countrycodelist['ug'] = '256';
countrycodelist['ua'] = '380';
countrycodelist['ae'] = '971';
countrycodelist['gb'] = '44';
countrycodelist['us'] = '1';
countrycodelist['um'] = '1';
countrycodelist['uy'] = '598';
countrycodelist['uz'] = '998';
countrycodelist['vu'] = '678';
countrycodelist['va'] = '39';
countrycodelist['ve'] = '58';
countrycodelist['vn'] = '84';
countrycodelist['vg'] = '1284';
countrycodelist['vi'] = '1340';
countrycodelist['wf'] = '681';
countrycodelist['eh'] = '212';
countrycodelist['ye'] = '967';
countrycodelist['zm'] = '260';
countrycodelist['zw'] = '263';
if(country != "")
{
    var country_code=countrycodelist[country];
    $("#phone").val(country_code);
    $("#phone2").val(country_code);
}
else
{
return false;
}
}
</script>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\-->
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel" style="min-height:698px;">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="login_page margin-top-10">
  <div class="registration top_margin0">
  		<div class="panel">
<<<<<<< HEAD
		<div class="panel-heading">Profile<span class="semi-bold"> Edit</span> </div>
=======
		<div class="panel-heading">Edit Your Profile<span class="semi-bold"></span> </div>
>>>>>>> b976e5f0ec5a9671d0cf24f9d24d555b8788c1b1
		</div>
	 <div class="block-web">
	<div class="porlets-content">
			<form action="" method="post" id="form_sub1" name="form_sub1" enctype="multipart/form-data" onSubmit="return check_form();">
            <section class="panel default blue_title h2">
				<h6 class="content-header border_bottom">Personal Details</h6>
				<div class="row">
					<div class="col-md-6">
					 <div class="form-group">
                  <input type="text" name="first_name" id="first_name" required parsley-trigger="change" required="" placeholder="First Name *" class="form-control parsley-validated" value="Amit";>
                </div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
                   <input type="text" name="last_name" id="last_name" required parsley-trigger="change" required="" placeholder="Last Name *" class="form-control parsley-validated" value="";>
                </div>
					</div>
				 </div>
				<div class="row">
					<div class="col-md-6">
					  <div class="form-group">
                   <input type="text"  name="dob" id="dob"  required parsley-trigger="change"  placeholder="DOB *" class="form-control parsley-validated" autocomplete="off" value="0000-00-00";>
                </div>
					</div>
					<div class="col-md-6">
					<div class="form-group fileUpload"> <img src="upload_test_creator/" width="35px" height="35px" />   <!-- <a href="image_crop/public/" class="view_notification_message">Change Photo</a> -->  
                                          <input id="uploadFile"  placeholder="Upload Your Photo" style="padding:7px" />
                                          <div class="fileUpload btn btn-primary" style="vertical-align:top">
                                                    <span id="upload_text" name="upload_text">Upload</span>
                                                    <input id="self_image" name="self_image" type="file" class="upload" />
                                          </div>
                                         <!-- <span>Upload</span>
                    <input type="file" name="self_image" id="self_image" parsley-trigger="change" required="" placeholder="Browse Image" class="form-control parsley-validated upload"> -->
                </div>
<!-- <input id="uploadFile" placeholder="Choose File" disabled="disabled" /> -->
					</div>
				</div>
				 <br  /><br  />
				<h6 class="content-header border_bottom">Contact Details</h6>
				<div class="row">
				<div class="col-md-6">
				<div class="form-group">
                               <div class="inner_form">
					<textarea placeholder="Full Address *" rows="4" required class="form-control" name="address" id="address">123 talwandi kota</textarea>
				</div>
                                </div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
                  <div class="row">
				  	<div class="col-md-12">
					<div class="form-group">
					 <select name="country" id="country" required placeholder="Country *" class="form-control parsley-validated" autocomplete="off" onchange="change_country()">
   <option></option>
  <option value='ad' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
  <option value='ae' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
  <option value='af' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
  <option value='ag' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ag" data-title="Antigua and Barbuda">Antigua and Barbuda</option>
  <option value='ai' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ai" data-title="Anguilla">Anguilla</option>
  <option value='al' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
  <option value='am' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag am" data-title="Armenia">Armenia</option>
  <option value='an' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
  <option value='ao' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ao" data-title="Angola">Angola</option>
  <option value='aq' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag aq" data-title="Antarctica">Antarctica</option>
  <option value='ar' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ar" data-title="Argentina">Argentina</option>

  <option value='as' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag as" data-title="American Samoa">American Samoa</option>
  <option value='at' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag at" data-title="Austria">Austria</option>
  <option value='au' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag au" data-title="Australia">Australia</option>
  <option value='aw' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag aw" data-title="Aruba">Aruba</option>
  <option value='ax' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ax" data-title="Aland Islands">Aland Islands</option>
  <option value='az' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag az" data-title="Azerbaijan">Azerbaijan</option>
  <option value='ba' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ba" data-title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
  <option value='bb' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bb" data-title="Barbados">Barbados</option>
  <option value='bd' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bd" data-title="Bangladesh">Bangladesh</option>
  <option value='be' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag be" data-title="Belgium">Belgium</option>
  <option value='bf' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bf" data-title="Burkina Faso">Burkina Faso</option>
  <option value='bg' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bg" data-title="Bulgaria">Bulgaria</option>
  <option value='bh' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bh" data-title="Bahrain">Bahrain</option>
  <option value='bi' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bi" data-title="Burundi">Burundi</option>
  <option value='bj' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bj" data-title="Benin">Benin</option>
  <option value='bm' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bm" data-title="Bermuda">Bermuda</option>
  <option value='bn' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bn" data-title="Brunei Darussalam">Brunei Darussalam</option>
  <option value='bo' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bo" data-title="Bolivia">Bolivia</option>
  <option value='br' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag br" data-title="Brazil">Brazil</option>
  <option value='bs' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bs" data-title="Bahamas">Bahamas</option>
  <option value='bt' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bt" data-title="Bhutan">Bhutan</option>
  <option value='bv' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bv" data-title="Bouvet Island">Bouvet Island</option>
  <option value='bw' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bw" data-title="Botswana">Botswana</option>
  <option value='by' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag by" data-title="Belarus">Belarus</option>
  <option value='bz' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bz" data-title="Belize">Belize</option>
  <option value='ca' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ca" data-title="Canada">Canada</option>
  <option value='cc' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cc" data-title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
  <option value='cd' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cd" data-title="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
  <option value='cf' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cf" data-title="Central African Republic">Central African Republic</option>
  <option value='cg' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cg" data-title="Congo">Congo</option>
  <option value='ch' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ch" data-title="Switzerland">Switzerland</option>
  <option value='ci' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ci" data-title="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
  <option value='ck' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ck" data-title="Cook Islands">Cook Islands</option>
  <option value='cl' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cl" data-title="Chile">Chile</option>
  <option value='cm' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cm" data-title="Cameroon">Cameroon</option>
  <option value='cn' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cn" data-title="China">China</option>
  <option value='co' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag co" data-title="Colombia">Colombia</option>
  <option value='cr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cr" data-title="Costa Rica">Costa Rica</option>
  <option value='cs' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cs" data-title="Serbia and Montenegro">Serbia and Montenegro</option>
  <option value='cu' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cu" data-title="Cuba">Cuba</option>
  <option value='cv' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cv" data-title="Cape Verde">Cape Verde</option>
  <option value='cx' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cx" data-title="Christmas Island">Christmas Island</option>
  <option value='cy' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cy" data-title="Cyprus">Cyprus</option>
  <option value='cz' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cz" data-title="Czech Republic">Czech Republic</option>
  <option value='de' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag de" data-title="Germany">Germany</option>
  <option value='dj' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag dj" data-title="Djibouti">Djibouti</option>
  <option value='dk' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag dk" data-title="Denmark">Denmark</option>
  <option value='dm' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag dm" data-title="Dominica">Dominica</option>
  <option value='do' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag do" data-title="Dominican Republic">Dominican Republic</option>
  <option value='dz' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag dz" data-title="Algeria">Algeria</option>
  <option value='ec' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ec" data-title="Ecuador">Ecuador</option>
  <option value='ee' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ee" data-title="Estonia">Estonia</option>
  <option value='eg' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag eg" data-title="Egypt">Egypt</option>
  <option value='eh' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag eh" data-title="Western Sahara">Western Sahara</option>
  <option value='er' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag er" data-title="Eritrea">Eritrea</option>
  <option value='es' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag es" data-title="Spain">Spain</option>
  <option value='et' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag et" data-title="Ethiopia">Ethiopia</option>
  <option value='fi' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fi" data-title="Finland">Finland</option>
  <option value='fj' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fj" data-title="Fiji">Fiji</option>
  <option value='fk' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fk" data-title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
  <option value='fm' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fm" data-title="Federated States of Micronesia">Federated States of Micronesia</option>
  <option value='fo' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fo" data-title="Faroe Islands">Faroe Islands</option>
  <option value='fr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fr" data-title="France">France</option>
  <option value='fx' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fx" data-title="France, Metropolitan">France, Metropolitan</option>
  <option value='ga' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ga" data-title="Gabon">Gabon</option>
  <option value='gb' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gb" data-title="Great Britain (UK)">Great Britain (UK)</option>
  <option value='gd' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gd" data-title="Grenada">Grenada</option>
  <option value='ge' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ge" data-title="Georgia">Georgia</option>
  <option value='gf' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gf" data-title="French Guiana">French Guiana</option>
  <option value='gh' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gh" data-title="Ghana">Ghana</option>
  <option value='gi' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gi" data-title="Gibraltar">Gibraltar</option>
  <option value='gl' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gl" data-title="Greenland">Greenland</option>
  <option value='gm' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gm" data-title="Gambia">Gambia</option>
  <option value='gn' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gn" data-title="Guinea">Guinea</option>
  <option value='gp' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gp" data-title="Guadeloupe">Guadeloupe</option>
  <option value='gq' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gq" data-title="Equatorial Guinea">Equatorial Guinea</option>
  <option value='gr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gr" data-title="Greece">Greece</option>
  <option value='gs' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gs" data-title="S. Georgia and S. Sandwich Islands">S. Georgia and S. Sandwich Islands</option>
  <option value='gt' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gt" data-title="Guatemala">Guatemala</option>
  <option value='gu' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gu" data-title="Guam">Guam</option>
  <option value='gw' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gw" data-title="Guinea-Bissau">Guinea-Bissau</option>
  <option value='gy' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gy" data-title="Guyana">Guyana</option>
  <option value='hk' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag hk" data-title="Hong Kong">Hong Kong</option>
  <option value='hm' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag hm" data-title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
  <option value='hn' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag hn" data-title="Honduras">Honduras</option>
  <option value='hr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag hr" data-title="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
  <option value='ht' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ht" data-title="Haiti">Haiti</option>
  <option value='hu' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag hu" data-title="Hungary">Hungary</option>
  <option value='id' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag id" data-title="Indonesia">Indonesia</option>
  <option value='ie' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ie" data-title="Ireland">Ireland</option>
  <option value='il' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag il" data-title="Israel">Israel</option>
  <option value='in' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag in" data-title="India" selected="selected">India</option>
  <option value='io' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag io" data-title="British Indian Ocean Territory">British Indian Ocean Territory</option>
  <option value='iq' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag iq" data-title="Iraq">Iraq</option>
  <option value='ir' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ir" data-title="Iran">Iran</option>
  <option value='is' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag is" data-title="Iceland">Iceland</option>
  <option value='it' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag it" data-title="Italy">Italy</option>
  <option value='jm' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag jm" data-title="Jamaica">Jamaica</option>
  <option value='jo' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag jo" data-title="Jordan">Jordan</option>
  <option value='jp' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag jp" data-title="Japan">Japan</option>
  <option value='ke' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ke" data-title="Kenya">Kenya</option>
  <option value='kg' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag kg" data-title="Kyrgyzstan">Kyrgyzstan</option>
  <option value='kh' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag kh" data-title="Cambodia">Cambodia</option>
  <option value='ki' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ki" data-title="Kiribati">Kiribati</option>
  <option value='km' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag km" data-title="Comoros">Comoros</option>
  <option value='kn' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag kn" data-title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
  <option value='kp' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag kp" data-title="Korea (North)">Korea (North)</option>
  <option value='kr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag kr" data-title="Korea (South)">Korea (South)</option>
  <option value='kw' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag kw" data-title="Kuwait">Kuwait</option>
  <option value='ky' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ky" data-title="Cayman Islands">Cayman Islands</option>
  <option value='kz' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag kz" data-title="Kazakhstan">Kazakhstan</option>
  <option value='la' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag la" data-title="Laos">Laos</option>
  <option value='lb' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lb" data-title="Lebanon">Lebanon</option>
  <option value='lc' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lc" data-title="Saint Lucia">Saint Lucia</option>
  <option value='li' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag li" data-title="Liechtenstein">Liechtenstein</option>
  <option value='lk' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lk" data-title="Sri Lanka">Sri Lanka</option>
  <option value='lr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lr" data-title="Liberia">Liberia</option>
  <option value='ls' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ls" data-title="Lesotho">Lesotho</option>
  <option value='lt' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lt" data-title="Lithuania">Lithuania</option>
  <option value='lu' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lu" data-title="Luxembourg">Luxembourg</option>
  <option value='lv' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lv" data-title="Latvia">Latvia</option>
  <option value='ly' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ly" data-title="Libya">Libya</option>
  <option value='ma' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ma" data-title="Morocco">Morocco</option>
  <option value='mc' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mc" data-title="Monaco">Monaco</option>
  <option value='md' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag md" data-title="Moldova">Moldova</option>
  <option value='mg' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mg" data-title="Madagascar">Madagascar</option>
  <option value='mh' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mh" data-title="Marshall Islands">Marshall Islands</option>
  <option value='mk' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mk" data-title="Macedonia">Macedonia</option>
  <option value='ml' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ml" data-title="Mali">Mali</option>
  <option value='mm' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mm" data-title="Myanmar">Myanmar</option>
  <option value='mn' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mn" data-title="Mongolia">Mongolia</option>
  <option value='mo' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mo" data-title="Macao">Macao</option>
  <option value='mp' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mp" data-title="Northern Mariana Islands">Northern Mariana Islands</option>
  <option value='mq' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mq" data-title="Martinique">Martinique</option>
  <option value='mr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mr" data-title="Mauritania">Mauritania</option>
  <option value='ms' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ms" data-title="Montserrat">Montserrat</option>
  <option value='mt' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mt" data-title="Malta">Malta</option>
  <option value='mu' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mu" data-title="Mauritius">Mauritius</option>
  <option value='mv' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mv" data-title="Maldives">Maldives</option>
  <option value='mw' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mw" data-title="Malawi">Malawi</option>
  <option value='mx' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mx" data-title="Mexico">Mexico</option>
  <option value='my' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag my" data-title="Malaysia">Malaysia</option>
  <option value='mz' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mz" data-title="Mozambique">Mozambique</option>
  <option value='na' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag na" data-title="Namibia">Namibia</option>
  <option value='nc' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag nc" data-title="New Caledonia">New Caledonia</option>
  <option value='ne' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ne" data-title="Niger">Niger</option>
  <option value='nf' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag nf" data-title="Norfolk Island">Norfolk Island</option>
  <option value='ng' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ng" data-title="Nigeria">Nigeria</option>
  <option value='ni' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ni" data-title="Nicaragua">Nicaragua</option>
  <option value='nl' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag nl" data-title="Netherlands">Netherlands</option>
  <option value='no' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag no" data-title="Norway">Norway</option>
  <option value='np' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag np" data-title="Nepal">Nepal</option>
  <option value='nr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag nr" data-title="Nauru">Nauru</option>
  <option value='nu' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag nu" data-title="Niue">Niue</option>
  <option value='nz' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag nz" data-title="New Zealand (Aotearoa)">New Zealand (Aotearoa)</option>
  <option value='om' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag om" data-title="Oman">Oman</option>
  <option value='pa' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pa" data-title="Panama">Panama</option>
  <option value='pe' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pe" data-title="Peru">Peru</option>
  <option value='pf' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pf" data-title="French Polynesia">French Polynesia</option>
  <option value='pg' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pg" data-title="Papua New Guinea">Papua New Guinea</option>
  <option value='ph' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ph" data-title="Philippines">Philippines</option>
  <option value='pk' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pk" data-title="Pakistan">Pakistan</option>
  <option value='pl' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pl" data-title="Poland">Poland</option>
  <option value='pm' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pm" data-title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
  <option value='pn' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pn" data-title="Pitcairn">Pitcairn</option>
  <option value='pr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pr" data-title="Puerto Rico">Puerto Rico</option>
  <option value='ps' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ps" data-title="Palestinian Territory">Palestinian Territory</option>
  <option value='pt' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pt" data-title="Portugal">Portugal</option>
  <option value='pw' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pw" data-title="Palau">Palau</option>
  <option value='py' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag py" data-title="Paraguay">Paraguay</option>
  <option value='qa' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag qa" data-title="Qatar">Qatar</option>
  <option value='re' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag re" data-title="Reunion">Reunion</option>
  <option value='ro' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ro" data-title="Romania">Romania</option>
  <option value='ru' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ru" data-title="Russian Federation">Russian Federation</option>
  <option value='rw' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag rw" data-title="Rwanda">Rwanda</option>
  <option value='sa' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sa" data-title="Saudi Arabia">Saudi Arabia</option>
  <option value='sb' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sb" data-title="Solomon Islands">Solomon Islands</option>
  <option value='sc' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sc" data-title="Seychelles">Seychelles</option>
  <option value='sd' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sd" data-title="Sudan">Sudan</option>
  <option value='se' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag se" data-title="Sweden">Sweden</option>
  <option value='sg' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sg" data-title="Singapore">Singapore</option>
  <option value='sh' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sh" data-title="Saint Helena">Saint Helena</option>
  <option value='si' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag si" data-title="Slovenia">Slovenia</option>
  <option value='sj' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sj" data-title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
  <option value='sk' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sk" data-title="Slovakia">Slovakia</option>
  <option value='sl' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sl" data-title="Sierra Leone">Sierra Leone</option>
  <option value='sm' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sm" data-title="San Marino">San Marino</option>
  <option value='sn' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sn" data-title="Senegal">Senegal</option>
  <option value='so' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag so" data-title="Somalia">Somalia</option>
  <option value='sr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sr" data-title="Suriname">Suriname</option>
  <option value='st' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag st" data-title="Sao Tome and Principe">Sao Tome and Principe</option>
  <option value='su' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag su" data-title="USSR (former)">USSR (former)</option>
  <option value='sv' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sv" data-title="El Salvador">El Salvador</option>
  <option value='sy' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sy" data-title="Syria">Syria</option>
  <option value='sz' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sz" data-title="Swaziland">Swaziland</option>
  <option value='tc' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tc" data-title="Turks and Caicos Islands">Turks and Caicos Islands</option>
  <option value='td' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag td" data-title="Chad">Chad</option>
  <option value='tf' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tf" data-title="French Southern Territories">French Southern Territories</option>
  <option value='tg' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tg" data-title="Togo">Togo</option>
  <option value='th' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag th" data-title="Thailand">Thailand</option>
  <option value='tj' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tj" data-title="Tajikistan">Tajikistan</option>
  <option value='tk' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tk" data-title="Tokelau">Tokelau</option>
  <option value='tl' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tl" data-title="Timor-Leste">Timor-Leste</option>
  <option value='tm' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tm" data-title="Turkmenistan">Turkmenistan</option>
  <option value='tn' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tn" data-title="Tunisia">Tunisia</option>
  <option value='to' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag to" data-title="Tonga">Tonga</option>
  <option value='tp' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tp" data-title="East Timor">East Timor</option>
  <option value='tr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tr" data-title="Turkey">Turkey</option>
  <option value='tt' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tt" data-title="Trinidad and Tobago">Trinidad and Tobago</option>
  <option value='tv' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tv" data-title="Tuvalu">Tuvalu</option>
  <option value='tw' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tw" data-title="Taiwan">Taiwan</option>
  <option value='tz' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tz" data-title="Tanzania">Tanzania</option>
  <option value='ua' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ua" data-title="Ukraine">Ukraine</option>
  <option value='ug' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ug" data-title="Uganda">Uganda</option>
  <option value='uk' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag uk" data-title="United Kingdom">United Kingdom</option>
  <option value='um' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag um" data-title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
  <option value='us' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag us" data-title="United States">United States</option>
  <option value='uy' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag uy" data-title="Uruguay">Uruguay</option>
  <option value='uz' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag uz" data-title="Uzbekistan">Uzbekistan</option>
  <option value='va' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag va" data-title="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
  <option value='vc' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag vc" data-title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
  <option value='ve' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ve" data-title="Venezuela">Venezuela</option>
  <option value='vg' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag vg" data-title="Virgin Islands (British)">Virgin Islands (British)</option>
  <option value='vi' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag vi" data-title="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
  <option value='vn' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag vn" data-title="Viet Nam">Viet Nam</option>
  <option value='vu' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag vu" data-title="Vanuatu">Vanuatu</option>
  <option value='wf' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag wf" data-title="Wallis and Futuna">Wallis and Futuna</option>
  <option value='ws' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ws" data-title="Samoa">Samoa</option>
  <option value='ye' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ye" data-title="Yemen">Yemen</option>
  <option value='yt' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag yt" data-title="Mayotte">Mayotte</option>
  <option value='yu' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag yu" data-title="Yugoslavia (former)">Yugoslavia (former)</option>
  <option value='za' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag za" data-title="South Africa">South Africa</option>
  <option value='zm' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag zm" data-title="Zambia">Zambia</option>
  <option value='zr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag zr" data-title="Zaire (former)">Zaire (former)</option>
  <option value='zw' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag zw" data-title="Zimbabwe">Zimbabwe</option>
</select>
	</div></div>
				  <div class="col-md-12">
						<div class="form-group">
						<input type="text" name="pin_code" id="pin_code" placeholder="Pin Code *" required  parsley-trigger="change" class="form-control parsley-validated" value="";>
					</div>
					</div>
				  </div>
                </div>
				</div>
				</div>
				 <div class="row">
					<div class="col-md-6">
					 <div class="form-group">
                  <input type="text" name="phone" id="phone" size="20" pattern="[\d]{10,}" title="Enter Digit Number. Minimum digit size 10" required parsley-trigger="change" required="" placeholder="Phone Number 1 *" value="01234567899"; class="form-control parsley-validated">
                                        </div>
					</div>
					 <div class="col-md-6">
					<div class="form-group">
                 	<input type="text" name="phone2" id="phone2" pattern="\d+" title="Enter Digit Number" parsley-trigger="change"   placeholder="Phone Number 2" class="form-control parsley-validated" value="";>
                </div>
					</div>
				 </div>
				  
                                 <h6 class="content-header border_bottom" style="margin-top:20px;">Work Profile</h6>
                                <div class="row bucket-form">
					 <div class="col-md-6">
						<div class="form-group">
						<input type="text" name="qualification" id="qualification" placeholder="Education Qualification *" required  parsley-trigger="change" class="form-control parsley-validated" value="";>
					        </div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="experience" id="experience" placeholder="Years of Experience *" required  parsley-trigger="change" class="form-control parsley-validated" value="";>
					</div>
                                         </div>
                                         <div class="col-md-12">
				<div class="form-group">
                               <div class="inner_form">
					<textarea placeholder="Connect with the Exam *" rows="4" required class="form-control" name="connect_exam" id="connect_exam"></textarea>
				</div>
                                </div>
				</div>
                                        
 
                                 </div>

                                 <div class="row">  <div class="col-md-4  "></div> <div class="col-md-4  "></div>
				 <div class="col-md-4">
					<div class="pull-right">
						  <input type="submit" value="Save" id="sub1" name="sub1" class="btn btn-success"/> 
					</div>
					</div>
				</div>
			</section>
			</form>
            </div>
 		</div>
 </div>
  </div>
  <!--\\\\\\\ container  end \\\\\\-->
    </div>
  <!--\\\\\\\ content panel end \\\\\\-->
	 <div class="copyright_info" id="footer">
                <div class="container"><div class="row">
                     <div class="col-md-6 col-md-offset-3 text-center"> <p style="margin-bottom:0px; font-size:12px;">Copyright © 2015. Testune Technology Pvt. Ltd. All Rights Reserved.</p> </div> 
                      <div class="col-md-3 text-right"><p style="margin-bottom:0px; font-size:12px;"><a href="../../bankexams/terms_of_use2.php" style="margin-bottom:0px; font-size:12px; color:#000000" class="teacher_login_form2">Terms of Use / Privacy Policy</a></p></div>
  </div></div>        
</div>  </div>
  <!--\\\\\\\ inner end\\\\\\-->
 </div>
<!-- footer section-->
<script language='javascript'>
 // change_country();
    document.getElementById("self_image").onchange=function () {   
    document.getElementById("uploadFile").value = this.value;
     var avatar = $("#uploadFile").val();
        var extension = avatar.split('.').pop().toUpperCase();
        if(avatar.length < 1) {
            avatarok = 0;
            alert(avatar.length);
        }
        else if (extension!="PNG" && extension!="JPG" && extension!="GIF" && extension!="JPEG"){
            avatarok = 0;
             $("#uploadFile").val('');
            alert("invalid extension "+extension);
        }
        else{}
   $('#upload_text').html('Change');
};
</script>
<<<<<<< HEAD

=======
<script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                }
        
                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            </script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">
>>>>>>> b976e5f0ec5a9671d0cf24f9d24d555b8788c1b1

</body>
</html>