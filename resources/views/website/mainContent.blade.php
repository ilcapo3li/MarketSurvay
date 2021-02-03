
		<div id="main-wrapper" class="split-container abs-fs">
			<div class="container-fluid">
				<div class="row">
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
					Left Section
					~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<div class="side-left bg-cover">
						<div id="intro-content" class="col-lg-6 vflow bg-cover">

							<div id="ambient-bg"> <!-- ## Start Ambient BG (Particles Animations) ## -->
								<canvas id="bits"></canvas>
							</div><!-- ## End Ambient BG (Particles Animations) ## -->

							<div class="st-logo"> <!-- ## Start Logo part ## -->
								<img src="{{asset("assets/images/local/stomp-logo.png")}}" alt="Stomp" height="84"/>
							</div> <!-- ## End Logo part ## -->

							<div class="st-desc"> <!-- ## Start Coming Soon Content ## -->
								<!-- <h2 class="fw600">STOMP - THE INTRO</h2> -->
								<h2 class="fw600">Launching in<br>
								<span class="st-countdown fw600"></span></h2>
								<p>Stomp is a typographic intro for your product. Just good rhythm and typography. In the basic version, it contains exactly 100 words.</p>
								<p>
									<a id="mi-btn" href="#main-content" class="st-btn btn-bordered">More Information</a>
									{{-- <a class="st-btn btn-fill" data-toggle="modal" data-target="#subscribe-page">Subscribe Now!</a> --}}
								</p>
							</div> <!-- ## End Coming Soon Content ## -->

							<div class="st-footer"> <!-- ## Start Footer ## -->
								<ul class="social-icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
								</ul>
							</div> <!-- ## End Footer ## -->

						</div>
					</div>

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
					Right Section
					~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<div id="main-content" class="side-right col-xs-12 col-lg-offset-6 col-lg-6 vflow" dir="rtl">

						<section id="the-company" class="about-us"> <!-- ## Start ABOUT US section ## -->
							<div class="row">
								<div class="col-xs-12">
									<h3>The Delay Free</h3>
									<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
								</div>
							</div>
						</section> <!-- ## End ABOUT US section ## -->

						<section id="talk-back" class="contact-us"> <!-- ## Start CONTACT US Section ## -->
							<div class="row">
								<div class="col-xs-12">
									<h3>Get In Touch</h3>
									<p>We are SvenCreations and we are here to serve!<br>How can we help you?</p>
                                    <p class="contact-label sven-message"></p>
                                    
                                    <form id="contact-form" class="row" action="/agent/engagement" method="POST"><!-- %% Start CONTACT FORM %% -->
                                        @csrf
										<div class="col-xs-12 col-sm-6">
											<div class="form-group">
												<input type="text" id="contName" class="form form-control" placeholder="Your Name..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name...'" name="contName" required="">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<div class="form-group">
												<input type="email" id="contMail" class="form form-control" placeholder="Your Email..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email...'" name="contMail" required="">
											</div>
										</div>
										<div class="col-xs-12">
											<div class="form-group">
												<textarea id="contMessage" class="form form-control" placeholder="Your Message..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Message...'" name="contMessage" required=""></textarea>
											</div>
										</div>
										<div class="col-xs-12">
											<div class="form-group">
												<button type="submit" id="contSubmit" class="st-btn btn-bordered">Send Message</button>
											</div>
										</div>
									</form><!-- %% End CONTACT FORM %% -->

									<div class="addr-details row"><!-- %% Start ADDRESS DETAILS section %% -->
										<div class="col-xs-12 col-sm-4">
											<p><span>Address</span><br>370 Concho Dr<br>Gold Canyon,AZ, 85118</p>
										</div>
										<div class="col-xs-12 col-sm-4">
											<p><span>Email</span><br><a href="mailto:svencreations@gmail.com?Subject=Stomp%20Inquiry">svencreations@gmail.com</a></p>
										</div>
										<div class="col-xs-12 col-sm-4">
											<p><span>Phone</span><br><a href="tel:+12025550161">+1 (202) 555-0161</a></p>
										</div>
									</div><!-- %% End ADDRESS DETAILS section %% -->

								</div>
							</div>
						</section> <!-- ## End CONTACT US section ## -->

						<section id="the-gallery" class="portfolio"> <!-- ## Start PORTFOLIO section ## -->
							<div class="row">
								<div class="col-xs-12">
									<h3>What's inside</h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

									<div class="st-gallery row" itemscope itemtype="http://schema.org/ImageGallery"><!-- %% Start GALLERY %% -->
										<figure class="col-xs-12 col-sm-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
											<a class="ps-link" href={{asset("assets/images/local/stomp-1.jpg")}} itemprop="contentUrl" data-size="1920x1280">
												<img class="ofit gpu-hack lazyload" data-src={{asset("assets/images/local/stomp-1.jpg")}} itemprop="thumbnail" alt="Best of both worlds" />
												<p class="pszoom"></p>
											</a>
											<figcaption itemprop="caption description">Best of both worlds</figcaption>
										</figure>
										<figure class="col-xs-12 col-sm-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
											<a class="ps-link" href={{asset("assets/images/local/stomp-2.jpg")}} itemprop="contentUrl" data-size="1920x1264">
												<img class="ofit gpu-hack lazyload" data-src={{asset("assets/images/local/stomp-2.jpg")}} itemprop="thumbnail" alt="Once in a blue moon" />
												<p class="pszoom"></p>
											</a>
											<figcaption itemprop="caption description">Once in a blue moon</figcaption>
										</figure>
										<figure class="col-xs-12 col-sm-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
											<a class="ps-link" href={{asset("assets/images/local/stomp-3.jpg")}} itemprop="contentUrl" data-size="1920x1280">
												<img class="ofit gpu-hack lazyload" data-src={{asset("assets/images/local/stomp-3.jpg")}} itemprop="thumbnail" alt="Piece of cake" />
												<p class="pszoom"></p>
											</a>
											<figcaption itemprop="caption description">Piece of cake</figcaption>
										</figure>
										<figure class="col-xs-12 col-sm-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
											<a class="ps-link" href={{asset("assets/images/local/stomp-4.jpg")}} itemprop="contentUrl" data-size="1920x1282">
												<img class="ofit gpu-hack lazyload" data-src={{asset("assets/images/local/stomp-4.jpg")}} itemprop="thumbnail" alt="Whole nine yards" />
												<p class="pszoom"></p>
											</a>
											<figcaption itemprop="caption description">Whole nine yards</figcaption>
										</figure>
									</div><!-- %% End GALLERY %% -->

								</div>
							</div>
						</section> <!-- ## End PORTFOLIO section ## -->

					

						<a id="close-info"><i class="fa fa-window-close" aria-hidden="true"></i></a>

						<p class="copyright text-center">&copy; 2021 DelayFree - THE INTRO</p>
					</div>
				</div>
			</div>
        </div>
        
        <!-- =================================================================
	Subscribe Modal
	================================================================== -->
	{{-- <div id="subscribe-page" class="sven-modal modal fade vflow" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body sub-bg bg-cover">

					<div class="row">
						<div class="col-xs-12 notify-sec"> <!-- ## Start SUBSCRIPTION section ## -->
							<h3>Subscribe now</h3>
							<p class="sub-desc">Gain exclusive access into our release on August 6th 2017 by signing up with our newsletter. Join us on the day of release.</p>
							<p class="subscribe-label sven-message"></p>

							<form id="subscription" class="row" action="http://svencreations.com/stomp/php/subscribe.php" method="POST"><!-- %% Start SUBSCRIPTION FORM %% -->
								<div class="col-xs-12">
									<div class="form-group">
										<input type="email" id="userEmail" class="form form-control" placeholder="Your Email..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email...'" name="email" required="">
									</div>
								</div>
								<div class="col-xs-12">
									<div class="form-group">
										<button type="submit" id="submit-form" class="st-btn btn-fill">Get Notified</button>
									</div>
								</div>
							</form><!-- %% End SUBSCRIPTION FORM %% -->

							<button type="button" class="close close-form" data-dismiss="modal">&times;</button>
						</div> <!-- ## End ABOUT US section ## -->
					</div>

				</div>
			</div>
		</div>
	</div> --}}