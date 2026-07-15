<?php include 'header.php';
$email_msg = '';
if($_POST){
	$to = "sarah@elitemate.com";
	$headers = "From:".$_POST['email']."\r\n";
	$headers .= "CC: salgadoclan6@verizon.net \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message = '<html><body>';
	$message .= '<center><h1>EliteMortgageFinder.com</h1></center>';
	$message .= '<div style=\"float:left\">Hi,<br></div>';
	$message .= '<div>E-mail:<b>'.$_POST['email'].'</b>  is requested to be unsunbscribed.<br></div>';
	$message .= '<div style=\"float:left\">Thanks & Regards,<br>EliteMortgageFinder.com</div>';
	$message .= '</body></html>';
	$subject = "Opt-out request from EliteMortgageFinder";
	$subject = "Opt out of Elitecashwire and Elitemate";
	if(mail($to, $subject, $message, $headers)){
		$email_msg ="<div style='padding:20px 10px;'><font style='color:brown;'>Thanks for submitting your email to be opted out.  You have been added to our suppression list.  Please allow 5-7 days for it to be distributed to all EliteMortgageFinder Publishers, Media Buyers and Affiliates.  Have a great day!</font></div>";
	}
}
?>
<main class="main" style="margin:50px 0;">
   <section class="AboutArea">
<style>h3 { text-align:left !important; }</style>
      <article class="container">
         <div class="row">
            <aside class="col-lg-12">
               <h3>Opt Out</h3>
               <p>You may unsubscribe from this service at any time by visiting entering your email or telephone number below or by emailing us at customer service or send a postal mail to EliteMortgageFinder.com, 138-07 82nd Drive, Briarwood, NY 11435, USA
               </p>
			   <p><form method="post" action="">
				<?php echo $email_msg; ?>
				<div class="form-group form-group-lg">
					<label class="sr-only" >Email</label>
					<input type="email" class="form-control required email" style="border:1px solid #999" id="email" name="email" placeholder="Email" required="required" placeholder="Enter Your Email Address*">
					
				</div>
				<button type="submit" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
				<div id="email_error"></div>
				</form></p>
               <p>      
               We may take a reasonable period of time (up to seven business days) to process cancellation requests. If you request the cancellation or modification of your subscription, such information may be retained for a period of time in our backup systems as a precaution against system failures. Some information may be retained for longer periods as required by law, contract or auditing requirements. 
               </p>   
              
               This site is owned and operated by EliteMortgageFinder.com, 138-07 82nd Drive, Briarwood, NY 11435, USA.
               </p>
            </aside>
         </div>
      </article>
   </section>
</main>
<!--End main Part--> 
<!--Start footer-->
<?php include 'footer.php' ?>