<?php  /* Template Name: Home Page*/
get_header();?>

<section class="home-slider">
	<div class="sec" style="background-image:url(<?php echo get_template_directory_uri();?>/img/slider-back.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h3>Welcome Creative</h3>
					<span>Lorem ipsum dolor sit amet consectetur adipisicing elit tempor incididunt. Cumque aptent luctusr.</span>
					<a href="javascript:;" class="blue-btn">Go To Services</a>
				</div>
				<div class="col-md-7">
					<img src="<?php echo get_template_directory_uri();?>/img/mk-ipad.png">
				</div>
			</div>
		</div>
	</div>
	<div class="sec" style="background-image:url(<?php echo get_template_directory_uri();?>/img/slider-back2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<img src="<?php echo get_template_directory_uri();?>/img/mk-iphone.png">
				</div>
				<div class="col-md-5">
					<h3>Stay Tuned</h3>
					<span>Lorem ipsum dolor sit amet consectetur adipisicing elit tempor incididunt. Cumque aptent luctusr.</span>
					<a href="javascript:;" class="blue-btn">Go To Services</a>
				</div>
			</div>
		</div>
	</div>
	<div class="sec" style="background-image:url(<?php echo get_template_directory_uri();?>/img/slider-back.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>Look Good</h3>
					<span>Lorem ipsum dolor sit amet consectetur adipisicing elit tempor incididunt. Cumque aptent luctusr.</span>
					<a href="javascript:;" class="blue-btn">Go To Services</a>
				</div>
				<div class="col-md-8">
					<img src="<?php echo get_template_directory_uri();?>/img/mk-air.png">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="home-services white">
	<div class="table-div">
		<?php for ($i=0; $i < 4; $i++) {?>
		<div class="sec">
			<i class="fa fa-home"></i>
			<h2>Web Development</h2>
			<p>
				Interdum iusto pulvinar consequuntur augue optio, repellat fuga Purus expedita fusce temporibus est odit mi quos. Aliquid semper veritatis dignissimos.
			</p>	
		</div>
		<?php } ?>
	</div>	
	<div class="table-div">
		<?php for ($i=0; $i < 4; $i++) {?>
		<div class="sec">
			<i class="fa fa-home"></i>
			<h2>Web Development</h2>
			<p>
				Interdum iusto pulvinar consequuntur augue optio, repellat fuga Purus expedita fusce temporibus est odit mi quos. Aliquid semper veritatis dignissimos.
			</p>	
		</div>
		<?php } ?>
	</div>	
</section>
<section class="home-clients">
	<div class="image">
		<img src="<?php echo get_template_directory_uri();?>/img/project-1.jpg">
		<div class="opac"></div>
	</div>
	<div class="image">
		<img src="<?php echo get_template_directory_uri();?>/img/project-2.jpg">
		<div class="opac"></div>
	</div>
	<div class="image">
		<img src="<?php echo get_template_directory_uri();?>/img/project-3.jpg">
		<div class="opac"></div>
	</div>
	<div class="image">
		<img src="<?php echo get_template_directory_uri();?>/img/project-4.jpg">
		<div class="opac"></div>
	</div>
	<div class="image">
		<img src="<?php echo get_template_directory_uri();?>/img/project-5.jpg">
		<div class="opac"></div>
	</div>
	<div class="image">
		<img src="<?php echo get_template_directory_uri();?>/img/project-6.jpg">
		<div class="opac"></div>
	</div>
	<div class="image">
		<img src="<?php echo get_template_directory_uri();?>/img/project-7.jpg">
		<div class="opac"></div>
	</div>
	<div class="image">
		<img src="<?php echo get_template_directory_uri();?>/img/project-8.jpg">
		<div class="opac"></div>
	</div>
	<div class="image">
		<img src="<?php echo get_template_directory_uri();?>/img/project-9.jpg">
		<div class="opac"></div>
	</div>
</section>
<section class=" home-location white">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="text">
					<h3>Where We Are</h3>
					<span>We located in London - United Kingdom</span>
					<p>
						Est illo netus natus. Blanditiis autem, justo sagittis tempora? Eligendi recusandae nisi similique parturient minima eligendi exercitation convallis litora facilisis corrupti? Ante rhoncus praesent augue. Asperiores vitae quod officiis.Cillum voluptas placeat eum praesent! Nisi. Molestias mauris ac varius? Cubilia potenti faucibus risus, maecenas pellentesque, mollitia modi, nostrud senectus, assumenda ipsa incidunt quibusdam ouis. Vel praesentium olutpat numquam incidunt hic et lacus.
					</p>
					<ul>
						<li>
							<i class="fa fa-map-marker"></i>
							25/A stret AV, New York, United States
						</li>
						<li>
							<i class="fa fa-phone"></i>
							(123) 02-556878533
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3457.1069743371836!2d78.07351001471561!3d29.94760148191765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390946fd90030825%3A0xe0184dbc5b88b589!2sThe+Pentagon+Mall!5e0!3m2!1sen!2sin!4v1490351819559" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="home-statistics">
	<div class="container">
		<div class="row">
			<?php for ($i=0; $i < 4; $i++) {?>
			<div class="col-md-3">
				<div class="sec">
					<i class="fa fa-home"></i>
					<h1>1.250</h1>
					<span>Projects Done</span>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</section>
<section class="home-about white">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="img">
					<img src="<?php echo get_template_directory_uri();?>/img/mk-5.png">
				</div>
			</div>
			<div class="col-md-6">
				<div class="text">
					<?php for ($i=0; $i < 3; $i++) {?>
					<div class="table-div">
						<div class="icon">
							<i class="fa fa-home"></i>
						</div>
						<div class="content">
							<h2>THE BEST TECHNOLOGIES</h2>
							<p>
								Possimus illum etiam aspernatur, vulputate aliquet error minus ac arcu sapiente dignissimos quis lobortis, etiam.
							</p>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="home-countdown">
	<div class="container">
		<div class="row">
			<h3>Stay Tuned</h3>
			<span>Countdown for the start of the end</span>
			<div class="count">
				333 Days 23 Hours 08 Minutes
			</div>
			<p>
				Corrupti donec repellat magnis assumenda accusantium consequatur aliquet potenti.
				Aut aspernatur nisi sapiente consequatur consequuntur
				omnis aperiam hymenaeos laboriosam scelerisque quas
				Architecto! Debitis? Fusce lorem.
			</p>
		</div>
	</div>
</section>

<?php get_footer();?>