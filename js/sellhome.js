(function ($) {
  'use strict';

  function scrollToSellHomeForm() {
    var $target = $('#sell-home-form');
    if (!$target.length) {
      return;
    }
    var headerOffset = ($('.site-header').outerHeight() || 0) + 16;
    var top = $target.offset().top - headerOffset;
    $('html, body').stop(true).animate({ scrollTop: Math.max(0, top) }, 450);
  }

  $(function () {
    $('.sellhome-hero-cta').on('click', function (e) {
      e.preventDefault();
      scrollToSellHomeForm();
    });

    if (window.location.hash === '#sell-home-form') {
      setTimeout(scrollToSellHomeForm, 100);
    }

    var $form = $('#sellhomeform');
    if (!$form.length) {
      return;
    }

    if ($.fn.datetimepicker) {
      $('#dob').datetimepicker({
        format: 'MM/DD/YYYY',
        maxDate: moment().subtract(18, 'years')
      });
    }

    $form.on('keypress', '.number_only', function (e) {
      var charCode = e.which ? e.which : e.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
      }
      return true;
    });

    $form.validate({
      errorClass: 'sellhome-error-msg',
      errorElement: 'div',
      highlight: function (element) {
        $(element).addClass('sellhome-field-error');
      },
      unhighlight: function (element) {
        $(element).removeClass('sellhome-field-error');
      },
      ignore: [],
      rules: {
        'terms[]': { required: true },
        phone: { minlength: 10, maxlength: 10 },
        zip: { minlength: 5, maxlength: 5 }
      },
      messages: {
        'terms[]': 'Please agree to the Terms and Privacy Policy to continue.'
      },
      errorPlacement: function (error, element) {
        if (element.attr('type') === 'checkbox') {
          var $box = element.closest('.sellhome-consent-box');
          if ($box.length) {
            error.insertAfter($box);
          } else {
            error.insertAfter(element.closest('.sellhome-check'));
          }
        } else if (element.is('select')) {
          error.insertAfter(element.closest('.sellhome-select-wrap'));
        } else {
          error.insertAfter(element);
        }
      }
    });

    $form.on('submit', function (e) {
      e.preventDefault();
      $('#sellhome-error').hide().text('');

      if (!$form.valid()) {
        return;
      }

      var $btn = $('#sellhomesubmit');
      $btn.prop('disabled', true).text('Submitting...');

      $.ajax({
        url: 'api/customer.php?api_token=1&action=sellhome_submit',
        type: 'post',
        dataType: 'json',
        data: $form.serialize() +
          '&universal_leadid=' + encodeURIComponent($('#leadid_token').val() || '') +
          '&xxTrustedFormCertUrl=' + encodeURIComponent($('#xxTrustedFormCertUrl_0').val() || ''),
        success: function (json) {
          if (json && json.success === 'success') {
            $form.hide();
            $('#sellhome-success').show();
            $('html, body').animate({ scrollTop: $('#sell-home-form').offset().top - 40 }, 400);
          } else {
            $('#sellhome-error')
              .text((json && json.message) ? json.message : 'Something went wrong. Please try again.')
              .show();
            $btn.prop('disabled', false).text('Get My Sell-Home Quote');
          }
        },
        error: function () {
          $('#sellhome-error').text('Unable to submit right now. Please try again.').show();
          $btn.prop('disabled', false).text('Get My Sell-Home Quote');
        }
      });
    });
  });
})(jQuery);
