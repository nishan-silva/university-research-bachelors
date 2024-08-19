<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/creating-a-contact-form.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('nishaan.silva@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Cloud</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/28_Days_Later_400.font.js"></script>
<script type="text/javascript">
    Cufon.replace("H1");
	Cufon.replace("H2");
	Cufon.replace("H3");
	Cufon.replace("#logo a");
	Cufon.replace(".razd_but a");
</script>
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
</head>
<body>

<script type="text/javascript" src="snow.js">

/***********************************************
* Snow Effect without images-by Kurt Grigg at http://www.btinternet.com/~kurt.grigg/javascript
* Script featured & available at Dynamic Drive at http://www.dynamicdrive.com/
* Please keep this notice intact
***********************************************/

</script>



<div id="main">
<!-- header begins -->
<div id="header">
	<div id="logo">
	  <div align="center"><a href="#">EXPLORING THE FACTORS POSITIVELY INFLUENCE <br/> 
	    THE ADOPTION OF CLOUD COMPUTING <br/> 
	    IN SRI LANKA</a><img src="images/sri_lanka[1].gif" alt="" width="41" height="25" longdesc="images/sri_lanka[1].gif" /></div>
	</div>
<div id="buttons">
      <div class="razd_but"><a href="index.html" title="">Home</a></div>
      <div class="razd_but"><a href="domain.html"  title="">Domain</a></div>
      <div class="razd_but"><a href="mile.html" title="">Milestones</a></div>
	  <div class="razd_but"><a href="docs.html" title="">Documents </a></div>
	  <div class="razd_but"><a href="present.html" title="">Presentations </a></div>
      <div class="razd_but"><a href="about.html" title="">About Us</a></div>
      <div class="razd_but"><a href="contact.html" title="">Contact Us</a></div>
    </div>
    
</div>

		<!-- header ends -->
		<div class="header_back">
				     <div id="wrapper">
							<div id="slider-wrapper">        
								<div id="slider" class="nivoSlider">
									<img src="images/contact1.jpg" alt="" />
									
								</div>        
							</div>
					
					</div>
					
					<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
						<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
						<script type="text/javascript">
						$(window).load(function() {
							$('#slider').nivoSlider();
						});
						</script>
				</div>
        <!-- content begins -->
        <div id="content">
            <div id="left">
       	  	  <div class="left1">
           	     <h2>Contact Us</h2>
				
				
					<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >


<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='hidden' text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* Required Fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='phone' >Phone Number:</label><br/>
    <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="15" /><br/>
    <span id='contactus_phone_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='message' >Message:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
</div>
<div class='container'>
    <div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
    <label for='scaptcha' >Enter the code above here:</label>
    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
    <span id='contactus_scaptcha_errorloc' class='error'></span>
    <div class='short_explanation'>Can't read the image?
    <a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
</div>


<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");


    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactus'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactus'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>
</script>
                   
					
              </div>
              <div class="left1">
               
                    <div class="free"></div>
                    <br />
              </div>
              <div class="text"><br />
              </div>
            
                   
            </div>
            <div style="clear: both;"><img src="images/spaser.gif" alt="" width="1" height="1" /></div>
		  <!-- footer begins -->
<div class="bg_foot">
<div id="footer"><span style="float:left;"> Copyright © 2012 Group Number 005 (Information Systems).   All Rights Reserved. </span><span style="float:right;"><a href="" title="Website Design"> </a>Website Design by Group Number 005 (Information Systems) <a href="" title="(IS Group Number 005)"> </a></span>
				<div class="clear"></div>
</div></div>
<!-- footer ends -->

</div>
<!-- content ends -->

</div>
</body>
</html>
