<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V14</title>
    
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>images/icons/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="<?= base_url('Main');?>">
				
				<div class="contact100-form-title" >
                    <h1 style="font-size:30px;">LOGIN</h1>
                    <h4 style="font-size:10px;"><?= $this->session->flashdata('message'); ?></h4>
                  </div>

				  <label class="label-input100" for="email">Email Address *</label>
				<div class="wrap-input100">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com"  value="<?= set_value('email'); ?>" >
					<?= form_error('email','<small class="text-danger pl-3">', '</small>')?>
					<span class="focus-input100"></span>
				</div>


				<label class="label-input100" for="password">Password</label>
				<div class="wrap-input100">
					<input id="password" class="input100" type="password" name="password" placeholder="password" value="<?= set_value('password'); ?>" >
					<?= form_error('password','<small class="text-danger pl-3">', '</small>')?>
					<span class="focus-input100"></span>
				</div>

			

				<div class="container-contact100-form-btn">
					<button type="submit" class="contact100-form-btn" >
						<span>
							Submit
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
                    </button>
				</div>
		
				<a style="margin-left:40%;margin-top:3%" href="<?= base_url('Main/register/'); ?>">create an Account!</a>
					
            </form>
           
		</div>
    </div>
    



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
