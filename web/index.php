<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Rudy Campaign</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="https://tools.propelrr.com/rudycampaign/css/style.css" media="all"/>
<style>
   
   .gi-wrap {
      padding-bottom: 140px;
   }
   
   .form-wrapper.preload-overlay .wavy-loader {
      display: block !important;
   }
   
   .limit-field input[type="text"] {
      border-left: none !important;
      border-top: none !important;
      border-right: none !important;
   }

   .btn-takepicture {
   	display: none;
   }

   @media (max-width: 767px) {
	  .btn-takepicture {
	   	display: inline-block;
	   	margin-bottom: 5px;
	   }

	   .screenshot-wrap.mobile {
	   	overflow: hidden;
	   }
	}

	.screenshot-wrap img {
		background: #fff;
	}


</style>

<script src="https://tools.propelrr.com/rudycampaign/js/html5.js"></script>
</head>
<body>
<section id="main-container">
	<div class="popup-wrap popup-opt-in">
		<div class="popup-content">
			<div class="thankyou-page">
				<h2>Are you sure you want to submit this entry?</h2>
				<a href="#" class="btn form-submit">OK</a>
				<a href="#" class="btn btn-cancel-entry">Cancel</a>
			</div>
		</div>
	</div>
	<div class="popup-wrap popup-thankyou">
		<div class="popup-content">
			<a href="#" class="close-text"><i class="fa fa-times" aria-hidden="true"></i></a>
			<div class="thankyou-page">
				<h2>Thank you for uploading your entry! <br> <br> </h2>
				<p>Please stand by as we review your submission. You'll receive an SMS notification from us if your submission has been approved.</p>
			</div>
		</div>
	</div>
	<header></header>
	<section id="main-wrapper">
		<div class="container">
		
			<div class="tabs-menu">
				<ul>
					<li class="active"><a href="#formid">Entry</a></li>
					<li><a href="#gallery" id="gallery-menu">Gallery</a></li>
				</ul>
			</div>
		</div>
		<!-- <div id="formid" class="tabs-item"> -->
		<div id="formid" class="tabs-item" style="display: block;">
			<div class="container">
				<div class="intro-mainwrapper">
					<div class="intro-text">
						<!--<h2>#GandaNgGising Viber Stickers Raffle Contest</h2>-->
						<p style="margin-bottom:10px;">Gear up with something <strong>#TechnicallyCool</strong> for your next big adventure. From April 1, 2017 to April 30, 2017, you can trade in your old eyewear and helmet for a big discount on brand new gear.</p>
					</div>
					<div class="banner-img"><img src="https://tools.propelrr.com/rudycampaign/img/banner.jpg" alt=""></div>
					<div class="how-to-join">
						<div class="divider">
							<div class="fl-left">
								<h5 style="margin-bottom:10px;">How do I make the trade?</h5>
								
								<ul class=";">
									<li style="font-size: 15px;">Submit a photo of your branded performance eyewear or helmet using the form below</li>
									<li style="font-size: 15px;">After assessment, you will receive an official Rudy Project text message to avail the discount</li>
									<li style="font-size: 15px;">Trade in your old pair at the nearest Rudy Project store NOW!</li>
								</ul>
							</div>
							<div class="fl-right">
								<p><i> Note: Entries are subject to approval. Grounds for rejection include:</i></p>
								<ul>
									<li>Severe damage and scratching.</li>
									<li>Fake products.</li>
									<li>Missing parts.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="form-wrapper">
						<div class="wavy-loader">
							<span></span><span></span><span></span>
						</div>
						<form method="post" action="" class="contest-form">
							
							<div class="divider">
								<div class="fl-left">
									<div class="input-wrap">
										<label>Upload your photo.</label>
										<div class="file-field input-field">
											<!-- <div class="btn btn-takepicture">
												<span>Take a Picture</span>
												<input type="file" capture="camera" accept="image/*" id="imgInpMobile" onchange="this.setAttribute('value', this.value);">

											</div> -->
											<div class="btn">
												<span>Choose File</span>
												<input type="file" accept="image/*" id="imgInp" onchange="this.setAttribute('value', this.value);">
											</div>
											<div class="file-path-wrapper">
												<input class="file-path validate" type="text">
											</div>
											
										</div>

										<div class="screenshot-wrap mobile">
											<span class="screenshot-text">300 x 300 <span>(recommended)</span></span>
											<img src="" id="sw-item">
										</div>
									</div>	
									<div class="input-wrap captionfield">
										<label>Caption your entry #TechnicallyCool.</label>
										<textarea colspan="6" rowspan="6" name="limitedtextarea" id="limitedtextarea" onKeyDown="limitText(this.form.limitedtextarea,this.form.countdown,250);"  onKeyUp="limitText(this.form.limitedtextarea,this.form.countdown,250);"></textarea>
										<p class="caption-error" style="display: none; color: red; margin: 5px 0 0 0;">Please include #TechnicallyCool in your caption.</p>
										<p class="caption-info">(Maximum characters: 250) <span class="limit-field">You have <input readonly type="text" name="countdown" size="3" value="250"> characters left.</span></p>
									</div>
									<!-- <h3>Let us connect with you!</h3> -->
									<div class="divider">
										<div class="input-wrap half">
											<label>Name: </label>
											<input type="text" id="first-name" name="" onchange="this.setAttribute('value', this.value);">
										</div>
									</div>
									<div class="input-wrap input-inline">
										<label>Sex:</label>
										<div class="custom-radio">
										  	<input type="radio" id="radio01" name="radio" />
										  	<label for="radio01"><span></span>Male</label>
										</div>
										<div class="custom-radio">
										  	<input type="radio" id="radio02" name="radio" />
										  	<label for="radio02"><span></span>Female</label>
										</div>
									</div>
									<div class="divider">
										<div class="input-wrap half">
											<label>E-mail Address</label>
											<input type="email" id="account-email" name="" onchange="this.setAttribute('value', this.value);">
										</div>
										<div class="input-wrap half">
											<label>Contact Number</label>
											<input type="tel" id="contact-num" name="" placeholder="e.g 09171234567" minlength="11" maxlength="11" onchange="this.setAttribute('value', this.value);"/>
										</div>
									</div>
									<div class="input-wrap address-field  input-inline">
										<label>Preferred Store :</label>
										<select name="store" id="store">
											<option value="Alabang Town Center">Alabang Town Center</option>
											<option value="SM Mall of Asia">SM Mall of Asia</option>
											<option value="Podium">Podium</option>
											<option value="Trinoma">Trinoma</option>
											<option value="D'Mall Boracay">D'Mall Boracay</option>
											<option value="SM City Cebu">SM City Cebu</option>
										</select>
									</div>
									<div class="input-wrap text-center"> 
										<input type="submit" class="btn" name="" value="Submit">
									</div>
								</div>
								<div class="fl-right">
									<div class="screenshot-wrap">
										<span class="screenshot-text">300 x 300 <span>(recommended)</span></span>
										<img src="" id="sw-item">
									</div>
								</div>
								</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>

		<div id="gallery" class="tabs-item" >
			<div class="flex-container">
				
			</div>
			<div class="btn-wrap bp-center bp-rel load-more-cont">
				<a href="#" class="load-more-btn"> Load More</a>
			</div>
		</div>
	</section>

