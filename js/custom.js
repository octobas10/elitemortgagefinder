//stellarnav
jQuery(document).ready(function ($) {
jQuery('.stellarnav').stellarNav({
theme: 'dark',
breakpoint: 1023,
position: 'right',
phoneBtn: '',
locationBtn: ''
});
});
//============= slick slider =============

//Main Banner Start
$('.slider').slick({
  draggable: true,
  arrows: false,
  dots: true,
  fade: true,
  autoplay: true,
  autoplaySpeed: 5000,
  speed: 1000,
  infinite: true,
  cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
  touchThreshold: 100
});
//sticky Header //
$(window).scroll(function () {
var scroll = $(window).scrollTop();
if (scroll >= 700) {
  $(".site-header").addClass("sticky");
} else {
  $(".site-header").removeClass("sticky");
}
});

$('.continue').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});
$('.back').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});

 $(function() {
    var curTab = 'mortgage_lead_type_field_group';var prevTab = '';
    $('.field-group').first().show();
    $("#nextBtn").hide();$("#nextBtn").parent().hide();
    $('#nextBtn , .green-btn , .btn_main_kick_start, .property_type').click(function() {
         if($(this).attr('id') == 'nextBtn'){
            var select_value = $('#'+curTab+'-input').val();
         }else{
            var select_value = $(this).attr('selectedvalue');
         }
         if ($("#mortfinder").valid()) {
      		var sub_id2 = $("#sub_id2").val();
      		var sub_id = $("#sub_id").val();
      		var promo_code = $("#promo_code").val();
            $.ajax({
                url: 'api/customer.php?api_token=1&action=process&tab='+curTab+'&tab_value='+select_value+'&universal_leadid='+$('#leadid_token').val()+'&xxTrustedFormCertUrl='+$('#xxTrustedFormCertUrl_0').val()+'&promo_code='+promo_code+'&sub_id='+sub_id+'&sub_id2='+sub_id2,
                type: 'post',
                data: $('#'+curTab+' input[type=\'text\'], #'+curTab+' input[type=\'hidden\'], #'+curTab+' input[type=\'radio\']:checked, #'+curTab+' input[type=\'checkbox\']:checked, #'+curTab+' select, #'+curTab+' textarea'),
                dataType: 'json',
                crossDomain: true,
                beforeSend: function() {
                   $('#nextBtn').button('loading');
                },
                complete: function() {
                   $('#nextBtn').button('reset');
                },
                success: function(json) {
                   if (json['success'] = 'success') {
                      prevTab = curTab;
                      curTab = json['nextstep'];
                      $("#"+prevTab).hide();
                      $("#"+curTab).show(500);
                      var set_min_max = json['set_min_max'];
                      $("#buyorrefinance").html(json['buyorrefinance']);
                      if(set_min_max == '1'){
                        var ranger = json['ranger'];
                        var min = json['min'];
                        var max = json['max'];
                         $("#"+ranger).attr('min',min);
                         $("#"+ranger).attr('max',max);
                         var max_input = parseInt(parseInt(max, 10)).toLocaleString();
                         var max_input1 = parseInt(parseInt(max, 10) + 5000).toLocaleString();
                      }
                      $("#nextBtn").hide();$("#nextBtn").parent().hide();
                      if(json['hidebuttons'] == 'show'){
                        $("#nextBtn").show();$("#nextBtn").parent().show();
                      }
                      if(curTab =='thank_you_block'){
                         $("#nextBtn").hide();
                         $("#prevBtn").hide();
                      }
                      $("#back_button").show();
                   }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                   alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
         }
    });

    $('.green-btn-2').click(function() {
        if($(this).attr('selectedvalue') == '1'){
          var block_id = $(this).attr('id');
          $("#"+block_id+"-block").show();
          $("#nextBtn").show();$("#nextBtn").parent().show();
        }
    });
    // VALIDATIONS
    $('#back_button').click(function() {
        //var prevTab = $("#"+curTab).prev('fieldset').attr("id");
        $.ajax({
            url: 'api/customer.php?api_token=1&action=backbutton&tab='+curTab,
            type: 'post',
            dataType: 'json',
            crossDomain: true,
            beforeSend: function() {
               $('#nextBtn').button('loading');
            },
            complete: function() {
               $('#nextBtn').button('reset');
            },
            success: function(json) {
                curTab = json['prevstep'];
                $("#"+json['prevstep']).show(500);
                $("#"+json['curstep']).hide();
                $("#nextBtn").hide();$("#nextBtn").parent().hide();
                if(json['hidebuttons'] == 'show'){
                    $("#nextBtn").show();$("#nextBtn").parent().show();
                }
                if(json['prevstep'] == 'mortgage_lead_type_field_group'){
                    $('#back_button').hide();
                }
                $("#buyorrefinance").html(json['buyorrefinance']);
            },
            error: function(xhr, ajaxOptions, thrownError) {
               alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
       /* $("#"+curTab).hide();
        $("#"+prevTab).show();
        curTab = prevTab;*/
       
    });
    $("#contactus").validate({
       errorClass:"invalid",
       errorPlacement: function(error, element) {
          return true;
       }
    });
    $('#contactBtn').click(function() {
      if ($("#contactus").valid()) {
          $.ajax({
            type: "POST",
            url: "lib/process.php",
            dataType: 'json',
            data: $('#contactus').serialize(),
            success: function (json) {
              $('.form-message').html(json['message']);
              $('.form-message').show();
              resetForm($('#contactus'));
            },
            error: function (json) {
              $('.form-message').html(json['message']);
              $('.form-message').show();
              resetForm($('#contactus'));
            }
          });
      }
    });
    $('#subscribebtn').click(function() {
      if ($("#subscribeform").valid()) {
        $("#subscribemsg").html("Your email subcribed successfully");
      }
    });
    $("#subscribeform").validate({
       errorClass:"invalid",
       errorPlacement: function(error, element) {
          return true;
       }
    });
    $(".number_only").on("keypress keyup blur", function(event) {
      $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
      if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
      }
    });

    $('.number_float_only').keypress(function(event) {
      if (event.which != 46 && (event.which < 47 || event.which > 59)) {
        event.preventDefault();
        if ((event.which == 46) && ($(this).indexOf('.') != -1)) {
          event.preventDefault();
        }
      }
    });
    // VALIDATIONS
    $(".mxlen_2").attr("maxlength", 2);
    $(".mxlen_3").attr("maxlength", 3);
    $(".mxlen_4").attr("maxlength", 4);
    $(".mxlen_5").attr("maxlength", 5);
    $(".mxlen_6").attr("maxlength", 6);
    $(".mxlen_7").attr("maxlength", 7);
    $(".mxlen_8").attr("maxlength", 8);
    $(".mxlen_9").attr("maxlength", 9);
    $(".mxlen_10").attr("maxlength", 10);
    $(".mxlen_14").attr("maxlength", 14);
    $(".mxlen_15").attr("maxlength", 15);
    $(".mxlen_16").attr("maxlength", 16);
    $(".mxlen_20").attr("maxlength", 20);
    $(".mxlen_23").attr("maxlength", 23);
    $(".mxlen_25").attr("maxlength", 25);
    $(".mxlen_30").attr("maxlength", 30);
    $(".mxlen_35").attr("maxlength", 35);
    $(".mxlen_40").attr("maxlength", 40);
    $(".mxlen_45").attr("maxlength", 45);
    $(".mxlen_50").attr("maxlength", 50);
    $(".mxlen_55").attr("maxlength", 55);
    $(".mxlen_60").attr("maxlength", 60);
    $(".mxlen_65").attr("maxlength", 65);
    $(".mxlen_70").attr("maxlength", 70);
    $(".mxlen_75").attr("maxlength", 75);
    $(".mxlen_80").attr("maxlength", 80);
    $(".mxlen_85").attr("maxlength", 85);
    $(".mxlen_90").attr("maxlength", 90);
    $(".mxlen_95").attr("maxlength", 95);
    $(".mxlen_100").attr("maxlength", 100);
    $(".mxlen_105").attr("maxlength", 105);
    $(".mxlen_110").attr("maxlength", 110);
    $(".mxlen_115").attr("maxlength", 115);
    $(".mxlen_120").attr("maxlength", 120);
    $(".mxlen_125").attr("maxlength", 125);
    $(".mxlen_130").attr("maxlength", 130);
    $(".mxlen_135").attr("maxlength", 135);
    $(".mxlen_140").attr("maxlength", 140);
    $(".mxlen_145").attr("maxlength", 145);
    $(".mxlen_150").attr("maxlength", 150);
    $(".mxlen_155").attr("maxlength", 155);
    $(".mxlen_160").attr("maxlength", 160);
    $(".mxlen_165").attr("maxlength", 165);
    $(".mxlen_170").attr("maxlength", 170);
    $(".mxlen_175").attr("maxlength", 175);
    $(".mxlen_180").attr("maxlength", 180);
    $(".mxlen_185").attr("maxlength", 185);
    $(".mxlen_190").attr("maxlength", 190);
    $(".mxlen_195").attr("maxlength", 195);
    $(".mxlen_200").attr("maxlength", 200);

 });

$('#dob').datetimepicker({format: 'YYYY-MM-DD',maxDate: moment().add(-18, 'y').toDate()});


function resetForm($form) {
    $form.find('input:text, input:password, input, input:file, select, textarea').val('');
    $form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
}

$(document).ready(function() {
  $(document).ready(function() {
      $("#mortfinder").validate({
        rules: {
          "terms[]": {
            required: true,
            minlength: 1
          },
           "bank_name[]": {
            required: true,
            minlength: 1
          },
        },
        errorClass:"invalid",
        errorLabelContainer: ".js-errors",
        errorPlacement: function(error, element) {
            if (element.attr("type") == "checkbox"){
                error.insertAfter(element)
            }else{
                return true;
            }
        },
        messages: {
          "terms[]": "Please select both the terms",
          "bank_name[]": "Please select at least one Bank",
        },
      });
    });
});