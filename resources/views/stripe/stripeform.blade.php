<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>

	<form action="/admin/stripe" method="POST">
		{{ csrf_field() }}
		  <script
		    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		    data-key="{{ config('services.stripe.key') }}"
		    data-amount="2500"
		    data-name="Some Book"
		    data-description="Widget"
		    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
		    data-locale="auto"
		    data-zip-code="true">
		  </script>
		</form>
</body>
</html>