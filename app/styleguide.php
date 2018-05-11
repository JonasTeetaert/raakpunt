<?php include 'inc/head.php' ?>

<body>
	<nav class="nav">
		<a class="nav__logo" href="#">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 141.59 117.99">
				<g>
					<path d="M88.56,5.83V56.58L78.47,66.67l-4.12,4.12,4.12,4.12L88.56,85v27.15H61.41L51.32,102.07,47.2,98l-4.12,4.12L33,112.16H5.83V5.83H88.56M94.39,0H0V118H35.4l11.8-11.8L59,118H94.39V82.59l-11.8-11.8L94.39,59V0Z"
					 style="fill: #2832b9" />
					<path d="M135.76,88.42v23.74H112V88.42h23.74m5.83-5.83h-35.4V118h35.4V82.59Z" style="fill: #2832b9" />
				</g>
			</svg>
		</a>
		<label for="nav__toggle">
			<svg class="icon nav__hamburger" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
			 x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
				<path d="M491.318,235.318H20.682C9.26,235.318,0,244.577,0,256s9.26,20.682,20.682,20.682h470.636
			c11.423,0,20.682-9.259,20.682-20.682C512,244.578,502.741,235.318,491.318,235.318z" />
				<path d="M491.318,78.439H20.682C9.26,78.439,0,87.699,0,99.121c0,11.422,9.26,20.682,20.682,20.682h470.636
			c11.423,0,20.682-9.26,20.682-20.682C512,87.699,502.741,78.439,491.318,78.439z" />
				<path d="M491.318,392.197H20.682C9.26,392.197,0,401.456,0,412.879s9.26,20.682,20.682,20.682h470.636
			c11.423,0,20.682-9.259,20.682-20.682S502.741,392.197,491.318,392.197z" />
			</svg>
		</label>
		<input type="checkbox" id="nav__toggle">
		<div class="nav__panel">
			<label for="nav__toggle">
				<svg class="icon nav__close" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
				 x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
					<path d="M505.943,6.058c-8.077-8.077-21.172-8.077-29.249,0L6.058,476.693c-8.077,8.077-8.077,21.172,0,29.249
			C10.096,509.982,15.39,512,20.683,512c5.293,0,10.586-2.019,14.625-6.059L505.943,35.306
			C514.019,27.23,514.019,14.135,505.943,6.058z" />
					<path d="M505.942,476.694L35.306,6.059c-8.076-8.077-21.172-8.077-29.248,0c-8.077,8.076-8.077,21.171,0,29.248l470.636,470.636
			c4.038,4.039,9.332,6.058,14.625,6.058c5.293,0,10.587-2.019,14.624-6.057C514.018,497.866,514.018,484.771,505.942,476.694z"
					/>
				</svg>
			</label>
			<ul>
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
		</div>
		<ul class="nav__sponsors">
			<li>
				<a href="#">
					<img src="./assets/images/logogent_blauw.png" alt="">
				</a>
			</li>
			<li>
				<a href="#">
					<img src="./assets/images/RotaryGent_blauw.png" alt="">
				</a>
			</li>
			<li>
				<a href="#">
					<img src="./assets/images/vog_blue.png" alt="">
				</a>
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
					<label class="btn-toggle" for="check2">
						<input type="checkbox" id="check2" name="check1">
						<svg class="icon icon--off" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						 x="0px" y="0px" viewBox="0 0 31.444 31.444" style="enable-background:new 0 0 31.444 31.444;" xml:space="preserve">
							<path d="M1.119,16.841c-0.619,0-1.111-0.508-1.111-1.127c0-0.619,0.492-1.111,1.111-1.111h13.475V1.127
	C14.595,0.508,15.103,0,15.722,0c0.619,0,1.111,0.508,1.111,1.127v13.476h13.475c0.619,0,1.127,0.492,1.127,1.111
	c0,0.619-0.508,1.127-1.127,1.127H16.833v13.476c0,0.619-0.492,1.127-1.111,1.127c-0.619,0-1.127-0.508-1.127-1.127V16.841H1.119z"
							/> </svg>
						<svg class="icon icon--on" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						 x="0px" y="0px" viewBox="0 0 491.858 491.858" style="enable-background:new 0 0 491.858 491.858;" xml:space="preserve">
							<path d="M465.167,211.613H240.21H26.69c-8.424,0-26.69,11.439-26.69,34.316s18.267,34.316,26.69,34.316h213.52h224.959
			c8.421,0,26.689-11.439,26.689-34.316S473.59,211.613,465.167,211.613z" /> </svg>
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
					<span class="date__number"> 31
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
								<?php include 'assets/images/icons/plus.svg'?> </div>
						</div>
					</div>
					<div class="grid-item">
						<div class="gallery-img">
							<div class="overlay">
								<?php include 'assets/images/icons/plus.svg'?> </div>
						</div>
					</div>
					<div class="grid-item">
						<div class="gallery-img">
							<div class="overlay">
								<?php include 'assets/images/icons/plus.svg'?> </div>
						</div>
					</div>
					<div class="grid-item">
						<div class="gallery-img">
							<div class="overlay">
								<?php include 'assets/images/icons/plus.svg'?> </div>
						</div>
					</div>
					<div class="grid-item">
						<div class="gallery-img">
							<div class="overlay">
								<?php include 'assets/images/icons/plus.svg'?> </div>
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
						<?php include 'assets/images/icons/plus.svg'?> </div>
				</div>
			</div>
		</div>
	</section>
	<section class="section gallery">
		<div class="section__inner">
			<div class="content-box">
				<h1>Gallery Slider</h1>
				<a href="#" class="close">
					<?php include 'assets/images/icons/plus.svg'?> </a>
				<div class="gallery-img gallery-img--slider">
					<div class="overlay">
						<?php include 'assets/images/icons/plus.svg'?> </div>
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
				<!-- begin agenda item -->
				<div class="agenda-item">
					<div class="agenda-item__visible">
						<div class="date agenda-item__date">
							<span class="date__number"> 31
								<span class="date__month">nov '16</span>
							</span>
						</div>
						<div class="agenda-item__name">
							<span>Spetterend Oudejaarsavond</span>
						</div>
						<div class="agenda-item__hour">
							<span>19:00 - 01:00</span>
						</div>
						<div class="agenda-item__location">
							<span>&#64;'T Stoofken</span>
						</div>
						<label class="btn-toggle agenda-item__toggle" for="check1" data-toggle="collapse" data-target="#collapse1">
							<input type="checkbox" id="check1" name="check1">
							<svg class="icon icon--off" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" viewBox="0 0 31.444 31.444" style="enable-background:new 0 0 31.444 31.444;" xml:space="preserve">
								<path d="M1.119,16.841c-0.619,0-1.111-0.508-1.111-1.127c0-0.619,0.492-1.111,1.111-1.111h13.475V1.127
				C14.595,0.508,15.103,0,15.722,0c0.619,0,1.111,0.508,1.111,1.127v13.476h13.475c0.619,0,1.127,0.492,1.127,1.111
				c0,0.619-0.508,1.127-1.127,1.127H16.833v13.476c0,0.619-0.492,1.127-1.111,1.127c-0.619,0-1.127-0.508-1.127-1.127V16.841H1.119z"
								/> </svg>
							<svg class="icon icon--on" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" viewBox="0 0 491.858 491.858" style="enable-background:new 0 0 491.858 491.858;" xml:space="preserve">
								<path d="M465.167,211.613H240.21H26.69c-8.424,0-26.69,11.439-26.69,34.316s18.267,34.316,26.69,34.316h213.52h224.959
						c8.421,0,26.689-11.439,26.689-34.316S473.59,211.613,465.167,211.613z" /> </svg>
						</label>
					</div>
					<div class="collapse" id="collapse1">
						<div class="flex-container">
							<div class="column">
								<div class="agenda-item__hour">
									<span>19:00 - 01:00</span>
								</div>
							</div>
							<div class="column">
								<div class="agenda-item__location">
									<span>&#64;'T Stoofken</span>
								</div>
							</div>
							<div class="agenda-item__description">
								<span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit alias earum incidunt, commodi hic, consequuntur tempore
									magni maxime, exercitationem dolore officiis quae quia voluptatibus deleniti. Dolorum animi minus quaerat. Eligendi.</span>
							</div>
						</div>
					</div>
				</div>
				<!-- end agenda item -->
				<!-- begin agenda item -->
				<div class="agenda-item">
					<div class="agenda-item__visible">
						<div class="date agenda-item__date">
							<span class="date__number"> 31
								<span class="date__month">nov '16</span>
							</span>
						</div>
						<div class="agenda-item__name">
							<span>Spetterend Oudejaarsavond</span>
						</div>
						<div class="agenda-item__hour">
							<span>19:00 - 01:00</span>
						</div>
						<div class="agenda-item__location">
							<span>&#64;'T Stoofken</span>
						</div>
						<label class="btn-toggle agenda-item__toggle" for="check2" data-toggle="collapse" data-target="#collapse2">
							<input type="checkbox" id="check2" name="check2">
							<svg class="icon icon--off" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" viewBox="0 0 31.444 31.444" style="enable-background:new 0 0 31.444 31.444;" xml:space="preserve">
								<path d="M1.119,16.841c-0.619,0-1.111-0.508-1.111-1.127c0-0.619,0.492-1.111,1.111-1.111h13.475V1.127
				C14.595,0.508,15.103,0,15.722,0c0.619,0,1.111,0.508,1.111,1.127v13.476h13.475c0.619,0,1.127,0.492,1.127,1.111
				c0,0.619-0.508,1.127-1.127,1.127H16.833v13.476c0,0.619-0.492,1.127-1.111,1.127c-0.619,0-1.127-0.508-1.127-1.127V16.841H1.119z"
								/> </svg>
							<svg class="icon icon--on" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							 x="0px" y="0px" viewBox="0 0 491.858 491.858" style="enable-background:new 0 0 491.858 491.858;" xml:space="preserve">
								<path d="M465.167,211.613H240.21H26.69c-8.424,0-26.69,11.439-26.69,34.316s18.267,34.316,26.69,34.316h213.52h224.959
						c8.421,0,26.689-11.439,26.689-34.316S473.59,211.613,465.167,211.613z" /> </svg>
						</label>
					</div>
					<div class="collapse" id="collapse2">
						<div class="flex-container">
							<div class="column">
								<div class="agenda-item__hour">
									<span>19:00 - 01:00</span>
								</div>
							</div>
							<div class="column">
								<div class="agenda-item__location">
									<span>&#64;'T Stoofken</span>
								</div>
							</div>
							<div class="agenda-item__description">
								<span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit alias earum incidunt, commodi hic, consequuntur tempore
									magni maxime, exercitationem dolore officiis quae quia voluptatibus deleniti. Dolorum animi minus quaerat. Eligendi.</span>
							</div>
						</div>
					</div>
				</div>
				<!-- end agenda item -->
			</div>
	</section>
	<section class="section">
		<div class="section__inner">
			<div class="content-box">
				<h1>NieuwsItem</h1>
				<div class="news-item">
					<div class="news-item__img-container">
						<img src="./assets/images/placeholder.jpg">
						<div class="date">
							<span class="date__number"> 31
								<span class="date__month">nov '16</span>
							</span>
						</div>
					</div>
					<h2>Op kamp met bond gezelschap</h2>
					<p>We hebben er opnieuw een wervelend vakantiekamp opzitten! We namen iedereen - van de leden tot de leiding, van de grootste
						mond tot het kleinste hartje - mee op sleeptouw. Zo krijgen jongeren van elke leeftijd, ongeacht hun fysieke, mentale
						of sociale beperkingen,</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="section__inner">
			<div class="content-box">
				<h1>Footer?</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, quos nulla temporibus qui voluptate magnam cumque
					tempore provident unde quibusdam consequuntur nesciunt nostrum numquam? Laboriosam ex nisi aperiam praesentium distinctio.</p>
			</div>
		</div>
	</section>
	<?php include 'inc/script.php' ?> </body>

</html>