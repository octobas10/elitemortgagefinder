$(document).ready(function () {
	// PROPERTY VALUE
	var propery_value=parseInt($('#propery_value').val()).toLocaleString(); 
	var propery_value1 = parseInt(parseInt($('#propery_value').val(), 10) + 5000).toLocaleString();
	$("#propery_value-label").html("$"+propery_value+' - '+"$"+propery_value1);
	$("#estimated_value_field_group-input").val("$"+propery_value+' - '+"$"+propery_value1);
	$('#propery_value').on('input', function() {
	  propery_value=parseInt($(this).val()).toLocaleString(); 
	  propery_value1 = parseInt(parseInt($(this).val(), 10) + 5000).toLocaleString();	
	  $("#propery_value-label").html("$"+propery_value+' - '+"$"+propery_value1);
	  $("#estimated_value_field_group-input").val("$"+propery_value+' - '+"$"+propery_value1);
	});
	// 1ST MORTGATE BALANCE
	var first_mortgage_balance=parseInt($('#first_mortgage_balance').val()).toLocaleString(); 
	var first_mortgage_balance1 = parseInt(parseInt($('#first_mortgage_balance').val(), 10) + 5000).toLocaleString();
	$("#first_mortgage_balance-label").html("$"+first_mortgage_balance+' - '+"$"+first_mortgage_balance1);
	$("#first_mortgage_balance_field_group-input").val("$"+first_mortgage_balance+' - '+"$"+first_mortgage_balance1);
	$('#first_mortgage_balance').on('input', function() {
		first_mortgage_balance=parseInt($(this).val()).toLocaleString(); 
		first_mortgage_balance1 = parseInt(parseInt($(this).val(), 10) + 5000).toLocaleString();
	   $("#first_mortgage_balance-label").html("$"+first_mortgage_balance+' - '+"$"+first_mortgage_balance1);
	   $("#first_mortgage_balance_field_group-input").val("$"+first_mortgage_balance+' - '+"$"+first_mortgage_balance1);
	});
	// INTEREST RATE 1ST MORTGATE BALANCE
	$("#first_mortgage_interest_rate-label").html("%"+$('#first_mortgage_interest_rate').val());
	$("#first_mortgage_interest_field_group-input").val("%"+$('#first_mortgage_interest_rate').val());
	$('#first_mortgage_interest_rate').on('input', function() {
		$("#first_mortgage_interest_rate-label").html("%"+$(this).val());
	 	$('#first_mortgage_interest_field_group-input').val("%"+$(this).val());
	});
	// DOWNPAYMENT
	var down_payment=parseInt($('#down_payment').val()).toLocaleString(); 
	var down_payment1 = parseInt(parseInt($('#down_payment').val(), 10) + 5000).toLocaleString();
	$("#down_payment-label").html("$"+down_payment+' - '+"$"+down_payment1);
	$("#down_payment_field_group-input").val("$"+down_payment+' - '+"$"+down_payment1);
	$('#down_payment').on('input', function() {
		down_payment=parseInt($(this).val()).toLocaleString(); 
		down_payment1 = parseInt(parseInt($(this).val(), 10) + 5000).toLocaleString();
		$("#down_payment-label").html("$"+down_payment+' - '+"$"+down_payment1);
	  	$('#down_payment_field_group-input').val("$"+down_payment+' - '+"$"+down_payment1);
	});
	// ADDITIONAL CASH
	var second_bal_inner=parseInt($('#second_bal_inner').val()).toLocaleString(); 
	var second_bal_inner1 = parseInt(parseInt($('#second_bal_inner').val(), 10) + 5000).toLocaleString();
	$("#second_bal_inner-label").html("$"+second_bal_inner+' - '+"$"+second_bal_inner1);
	$("#second_mortgage_field_group-input").val("$"+second_bal_inner+' - '+"$"+second_bal_inner1);
	$('#second_bal_inner').on('input', function() {
		second_bal_inner=parseInt($(this).val()).toLocaleString(); 
		second_bal_inner1 = parseInt(parseInt($(this).val(), 10) + 5000).toLocaleString();
		$("#second_bal_inner-label").html("$"+second_bal_inner+' - '+"$"+second_bal_inner1);
	  	$('#second_mortgage_field_group-input').val("$"+second_bal_inner+' - '+"$"+second_bal_inner1);
	});
	// INTEREST RATE 2nd MORTGATE BALANCE
	$("#second_mortgage_interest_rate-label").html("%"+$('#second_mortgage_interest_rate').val());
	$("#second_mortgage_interest_field_group-input").val("%"+$('#second_mortgage_interest_rate').val());
	$('#second_mortgage_interest_rate').on('input', function() {
		$("#second_mortgage_interest_rate-label").html("%"+$(this).val());
	 	$('#second_mortgage_interest_field_group-input').val("%"+$(this).val());
	});
	// ADDITIONAL CASH
	var additional_cash=parseInt($('#additional_cash').val()).toLocaleString(); 
	var additional_cash1 = parseInt(parseInt($('#additional_cash').val(), 10) + 5000).toLocaleString();
	$("#additional_cash-label").html("$"+additional_cash+' - '+"$"+additional_cash1);
	$("#additional_cash_field_group-input").val("$"+additional_cash+' - '+"$"+additional_cash1);
	$('#additional_cash').on('input', function() {
		additional_cash=parseInt($(this).val()).toLocaleString(); 
		additional_cash1 = parseInt(parseInt($(this).val(), 10) + 5000).toLocaleString();
		$("#additional_cash-label").html("$"+additional_cash+' - '+"$"+additional_cash1);
	  	$('#additional_cash_field_group-input').val("$"+additional_cash+' - '+"$"+additional_cash1);
	});

	

	
});	