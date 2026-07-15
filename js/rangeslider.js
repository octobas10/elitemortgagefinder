$(document).ready(function () {
	// PROPERTY VALUE
	var property_value=parseInt($('#property_value').val()).toLocaleString(); 
	var property_value1 = parseInt(parseInt($('#property_value').val(), 10) + 5000).toLocaleString();
	$("#property_value-label").html("$"+property_value+' - '+"$"+property_value1);
	//$("#estimate_value_field_group-input").val("$"+property_value+' - '+"$"+property_value1);
	$("#estimate_value_field_group-input").val(property_value);
	$('#property_value').on('input', function() {
	  property_value=parseInt($(this).val()).toLocaleString(); 
	  property_value1 = parseInt(parseInt($(this).val(), 10) + 5000).toLocaleString();	
	  $("#property_value-label").html("$"+property_value+' - '+"$"+property_value1);
	  //$("#estimate_value_field_group-input").val("$"+property_value+' - '+"$"+property_value1);
	  $("#estimate_value_field_group-input").val(property_value);
	});
	// 1ST MORTGATE BALANCE
	var first_balance=parseInt($('#first_balance').val()).toLocaleString(); 
	var first_balance1 = parseInt(parseInt($('#first_balance').val(), 10) + 5000).toLocaleString();
	$("#first_balance-label").html("$"+first_balance+' - '+"$"+first_balance1);
	//$("#first_balance_field_group-input").val("$"+first_balance+' - '+"$"+first_balance1);
	$("#first_balance_field_group-input").val(first_balance);
	$('#first_balance').on('input', function() {
		first_balance=parseInt($(this).val()).toLocaleString(); 
		first_balance1 = parseInt(parseInt($(this).val(), 10) + 5000).toLocaleString();
		$("#first_balance-label").html("$"+first_balance+' - '+"$"+first_balance1);
	   $("#first_balance_field_group-input").val(first_balance);
	   //$("#first_balance_field_group-input").val("$"+first_balance+' - '+"$"+first_balance1);
	});
	// INTEREST RATE 1ST MORTGATE BALANCE
	$("#first_interest_rate-label").html("%"+$('#first_interest_rate').val());
	//$("#first_interest_rate_field_group-input").val("%"+$('#first_interest_rate').val());
	$("#first_interest_rate_field_group-input").val($('#first_interest_rate').val());
	$('#first_interest_rate').on('input', function() {
		$("#first_interest_rate-label").html("%"+$(this).val());
	 	//$('#first_interest_rate_field_group-input').val("%"+$(this).val());
	 	$("#first_interest_rate_field_group-input").val($(this).val());
	});
	// DOWNPAYMENT
	var down_payment=parseInt($('#down_payment').val()).toLocaleString(); 
	var down_payment1 = parseInt(parseInt($('#down_payment').val(), 10) + 5000).toLocaleString();
	$("#down_payment-label").html("$"+down_payment+' - '+"$"+down_payment1);
	//$("#down_payment_field_group-input").val("$"+down_payment+' - '+"$"+down_payment1);
	$("#down_payment_field_group-input").val(down_payment);
	$('#down_payment').on('input', function() {
		down_payment=parseInt($(this).val()).toLocaleString(); 
		down_payment1 = parseInt(parseInt($(this).val(), 10) + 5000).toLocaleString();
		$("#down_payment-label").html("$"+down_payment+' - '+"$"+down_payment1);
	  	//$('#down_payment_field_group-input').val("$"+down_payment+' - '+"$"+down_payment1);
	  	$('#down_payment_field_group-input').val(down_payment);
	});
	// SECOND BALANCE
	var second_balance=parseInt($('#second_balance').val()).toLocaleString(); 
	var second_balance1 = parseInt(parseInt($('#second_balance').val(), 10) + 5000).toLocaleString();
	$("#second_balance-label").html("$"+second_balance+' - '+"$"+second_balance1);
	//$("#second_balance_field_group-input").val("$"+second_balance+' - '+"$"+second_balance1);
	$("#second_balance_field_group-input").val(second_balance);
	$('#second_balance').on('input', function() {
		second_balance=parseInt($(this).val()).toLocaleString(); 
		second_balance1 = parseInt(parseInt($(this).val(), 10) + 5000).toLocaleString();
		$("#second_balance-label").html("$"+second_balance+' - '+"$"+second_balance1);
	  	//$('#second_balance_field_group-input').val("$"+second_balance+' - '+"$"+second_balance1);
	  	$("#second_balance_field_group-input").val(second_balance);
	});
	// INTEREST RATE 2nd MORTGATE BALANCE
	$("#second_interest_rate-label").html("%"+$('#second_interest_rate').val());
	//$("#second_interest_rate_field_group-input").val("%"+$('#second_interest_rate').val());
	$("#second_interest_rate_field_group-input").val($('#second_interest_rate').val());
	$('#second_interest_rate').on('input', function() {
		$("#second_interest_rate-label").html("%"+$(this).val());
	 	//$('#second_interest_rate_field_group-input').val("%"+$(this).val());
	 	$('#second_interest_rate_field_group-input').val($(this).val());
	});
	// ADDITIONAL CASH
	var additional_cash=parseInt($('#additional_cash').val()).toLocaleString(); 
	var additional_cash1 = parseInt(parseInt($('#additional_cash').val(), 10) + 5000).toLocaleString();
	$("#additional_cash-label").html("$"+additional_cash+' - '+"$"+additional_cash1);
	//$("#additional_cash_field_group-input").val("$"+additional_cash+' - '+"$"+additional_cash1);
	$("#additional_cash_field_group-input").val(additional_cash);
	$('#additional_cash').on('input', function() {
		additional_cash=parseInt($(this).val()).toLocaleString(); 
		additional_cash1 = parseInt(parseInt($(this).val(), 10) + 5000).toLocaleString();
		$("#additional_cash-label").html("$"+additional_cash+' - '+"$"+additional_cash1);
	  	//$('#additional_cash_field_group-input').val("$"+additional_cash+' - '+"$"+additional_cash1);
	  	$("#additional_cash_field_group-input").val(additional_cash);
	});
	// LTV 
	$("#ltv_percentage-label").html("%"+$('#ltv_percentage').val());
	//$("#ltv_percentage_field_group-input").val("%"+$('#ltv_percentage').val());
	$("#ltv_percentage_field_group-input").val($('#ltv_percentage').val());
	$('#ltv_percentage').on('input', function() {
		$("#ltv_percentage-label").html("%"+$(this).val());
	 	//$('#ltv_percentage_field_group-input').val("%"+$(this).val());
	 	$('#ltv_percentage_field_group-input').val($(this).val());
	});
	// LOAN AMOUNT 
	var loan_amount=parseInt($('#loan_amount').val()).toLocaleString(); 
	$("#loan_amount-label").html("$"+loan_amount);
	$("#loan_amount_field_group-input").val(loan_amount);
	$('#loan_amount').on('input', function() {
	 	loan_amount=parseInt($(this).val()).toLocaleString(); 
		$("#loan_amount-label").html("$"+loan_amount);
	  	$("#loan_amount_field_group-input").val(loan_amount);
	});
});	