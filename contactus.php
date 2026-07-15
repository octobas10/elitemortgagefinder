<?php include 'header.php' ?>
<style type="text/css">
   .form-control {
      border: 1px solid #071242;
      border-radius: 5px;
      background: none;
      font-size: 18px;
      font-weight: 500;
      -webkit-box-shadow: inherit;
      box-shadow: inherit;
   }
   .form-message {
      color: red;
      text-align: center;
   }
</style>
<main class="main" style="margin:50px 0;">
   <section class="AboutArea">
      <style>
         h3 {
            text-align: left !important;
         }
      </style>
      <article class="container">
         <div class="row">
            <aside class="col-lg-12">
               <h3>Contact Us</h3>
               <article class="container">
                  <h2 class="text-center black">Please fill in the form below to reach our customer service department.</h2>
                  <form action="#" id="contactus" name="contactus" class="subscribe-form">
                     <p class="form-message"></p>
                     <input type="hidden" name="formtype" id="formtype" value="contactus">
                     <div class="row">
                        <aside class="col-md-5">
                           <div class="form-group">
                              <input type="text" class=" mxlen_30 form-control" id="firstname" required="required" name="firstname" value="" placeholder="First Name *">
                           </div>
                        </aside>
                        <aside class="col-md-5">
                           <div class="form-group">
                              <input type="text" class="form-control required mxlen_30 required" id="lastname" name="lastname" value="" placeholder="Last Name *">
                           </div>
                        </aside>
                        <aside class="col-md-5">
                           <div class="form-group">
                              <input type="email" class="form-control required email mxlen_100" id="email" name="email" value="" placeholder="Email Address *">
                           </div>
                        </aside>
                        <aside class="col-md-5">
                           <div class="form-group">
                              <input type="tel" class="form-control required number_only mxlen_10" id="phone" name="phone" value="" placeholder="Telephone *">
                           </div>
                        </aside>
                        <aside class="col-md-10">
                           <div class="form-group">
                              <textarea class="form-control mxlen_200" id="message" name="message" placeholder="Your Inquiry" maxlength="200" data-bv-field="message"></textarea>
                           </div>
                        </aside>
                        <aside class="col-md-12">
                           <div class="form-group">
                              <button type="button" id="contactBtn" class="orange-btn"><span>Continue</span></button>
                           </div>
                        </aside>
                        <aside class="col-md-12">
                           By clicking "continue" (and subsequently completing your mortgage inquiry at EliteMortgageFinder), you are giving your consent to be contacted at the phone number you provide (including wireless number) by HomeAdvisor, LendingTree and other service providers and/or contractors. Contacting you is for the purpose of confirming and scheduling your home improvement project request and multiple contractor bids. You understand that automated phone technology, by voice or text messages, may be used to reach you. Please note that providing consent does not obligate you to purchase or use any product or service. You understand and agree that by submitting your request, you are agreeing to receive all communications electronically and are providing written instruction under the Fair Credit Reporting Act authorizing us and/or our partners, and other financial services with whom your request is shared to obtain your consumer credit report, credit score, and/or other information from any consumer reporting agency in order to provide you with quotes and verify your identity. Click "continue" to agree and complete your mortgage inquiry.
                        </aside>
                     </div>
                  </form>
               </article>
            </aside>
         </div>
      </article>
   </section>
</main>
<?php include 'footer.php' ?>