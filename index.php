<!DOCTYPE   html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Artrenai</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
				integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<!-- Link Swiper's CSS -->
		<link rel="stylesheet" href="css/swiper.css">
		<link rel="stylesheet" href="css/style.css"
	</head>
	<body>

		<!--bio section using  media class-->
		<div class="card-deck">
			<!---card with biopic background-->
			<div class="card m-0 col-large-6" id="biopic">
				<div class="container" id="bio">
				</div>
			</div>

			<!--card with bio description-->
			<div class="card  bg-dark  text-white m-0">
				<div class="card-block col-md-12 ">
					<h2 class="card-header">Godfrey Davis</h2>
					<div class="container-fluid mx-auto text-wrap" role="dialog">
						<p class="card-title">Photographer/Retouch Artist/Web Developer</p>
						<p class="card-text">Hi! Welcome to my portfolio. It’s nothing too grand, just a place to display all
							my
							artwork
							throughout the years. I’m an Aspiring Engineer. I have been fascinated by the bridge of
							technology and arts and have been experimenting with the idea since 2005.Learning slowly through
							different mediums,my ultimate goal is to be a part of the community of content creators who find
							ways to successfully bridge the benefits of STEM with the Arts and make it useful and functional
							in the progression of how we interact in society. So thanks for coming to my page. My small
							steps to a 1,000 mile journey.
						</p>
					</div>
				</div>
			</div>
		</div>

		<!--Photography Gallery-->
		<section class="container-fluid mx-auto text-center" id="title">
			<div class="card mx-auto text-light text-center" id="title">
				<div class="card-header ">
					Photography
				</div>
			</div>
		</section>
		<div class="swiper-container gallery-top">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/1)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/2)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/3)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/4)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/5)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/6)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/7)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/8)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/9)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/10)"></div>
			</div>
			<!-- Add Arrows -->
			<div class="swiper-button-next swiper-button-white"></div>
			<div class="swiper-button-prev swiper-button-white"></div>
		</div>
		<div class="swiper-container gallery-thumbs">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/1)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/2)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/3)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/4)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/5)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/6)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/7)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/8)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/9)"></div>
				<div class="swiper-slide" style="background-image:url(http://lorempixel.com/1200/1200/nature/10)"></div>
			</div>
		</div>

		<!-- Swiper JS -->
		<script src="js/swiper.js"></script>

		<!-- Initialize Swiper -->
		<script>
			var galleryTop = new Swiper('.gallery-top', {
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				spaceBetween: 10,
				loop:true,
				loopedSlides: 5, //looped slides should be the same
			});
			var galleryThumbs = new Swiper('.gallery-thumbs', {
				spaceBetween: 10,
				slidesPerView: 4,
				touchRatio: 0.2,
				loop:true,
				loopedSlides: 5, //looped slides should be the same
				slideToClickedSlide: true
			});
			galleryTop.params.control = galleryThumbs;
			galleryThumbs.params.control = galleryTop;

		</script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
				  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
				  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
				  integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
				  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
				  integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
				  crossorigin="anonymous"></script>
	</body>
</html>
</html>