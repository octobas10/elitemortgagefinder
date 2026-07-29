<?php
$page_title = 'Sell Your Home Fast | Get a Free Home Sale Quote | EliteMortgageFinder';
$page_description = 'Ready to sell your home? Get connected with sell-home specialists. Share your property details in one simple form and receive personalized help to sell your house.';
$page_canonical = 'https://www.elitemortgagefinder.com/sellhome.php';
$nav_active = 'sellhome';
include 'header.php';

$promo_code = isset($_REQUEST['promo_code']) ? $_REQUEST['promo_code'] : '1';
$sub_id = isset($_REQUEST['sub_id']) ? $_REQUEST['sub_id'] : '123';
$subid = isset($_REQUEST['subid']) ? $_REQUEST['subid'] : '123';
$sub_id = !empty($sub_id) ? $sub_id : $subid;
$sub_id2 = isset($_REQUEST['sub_id2']) ? $_REQUEST['sub_id2'] : '';
$subid2 = isset($_REQUEST['subid2']) ? $_REQUEST['subid2'] : '';
$sub_id2 = !empty($sub_id2) ? $sub_id2 : $subid2;
?>
<!--End Header-->
<section id="banner" class="sellhome-hero">
   <div class="item">
      <img src="images/banner1.jpg" class="thumb" alt="Sell your home with Elite Mortgage Finder">
      <div class="carousel-text">
         <article class="container">
            <div class="row align-items-center">
               <aside class="col-xl-6 col-lg-7">
                  <h1><small>Ready to Sell?</small>Sell Your Home With Confidence</h1>
                  <p>Tell us about your property in one simple form. We connect you with sell-home specialists who can help you move forward quickly.</p>
                  <a href="#sell-home-form" class="btn btn-primary btn-lg sellhome-hero-cta">Start Your Free Quote</a>
               </aside>
               <aside class="col-xl-5 col-lg-5 offset-xl-1 d-none d-lg-block">
                  <div class="sellhome-hero-panel">
                     <h3>Why sellers choose us</h3>
                     <ul>
                        <li><i class="fas fa-check"></i> Free, no-obligation quote</li>
                        <li><i class="fas fa-check"></i> Fast specialist follow-up</li>
                        <li><i class="fas fa-check"></i> Nationwide sell-home network</li>
                     </ul>
                  </div>
               </aside>
            </div>
         </article>
      </div>
   </div>
</section>

