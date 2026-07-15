<?php include 'header.php';
?>
<?php //echo @file_get_contents("https://elitecashwire.com/persistentid.php?impression=1"); ?>
<!--End Header-->
<!-- Start Banner -->
<div style="text-align:center;">
      <script language='JavaScript' type='text/javascript' src='https://ads.elitemate.com/adx.js'></script>
      <script language='JavaScript' type='text/javascript'>
      <!--
         if (!document.phpAds_used) document.phpAds_used = ',';
         phpAds_random = new String (Math.random()); phpAds_random = phpAds_random.substring(2,11);
         document.write ("<" + "script language='JavaScript' type='text/javascript' src='");
         document.write ("https://ads.elitemate.com/adjs.php?n=" + phpAds_random);
         document.write ("&amp;what=zone:289&amp;target=_blank");
         document.write ("&amp;exclude=" + document.phpAds_used);
         if (document.referrer)
           document.write ("&amp;referer=" + escape(document.referrer));
         document.write ("'><" + "/script>");
      //-->
      </script><noscript>
      <a href='https://ads.elitemate.com/adclick.php?n=a6520b7d' target='_blank'><img src='https://ads.elitemate.com/adview.php?what=zone:289&amp;n=a6520b7d' border='0' alt=''></a></noscript>
</div>
<section id="banner">
   <div class="slider">
      <div class="item">
         <img src="images/banner1.jpg" class="thumb" alt="">
         <div class="carousel-text">
            <article class="container">
               <div class="row">
                  <aside class="col-xl-6 col-lg-7">
                     <h2><small>Get a Low</small>MORTGAGE Rate!</h2>
                     <p>Apply now - you could receive a pre-approval today! EliteMortgageFinder.com is an easy and effective way to secure a mortgage.</p>
                     <a href="#stepform" class="btn btn-primary btn-lg">Buy A Home</a> <a href="#stepform" class="btn btn-warning btn-lg">Refinance</a> 
                  </aside>
               </div>
            </article>
         </div>
      </div>
      <div class="item">
         <img src="images/banner1.jpg" class="thumb" alt="">
         <div class="carousel-text">
            <article class="container">
               <div class="row">
                  <aside class="col-xl-6 col-lg-7">
                     <h2><small>Get a Low</small>MORTGAGE Rate!</h2>
                     <p>Explore your home loan options for a new mortgage loan, mortgage refinance, or home equity loan.</p>
                     <a href="#stepform" class="btn btn-primary btn-lg">Buy A Home</a> <a href="#stepform" class="btn btn-warning btn-lg">Refinance</a> 
                  </aside>
               </div>
            </article>
         </div>
      </div>
   </div>
