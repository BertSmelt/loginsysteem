<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Page Title</title>

    <base href="/" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/css/uikit.min.css" />
  </head>

  <body>
    <div class="uk-section uk-container">
  		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
  			<form class="uk-form-stacked js-login">

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">E-mail</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="email@email.com">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text1">Wachtwoord</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text1" type="password" required="required" placeholder="Uw wachtwoord">
			        </div>
			    </div>

				<div class="uk-margin">
			        <button class="uk-button uk-button-default" type="submit">Login</button>
			    </div>
			</form>
  		</div>
  	</div> 
    <!--JQuery is required-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.5/js/uikit-icons.min.js"></script>
  </body>
</html>
