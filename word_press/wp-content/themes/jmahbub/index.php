 <!-- get header -->
<?php get_header(); ?>

          <div class="container page-block">
          	<div class="row">
               <div class="col-md-9 latest-writing">
                    <div class="latest-writings writing-block">

	                    	<?php if(have_posts()) : ?>
	                    		<?php while(have_posts()) : the_post(); ?>

	                    			<div class="writing-piece">
										 <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                               <p class="post-meta text-muted">
                                                   posted on <?php the_time('F j Y g:i a') ?> in 
                                                   <?php the_category(' '); ?> || 
                                                   <?php the_tags(); ?>
                                               </p>
										 <div class="writing-highlight">
											<p><?php the_excerpt(); ?></p>
										 </div>
										 <p class="read-more"><a href="<?php the_permalink(); ?>">Read more...</a></p>
									</div> <!-- /.writting-piece -->

	                    		<?php endwhile; ?>
	                    	<?php endif; ?>

                    	</div><!--  /.latest-writings .writting-block -->
                   </div><!--  /.col-md-9 .latest-writing -->	

               <div class="col-md-3 left-side-section">

               	<?php if(is_active_sidebar('recent-videos')) : ?>
               		<?php dynamic_sidebar('recent-videos'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('ask-jhankar')) : ?>
               		<?php dynamic_sidebar('ask-jhankar'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('hppiness-therapy')) : ?>
               		<?php dynamic_sidebar('hppiness-therapy'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('programming-book-1')) : ?>
               		<?php dynamic_sidebar('programming-book-1'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('programming-book-2')) : ?>
               		<?php dynamic_sidebar('programming-book-2'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('crazyness')) : ?>
               		<?php dynamic_sidebar('crazyness'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('programming-videos')) : ?>
               		<?php dynamic_sidebar('programming-videos'); ?>
               	<?php endif; ?>
               	<?php if(is_active_sidebar('web-development')) : ?>
               		<?php dynamic_sidebar('web-development'); ?>
               	<?php endif; ?>
                   
               </div> <!-- /.col-md-3 -->
          </div> <!-- /.row -->
          </div> <!-- /.container -->

					<section class="section-dream-job">
							 <div class="container">
											 <div class="row">
												 <div class="col-md-4">
													 <div class="piece-quater">
																			<h3 class="text-center"><span class="section-title-last">Dream</span></h3>
																			<div class="section-description">
																					 <p class="left">ড্রিম-টার্গেট নিয়ে এগিয়ে যাওয়ার উপায়ে</p>
																			</div>
																			<div class="section-description">
																					 <ol class="right">
																						 <li><a href="dream/cutpiece.html">কাটপিস স্টাইলে স্বপ্নের অর্জন</a></li>
																						 <li><a href="dream/lathi.html">লাথি দিলে তালা ঠিকই ভাঙ্গবে</a></li>
																						 <li><a href="dream/journey.html">জীবনের জার্নি ও স্বপ্নের বাধা-বিপত্তি</a></li>
																						 <li><a href="dream/chaDokan.html">লাইফ চেইঞ্জ করার ইচ্ছা</a></li>
																					 </ol>
																			</div>
																			<a href="dream/index.html" class="btn btn-success btn-round">Dream main page</a>
																 </div>
												 </div>
														<div class="col-md-4">
																 <div class="piece-quater">
																			<h3 class="text-center"> </span> <span class="section-title-last">Time</span></h3>
																			<div class="section-description">
																					 <p class="left">সময়ের এক ফোঁড়, কমাবে হতাশার ঘোর</p>
																			</div>
																			<div class="section-description">
																					 <ol class="right">
																								<li><a href="time/perfectTime.html">পারফেক্ট টাইম- পারফেক্ট কন্ডিশনি</a></li>
																								<li><a href="time/ektaDin.html">নিজের জন্য একটা দিন</a></li>
																								<li><a href="time/somoyNosto.html">হাতে একদম সময় নাই</a></li>
																								<li><a href="time/prem.html">সময় ও প্রেম অপেক্ষা করে নাা</a></li>
																					 </ol>
																					 <a class="btn btn-success btn-round" href="time/index.html">সময়ের মূল পাতা</a>
																			</div>
																 </div>
														</div>
												 <div class="col-md-4">
													 <div class="piece-quater">
																			<h3 class="text-center"></span> <span class="section-title-last">চেষ্টা-সাধনা</span></h3>
																			<div class="section-description">
																					 <p class="left">চেষ্টার নেশা, সফলদের একমাত্র পেশা</p>
																			</div>
																			<div class="section-description">
																					 <ol class="right">
																						 <li><a href="chesta/kothin.html">লেজ গুটিয়ে পালাবা না</a></li>
																						 <li><a href="chesta/moria.html">মরিয়া হয়ে চেষ্টার নামই সফলতা</a></li>
																						 <li><a href="chesta/songram.html">টিকে থাকার সংগ্রাম</a></li>
																						 <li><a href="chesta/cigarette.html">সিগারেটখোর স্টাইলে স্কিল ডেভেলপ</a></li>
																					 </ol>
																					 <a class="btn btn-success btn-round" href="chesta/index.html">চেষ্টার মূল পাতা</a>
																			</div>
																 </div>
												 </div>
											 </div>
							 </div><!-- .container close -->
				 </section>
	    	 <section class="section-struggle">
               <div class="container">
                    <div class="row">
                         <div class="col-md-4">
                              <div class="piece-quater">
                                   <h3 class="text-center">Varsity Admission Test</h3>
                                   <div class="section-description">
                                        <p class="left">শীগ্রই  আরো কন্টেন্ট যোগ করা হবে</p>
                                   </div>
                                   <div class="section-description">
                                        <ol class="right">
																						<li><a href="admissionTest/einstein.html">আইনস্টাইনও ভর্তি পরীক্ষায় চান্স পায় নাই</a></li>
																						<li><a href="admissionTest/hotash.html">চান্স না পেয়ে হতাশ</a></li>
																						 <li><a href="admissionTest/science1.html">ভর্তি পরীক্ষার প্রিপারেশন: সায়েন্স-১</a></li>
                                             <li><a href="admissionTest/majari.html">মাঝারী মানের স্টুডেন্ট</a></li>

                                        </ol>
                                   </div>
                                   <a href="admissionTest/index.html" class="btn btn-success btn-round">Admission Test</a>
                              </div>
                         </div>
                         <div class="col-md-4">
                              <div class="piece-quater">
                                   <h3 class="text-center">ইয়াং বয়সে প্রেম</h3>
                                   <div class="section-description">
                                        <p class="left">শীগ্রই  আরো কন্টেন্ট যোগ করা হবে</p>
                                   </div>
                                   <div class="section-description">
                                        <ol class="right">
                                             <li><a target="_blank" href="https://www.facebook.com/JhankarMahbub/posts/10152309092666891">সেইভ দ্যা রোমান্টিক পার্ট </a></li>
                                             <li><a target="_blank" href="https://www.facebook.com/JhankarMahbub/posts/10153112238466891">বুঝে শুনে প্রেম</a></li>
                                             <li><a href="#"></a></li>
                                        </ol>
                                   </div>
                                   <a href="#" class="btn btn-success btn-round"></a>
                              </div>
                         </div>
                         <div class="col-md-4 ">
                              <div class="piece-quater">
                                   <h3 class="text-center">ফ্যামিলির সংগ্রাম</h3>
                                   <div class="section-description">
                                        <p class="left">সুখী হওয়ার চেষ্টাই সংগ্রাম</p>
                                   </div>
                                   <div class="section-description">
                                        <ol class="right">
                                             <li><a href="family/rich.html">মিডল ক্লাসের সুখের সংজ্ঞা</a></li>
                                             <li><a href="family/sacrifice.html">মিডেল ক্লাস ফ্যামিলির ভিত্তি</a></li>
                                             <li><a href="family/pressure.html">ফ্যামিলি প্রেসার বনাম সন্তানের ফিউচার</a></li>
                                             <li><a href="family/biye.html">বিয়ে জিনিসটা বিভীষিকাময়</a></li>
                                             <li><a href="family/meye.html">মেয়েদের একাকী সংগ্রাম</a></li>
                                        </ol>
                                   </div>
                                   <a href="family/index.html" class="btn btn-success btn-round">ফ্যামিলি স্ট্রাগলের মূল পাতা</a>
                              </div>
                         </div>
                    </div>
               </div><!-- .container close -->
          </section>
		     <section class="section-dream-job">
		          <div class="container">
	                    <div class="row">
	                    	<div class="col-md-4">
	                    		<div class="piece-quater">
	                                   <h3 class="text-center">Career in Abroad</h3>
	                                   <div class="section-description">
	                                        <p class="left">শীগ্রই  আরো কন্টেন্ট যোগ করা হবে</p>
	                                   </div>
	                                   <div class="section-description">
	                                        <ol class="right">
	                                             <li><a target="_blank" href="https://www.facebook.com/JhankarMahbub/posts/10152245377056891">ক্যারিয়ার ইন USA </a></li>
	                                             <li><a target="_blank" href="https://www.facebook.com/JhankarMahbub/posts/10152169116781891">লাগেজ ম্যানজেমেন্ট</a></li>
	                                        </ol>
	                                   </div>
	                                   <a href="#" class="btn btn-success btn-round"></a>
	                              </div>
	                    	</div>
	                         <div class="col-md-4">
	                              <div class="piece-quater">
	                                   <h3 class="text-center">Struggle to be </span> <span class="section-title-last">continued</span></h3>
	                                   <div class="section-description">
	                                        <p class="left">প্রতিকুলতা আর বাধার দেয়াল টপকানোর স্ট্রাগল</p>
	                                   </div>
	                                   <div class="section-description">
	                                        <ol class="right">
	                                             <li><a href="jkr/beforeBuet.html">মানিব্যাগ বাসায় ফেলে এসেছি</a></li>
	                                             <li><a href="jkr/college.html">সায়েন্সে মিনিমাম ষ্টার মার্কস লাগে</a></li>
	                                             <li><a href="jkr/presentation.html">প্রেজেন্টেশন দিতে ফর্মাল ড্রেস লাগে</a></li>
	                                             <li><a href="jkr/switch.html">কম্পিউটার সায়েন্সের বন্ধ দরজা</a></li>
	                                             <li><a href="jkr/interview.html">চাকরির সোনার হরিণ</a></li>
	                                        </ol>
	                                        <a class="btn btn-success btn-round" href="jkr/index-2.html">স্ট্রাগলের মূল পাতা</a>
	                                   </div>
	                              </div>
	                         </div>
	                    	<div class="col-md-4">
	                    		<div class="piece-quater">
	                                   <h3 class="text-center">Truth about </span> <span class="section-title-last">America</span></h3>
	                                   <div class="section-description">
	                                        <p class="left"></p>
	                                   </div>
	                                   <div class="section-description">
	                                        <ol class="right">
	                                             <li><a target="_blank" href="https://www.facebook.com/JhankarMahbub/posts/10152245377056891">ক্যারিয়ার ইন USA</a></li>
	                                             <li><a href="america/truth4.html">আম্রিকান খাবার ও কেনাকাটা</a></li>
	                                             <li><a href="america/truth2.html">ইংলিশ আর কালচার শক</a></li>
	                                             <li><a target="_blank" href="https://www.facebook.com/JhankarMahbub/posts/10153027427701891">এমেরিকার অদ্ভুত আইনকানুন</a></li>
	                                             <li><a href="https://www.youtube.com/watch?v=9UeLIuFXNEQ">এমেরিকান ড্রিম: ভিডিও</a></li>
	                                        </ol>
	                                        <a class="btn btn-success btn-round" href="america/index.html">আমেরিকার মূল পাতা</a>
	                                   </div>
	                              </div>
	                    	</div>
	                    </div>
		          </div><!-- .container close -->
		    </section>
				<section class="section-dream-job">
						 <div class="container">
										 <div class="row">
											 <div class="col-md-4">
												 <div class="piece-quater">
																		<h3 class="text-center">মানসিক অবস্থা</h3>
																		<div class="section-description">
																				 <p class="left">প্রশ্রয় দিবে, কুঁকড়ে খাবে</p>
																		</div>
																		<div class="section-description">
																				 <ol class="right">
																					 <li><a href="obostha/confidence.html">আত্মবিশ্বাস বাড়ানোর উপায়</a></li>
																					 <li><a href="obostha/mon.html">মন খারাপ করা একটা মরণ ব্যাধি</a></li>
																					 <li><a href="obostha/bitrisna.html">জীবনের প্রতি বিতৃষ্ণা </a></li>
																					 <li><a href="obostha/nissongo.html">নিঃসঙ্গ মনে হলে করণীয়</a></li>
																				 </ol>
																		</div>
																		<a href="obostha/index.html" class="btn btn-success btn-round">মানসিক অবস্থার পাতা</a>
															 </div>
											 </div>
													<div class="col-md-4">
															 <div class="piece-quater">
																		<h3 class="text-center"></span> <span class="section-title-last">Plan</span></h3>
																		<div class="section-description">
																				 <p class="left">অযথা প্ল্যান, করে ফিউচার ম্লান</p>
																		</div>
																		<div class="section-description">
																				 <ol class="right">
																							<li><a href="plan/hati.html">বড় প্ল্যানে বড় ভয়</a></li>
																							<li><a href="plan/recharge.html">রিচার্জ ইউরসেল্ফ</a></li>
																							<li><a href="plan/alternative.html">বেশি অপশন রাখলেে</a></li>
																							<li><a href="plan/ojothaPlan.html">স্বপ্নগুলো প্ল্যানেই মারা যায়া</a></li>
																				 </ol>
																				 <a class="btn btn-success btn-round" href="plan/index.html">প্ল্যান রিলেটেড পাতা</a>
																		</div>
															 </div>
													</div>
											 <div class="col-md-4">
												 <div class="piece-quater">
																		<h3 class="text-center"></span> <span class="section-title-last">Motivational</span></h3>
																		<div class="section-description">
																				 <p class="left"></p>
																		</div>
																		<div class="section-description">
																				 <ol class="right">
																							<li><a href="motivate/ayesh.html">আয়েশ আর অর্জন এক পথে চলে না</a></li>
																							<li><a href="motivate/berthota.html">হেরে যাওয়াই ব্যর্থতা নয়</a></li>
																							<li><a href="motivate/legeThaka.html">লেগে থাকতে পারাই সফলতা</a></li>
																							<li><a href="motivate/mullayon.html">নিজেকে মূল্যায়ন</a></li>
																							<li><a href="motivate/valoLagena.html">ভালো না লাগা- জাতীয় সমস্যা</a></li>
																				 </ol>
																				 <a class="btn btn-success btn-round" href="motivate/index-2.html">মোটিভেশন মূল পাতা</a>
																		</div>
															 </div>
											 </div>
										 </div>
						 </div><!-- .container close -->
			 </section>
				<section class="section-footer">
               <div class="container">
                    <div class="row">
                         <div class="col-md-12">
                             <div>
                                 <div class="row">
                                 	<div class="col-md-6 section-piece">
                                 		<h3 class="text-center">Social</h3>
                                 		<div class="section-description">
                                 			<p><a class="btn btn-default btn-round" href="https://www.facebook.com/JhankarMahbub">Facebook Profile</a></p>
                                             <p><a class="btn btn-default btn-round" href="https://www.facebook.com/jhankarmahbubshow">Facebook Public Page</a></p>
                                             <p><a class="btn btn-default btn-round" href="mailto:jhankar.mahbub@gmail.com?subject=hello dude&body=Just wanted to say hi"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Jhankar.Mahbub@gmail.com</a></p>
                                 		</div>
                                 	</div>
                                 	<div class="col-md-6">
                                 		<h3 class="text-center"><a href="jkr/index.html">Activities</a></h2>
                                 		<div class="section-description">
                                 			<p><a class="btn btn-default btn-round" href="https://www.youtube.com/user/jhankarmahbub"> Bangla Tutorial Videos</a></p>
                                 			<p><a class="btn btn-default btn-round" href="https://www.youtube.com/user/mahbuburk">Song and Comedy Videos</a></p>
                                 			<p><a class="btn btn-default btn-round" href="http://habluderadda.com/jkr/picture.html">Jhankar Mahbub activities</a></p>
                                 		</div>
                                 	</div>
                                 </div>
                             </div>
                         </div><!-- .col-md-12 close -->
                    </div><!-- .row close -->
               </div><!-- .container close -->
          </section>

     <?php get_footer(); ?>
