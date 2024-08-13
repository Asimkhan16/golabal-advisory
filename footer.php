<section class="form-sec py-md-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="form-left-cont">
					<h2 class="animation-element slide-top">Get in Touch for Expert Compressed Air Solutions</h2>
					<p>We're here to help with all your compressed air needs. Reach out to our knowledgeable team for personalized support and solutions tailored to your specific requirements. At Maxair, your satisfaction is our priority.</p>
					<p><a href="mailto:someone@example.com"><img class="me-2" src="images/mail.webp" alt="mail icon">loreamipsim@gmail.com</a></p>
					<p><a href="tel:9945662282"><img class="me-2" src="images/phone.webp" alt="ph icon">9945662282</a></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-wrap">
					<form>
						<div class="banner-user-details-wrap row">
							<div class="single user-img-details col-md-12">
								<div class="d-flex icon-input mb-4">
									<input class="form-control form-1" type="text" id="contact_name"
										placeholder="Name" required>
								</div>
							</div>
							<!-- <div class="single user-img-details col-md-6">
								<div class="d-flex icon-input mb-4">
									<input class="form-control form-1" type="text" id="contact_last_name"
										placeholder="Last Name">
								</div>
							</div> -->
							<!-- <div class="single user-img-details col-md-6">
								<div class="d-flex icon-input mb-4">
									<input class="form-control form-1" type="number" id="contact_number"
										placeholder="Mobile No*" maxlength="10"
										oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
								</div>
							</div> -->
							<div class="single user-img-details col-md-12">
								<div class="d-flex icon-input mb-4">
									<input class="form-control form-1" type="email" id="contact_email" placeholder="Email" required>
								</div>
							</div>
	
							<div class="single user-img-details col-md-12 mb-4">
								<div class="d-flex icon-input mb-2">
									<textarea name="tamessage" placeholder="Write Your Message" rows="3" class="form-control"
										id="contact_message"></textarea>
								</div>
							</div>
							<div class="btn-wrap col-md-12">
								<a href="javascript:;" id="form_submit" onclick="contact_submit()"
									class="submit-btn">Send Message</a>
							</div>
						</div>
						<div class="form-row thankyou-message">
							<span id="thank_you"></span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="footer pt-md-5">
	<div class="footer-sec">
		<div class="container">
			<h2 class="animation-element slide-top">Looking forward to work with you!</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="single-f-box">
						<p>Enhance the efficiency and longevity of your compressed air system.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-f-box">
						<h5>Say hello</h5>
						<p><a href="mailto:someone@example.com">loreamipsim@gmail.com</a></p>
						<p><a href="tel:9945662282">9945662282</a></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-f-box">
						<h5>Social links</h5>
						<ul>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Instagram</a></li>
							<li><a href="#">LinkedIn</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="btm-footer px-md-5">
		<div class="container-fluid d-flex justify-content-between">
			<p>Powered by <a href="https://www.godigitell.com/" target="_blank">Godigitell</a></p>
			<p>©2024 <a href="#">Maxair</a> ALL RIGHTS RESERVED</p>
		</div>
	</div>
</section>

<!-- Modal -->

<a href="javascript:;" class="scrollToTop"></a>
<script type="text/javascript" src="<?php echo $base_url; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>js/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script type="text/javascript"
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>



<script>
	$('.home-client-section').owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		autoplayTimeout: 3000,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 6
			}
		}
	})
	//active menu
	$(document).ready(function () {
		$(".menu-items li a").removeClass('active-menu')
		if (window.location.href.indexOf("about-us") > -1) {
			$("li .about-us-menu").addClass('active-menu');
		} else
		if (window.location.href.indexOf("industries-we-serve") > -1) {
			$("li .industries-menu").addClass('active-menu');
		} else
			if (window.location.href.indexOf("blogs") > -1) {
				$("li .blogs-menu").addClass('active-menu');
			}
			else
				if (window.location.href.indexOf("contact-us") > -1) {
					$("li .contact-us-menu").addClass('active-menu');
				}
				// else
				// 	if (window.location.href.indexOf("baby-portfolio") > -1) {
				// 		$("li .baby-portfolio-menu").addClass('active-menu');
				// 	} 
				else {
					$("li .home-menu").addClass('active-menu');
				}
	});

	//scroll to top script

	jQuery(function () {
		jQuery('.zoop-view-course').click(function () {
			jQuery('html,body').animate({ scrollTop: jQuery('#featured-courses').offset().top - 0 }, 3000)
		});
		jQuery("html").css('scroll-behavior', 'auto');
	});


	jQuery(function ($) {
		var path = window.location.href;
		$('ul a').each(function () {
			if (this.href === path) {
				$(this).addClass('active');
			}
		});
	});


	function inVisible(element) {
		var WindowTop = $(window).scrollTop();
		var WindowBottom = WindowTop + $(window).height();
		var ElementTop = element.offset().top;
		var ElementBottom = ElementTop + element.height();
		if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
			animate(element);
	}

	$('.loan-tab-names-wrap li').click(function () {
		$('.loan-tab-names-wrap li').removeClass('active');
		$(this).addClass('active');

		$('.loan-tab-value-wrap .loan-tab-values').removeClass('active');
		$('.loan-tab-value-wrap .loan-tab-values[data-tab-val=' + $(this).attr('data-tab-name') + ']').addClass('active');
	});

</script>
<script>
	function inVisible(element) {
		var WindowTop = $(window).scrollTop();
		var WindowBottom = WindowTop + $(window).height();
		var ElementTop = element.offset().top;
		var ElementBottom = ElementTop + element.height();
		if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
			animate(element);
	}

	function animate(element) {
		if (!element.hasClass('ms-animated')) {
			var maxval = element.data('max');
			var html = element.html();
			element.addClass("ms-animated");
			$({
				countNum: element.html()
			}).animate({
				countNum: maxval
			}, {
				duration: 1000,
				easing: 'linear',
				step: function () {
					element.html(Math.floor(this.countNum) + html);
				},
				complete: function () {
					element.html(this.countNum + html);
				}
			});
		}

	}

	$(function () {
		$(window).scroll(function () {
			$("span[data-max]").each(function () {
				inVisible($(this));
			});
		})
	});


</script>

</body>

</html>