<main class="main sellhome-page">
   <section class="sellhome-form-section" id="sell-home-form">
      <article class="container">
         <div class="sellhome-form-intro text-center">
            <h2>Get a Free Sell-Home Quote</h2>
            <p>Complete the form below. Estimates are fine - a specialist will follow up to help you sell your home.</p>
         </div>

         <div class="sellhome-form-box">
            <div id="sellhome-success" class="sellhome-success" style="display:none;" role="status" aria-live="polite">
               <div class="sellhome-success-icon" aria-hidden="true"><i class="fas fa-check"></i></div>
               <h3>You're all set</h3>
               <p class="sellhome-success-lead">Thanks for submitting your sell-home request. A specialist will follow up shortly by email, phone, or text.</p>
               <ul class="sellhome-success-next">
                  <li><i class="fas fa-clock"></i> Most sellers hear back within one business day</li>
                  <li><i class="fas fa-comments"></i> Keep your phone nearby for a quick follow-up</li>
                  <li><i class="fas fa-file-alt"></i> Have basic property details ready if they ask</li>
               </ul>
               <p class="sellhome-success-alt">Looking for something else?</p>
               <div class="sellhome-success-actions">
                  <a href="index.php#stepform" class="btn btn-primary">Buy A Home</a>
                  <a href="index.php#stepform" class="btn btn-warning">Refinance</a>
               </div>
            </div>

            <form id="sellhomeform" name="sellhomeform" method="post" action="" novalidate>
                     <input type="hidden" name="lead_type" value="SellHome" />
                     <input type="hidden" name="mortgage_lead_type" value="5" />
                     <input type="hidden" name="promo_code" value="<?php echo htmlspecialchars($promo_code); ?>" id="promo_code" />
                     <input type="hidden" name="sub_id" value="<?php echo htmlspecialchars($sub_id); ?>" id="sub_id" />
                     <input type="hidden" name="sub_id2" value="<?php echo htmlspecialchars($sub_id2); ?>" id="sub_id2" />
                     <input id="leadid_token" name="universal_leadid" type="hidden" />
                     <input type="hidden" name="xxTrustedFormCertUrl" id="xxTrustedFormCertUrl_0" />

                     <fieldset class="sellhome-fieldset">
                        <legend>Property Details</legend>
                        <div class="sellhome-form-grid sellhome-grid-4">
                           <div class="form-group">
                              <label for="property_desc">Property Type <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="property_desc" id="property_desc" required>
                                    <option value="" disabled selected>Select property type</option>
                                    <option value="1">Single Family</option>
                                    <option value="2">Multi Family</option>
                                    <option value="3">Town House</option>
                                    <option value="4">Condominium</option>
                                    <option value="5">Mobile Home</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="property_use">Property use <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="property_use" id="property_use" required>
                                    <option value="" disabled selected>Select property use</option>
                                    <option value="1">Primary Residence</option>
                                    <option value="2">Second Home</option>
                                    <option value="3">Investment Property</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="sell_timeframe">When do you plan to sell? <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="sell_timeframe" id="sell_timeframe" required>
                                    <option value="" disabled selected>Select timeframe</option>
                                    <option value="1">Immediately</option>
                                    <option value="2">Up to 30 days</option>
                                    <option value="3">Up to 60 days</option>
                                    <option value="4">Up to 90 days</option>
                                    <option value="5">No time constraint</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="reason">Reason for wanting to sell <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="reason" id="reason" required>
                                    <option value="" disabled selected>Select reason</option>
                                    <option value="1">Financial Hardship</option>
                                    <option value="2">Forbearance / Foreclosure</option>
                                    <option value="3">Inherited</option>
                                    <option value="4">Relocating</option>
                                    <option value="5">Looking For Realtor</option>
                                    <option value="6">Downsizing</option>
                                    <option value="7">Divorce</option>
                                    <option value="8">Repairs / Damage</option>
                                    <option value="9">Tired Landlord</option>
                                    <option value="10">Not ready to sell, just curious on value</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="occupancy">Occupancy of the property <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="occupancy" id="occupancy" required>
                                    <option value="" disabled selected>Select occupancy</option>
                                    <option value="1">Owner Occupied</option>
                                    <option value="2">Tenant Occupied</option>
                                    <option value="3">Vacant</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="behind_mortgage_payments">Behind on mortgage payments? <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="behind_mortgage_payments" id="behind_mortgage_payments" required>
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="agent_found">Have you already found an agent? <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="agent_found" id="agent_found" required>
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="bank_foreclosure">Is this property a bank foreclosure? <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="bank_foreclosure" id="bank_foreclosure" required>
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="estimate_value">Estimated property value ($) <span>*</span></label>
                              <input type="text" class="form-control required number_only" name="estimate_value" id="estimate_value" maxlength="10" placeholder="e.g. 350000" required>
                           </div>

                           <div class="form-group">
                              <label for="rate_type">Rate type <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="rate_type" id="rate_type" required>
                                    <option value="" disabled selected>Select rate type</option>
                                    <option value="1">Fixed Rate</option>
                                    <option value="2">Adjustable Rate</option>
                                    <option value="3">Fixed / Adjustable</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="loan_type">Loan type <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="loan_type" id="loan_type" required>
                                    <option value="" disabled selected>Select loan type</option>
                                    <option value="1">VA Loan</option>
                                    <option value="2">FHA Loan</option>
                                    <option value="3">Conventional Loan</option>
                                    <option value="4">Other</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="ltv_percentage">Loan To Value (LTV %)</label>
                              <input type="text" class="form-control number_only" name="ltv_percentage" id="ltv_percentage" maxlength="3" placeholder="e.g. 70 (optional)">
                           </div>
                        </div>

                        <div class="sellhome-form-grid sellhome-grid-address">
                           <div class="form-group sellhome-span-3">
                              <label for="address">Street Address <span>*</span></label>
                              <input type="text" class="form-control required" name="address" id="address" maxlength="250" placeholder="Property street address" required>
                           </div>

                           <div class="form-group">
                              <label for="zip">Zip Code <span>*</span></label>
                              <input type="text" class="form-control required number_only" name="zip" id="zip" maxlength="5" placeholder="Zip Code" required>
                           </div>
                        </div>
                     </fieldset>

                     <fieldset class="sellhome-fieldset">
                        <legend>Personal Details</legend>
                        <div class="sellhome-form-grid">
                           <div class="form-group">
                              <label for="credit_rating">Estimated Credit Score <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="credit_rating" id="credit_rating" required>
                                    <option value="" disabled selected>Select credit score</option>
                                    <option value="1">Excellent</option>
                                    <option value="2">Good</option>
                                    <option value="3">Fair</option>
                                    <option value="4">Poor</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="bankruptcy">Filed for bankruptcy in the past 7 years? <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="bankruptcy" id="bankruptcy" required>
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="num_mortgage_lates">How many mortgage lates previously? <span>*</span></label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control required" name="num_mortgage_lates" id="num_mortgage_lates" required>
                                    <option value="" disabled selected>Select an option</option>
                                    <option value="0">None</option>
                                    <option value="1">One</option>
                                    <option value="2">Two or More</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="va_loan">Is this a VA loan?</label>
                              <div class="sellhome-select-wrap">
                                 <select class="form-control" name="va_loan" id="va_loan">
                                    <option value="" disabled selected>Select an option (optional)</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                 </select>
                              </div>
                           </div>

                           <div class="form-group">
                              <label for="first_name">First Name <span>*</span></label>
                              <input type="text" class="form-control required" name="first_name" id="first_name" maxlength="100" placeholder="First Name" required>
                           </div>

                           <div class="form-group">
                              <label for="last_name">Last Name <span>*</span></label>
                              <input type="text" class="form-control required" name="last_name" id="last_name" maxlength="100" placeholder="Last Name" required>
                           </div>

                           <div class="form-group">
                              <label for="email">Email <span>*</span></label>
                              <input type="email" class="form-control required email" name="email" id="email" maxlength="250" placeholder="Email Address" required>
                           </div>

                           <div class="form-group">
                              <label for="phone">Phone Number <span>*</span></label>
                              <input type="text" class="form-control required number_only" name="phone" id="phone" maxlength="10" placeholder="10-digit phone number" required>
                           </div>

                           <div class="form-group">
                              <label for="dob">Date of Birth</label>
                              <input type="text" class="form-control" name="dob" id="dob" maxlength="12" placeholder="MM/DD/YYYY">
                           </div>

                           <div class="form-group sellhome-span-2">
                              <label for="comments">Additional comments</label>
                              <input type="text" class="form-control" name="comments" id="comments" maxlength="500" placeholder="Optional">
                           </div>
                        </div>
                     </fieldset>

                     <div class="sellhome-consent">
                        <div class="sellhome-consent-box">
                           <div class="checkbox sellhome-check">
                              <input type="checkbox" name="terms[]" value="2" id="checkbox3" class="required" required>
                              <label for="checkbox3">
                                 By checking this box, I affirm that I have read, understand, and agree to the <a href="terms.php">Terms of Use Agreement</a> and <a href="privacy_policy.php">Privacy Policy</a>, I authorize EliteMortgageFinder.com and its <a href="tcpa_partners_list.php">Marketing Partners</a> to obtain my consumer report, credit profile, or other credit information associated with me from any consumer reporting agency for purposes of my inquiry. Consent is not required as a condition of purchasing any services or products. I provide my express written consent to EliteMortgageFinder.com and up to five (5) <a href="tcpa_partners_list.php">Marketing Partners</a>, and for those <a href="tcpa_partners_list.php">Marketing Partners</a>, EliteMortgageFinder.com and authorized third parties calling on their behalf, to contact me via telephone calls, text messages, and/or email including for marketing purposes, including through the use of an automatic telephone dialing system or an artificial or pre-recorded voice, to the phone number I have provided. I understand I am providing this consent to receive such telephone calls and texts messages even if my telephone number is currently listed on any federal, state, local, or internal Do-Not-Call ("DNC") Lists. I understand that consent is not required as a condition of purchasing any services or products. I am providing my express consent for all form information to be shared with lenders and third-party networks of lenders for the purpose of helping me obtain a loan. <a href="tcpa_partners_list.php">Click Here</a> For The List Of Companies.
                              </label>
                           </div>
                        </div>
                        <div class="checkbox sellhome-check sellhome-check-newsletter">
                           <input type="checkbox" id="chk_arcamax" value="Y" name="chk_arcamax" />
                           <label for="chk_arcamax">Sign me up for the Elite Mortgage Finder Home &amp; Consumer Newsletter, powered by ArcaMax.</label>
                        </div>
                     </div>

                     <div id="sellhome-error" class="sellhome-error" style="display:none;"></div>

                     <div class="sellhome-submit-wrap text-center">
                        <button type="submit" id="sellhomesubmit" class="btn btn-primary btn-lg">Get My Sell-Home Quote</button>
                        <p class="sellhome-privacy-link"><a href="privacy_policy.php">Privacy Policy</a></p>
                     </div>
                  </form>
               </div>
      </article>
   </section>

   <section class="sellhome-cta">
      <article class="container">
         <div class="row align-items-center">
            <aside class="col-lg-8">
               <h2>Looking to Buy or Refinance Instead?</h2>
               <p>Explore mortgage options for a new purchase or refinance - get matched with lenders quickly.</p>
            </aside>
            <aside class="col-lg-4 text-lg-right sellhome-cta-btns">
               <a href="index.php#stepform" class="btn btn-primary btn-lg">Buy A Home</a>
               <a href="index.php#stepform" class="btn btn-warning btn-lg">Refinance</a>
            </aside>
         </div>
      </article>
   </section>
</main>

<script id="LeadiDscript" type="text/javascript">
   (function() {
      var s = document.createElement('script');
      s.id = 'LeadiDscript_campaign';
      s.type = 'text/javascript';
      s.async = true;
      s.src = '//create.lidstatic.com/campaign/f0c1f8e9-b1e1-240e-8033-e15080774c01.js?snippet_version=2';
      var LeadiDscript = document.getElementById('LeadiDscript');
      LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
   })();
</script>
<noscript><img src='//create.leadid.com/noscript.gif?lac=F62EBA6C-F3C6-0CB9-5D06-AF659B9EB87F&lck=f0c1f8e9-b1e1-240e-8033-e15080774c01&snippet_version=2' /></noscript>
<script type="text/javascript">
   (function() {
      var tf = document.createElement('script');
      tf.type = 'text/javascript';
      tf.async = true;
      tf.src = ("https:" == document.location.protocol ? 'https' : 'http') + "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" + new Date().getTime() + Math.random();
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(tf, s);
   })();
</script>
<noscript>
   <img src="https://api.trustedform.com/ns.gif" />
</noscript>

<?php
$extra_footer_scripts = ['js/sellhome.js'];
include 'footer.php';
?>
