<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Artrenai</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
				integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<script src="js/script.js"></script>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<!--navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="top">
			<a class="navbar-brand" href="#">Artrenai</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
					  aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Bio<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Gallery
						</a>
						<div class="dropdown-menu bg-dark text-white" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Photography</a>
							<a class="dropdown-item" href="#">Photo-Editing</a>
							<a class="dropdown-item" href="#">Art</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Me</a>
					</li>
				</ul>
			</div>
		</nav>
		<!--end of navbar-->

		<!--bio section using  card class-->

		<div class="card-deck m-0">
			<!---card with biopic background-->
			<div class="card m-0 col-md-12 col-lg-6" id="biopic">
				<div class="container" id="bio">
				</div>
			</div>
			<!--card with bio description-->

			<div class="card  bg-dark col-lg-6  text-white m-0 ">
				<div class="card-block ">
					<h2 class="card-header">Godfrey Davis</h2>
					<div class="container-fluid mx-auto text-wrap" role="dialog">
						<p class="card-title">Portrait Photographer/Retouch Artist/Web Developer</p>
						<p class="card-text" id="des">Hi! Welcome to my portfolio. It’s nothing too grand, just a place to
							display all
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

		<!--bio section end-->

		<!--Photography Gallery-->

		<section class="container-fluid mx-auto text-center" id="title">
			<div class="card mx-auto text-light text-center" id="title">

				<div class="card-header ">
					<span class="d-xl-none">Photography</span>
				</div>
			</div>
		</section>
		<section class="container-fluid no-gutters d-flex p-0">
			<div class="card    text-white m-0 float-right d-none d-xl-block" id="mid-card">
				<div class="card-block">
					<h2 class="card-header " id="title">Photography</h2>
					<div class="container-fluid mx-auto text-wrap" role="dialog">

						<p class="card-text" id="des">Moving to New York I was inspired by fashion’s editorial Photography.
							All of my photos are shot with a shallow lens in natural lighting. I use my photo-manipulation
							experience to make the colors of the photography vibrant. In some ways it has a subtle consistency
							with my artwork.
						</p>
					</div>
				</div>
			</div>

			<div id="pGallery" class="carousel slide col-xl-6 d-block" data-ride="carousel">
				<div class="carousel-inner">

					<div class="carousel-item active">
						<img class="d-block w-100" src="image/photography/picture1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/photography/picture2.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/photography/picture3.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/photography/picture4.jpg" alt="Fourth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/photography/picture5.jpg" alt="Fifth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/photography/picture6.jpg" alt="Sixth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/photography/picture7.jpg" alt="Seventh slide">
					</div>
					<a class="carousel-control-prev" href="#pGallery" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#pGallery" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</section>
		<section class="container-fluid mx-auto text-center d-xl-none" id="mid-card">
			<div class="card mx-auto text-light text-center"id="mid-card-2">

				<div class="card-header ">
					<p class="card-text" id="des">Moving to New York I was inspired by fashion’s editorial Photography.
						All of my photos are shot with a shallow lens in natural lighting. I use my photo-manipulation
						experience to make the colors of the photography vibrant. In some ways it has a subtle consistency
						with my artwork.
					</p>
				</div>
			</div>
		</section>

		<!--End of Photography Gallery-->

		<!--Beginning of Retouch Gallery-->
		<section class="container-fluid mx-auto text-center" id="title">
			<div class="card mx-auto text-light text-center" id="title">
				<div class="card-header ">
					<span class="d-xl-none">Photo-Editing</span>
				</div>
			</div>
		</section>
		<section class="container-fluid no-gutters d-flex p-0">
			<div id="rGallery" class="carousel slide col-xl-6 d-block" data-ride="carousel">
				<div class="carousel-inner ">
					<div class="carousel-item active">
						<img class="d-block w-100 h-100" src="image/retouch/picture1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block  w-100 h-100" src="image/retouch/picture2.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block  w-100 h-100" src="image/retouch/picture3.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block  w-100 h-100" src="image/retouch/picture4.jpg" alt="Fourth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block  w-100 h-100" src="image/retouch/picture5.jpg" alt="Fifth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block  w-100 h-100" src="image/retouch/picture6.jpg" alt="Sixth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 h-100" src="image/retouch/picture7.jpg" alt="Seventh slide">
					</div>
					<a class="carousel-control-prev" href="#rGallery" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#rGallery" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

			<div class="card    text-white m-0 float-right d-none d-xl-block" id="mid-card">
				<div class="card-block">
					<h2 class="card-header" id="title">Editing</h2>
					<div class="container-fluid mx-auto text-wrap" role="dialog">

						<p class="card-text" id="des">I try to document all my editing. Not only so that I can see my own
							progress but also it gives me time think about the things I’ve come across by accident and that
							worked and have a greater understanding of the things I want to improve. All my work thus far is a
							product of my experience and whether it is to the extreme of my neon vibrant artwork or the
							subtleties of my editorial photography, they all have the same roots and are the results of each
							other.
						</p>
					</div>
				</div>
			</div>
			</div>
		</section>
		<section class="container-fluid mx-auto text-center d-xl-none" id="mid-card">
			<div class="card mx-auto text-light text-center" id="mid-card-2">

				<div class="card-header ">
					<p class="card-text" id="des">I try to document all my editing. Not only so that I can see my own
						progress but also it gives me time think about the things I’ve come across by accident and that
						worked and have a greater understanding of the things I want to improve. All my work thus far is a
						product of my experience and whether it is to the extreme of my neon vibrant artwork or the
						subtleties of my editorial photography, they all have the same roots and are the results of each
						other.
					</p>
				</div>
			</div>
		</section>

		<!--End of Retouch Gallery-->


		<!--Art Gallery-->
		<section class="container-fluid mx-auto text-center" id="title">
			<div class="card mx-auto text-light text-center" id="title">
				<div class="card-header ">
					<span class="d-xl-none">Art</span>

				</div>
			</div>
		</section>
		<section class="container-fluid no-gutters d-flex p-0">
			<div class="card  text-white m-0 float-right d-none d-xl-block " id="mid-card">
				<div class="card-block">
					<h2 class="card-header" id="title">Art</h2>
					<div class="container-fluid mx-auto text-wrap" role="dialog">

						<p class="card-text" id="des">A mix of Photography and digital manipulation to create unique results.
							I try to experiment with vibrant Neon colors.
						</p>
					</div>
				</div>
			</div>

			<div id="aGallery" class="carousel slide col-xl-6 d-block" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="image/art/picture1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/art/picture2.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/art/picture3.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/art/picture4.jpg" alt="Fourth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/art/picture5.jpg" alt="Fifth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/art/picture6.jpg" alt="Sixth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/art/picture7.jpg" alt="Seventh slide">
					</div>
					<a class="carousel-control-prev" href="#aGallery" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#aGallery" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</section>
		<section class="container-fluid mx-auto text-center d-xl-none" id="mid-card">
			<div class="card mx-auto text-light text-center" id="mid-card-2">
				<div class="card-header ">

					<p class="card-text" id="des">A mix of Photography and digital manipulation to create unique results.
						I try to experiment with vibrant Neon colors.
					</p>
				</div>
			</div>
		</section>
		<!--End of Art Gallery-->


		<!--Footer-->

		<!--End Footer-->


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