</section>
<!--Start main Part-->
<main class="main">
   <!--Start About Area-->
   <section class="AboutArea">
      <article class="container">
         <div class="row">
            <aside class="col-lg-5">
               <h3 class="text-right">At EliteMortgageFinder.com, you will receive fast decisions for your mortgage. You could receive an offer tailored to your needs within as little as 2-3 minutes.</h3>
            </aside>
            <aside class="col-lg-7"><a id="stepform" name="stepform"></a>
               <h4>Looking to buy a new home or refinance? <span class="text-danger">No Worries,</span>we will help you find a new mortgage loan or rework your current mortgage.</h4>
               <p>We understand how overwhelming buying a new home can be. Apply here in minutes and one of our specialists will call you to explain the process of becoming a homeowner. Our helpful tools and resources can get you closer to your new desired home.</p>
            </aside>
         </div>
      </article>
   </section>
   <!--End About Area--> 
   <!--Start Home Form-->
   <section style="text-align:center;">
      <article class="container">
         <div class="row">
            <aside class="col-lg-12">
               <div class="form-box">
                  <div class="form-bottom">
                     <div id="progress-step-container" style="display: none;">
                        <span id="progressbar-text" class="progressbar-text">10%</span>
                        <div id="progressbar" role="progressbar" aria-valuemin="0" class="ui-progressbar ui-corner-all ui-widget ui-widget-content" aria-valuemax="100" aria-valuenow="10">
                           <div class="ui-progressbar-value ui-corner-left ui-widget-header" style="width: 10%;"></div>
                        </div>
                     </div>
                     <div id="site-wrapper">
                        <form id="mortfinder" name="mortfinder" action="" method="post">
                           <div class="content" id="form-content">
                              <!-- Container for slides in the slideshow -->
                              <div class="field-groups" id="field-groups">
                                 <fieldset class="field-group" id="mortgage_lead_type_field_group" style="display: inline;">
                                    <div class="container-outer-header">
                                       <h3>What type of loan?</h3>
                                    </div>
                                    <div class="form-group valid">
                                       <div class="">
                                          <div>
                                             <div class="loan-slide btn-group">
                                                <div class="column-1-2 centered mb20" style="float: left; display: contents; width: 100%;" id="refi-button-group">
											              <button type="button" class="btn_main_kick_start" selectedvalue="2">Refinance</button>
                                                </div>
                                                <div class="column-1-2 centered" style="float: left; display: contents; width: 100%;">
                                                   <button type="button" class="btn_main_kick_start" selectedvalue="1" style="margin-left:30px;">Purchase New Home</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="property_desc_field_group" style="display: none;">
                                    <div class="container-outer-header">
                                       <h3>Great! What type of property <span class="line-break-mobi">are you refinancing?</span></h3>
                                    </div>
                                    <div class="form-group valid">
                                       <div class="">
                                          <div class="">
                                             <div class="prop-desc-slide btn-group">
                                                <div class="image-btn column-1-4 centered mb20" style="margin:0 20px 0 0; cursor:pointer;">
											                 <img src="images/1.png" selectedvalue="1" class="property_type" />
                                                   <div id="single_prop-text"><label>Single Family</label></div>
                                                </div>
                                                <div class="image-btn column-1-4 centered mb20" style="margin:0 20px 0 0; cursor:pointer;">
											                 <img src="images/2.png" selectedvalue="2" class="property_type" />
                                                   <div id="multiple_prop-text"><label>Multi Family</label></div>
                                                </div>
                                                <div class="image-btn column-1-4 centered mb20" style="margin:0 20px 0 0; cursor:pointer;">
											                 <img src="images/3.png" selectedvalue="3" class="property_type" />
                                                   <div id="townhouse_prop-text"><label>Town House</label></div>
                                                </div>
                                                <div class="image-btn column-1-4 centered mb20" style="cursor:pointer;">
											                 <img src="images/4.png" selectedvalue="4" class="property_type" />
                                                   <div id="condo_prop-text"><label>Condominium</label></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="credit_rating_field_group" style="display: none;">
                                    <div class="container-outer-header">
                                       <h3>Estimate your credit score</h3>
                                    </div>
                                    <div class="form-group valid">
                                       <div class="">
                                          <div class="">
                                             <div class="btn-group" style="display:unset;">
                                                <div class="centered mb20"><button type="button" class="green-btn" selectedvalue="1">Excellent 680+</button></div>
										                  <div class="centered mb20"><button type="button" class="green-btn" selectedvalue="2">Good 600 - 679</button></div>
                                                <div class="centered mb20"><button type="button" class="green-btn" selectedvalue="4">Fair 560 - 599</button></div>
                                                <div class="centered"><button type="button" class="green-btn" selectedvalue="5">Poor &lt; 559</button></div>
                                                <div class="buttons-south-text"><label>(Ok to Estimate)</label></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="spec_home_field_group" style="display:none;">
                                    <div class="container-outer-header">
                                       <h3>Is this loan to purchase a spec home?</h3>
                                    </div>
                                    <div class="form-group">
                                       <div class="field-label-pair">
                                          <div class="">
                                             <div class="">
                                                <div class="btn-group" style="display:unset;">
                                                   <div class="centered mb20"><button type="button" class="green-btn" selectedvalue="1">Yes</button></div>
                                                   <div class="centered mb20"><button type="button" class="green-btn" selectedvalue="0">No</button></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="buttons-south-text"><label>*short for speculative house – is a new house that a home builder constructs on the speculation that it will sell easily for a profit. Builders design these move-in-ready homes to be as appealing to home buyers as possible. In other words, a spec home is built on the speculation of what home buyers are looking for.</label></div>
                                          </div>
                                       </div>
                                       <div class="field-label-pair" style="display: none;">
                                          <div class="centered mb20"><label class="input-label centered">Have you signed a purchase contract?</label></div>
                                          <div class="">
                                             <div class="">
                                                <div class="btn-group">
                                                   <div class="centered mb20"><button type="button" class="green-btn" selectedvalue="1">Yes</button></div>
                                                   <div class="centered"><button type="button" class="green-btn" selectedvalue="0">No</button></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="buy_timeframe_field_group" style="display:none;">
                                    <div class="container-outer-header">
                                       <h3>When do you plan to buy a home?</h3>
                                    </div>
                                    <div class="form-group">
                                       <div class="">
                                          <div class="">
                                             <div class="btn-group" style="display:unset;">
                                                <div class="centered mb20">
                                                <div class="centered mb20">
															   <button style="max-width: 500px;" type="button" id="time_immediate" class="green-btn" selectedvalue="1">Immediately - I'm making an offer</button></div>
                                                <div class="centered mb20">
															   <button type="button" style="max-width: 500px;" id="time_30_days" class="green-btn" selectedvalue="2">Currently shopping &amp; considering options</button></div>
                                                <div class="centered mb20">
															   <button style="max-width: 500px;" type="button" id="time_60_days" class="green-btn" selectedvalue="3">Soon, within next couple of months</button></div>
                                                <div class="centered mb20">
                                                <button style="max-width: 500px;" type="button" id="time_90_days" class="green-btn" selectedvalue="4">In Next 3 Months</button></div>
                                                <div class="centered">
															   <button type="button" style="max-width: 500px;" id="time_unspecified" class="green-btn" selectedvalue="5">Not sure</button></div>
                                                <div class="buttons-south-text"><label>(Ok to Estimate)</label></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="property_use_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>What type of property<br> are you looking for?</h3>
                                    </div>
                                    <div class="form-group">
                                       <div class="">
                                          <div class="">
                                             <div class="btn-group" style="display:unset;">
                                                <div class="centered mb20"><button type="button" id="primary-prop-button" class="green-btn" selectedvalue="1">Primary Residence</button></div>
                                                <div class="centered mb20"><button type="button" id="second-prop-button" class="green-btn" selectedvalue="2">Second Property</button></div>
                                                <div class="centered"><button type="button" id="investment-prop-button" class="green-btn" selectedvalue="3">Investment Property</button></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="estimate_value_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>Please estimate the value of the <span class="line-break-mobi">property <span id="buyorrefinance">you want to refinance</span></span></h3>
                                    </div>
                                    <div class="form-group">
								              <!-- SLIDER -->	
                                       <div><input type="hidden" id="estimate_value_field_group-input" name="property_value"></div>
                                       <div id="property_value-label" class="visible-xs slider-display-value slider-display-value-xs"></div>
                                       <div class="slidecontainer">
                                         <input type="range" min="5000" step="1000" max="2455000" value="100000" class="myslider" id="property_value">
                                       </div>
                                       <div class="slider-south-text"><label>(OK to estimate)</label></div>
								              <!-- SLIDER -->
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="first_balance_field_group" style="display:none;">
                                    <div class="container-outer-header">
                                       <h3>What is the remaining 1st mortgage balance?</h3>
                                    </div>
                                    <div class="form-group">
								              <!-- SLIDER -->
                                       <div><input type="hidden" id="first_balance_field_group-input" name="first_balance"></div>
                                       <div id="first_balance-label" class="visible-xs slider-display-value slider-display-value-xs"></div>
                                       <div class="slidecontainer">
                                         <input type="range" min="5000" step="1000" max="" value="" class="myslider" id="first_balance">
                                       </div>
                                       <div class="slider-south-text"><label>(OK to estimate)</label></div>
								              <!-- SLIDER -->
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="first_interest_rate_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>What is the interest rate <span class="line-break-mobi">of your 1st mortgage?</span></h3>
                                    </div>
                                    <div class="form-group">
                                       <!-- SLIDER -->
                                       <div><input type="hidden" id="first_interest_rate_field_group-input" name="first_interest_rate"></div>
                                       <div id="first_interest_rate-label" class="visible-xs slider-display-value slider-display-value-xs"></div>
                                       <div class="slidecontainer">
                                         <input type="range" min="3" step="0.25" max="10" class="myslider" id="first_interest_rate">
                                       </div>
                                       <div class="slider-south-text"><label>(OK to estimate)</label></div>
                                       <!-- SLIDER -->
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="down_payment_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>How much is your <span class="line-break-mobi">down payment?</span></h3>
                                    </div>
                                    <div class="form-group">
                                       <!-- SLIDER -->
                                       <div><input type="hidden" id="down_payment_field_group-input" name="down_payment"></div>
                                       <div id="down_payment-label" class="visible-xs slider-display-value slider-display-value-xs"></div>
                                       <div class="slidecontainer">
                                         <input type="range" min="5000" max="" step="1000" value="" class="myslider" id="down_payment">
                                       </div>
                                       <div class="slider-south-text"><label>(OK to estimate)</label></div>
                                       <!-- SLIDER -->
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="rate_type_field_group" style="display:none;">
                                    <div class="container-outer-header">
                                       <h3>What type of loan are <span class="line-break-mobi">you interested in?</span></h3>
                                    </div>
                                    <div class="form-group">
                                       <div class="">
                                          <div class="">
                                             <div class="btn-group" style="display:unset;">
                                                <div class="column-1-3 centered mb20"><button type="button" id="fixed-btn" class="green-btn"  selectedvalue="1">Fixed</button></div>
                                                <div class="column-1-3 centered mb20"><button type="button" id="adjust-btn" class="green-btn" selectedvalue="2">Adjustable</button></div>
                                                <div class="column-1-3 centered"><button type="button" id="fixed-or-adjust-btn" class="green-btn" selectedvalue="3">Fixed Or Adjustable</button></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="second_balance_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>Do you have a<br> second mortgage?</h3>
                                    </div>
                                    <div class="form-group">
                                       <div class="field-label-pair">
                                          <div class="">
                                             <div class="">
                                                <div class="btn-group" style="display:unset;">
                                                   <div class="centered mb20"><button type="button" class="green-btn-2" id="second_balance_field_group_inner" selectedvalue="1">Yes</button></div>
                                                   <div class="centered mb20"><button type="button" class="green-btn" selectedvalue="0">No</button></div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- =================== -->
                                          <div class="form-group" id="second_balance_field_group_inner-block" style="display:none">
                                             <!-- SLIDER -->
                                             <div><input type="hidden" id="second_balance_field_group-input" name="second_balance"></div>
                                             <div id="second_balance-label" class="visible-xs slider-display-value slider-display-value-xs"></div>
                                             <div class="slidecontainer">
                                               <input type="range" min="5000" max="" step="1000" value="" class="myslider" id="second_balance">
                                             </div>
                                             <div class="slider-south-text"><label>(OK to estimate)</label></div>
                                             <!-- SLIDER -->
                                             <!-- SLIDER -->
                                             <div><input type="hidden" id="second_interest_rate_field_group-input" name="second_interest_rate"></div>
                                             <div id="second_interest_rate-label" class="visible-xs slider-display-value slider-display-value-xs"></div>
                                             <div class="slidecontainer">
                                               <input type="range" min="3" step="0.25" max="10" class="myslider" id="second_interest_rate">
                                             </div>
                                             <div class="slider-south-text"><label>(OK to estimate)</label></div>
                                             <!-- SLIDER -->
                                          </div>
                                       </div>
                                       <div class="field-label-pair" style="display: none;">
                                          <div class="centered"><label class="input-label">2nd Mortgage Balance (OK to estimate)</label></div>
                                          <div class="">
                                             <div class="north-text"><label>Total of first and second mortgage cannot exceed whole of home value</label></div>
                                          </div>
                                          <div class="visible-xs slider-display-value slider-display-value-xs">Paid Off</div>
                                          <div class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                             <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div>
                                             <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                                          </div>
                                          <div class="hidden-xs slider-display-value slider-display-value-sm">Paid Off</div>
                                       </div>
                                       <div class="field-label-pair" style="display: none;">
                                          <div class="centered"><label class="input-label">2nd Mortgage Interest (OK to estimate)</label></div>
                                          <div class=""></div>
                                          <div class="visible-xs slider-display-value slider-display-value-xs">3% or lower</div>
                                          <div class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                             <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div>
                                             <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                                          </div>
                                          <div class="hidden-xs slider-display-value slider-display-value-sm">3% or lower</div>
                                       </div>
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="additional_cash_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>How much additional cash<br> do you wish to borrow?</h3>
                                    </div>
                                    <div class="form-group">
                                       <!-- SLIDER -->
                                       <div><input type="hidden" id="additional_cash_field_group-input" name="additional_cash"></div>
								              <div id="additional_cash-label" class="visible-xs slider-display-value slider-display-value-xs"></div>
                                       <div class="slidecontainer">
                                         <input type="range" min="5000" max="" step="1000" value="" class="myslider" id="additional_cash">
                                       </div>
                                       <div class="slider-south-text"><label>(OK to estimate)</label></div>
                                       <!-- SLIDER -->
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="bankruptcy_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>Have you had a bankruptcy/foreclosure <br> in the past 3 years?</h3>
                                    </div>
                                    <div class="form-group">
                                       <div class="">
                                          <div class="">
                                             <div class="btn-group" style="display:unset;">
                                                <div class="centered mb20"><button type="button" class="green-btn" selectedvalue="1">Yes</button></div>
                                                <div class="centered"><button type="button" id="fha-no-btn" class="green-btn" selectedvalue="0">No</button></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="employment_type_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>Your Employment Type?</h3>
                                    </div>
                                    <div class="form-group">
                                       <div class="">
                                          <div class="">
                                             <div class="btn-group" style="display:unset;">
                                                <div class="column-1-3 centered mb20"><button type="button" id="fixed-btn" class="green-btn" selectedvalue="1">Employed</button></div>
                                                <div class="column-1-3 centered mb20"><button type="button" id="adjust-btn" class="green-btn" selectedvalue="1">Self Employed</button></div>
                                                <div class="column-1-3 centered mb20"><button type="button" id="adjust-btn" class="green-btn" selectedvalue="4">Benefits</button></div>
                                                <div class="column-1-3 centered"><button type="button" id="fixed-or-adjust-btn" class="green-btn" selectedvalue="3">Fixed Income</button></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="num_mortgage_lates_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>Any late payments<br> in the past year?</h3>
                                    </div>
                                    <div class="form-group">
                                       <div class="">
                                          <div class="">
                                             <div class="btn-group" style="display:unset;">
                                                <div class="centered mb20"><button type="button" id="late-none-btn" class="green-btn" selectedvalue="0">None</button></div>
                                                <div class="centered mb20"><button type="button" id="late-one-btn" class="green-btn" selectedvalue="1">One</button></div>
                                                <div class="centered"><button type="button" id="late-two-or-more-btn" class="green-btn" selectedvalue="2">Two or More</button></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="va_loan_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>Have you (or your spouse)<br> served in the US military?</h3>
                                    </div>
                                    <div class="form-group">
                                       <div class="">
                                          <div class="">
                                             <div class="btn-group" style="display:unset;">
                                                <div class="centered mb20"><button type="button" id="va-stat-yes-btn" class="green-btn" selectedvalue="1">Yes</button></div>
                                                <div class="centered"><button type="button" id="va-stat-no-btn" class="green-btn" selectedvalue="0">No</button></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </fieldset>
                                 <?php /*
                                 <fieldset class="field-group" id="need_a_project_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>In need of a home improvement project? <br>Speak with a local contractor today.</h3>
                                    </div>
                                    <div class="form-group">
                                       <div class="field-label-pair mb20">
                                          <div class="">
                                             <div class="">
                                                <div class="btn-group" style="display:unset;">
                                                   <div class="centered mb20"><button type="button" class="green-btn-2" id="need_a_project_field_group_inner" selectedvalue="1">Yes</button></div>
                                                   <div class="centered"><button type="button" class="green-btn" selectedvalue="0">No</button></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- =================== -->
                                       <div class="field-label-pair mb20" id="need_a_project_field_group_inner-block" style="display: none;">
                                          <div class="centered mb20"><label class="input-label">What sort of project is it?</label></div>
                                          <div class="input-body">
                                             <select class="select-input" name="project_type" id="need_a_project_field_group-input">
                                                <option value="">Please select...</option>
                                                <optgroup label="Additions or Remodels">
                                                   <option value="BathroomRemodel">Bathroom Remodel</option>
                                                   <option value="KitchenRemodel">Kitchen Remodel</option>
                                                   <option value="BasementRemodel">Basement Remodel</option>
                                                   <option value="MultiRoomRemodel">Multiple Room Remodel</option>
                                                   <option value="AdditionToStructure">Addition to Existing Structure</option>
                                                </optgroup>
                                                <optgroup label="Flooring">
                                                   <option value="InstallCarpet">Install Carpet</option>
                                                   <option value="InstallStoreFloor">Install Stone Floor</option>
                                                   <option value="InstallLeminateFloor">Install Laminate Floor</option>
                                                   <option value="RefinishHardwoodFloor">Refinish Hardwood Floor</option>
                                                   <option value="InstallVinylFloor">Install Vinyl Floor</option>
                                                   <option value="RepairHardwoodFloor">Repair Hardwood Floor</option>
                                                   <option value="InstallHardwoodFloor">Install Hardwood Floor</option>
                                                   <option value="InstallTileFloor">Install Tile Floor</option>
                                                </optgroup>
                                                <optgroup label="Handyman">
                                                   <option value="HandymanSingleProject">Handyman for a single project</option>
                                                   <option value="HandymanMultipleProject">Handyman for multiple projects</option>
                                                </optgroup>
                                                <optgroup label="Heating &amp; Cooling">
                                                   <option value="InstallHVAC">Install HVAC System</option>
                                                   <option value="RepairHVAC">Repair or Service HVAC System</option>
                                                   <option value="InstallHeatPump">Install Heat Pump</option>
                                                   <option value="RepairOrServiceHeatPump">Repair or Service Heat Pump</option>
                                                   <option value="InstallGasOrElectricalFurnace">Install Gas or Electrical Furnace</option>
                                                   <option value="RepairGasOrElectricalFurncae">Repair or Service Gas or Electrical Furnace</option>
                                                   <option value="InstallSwampCooler">Install Swamp Cooler</option>
                                                   <option value="RepairOrsServiceSwamp">Repair or Service Swamp Cooler</option>
                                                </optgroup>
                                                <optgroup label="Painting">
                                                   <option value="Paint1-2Rooms">1-2 Rooms</option>
                                                   <option value="Paint3-4Rooms">3-4 Rooms</option>
                                                   <option value="Paint5+Rooms">5+ Rooms</option>
                                                   <option value="Exterior">Exterior</option>
                                                </optgroup>
                                                <optgroup label="Plumbing">
                                                   <option value="Repair Sewer Main">Repair Sewer Main</option>
                                                   <option value="InstallSepticSystem">Install Septic System</option>
                                                   <option value="RepairSepticSystem">Repair Septic System</option>
                                                   <option value="InstallGasPipes">Install Gas Pipes</option>
                                                   <option value="InstallNewShower">Install New Shower</option>
                                                   <option value="InstallNewPlumbing">Install New Plumbing</option>
                                                   <option value="InstallWaterMain">Install Water Main</option>
                                                </optgroup>
                                                <optgroup label="Roofing">
                                                   <option value="InstallAsphaltShingleRoof">Install Asphalt Shingle Roof</option>
                                                   <option value="InstallWoodOrComposite Roof">Install Wood or Composite Roof</option>
                                                   <option value=" InstallMetalRoof">Install Metal Roof</option>
                                                   <option value="InstallTraditionalTileRoof">Install Traditional Tile Roof</option>
                                                   <option value="RoofRepair">Roof Repair</option>
                                                </optgroup>
                                                <optgroup label="Siding">
                                                   <option value="InstallVinylSiding">Install Vinyl Siding</option>
                                                   <option value="InstallWoodorFiber">Install Wood or Fiber Siding</option>
                                                   <option value="InstallMetalSiding">Install Metal Siding</option>
                                                   <option value="InstallBrickOrStone">Install Brick or Stone Siding</option>
                                                   <option value="InstallStucco">Install Stucco</option>
                                                   <option value="SidingRepair">Siding Repair</option>
                                                </optgroup>
                                                <optgroup label="Solar">
                                                   <option value="Electrical">Electrical</option>
                                                   <option value="PoolHeating">Pool Heating</option>
                                                   <option value="HotWater">Hot Water</option>
                                                </optgroup>
                                                <optgroup label="Windows">
                                                   <option value="Install1Window">Install 1 Window</option>
                                                   <option value="Install2Windows">Install 2 Windows</option>
                                                   <option value="Install3-5Windows">Install 3-5 Windows</option>
                                                   <option value="Install6-9Windows">Install 6-9 Windows</option>
                                                   <option value="Install10+Windows">Install 10+ Windows</option>
                                                   <option value="WindowRepair">Window Repair</option>
                                                </optgroup>
                                             </select>
                                          </div>
                                          <div class="clear"></div>
                                       </div>
                                       <div class="field-label-pair">
                                          <div class=""><label class=""></label></div>
                                          <div class=""></div>
                                       </div>
                                    </div>
                                 </fieldset>
                                 */ ?>
                                 <fieldset class="field-group" id="ltv_percentage_field_group" style="display:none;">
                                    <div class="container-outer-header">
                                       <h3>What is Loan To Value (LTV)?</h3>
                                    </div>
                                    <div class="form-group">
                                       <!-- SLIDER -->
                                       <div><input type="hidden" id="ltv_percentage_field_group-input" name="ltv_percentage"></div>
                                       <div id="ltv_percentage-label" class="visible-xs slider-display-value slider-display-value-xs"></div>
                                       <div class="slidecontainer">
                                         <input type="range" min="10" step="1" max="100" class="myslider" id="ltv_percentage">
                                       </div>
                                       <!-- SLIDER -->
                                    </div>
                                    <div class="slider-south-text"><label>*What is LTV in a loan? The loan-to-value (LTV) ratio is a measure comparing the amount of your mortgage with the appraised value of the property. The higher your down payment, the lower your LTV ratio. Mortgage lenders may use the LTV in deciding whether to lend to you and to determine if they will require private mortgage insurance.</label></div>
                                 </fieldset>
                                 <fieldset class="field-group" id="agent_found_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>Have you already found an agent?</h3>
                                    </div>
                                    <div class="form-group">
                                       <div class="field-label-pair">
                                          <div class="mb20">
                                             <div class="">
                                                <div class="btn-group" style="display:unset;">
                                                   <div class="centered mb20"><button type="button" id="ha-status-no-btn" class="green-btn" selectedvalue="1">Yes</button></div>
                                                   <div class="centered"><button type="button" id="ha-status-yes-btn" class="green-btn" selectedvalue="0">No</button></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="field-label-pair mb20" style="display: none;">
                                          <div class="centered mb20"><label class="input-label">When do you want to start?</label></div>
                                          <div class="input-body">
                                             <select class="select-input">
                                                <option value="">Please select...</option>
                                                <option value="Emergency—Today">Emergency — Today</option>
                                                <option value="Within1Week">Within 1 week</option>
                                                <option value="1–2Weeks">1–2 weeks</option>
                                                <option value="Morethan2weeks">More than 2 weeks</option>
                                                <option value="Timingisflexible">Timing is flexible</option>
                                             </select>
                                          </div>
                                          <div class="clear"></div>
                                       </div>
                                       <div class="mb20" style="display: inline;">
                                          By clicking "continue" (and subsequently completing your mortgage inquiry), 
                                          you are giving your consent to be contacted at the phone number you provide 
                                          (including wireless number) by HomeAdvisor, other service providers and/or 
                                          contractors.  Contacting you is for the purpose of confirming and scheduling 
                                          your home improvement project request and multiple contractor bids.  
                                          You understand that automated phone technology, by voice or text messages, 
                                          may be used to reach you.  Please note that providing consent does not 
                                          obligate you to purchase or use any product or service.  
                                          Click "continue" to agree and complete your mortgage inquiry.
                                       </div>
                                    </div>
                                 </fieldset>
                                 <?php /*
                                 <fieldset class="field-group" id="bank_name_field_group" style="display:none;">
                                    <div class="container-outer-header"><h3>Have a banking or credit account <br>with any of the following?.</h3> </div>
                                    <div class="form-group">
                                       <div class="">
                                          <div class="" id="BANK_OUTER_GROUP">
                                             <div class="btn-group checkbox-wrapper" id="BANK_INNER_GROUP" style="display:unset;">
                                                <input type="checkbox" name="bank_name[]" id="bank_X">
                                                <div class="checkbox">
                                                   <input type="checkbox" id="bank-bank-of-america-checkbox" class="checkbox required" value="bank_of_america" name="bank_name[]"><label for="bank-bank-of-america-checkbox">Bank of America</label>
                                                   <div class="clear"></div>
                                                </div>
                                                <div class="checkbox">
                                                   <input type="checkbox" id="bank-chase-checkbox" class="checkbox" value="chase" name="bank_name[]"><label for="bank-chase-checkbox">Chase</label>
                                                   <div class="clear"></div>
                                                </div>
                                                <div class="checkbox">
                                                   <input type="checkbox" id="bank-citi-checkbox" class="checkbox" value="citi" name="bank_name[]"><label for="bank-citi-checkbox">Citi</label>
                                                   <div class="clear"></div>
                                                </div>
                                                <div class="checkbox">
                                                   <input type="checkbox" id="bank-usaa-checkbox" class="checkbox" value="usaa" name="bank_name[]"><label for="bank-usaa-checkbox">USAA</label>
                                                   <div class="clear"></div>
                                                </div>
                                                <div class="checkbox">
                                                   <input type="checkbox" id="bank-wells-fargo-checkbox" class="checkbox" value="wells_fargo" name="bank_name[]"><label for="bank-wells-fargo-checkbox">Wells Fargo</label>
                                                   <div class="clear"></div>
                                                </div>
                                                <div class="checkbox">
                                                   <input type="checkbox" id="bank-other-checkbox" class="checkbox" value="other" name="bank_name[]"><label for="bank-other-checkbox">Other</label>
                                                   <div class="clear"></div>
                                                </div>
                                                <div class="buttons-south-text"><label>Ok to Click more than one</label></div>
                                                <div class="clear"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </fieldset>
                                 */ ?>
                                 <fieldset class="field-group" id="loan_amount_field_group" style="display:none">
                                    <div class="container-outer-header">
                                       <h3>How much additional money would <br>you like to borrow?</h3>
                                    </div>
                                    <div class="form-group">
                                       <!-- SLIDER -->
                                       <div><input type="hidden" id="loan_amount_field_group-input" name="loan_amount"></div>
                                       <div id="loan_amount-label" class="visible-xs slider-display-value slider-display-value-xs"></div>
                                       <div class="slidecontainer">
                                         <input type="range" min="5000" step="1000" max="500000" class="myslider" id="loan_amount">
                                       </div>
                                       <div class="slider-south-text"><label>(OK to estimate)</label></div>
                                       <!-- SLIDER -->
                                    </div>
                                 </fieldset>
                                 
                                 <fieldset class="field-group" id="postal_address_field_group" style="display:none;">
                                    <div class="form-group mb20">
                                       <div class="field-label-pair">
                                          <div class=""><label class=""></label></div>
									               <div class="input-label header"><label class="">Street Address</label></div>
                                          <div class="input-body">
                                             <input type="text" id="address" name="address" value="" maxlength="250" class="required" placeholder="Address">
                                          </div>
                                       </div>
                                       <div class="field-label-pair">
									            <div class=""><label class=""></label></div>
                                          <div class="input-label header"><label class="">Zip Code</label></div>
                                          <div class="input-body centered"><input type="text" id="zip" name="zip" value="" maxlength="5" class="required number_only" placeholder="Zip Code"></div>
                                       </div>
                                       <div style="width:100%;text-align:center;padding-top:10px;"><a style="text-decoration:underline;" href="privacy_policy.php">PRIVACY POLICY</a></div>
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="personal_info_field_group" style="display:none;">
                                    <div class="container-outer-header">
                                       <h3>Personal Information</h3>
                                    </div>
                                    <div class="form-group personal-details-slide">
                                       <div class="field-label-pair mb20">
                                          <div class="column-1-3 input-label header"><label class="" for="first_name">First Name</label></div>
                                          <div class="column-2-3 input-body"><input type="text" id="first_name" name="first_name" maxlength="100" class="required" placeholder="First Name"></div>
                                       </div>
                                       <div class="field-label-pair mb20">
                                          <div class="column-1-3 input-label header"><label class="" for="last_name">Last Name</label></div>
                                          <div class="column-2-3 input-body"><input type="text" id="last_name" name="last_name" maxlength="100" class="required" placeholder="Last Name"></div>
                                       </div>
                                       <div class="field-label-pair mb20">
                                          <div class="column-1-3 input-label header"><label class="" for="Email">Email</label></div>
                                          <div class="column-2-3 input-body"><input type="text" id="email" name="email" maxlength="250" class="email required" placeholder="Email Address"></div>
                                       </div>
                                       <div class="field-label-pair mb20">
                                          <div class="column-1-3 input-label header"><label class="" for="Phone">Phone Number</label></div>
                                          <div class="column-2-3 input-body"><input type="text" id="phone" name="phone" maxlength="10" class="required number_only" placeholder="Phone Number"></div>
                                       </div>
                                       <div class="field-label-pair mb20">
                                          <div class="column-1-3 input-label header"><label class="" for="dob">Date Of Birth</label></div>
                                          <div class="column-2-3 input-body"><input type="text" id="dob" name="dob" maxlength="12" class="required readonly" placeholder="Date of Birth"><span class="input-group-addon"><i class="fal fa-calendar-alt"></i> </span></div>
                                       </div>
                                       <div class="field-label-pair mb20">
                                          <div class="column-1-3 input-label header"><label class="" for="Income">Income</label></div>
                                          <div class="column-2-3 input-body"><input type="text" id="income" name="income" maxlength="8" class="required number_only" placeholder="Annual Income"></div>
                                       </div>
                                    </div>
                                    <input type="checkbox" name="terms[]" value="1" id="checkbox2">
                                       <div class="checkbox">
                                          <input type="checkbox" name="terms[]" value="2" id="checkbox3"><label for="checkbox3" style="padding-left:25px;padding-top:15px;"></label>
                                          By checking this box, I affirm that I have read, understand, and agree to the <a style="color:red;" href="terms.php">Terms of Use Agreement</a> and <a style="color:red;" href="privacy_policy.php">Privacy Policy</a>, I am providing here express written permission for lenders to review my information to do a credit check, to verify my information, to review my request for a mortgage or refinance loan and review my creditworthiness. I also provide my prior express consent to be contacted by lenders that want to offer me a loan using the phone number I provided above. Consent is not required as a condition of purchasing any services or products. <a style="color:red;" href="terms.php">Click to View Terms</a>
                                       </div>
                                      <div class="checkbox">
                                       <input type="checkbox" id="checkbox4" value="3" class="checkbox required" name="terms[]"><label for="checkbox4" style="padding-left:25px;padding-top:15px;"></label>
                                       By clicking “Submit”, I am providing my ESIGN signature and express written consent agreement to permit the EliteMortgageFinder.com, and parties calling on their behalf, to contact me at the telephone number I provided on this site for marketing purposes including through the use of automated technology, SMS/MMS messages, AI generative voice, and prerecorded and/or artificial voice messages. I acknowledge my consent is not required to obtain any good or service and to be connected with sellers that can fit my needs without providing content I can call 1-800-881-3660
                                      </div> 
                                    </div>
                                 </fieldset>
                                 <fieldset class="field-group" id="thank_you_block" style="display:none">
                                       <div class="field-label-pair">
                                           <p>Thanks for registering to EliteMortgageFinder.com. One of our lenders and/or financial ad agencies will reach out to your shortly either via email, telephone, sms or postal mail. Most business loan lenders will require additional information in order to process your application. Good Luck!</p>
                                       </div>
                                 </fieldset>
                                 <div class="clear"></div>
                              </div>
                           </div>
                           <div class="submit-btn-group column-1-1 abs-position">
                              <div>
                                 <button type="button" id="nextBtn" class="orange-btn" style="display:none;"><span>Next</span></button>
                              </div>	
                              <div>&nbsp;</div>
                              <div style="margin-top: 20px; display: inline;">
                                 <button type="button" style="display: none;" id="back_button" class="btn green-back-btn"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </aside>
         </div>
      </article>
   </section>
   <!--End Home Form--> 
   <!--Start why-choose-us-->
   <section class="why-choose-us">
      <article class="container">
		<div style="text-align:center;">
				<script language='JavaScript' type='text/javascript' src='https://ads.elitemate.com/adx.js'></script>
					<script language='JavaScript' type='text/javascript'>
					<!--
					   if (!document.phpAds_used) document.phpAds_used = ',';
					   phpAds_random = new String (Math.random()); phpAds_random = phpAds_random.substring(2,11);
					   document.write ("<" + "script language='JavaScript' type='text/javascript' src='");
					   document.write ("https://ads.elitemate.com/adjs.php?n=" + phpAds_random);
					   document.write ("&amp;what=zone:289&amp;target=_blank");
					   document.write ("&amp;exclude=" + document.phpAds_used);
					   if (document.referrer)
						  document.write ("&amp;referer=" + escape(document.referrer));
					   document.write ("'><" + "/script>");
					//-->
					</script><noscript>
					<a href='https://ads.elitemate.com/adclick.php?n=a6520b7d' target='_blank'><img src='https://ads.elitemate.com/adview.php?what=zone:289&amp;n=a6520b7d' border='0' alt=''></a></noscript>
				</div>
         <div class="title">
            <h3>Why Choose Us?</h3>
            <p>Get started with Elite Mortgage Finder to qualify for your mortgage in minutes</p>
         </div>
         <div class="row">
            <aside class="col-lg-4">
               <div class="choose-us-item">
                  <div class="icon"><span class="ficon flaticon-star"></span></div>
                  <h4>Expert Advisors<br>
                     Over 50 advisers are waiting for You
                  </h4>
                  <p>Whether you are a first-time home buyer or you have done this before, we have you covered! Compare home loan rates and mortgage types, calculate numbers and see if you prequalify.</p>
               </div>
               <!-- /.choose-us-item --> 
            </aside>
            <aside class="col-lg-4">
               <div class="choose-us-item">
                  <div class="icon"><span class="ficon flaticon-cogwheel"></span></div>
                  <h4>Professional<br>
                     We provide excellent service
                  </h4>
                  <p>If you have long-term goals for your current home, refinancing your mortgage can help. See if you prequalify to lower your mortgage rates or monthly payments.</p>
               </div>
               <!-- /.choose-us-item --> 
            </aside>
            <aside class="col-lg-4">
               <div class="choose-us-item">
                  <div class="icon"><span class="ficon flaticon-bookmark"></span></div>
                  <h4>Trusted<br>
                     We are always here to help your mortgage needs!
                  </h4>
                  <p>You’re in a good position if your home is worth more than you owe. See how home equity loans can be a smart choice.</p>
               </div>
               <!-- /.choose-us-item --> 
            </aside>
         </div>
         <!-- /.row --> 
      </article>
      <!-- /.container --> 
   </section>
   <!--End why-choose-us--> 
   <!--Start expert-guidance-->
   <section class="expert-guidance">
      <div class="opacity">
         <article class="container">
            <h3>Easy Process With Expert Guidance</h3>
            <div class="row">
			   
               <aside class="col-lg-4">
                  <div class="expert-item clearfix tran3s">
                     <span class="numb float-left p-color-bg round-border">1</span>
                     <h5 class="float-left">Financial Plan</h5>
                     <div class="clearfix"></div>
                     <p class="clearfix">A home equity loan is worth considering if you have a large, one-time expense, or if you want to consolidate debt and focus on paying it off. It offers fixed rates and a steady repayment schedule for the life of the loan.</p>
                     <!-- <a href="#" class="tran3s">Learn More <i class="fa fa-caret-right" aria-hidden="true"></i></a>  -->
                  </div>
                  <!-- /.expert-item --> 
               </aside>
               <!-- /.col -->
               <aside class="col-lg-4">
                  <div class="expert-item clearfix tran3s">
                     <span class="numb float-left p-color-bg round-border">2</span>
                     <h5 class="float-left">Expert Advise</h5>
                     <div class="clearfix"></div>
                     <p class="clearfix">We at Elite Mortgage Finders combine our expertise with the broad capabilities to focus on both your personal and business needs.</p>
                     <!-- <a href="#" class="tran3s">Learn More <i class="fa fa-caret-right" aria-hidden="true"></i></a> --> 
                  </div>
                  <!-- /.expert-item --> 
               </aside>
               <!-- /.col -->
               <aside class="col-lg-4">
                  <div class="expert-item clearfix tran3s">
                     <span class="numb float-left p-color-bg round-border">3</span>
                     <h5 class="float-left">Our Commitment To You</h5>
                     <div class="clearfix"></div>
                     <p class="clearfix">We stand by your side during these unprecedented times. Elite Mortgage Finders are taking actions to minimize the impact to our clients, partners and employees</p>
                     <!-- <a href="#" class="tran3s">Learn More <i class="fa fa-caret-right" aria-hidden="true"></i></a> --> 
                  </div>
                  <!-- /.expert-item --> 
               </aside>
               <!-- /.col --> 
            </div>
            <!-- /.row --> 
         </article>
         <!-- /.container --> 
      </div>
      <!-- /.opacity --> 
   </section>
   <!--End expert-guidance--> 
   <!--Start top-feature-->
   <section class="top-feature">
      <article class="container">
         <div class="row">
            <aside class="col-lg-4">
               <div class="single-feature clearfix">
                  <div class="icon-wrapper"><i class="fal fa-piggy-bank"></i></div>
                  <div class="icon-content">
                     <p>Up to $5M</p>
                     <h4><a href="#" class="tran3s">High Range Loan</a></h4>
                  </div>
                  <!-- /.text --> 
               </div>
            </aside>
            <aside class="col-lg-4">
               <div class="single-feature clearfix">
                  <div class="icon-wrapper"><i class="fal fa-chart-pie-alt"></i></div>
                  <div class="icon-content">
                     <p>From 5.60%</p>
                     <h4><a href="#" class="tran3s">Offers Low Interest</a></h4>
                  </div>
                  <!-- /.text --> 
               </div>
            </aside>
            <aside class="col-lg-4">
               <div class="single-feature clearfix">
                  <div class="icon-wrapper"><i class="fal fa-redo"></i></div>
                  <div class="icon-content">
                     <p>10 Days Process</p>
                     <h4><a href="#" class="tran3s">Fast &amp; Easy Process</a></h4>
                  </div>
                  <!-- /.text --> 
               </div>
            </aside>
         </div>
      </article>
   </section>
   <!--End top-feature--> 
