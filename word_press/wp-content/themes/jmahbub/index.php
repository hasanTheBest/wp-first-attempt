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
																					 <p class="left">???????????????-????????????????????? ???????????? ??????????????? ?????????????????? ???????????????</p>
																			</div>
																			<div class="section-description">
																					 <ol class="right">
																						 <li><a href="dream/cutpiece.html">?????????????????? ????????????????????? ???????????????????????? ???????????????</a></li>
																						 <li><a href="dream/lathi.html">???????????? ???????????? ???????????? ???????????? ?????????????????????</a></li>
																						 <li><a href="dream/journey.html">?????????????????? ?????????????????? ??? ???????????????????????? ????????????-?????????????????????</a></li>
																						 <li><a href="dream/chaDokan.html">???????????? ?????????????????? ???????????? ???????????????</a></li>
																					 </ol>
																			</div>
																			<a href="dream/index.html" class="btn btn-success btn-round">Dream main page</a>
																 </div>
												 </div>
														<div class="col-md-4">
																 <div class="piece-quater">
																			<h3 class="text-center"> </span> <span class="section-title-last">Time</span></h3>
																			<div class="section-description">
																					 <p class="left">??????????????? ?????? ????????????, ??????????????? ?????????????????? ?????????</p>
																			</div>
																			<div class="section-description">
																					 <ol class="right">
																								<li><a href="time/perfectTime.html">???????????????????????? ????????????- ???????????????????????? ????????????????????????</a></li>
																								<li><a href="time/ektaDin.html">??????????????? ???????????? ???????????? ?????????</a></li>
																								<li><a href="time/somoyNosto.html">???????????? ???????????? ????????? ?????????</a></li>
																								<li><a href="time/prem.html">????????? ??? ??????????????? ????????????????????? ????????? ?????????</a></li>
																					 </ol>
																					 <a class="btn btn-success btn-round" href="time/index.html">??????????????? ????????? ????????????</a>
																			</div>
																 </div>
														</div>
												 <div class="col-md-4">
													 <div class="piece-quater">
																			<h3 class="text-center"></span> <span class="section-title-last">??????????????????-???????????????</span></h3>
																			<div class="section-description">
																					 <p class="left">????????????????????? ????????????, ?????????????????? ????????????????????? ????????????</p>
																			</div>
																			<div class="section-description">
																					 <ol class="right">
																						 <li><a href="chesta/kothin.html">????????? ?????????????????? ?????????????????? ??????</a></li>
																						 <li><a href="chesta/moria.html">??????????????? ????????? ????????????????????? ???????????? ???????????????</a></li>
																						 <li><a href="chesta/songram.html">???????????? ??????????????? ?????????????????????</a></li>
																						 <li><a href="chesta/cigarette.html">?????????????????????????????? ????????????????????? ??????????????? ??????????????????</a></li>
																					 </ol>
																					 <a class="btn btn-success btn-round" href="chesta/index.html">????????????????????? ????????? ????????????</a>
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
                                        <p class="left">??????????????????  ????????? ???????????????????????? ????????? ????????? ?????????</p>
                                   </div>
                                   <div class="section-description">
                                        <ol class="right">
																						<li><a href="admissionTest/einstein.html">?????????????????????????????? ??????????????? ???????????????????????? ??????????????? ????????? ?????????</a></li>
																						<li><a href="admissionTest/hotash.html">??????????????? ?????? ???????????? ????????????</a></li>
																						 <li><a href="admissionTest/science1.html">??????????????? ???????????????????????? ??????????????????????????????: ?????????????????????-???</a></li>
                                             <li><a href="admissionTest/majari.html">?????????????????? ??????????????? ???????????????????????????</a></li>

                                        </ol>
                                   </div>
                                   <a href="admissionTest/index.html" class="btn btn-success btn-round">Admission Test</a>
                              </div>
                         </div>
                         <div class="col-md-4">
                              <div class="piece-quater">
                                   <h3 class="text-center">???????????? ???????????? ???????????????</h3>
                                   <div class="section-description">
                                        <p class="left">??????????????????  ????????? ???????????????????????? ????????? ????????? ?????????</p>
                                   </div>
                                   <div class="section-description">
                                        <ol class="right">
                                             <li><a target="_blank" href="https://www.facebook.com/JhankarMahbub/posts/10152309092666891">???????????? ???????????? ??????????????????????????? ??????????????? </a></li>
                                             <li><a target="_blank" href="https://www.facebook.com/JhankarMahbub/posts/10153112238466891">???????????? ???????????? ???????????????</a></li>
                                             <li><a href="#"></a></li>
                                        </ol>
                                   </div>
                                   <a href="#" class="btn btn-success btn-round"></a>
                              </div>
                         </div>
                         <div class="col-md-4 ">
                              <div class="piece-quater">
                                   <h3 class="text-center">??????????????????????????? ?????????????????????</h3>
                                   <div class="section-description">
                                        <p class="left">???????????? ??????????????? ????????????????????? ?????????????????????</p>
                                   </div>
                                   <div class="section-description">
                                        <ol class="right">
                                             <li><a href="family/rich.html">???????????? ????????????????????? ??????????????? ??????????????????</a></li>
                                             <li><a href="family/sacrifice.html">??????????????? ??????????????? ??????????????????????????? ??????????????????</a></li>
                                             <li><a href="family/pressure.html">???????????????????????? ????????????????????? ???????????? ???????????????????????? ??????????????????</a></li>
                                             <li><a href="family/biye.html">???????????? ????????????????????? ??????????????????????????????</a></li>
                                             <li><a href="family/meye.html">????????????????????? ??????????????? ?????????????????????</a></li>
                                        </ol>
                                   </div>
                                   <a href="family/index.html" class="btn btn-success btn-round">???????????????????????? ?????????????????????????????? ????????? ????????????</a>
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
	                                        <p class="left">??????????????????  ????????? ???????????????????????? ????????? ????????? ?????????</p>
	                                   </div>
	                                   <div class="section-description">
	                                        <ol class="right">
	                                             <li><a target="_blank" href="https://www.facebook.com/JhankarMahbub/posts/10152245377056891">??????????????????????????? ?????? USA </a></li>
	                                             <li><a target="_blank" href="https://www.facebook.com/JhankarMahbub/posts/10152169116781891">??????????????? ????????????????????????????????????</a></li>
	                                        </ol>
	                                   </div>
	                                   <a href="#" class="btn btn-success btn-round"></a>
	                              </div>
	                    	</div>
	                         <div class="col-md-4">
	                              <div class="piece-quater">
	                                   <h3 class="text-center">Struggle to be </span> <span class="section-title-last">continued</span></h3>
	                                   <div class="section-description">
	                                        <p class="left">?????????????????????????????? ?????? ??????????????? ??????????????? ????????????????????? ????????????????????????</p>
	                                   </div>
	                                   <div class="section-description">
	                                        <ol class="right">
	                                             <li><a href="jkr/beforeBuet.html">??????????????????????????? ??????????????? ???????????? ???????????????</a></li>
	                                             <li><a href="jkr/college.html">???????????????????????? ????????????????????? ??????????????? ?????????????????? ????????????</a></li>
	                                             <li><a href="jkr/presentation.html">???????????????????????????????????? ???????????? ?????????????????? ??????????????? ????????????</a></li>
	                                             <li><a href="jkr/switch.html">??????????????????????????? ??????????????????????????? ???????????? ????????????</a></li>
	                                             <li><a href="jkr/interview.html">?????????????????? ??????????????? ????????????</a></li>
	                                        </ol>
	                                        <a class="btn btn-success btn-round" href="jkr/index-2.html">?????????????????????????????? ????????? ????????????</a>
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
	                                             <li><a target="_blank" href="https://www.facebook.com/JhankarMahbub/posts/10152245377056891">??????????????????????????? ?????? USA</a></li>
	                                             <li><a href="america/truth4.html">???????????????????????? ??????????????? ??? ????????????????????????</a></li>
	                                             <li><a href="america/truth2.html">??????????????? ?????? ?????????????????? ??????</a></li>
	                                             <li><a target="_blank" href="https://www.facebook.com/JhankarMahbub/posts/10153027427701891">???????????????????????? ?????????????????? ????????????????????????</a></li>
	                                             <li><a href="https://www.youtube.com/watch?v=9UeLIuFXNEQ">???????????????????????? ???????????????: ???????????????</a></li>
	                                        </ol>
	                                        <a class="btn btn-success btn-round" href="america/index.html">???????????????????????? ????????? ????????????</a>
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
																		<h3 class="text-center">?????????????????? ??????????????????</h3>
																		<div class="section-description">
																				 <p class="left">????????????????????? ????????????, ?????????????????? ????????????</p>
																		</div>
																		<div class="section-description">
																				 <ol class="right">
																					 <li><a href="obostha/confidence.html">????????????????????????????????? ????????????????????? ????????????</a></li>
																					 <li><a href="obostha/mon.html">?????? ??????????????? ????????? ???????????? ????????? ??????????????????</a></li>
																					 <li><a href="obostha/bitrisna.html">?????????????????? ??????????????? ???????????????????????? </a></li>
																					 <li><a href="obostha/nissongo.html">????????????????????? ????????? ????????? ???????????????</a></li>
																				 </ol>
																		</div>
																		<a href="obostha/index.html" class="btn btn-success btn-round">?????????????????? ????????????????????? ????????????</a>
															 </div>
											 </div>
													<div class="col-md-4">
															 <div class="piece-quater">
																		<h3 class="text-center"></span> <span class="section-title-last">Plan</span></h3>
																		<div class="section-description">
																				 <p class="left">???????????? ?????????????????????, ????????? ?????????????????? ???????????????</p>
																		</div>
																		<div class="section-description">
																				 <ol class="right">
																							<li><a href="plan/hati.html">?????? ???????????????????????? ?????? ??????</a></li>
																							<li><a href="plan/recharge.html">????????????????????? ????????????????????????</a></li>
																							<li><a href="plan/alternative.html">???????????? ???????????? ??????????????????</a></li>
																							<li><a href="plan/ojothaPlan.html">?????????????????????????????? ??????????????????????????? ???????????? ????????????</a></li>
																				 </ol>
																				 <a class="btn btn-success btn-round" href="plan/index.html">????????????????????? ????????????????????? ????????????</a>
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
																							<li><a href="motivate/ayesh.html">???????????? ?????? ??????????????? ?????? ????????? ????????? ??????</a></li>
																							<li><a href="motivate/berthota.html">???????????? ?????????????????? ???????????????????????? ??????</a></li>
																							<li><a href="motivate/legeThaka.html">???????????? ??????????????? ??????????????? ???????????????</a></li>
																							<li><a href="motivate/mullayon.html">?????????????????? ????????????????????????</a></li>
																							<li><a href="motivate/valoLagena.html">???????????? ?????? ????????????- ??????????????? ??????????????????</a></li>
																				 </ol>
																				 <a class="btn btn-success btn-round" href="motivate/index-2.html">???????????????????????? ????????? ????????????</a>
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
