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
    var curTab = 'property_type_field_group';var prevTab = '';
    $('.field-group').first().show();
    $('#nextBtn').hide();
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
                url: 'api/customer.php?api_token=1&tab='+curTab+'&tab_value='+select_value+'&universal_leadid='+$('#leadid_token').val()+'&promo_code='+promo_code+'&sub_id='+sub_id+'&sub_id2='+sub_id2,
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
                      var hideButton = json['hidebutton'];
                      var set_min_max = json['set_min_max'];
                      if(set_min_max == '1'){
                        var ranger = json['ranger'];
                        var min = json['min'];
                        var max = json['max'];
                         $("#"+ranger).attr('min',min);
                         $("#"+ranger).attr('max',max);
                         var max_input = parseInt(parseInt(max, 10)).toLocaleString();
                         var max_input1 = parseInt(parseInt(max, 10) + 5000).toLocaleString();
                          //alert("$"+max_input+' - '+"$"+max_input1)
                         //$("[name='"+ranger+"']").val("$"+max_input+' - '+"$"+max_input1)
                      }
                      if(hideButton == 1){
                         $("#nextBtn").hide();$("#nextBtn").parent().hide();
                      }else{
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
        if($(this).attr('selectedvalue') == 'yes'){
          var block_id = $(this).attr('id');
          $("#"+block_id+"-block").show();
          $("#nextBtn").show();$("#nextBtn").parent().show();
        }
    });
    // VALIDATIONS
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

      /*$("#mortfinder").validate({
        ignore: [],
        rules: {
          "terms[]": {
            required: true,
            minlength: 1
          },
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
        },
        errorLabelContainer: ".js-errors",
        errorClass:"invalid",
        errorPlacement: function(error, element) {
          return true;
        },
        messages: {
          "terms[]": "Please select at least one checkbox",
        },
      });*/

    });
    /*$("#mortfinder").validate({
       errorClass:"invalid",
       errorPlacement: function(error, element) {
          return true;
       }
    });*/
     $('#back_button').click(function() {
        var prevTab = $("#"+curTab).prev('fieldset').attr("id");
        $("#"+curTab).hide();
        $("#"+prevTab).show();
        curTab = prevTab;
        if(prevTab == 'property_type_field_group'){
            $('#back_button').hide();
        }
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
      }else{
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
    // VALIDATIONS
 });
function resetForm($form) {
    $form.find('input:text, input:password, input, input:file, select, textarea').val('');
    $form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
}