</main>
<!--End main Part-->
<?php
$promo_code = isset($_REQUEST['promo_code'])?$_REQUEST['promo_code'] : '1';
$sub_id = isset($_REQUEST['sub_id']) ? $_REQUEST['sub_id'] : '123';
$subid = isset($_REQUEST['subid']) ? $_REQUEST['subid'] : '123';
$sub_id = !empty($sub_id) ? $sub_id : $subid;
$sub_id2 = isset($_REQUEST['sub_id2']) ? $_REQUEST['sub_id2'] : '';
$subid2 = isset($_REQUEST['subid2']) ? $_REQUEST['subid2'] : '';
$sub_id2 = !empty($sub_id2) ? $sub_id2 : $subid2;
?>
<!-- universal_leadid: $('#leadid_token').val() -->
<input type="hidden" name="promo_code" value="<?php echo $promo_code;?>" id="promo_code" />
<input type="hidden" name="sub_id" value="<?php echo $sub_id;?>" id="sub_id" />
<input type="hidden" name="sub_id2" value="<?php echo $sub_id2;?>" id="sub_id2" />
<input id="leadid_token" name="universal_leadid" value="" type="hidden"/>
<input type="hidden" name="xxTrustedFormCertUrl" id="xxTrustedFormCertUrl_0" value="">
<!-- Jornaya lead id -->
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
<!-- End Jornaya Lead Id -->
<!-- TrustedForm -->
<script type="text/javascript">
(function() {
var tf = document.createElement('script');
tf.type = 'text/javascript'; tf.async = true;
tf.src = ("https:" == document.location.protocol ? 'https' : 'http') + "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" + new Date().getTime() + Math.random();
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tf, s);
})();
</script>
<noscript>
<img src="https://api.trustedform.com/ns.gif" />
</noscript>
<!-- End TrustedForm -->
<?php include 'footer.php' ?>