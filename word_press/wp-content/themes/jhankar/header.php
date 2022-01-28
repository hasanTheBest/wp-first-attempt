<html <?php language_attributes( ); ?>
>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ঝংকার মাহবুব" />
	<meta name="description" content="লাইফের ব্যাটারি ডাউন খেলে, মজায় মজায় হাবলুদের প্রোগ্রামিং শিখাতে। এগিয়ে যাওয়ার টিপস আর টিউটোরিয়ালের ঝুড়ি নিয়ে এই ওয়েবসাইট সাজিয়েছে ঝংকার। তার ভালো লাগে সুখ ও সফলতার মলম দিতে, খারাপ স্টুডেন্টদের ভালো ক্যারিয়ার গড়তে সাজেশন দিতে, অতলামীর আর্ট দেখাতে,  স্কিল ডেভেলপমেন্টের রাস্তা বানাতে। এইসব হাবিজাবি জিনিস নিয়েই ঝংকারের এই ওয়েবসাইট।">
	<meta property="og:title" content="ঝংকার মাহবুব" />
	<meta name="description" content="চেষ্টার নেশা, সফলদের একমাত্র পেশা">
	<meta property="og:description" name="description" content="লাইফের ব্যাটারি ডাউন খেলে, মজায় মজায় হাবলুদের প্রোগ্রামিং শিখাতে। এগিয়ে যাওয়ার টিপস আর টিউটোরিয়ালের ঝুড়ি নিয়ে এই ওয়েবসাইট সাজিয়েছে ঝংকার। তার ভালো লাগে সুখ ও সফলতার মলম দিতে, খারাপ স্টুডেন্টদের ভালো ক্যারিয়ার গড়তে সাজেশন দিতে, অতলামীর আর্ট দেখাতে,  স্কিল ডেভেলপমেন্টের রাস্তা বানাতে। এইসব হাবিজাবি জিনিস নিয়েই ঝংকারের এই ওয়েবসাইট।">
	<meta property="og:image" content="http://www.jhankarmahbub.com/images/jhankar.jpg" />
	<?php wp_head(  ); ?>
</head>

<body <?php body_class( ); ?>> 
	<div class="empty-bar">
	</div>
	<nav id="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<nav class="navbar navbar-default navbar-fixed-top">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">
											<?php _e('Toggle navigation','jhankar'); ?>
										</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<?php
									$jhankar_logo = get_custom_logo();
									$jhankar_logo =str_replace('custom-logo-link','custom-logo-link navbar-brand center-block',$jhankar_logo);
									if($jhankar_logo){
										echo wp_kses_post($jhankar_logo);
									}else{
										?>
										<a class="navbar-brand center-block" href="<?php echo home_url( '/' ); ?>">
											<?php bloginfo( 'name' ); ?>
										</a>
										<?php
									}
									?>
								</div>
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<?php
                                    wp_nav_menu( array(
                                        'location'   => 'topmenu',
                                        'menu_id'    => 'top-nav',
                                        'menu_class' => 'nav navbar-nav navbar-right',
                                        'container'  => 'false',
                                        'walker'     => new Sunset_Walker_Nav_Primary(),
                                    ) );
                                    ?>
								</div>
								<!-- /.navbar-collapse -->
							</div>
							<!-- /.container-fluid -->
						</nav>
					</div>
				</div>
				<!-- .col-md-12 close -->
			</div>
			<!-- .row close -->
		</div>
		<!-- .container close -->
	</nav>