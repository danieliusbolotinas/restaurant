Stripe.setPublishableKey('pk_test_mvsBdQhKjLWqXZsi30Zv5Za8');

// var $form = $('#checkout-form');

// $form.submit(function(event){
// 	$('charge-error').addClass('hidden');
// 	$form.find('button').prop('disabled', true);
// 	Stripe.card.createToken({
//   		number: $('#card-number').val(),
//   		cvc: $('#card-cvc').val(),
//   		exp_month: $('#card-expiry-month').val(),
//   		exp_year: $('#card-expiry-year').val()
//   		name: $('#card-name').val()
// 	}, stripeResponseHandler);
// 	return false;
// });

// function stripeResponseHandler(status, response) {
// 	if (response.error) {
// 		$('charge-error').removeClass('hidden');
// 		$('charge-error').text(response.error.message);
// 		$form.find('button').prop('disabled', false);
// 	} else {
// 		var token = response.id;
// 		$form.append($('<input type="hidden" name="stripeToken" />').val(token));

// 		$form.get(0).submit();
// 	}
// }






// $(function() {
//   var $form = $('#payment-form');
//   $form.submit(function(event) {
//     // Disable the submit button to prevent repeated clicks:
//     $form.find('.submit').prop('disabled', true);

//     // Request a token from Stripe:
//     Stripe.card.createToken({
//     	number: $('#card-number').val(),
//   		cvc: $('#card-cvc').val(),
//   		exp_month: $('#card-expiry-month').val(),
//   		exp_year: $('#card-expiry-year').val()
//   		name: $('#card-name').val()

//     }$form, stripeResponseHandler);

//     // Prevent the form from being submitted:
//     return false;
//   });
// });



// function stripeResponseHandler(status, response) {
//   // Grab the form:
//   var $form = $('#payment-form');

//   if (response.error) { // Problem!

//     // Show the errors on the form:
//     $form.find('.payment-errors').text(response.error.message);
//     $form.find('.submit').prop('disabled', false); // Re-enable submission

//   } else { // Token was created!

//     // Get the token ID:
//     var token = response.id;

//     // Insert the token ID into the form so it gets submitted to the server:
//     $form.append($('<input type="hidden" name="stripeToken">').val(token));

//     // Submit the form:
//     $form.get(0).submit();
//   }
// };