</section>
<footer></footer>
<script src="https://tools.propelrr.com/rudycampaign/js/lib/jquery.min.js"></script>
<script src="https://tools.propelrr.com/rudycampaign/js/jquery.appear.js"></script>
<script src="https://tools.propelrr.com/rudycampaign/js/materialize.js"></script>
<script src="https://tools.propelrr.com/rudycampaign/js/plugins.js"></script>
<script src="https://tools.propelrr.com/rudycampaign/js/custom.js"></script>

<script type="text/javascript">
    function limitText(limitField, limitCount, limitNum) {
        if (limitField.value.length > limitNum) {
            limitField.value = limitField.value.substring(0, limitNum);
        } else {
            limitCount.value = limitNum - limitField.value.length;
        }
    }
	
	$("#imgInpMobile").change(function(){
        readURL(this);
    });

	function readURLmobile(input) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	            $('.screenshot-wrap.mobile img#sw-item').attr('src', e.target.result).css({'display' : 'block'});
	            $('.form-wrapper textarea').focus();
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}

	function detectmob() {
	   if(window.innerWidth >= 800) {
	     return true;
	   } else {
	     return false;
	   }
	}

	if (detectmob()){
		top.location.href="http://bit.ly/2eC2cfw";
	}

	$('.btn-cancel-entry').click(function(e){
		e.preventDefault();
		$('.popup-opt-in').removeClass('active');
		$('.form-wrapper').removeClass('preload-overlay');
	});

</script>
</body>
</html>
