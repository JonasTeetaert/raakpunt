<?php include 'inc/head.php' ?>

<body>
	<nav class="nav">
		<label for="nav__toggle">X</label>
		<input type="checkbox" id="nav__toggle">
		<ul>
			<label for="nav__toggle">W</label>
			<li>
				<a href="#">Home</a>
			</li>
			<li>
				<a href="#">Over Ons</a>
			</li>
			<li>
				<a href="#">Nieuws</a>
			</li>
			<li>
				<a href="#">Agenda</a>
			</li>
			<li>
				<a href="#">In Beeld</a>
			</li>
			<li>
				<a href="#">Doe Mee!</a>
			</li>
			<li>
				<a href="#">Contact</a>
			</li>
		</ul>
	</nav>
	<section class="section">
		<div class="section__inner">
			<div class="content-box">
				<h1>Styleguide</h1>
				<p>made by Jonas Teetaert</p>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="section__inner">
			<div class="content-box">
				<h1>Colors</h1>
				<style type="text/css">
					.colorblock {
						width: 50px;
						height: 50px;
					}

					.black {
						background-color: #2832B9;
					}

					.yellow {
						background-color: #FF4619;
					}
				</style>
				<div class="colorblock black"></div>
				<p>color-primary: #2832B9</p>
				<div class="colorblock yellow"></div>
				<p>color-secondary: #FF4619</p>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="section__inner">
			<div class="content-box">
				<h1>Over Raakpunt</h1>
				<h1>H1. This is a h1 title</h1>
				<h2>H2. This is a h2 title</h2>
				<h3>H3. This is a h3 title</h3>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="section__inner">
			<div class="content-box">
				<h1>Paragraph en links</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis mattis tellus iaculis viverra. Nunc auctor dolor
					orci, a interdum purus facilisis id. Etiam dolor nulla, dignissim et nunc sit amet, tristique bibendum dui. Nunc ultricies
					tellus et est ornare, non viverra felis commodo. Vivamus pharetra ultricies sollicitudin.
					<a href="#">Link</a> Cras congue mattis ante, maximus vehicula urna posuere id. Curabitur eleifend aliquet porttitor. Etiam pretium
					risus in dictum malesuada. Donec et mollis orci, a sollicitudin leo. Praesent eget erat purus.</p>
				<p>
					<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis mattis tellus iaculis viverra. Nunc auctor dolor
						orci, a interdum purus facilisis id. Etiam dolor nulla, dignissim et nunc sit amet, tristique bibendum dui. Nunc ultricies
						tellus et est ornare, non viverra felis commodo. Vivamus pharetra ultricies sollicitudin.
						<a href="#">Link</a> Cras congue mattis ante, maximus vehicula urna posuere id. Curabitur eleifend aliquet porttitor. Etiam pretium
						risus in dictum malesuada. Donec et mollis orci, a sollicitudin leo. Praesent eget erat purus.</b>
				</p>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="section__inner">
			<div class="content-box">
				<h1>Buttons</h1>
				<p>
					<a class="btn-primary" href="#">lees meer</a>
				</p>
				<h1>Toggle</h1>
				<p>
					<label class="btn-toggle" for="check1">
						<input type="checkbox" id="check1" name="check1">
						<svg class="icon icon--off" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						 x="0px" y="0px" viewBox="0 0 31.444 31.444" style="enable-background:new 0 0 31.444 31.444;" xml:space="preserve">
							<path d="M1.119,16.841c-0.619,0-1.111-0.508-1.111-1.127c0-0.619,0.492-1.111,1.111-1.111h13.475V1.127
	C14.595,0.508,15.103,0,15.722,0c0.619,0,1.111,0.508,1.111,1.127v13.476h13.475c0.619,0,1.127,0.492,1.127,1.111
	c0,0.619-0.508,1.127-1.127,1.127H16.833v13.476c0,0.619-0.492,1.127-1.111,1.127c-0.619,0-1.127-0.508-1.127-1.127V16.841H1.119z"
							/>
						</svg>
						<svg class="icon icon--on" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						 x="0px" y="0px" viewBox="0 0 491.858 491.858" style="enable-background:new 0 0 491.858 491.858;" xml:space="preserve">

							<path d="M465.167,211.613H240.21H26.69c-8.424,0-26.69,11.439-26.69,34.316s18.267,34.316,26.69,34.316h213.52h224.959
			c8.421,0,26.689-11.439,26.689-34.316S473.59,211.613,465.167,211.613z" />
						</svg>
					</label>
				</p>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="section__inner">
			<div class="content-box">
				<h1>Icon</h1>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="section__inner">
			<div class="content-box">
				<h1>date</h1>
				<div class="date">
					<span class="date__number">
						31
						<span class="date__month">nov '16</span>
					</span>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="section__inner">
			<div class="content-box">
				<h1>Grid</h1>
				<div class="grid--col-max-3 margin-fix">
					<div class="grid-item">
						<div class="gallery-img">
							<div class="overlay">
								<?php include 'assets/images/icons/plus.svg'?>
							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="gallery-img">
							<div class="overlay">
								<?php include 'assets/images/icons/plus.svg'?>
							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="gallery-img">
							<div class="overlay">
								<?php include 'assets/images/icons/plus.svg'?>
							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="gallery-img">
							<div class="overlay">
								<?php include 'assets/images/icons/plus.svg'?>
							</div>
						</div>
					</div>
					<div class="grid-item">
						<div class="gallery-img">
							<div class="overlay">
								<?php include 'assets/images/icons/plus.svg'?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="section__inner">
			<div class="content-box">
				<h1>Galery Image</h1>
				<div class="gallery-img">
					<div class="overlay">
						<?php include 'assets/images/icons/plus.svg'?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section gallery">
		<div class="section__inner">
			<div class="content-box">
				<h1>Gallery Slider</h1>
				<a href="#" class="close">
					<?php include 'assets/images/icons/plus.svg'?>
				</a>
				<div class="gallery-img gallery-img--slider">
					<div class="overlay">
						<?php include 'assets/images/icons/plus.svg'?>
					</div>
				</div>
				<a href="#" class="btn-secondary go-back">Ga Terug</a>
				<a href="#" class="btn-secondary go-next">Volgende</a>
			</div>
		</div>
	</section>

	<section class="section gallery">
		<div class="section__inner">
			<div class="content-box">
				<h1>Agenda Item</h1>

			</div>
	</section>

	<script type="text/javascript" src="js/main.js"></script>
</body>

</html>