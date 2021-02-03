
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
								<h2 class="fw600">Delay Free</h2>
								
								<p>We are playing an essential role within the cargo industry as our prime focus is to cater to the needs of the business owners by providing them with timely and cost-effective freight services.</p>
								<p>
								<h2 class="fw600"><br>
								<span class="/*st-countdown*/ fw600">Launching Very Soon</span></h2>
									<a id="mi-btn" href="#main-content" class="st-btn btn-bordered">More Information</a>
									<button class="st-btn btn-fill" data-toggle="modal" data-target="#subscribe-page">Subscribe Now!</button>
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
									<h3>بدون تأخير ----  Delay Free</h3>
									<p>ديلاي فري شركة رائدة في قطاع الخدمات اللوجستية تعمل على إيجاد بنية احترافية للتجارة الالكترونية داخل المدن موجهه لأصحاب المتاجر والمنشآت التجارية بجودة عالية وخدمات تنافسية بواسطة كفاءات وخبرات وطنية وتضمن ديلاي فري استمرار العلاقة بين التجار وعملائهم بكل احترافية والتزام تام بدون اي تأخير .</p>
								</div>
							</div>
						</section> <!-- ## End ABOUT US section ## -->

						<section id="talk-back" class="contact-us"> <!-- ## Start CONTACT US Section ## -->
							<div class="row">
								<div class="col-xs-12">
									<h3>كن معنا على تواصل</h3>
									<p>نحن هنا لخدمتكم بدون تأخير !!<br>كيف يمكننا مساعدتك ؟</p>
                                    <p class="contact-label sven-message"></p>
                                    
                                    <form id="contact-form" class="row" action="/agent/engagement" method="POST"><!-- %% Start CONTACT FORM %% -->
                                        @csrf
										@method('POST')
										<div class="col-xs-12 col-sm-6">
											<div class="form-group">
												<input type="text" id="contName" class="form form-control" placeholder="أدخل اسمك ......" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name...'" name="contName" required="">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<div class="form-group">
												<input type="email" id="contMail" class="form form-control" placeholder="بريدك الالكنروني ......." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email...'" name="contMail" required="">
											</div>
										</div>
										<div class="col-xs-12">
											<div class="form-group">
												<textarea id="contMessage" class="form form-control" placeholder="رسالتك للتواصل معنا ........" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Message...'" name="contMessage" required=""></textarea>
											</div>
										</div>
										<div class="col-xs-12">
											<div class="form-group">
												<button type="submit" id="contSubmit" class="st-btn btn-bordered">ارسل رسالتك</button>
											</div>
										</div>
									</form><!-- %% End CONTACT FORM %% -->

									<div class="addr-details row"><!-- %% Start ADDRESS DETAILS section %% -->
										<div class="col-xs-12 col-sm-4">
											<p><span>العنوان</span><br>370 Concho Dr<br>Gold Canyon,AZ, 85118</p>
										</div>
										<div class="col-xs-12 col-sm-4">
											<p><span>البريد الالكتروني</span><br><a href="mailto:svencreations@gmail.com?Subject=Stomp%20Inquiry">svencreations@gmail.com</a></p>
										</div>
										<div class="col-xs-12 col-sm-4">
											<p><span>رقم الهاتف</span><br><a href="tel:+12025550161">+1 (202) 555-0161</a></p>
										</div>
									</div><!-- %% End ADDRESS DETAILS section %% -->

								</div>
							</div>
						</section> <!-- ## End CONTACT US section ## -->

						<section id="the-gallery" class="portfolio"> <!-- ## Start PORTFOLIO section ## -->
							<div class="row">
								<div class="col-xs-12">
									<h3>خدماتنا</h3>
									<p>
									 نعمل وفق استراتيجيات واضحة واحترافية
									 مدربون على الاهتمام والعناية بشحنتك بشكل خاص جداً
									 مؤمنون بما نقدمه ومسؤولون عما ننتجة إرضاءً لكم
									 نمنح شحناتكم الاهتمام العالي لتصل وفق جودتها العالية
									 </p>

									<div class="st-gallery row" itemscope itemtype="http://schema.org/ImageGallery"><!-- %% Start GALLERY %% -->
										<figure class="col-xs-12 col-sm-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
											<a class="ps-link" href={{asset("assets/images/local/stores.jfif")}} itemprop="contentUrl" data-size="1920x1280">
												<img class="ofit gpu-hack lazyload" data-src={{asset("assets/images/local/stores.jfif")}} itemprop="thumbnail" alt="Best of both worlds" />
												<p class="pszoom"></p>
											</a>
											<figcaption itemprop="caption description">التخزين ببرامج خاصة بالمستودعات</figcaption>

										</figure>

										<figure class="col-xs-12 col-sm-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
											<a class="ps-link" href={{asset("assets/images/local/representative.jfif")}} itemprop="contentUrl" data-size="1920x1264">
												<img class="ofit gpu-hack lazyload" data-src={{asset("assets/images/local/representative.jfif")}} itemprop="thumbnail" alt="Once in a blue moon" />
												<p class="pszoom"></p>
											</a>
											<figcaption itemprop="caption description">التوصيل خلال 24 ساعة بدون اي تأخير</figcaption>

										</figure>
										<figure class="col-xs-12 col-sm-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
											<a class="ps-link" href={{asset("assets/images/local/stomp-1.jpg")}} itemprop="contentUrl" data-size="1920x1280">
												<img class="ofit gpu-hack lazyload" data-src={{asset("assets/images/local/stomp-1.jpg")}} itemprop="thumbnail" alt="Piece of cake" />
												<p class="pszoom"></p>
											</a>
											<figcaption itemprop="caption description">  التغليف بأسعار رمزية </figcaption>
										</figure>
										<figure class="col-xs-12 col-sm-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
											<a class="ps-link" href={{asset("assets/images/local/onlineSellers.jpg")}} itemprop="contentUrl" data-size="1920x1282">
												<img class="ofit gpu-hack lazyload" data-src={{asset("assets/images/local/onlineSellers.jpg")}} itemprop="thumbnail" alt="Whole nine yards" />
												<p class="pszoom"></p>
											</a>
											<figcaption itemprop="caption description">المتاجر الالكترونية</figcaption>
										</figure>
									</div><!-- %% End GALLERY %% -->

								</div>
							</div>
						</section> <!-- ## End PORTFOLIO section ## -->

					

						<a id="close-info"><i class="fa fa-window-close" aria-hidden="true"></i></a>

						<p class="copyright text-center">&copy; 2021 DelayFree - بدون تأخير</p>
					</div>
				</div>
			</div>
        </div>
        
        <!-- =================================================================
	Subscribe Modal
	================================================================== -->
	<div id="subscribe-page" class="sven-modal modal fade vflow" role="dialog" dir="rtl">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body sub-bg bg-cover">

					<div class="row">
						<div class="col-xs-12 notify-sec"> <!-- ## Start SUBSCRIPTION section ## -->
							<h3>اشترك معنا الأن</h3>
							<p class="sub-desc">ابق على تواصل ليصلك كل اخبارنا</p>
							<p class="subscribe-label sven-message"></p>

							<form id="subscription" class="row" action="/supscription" method="POST"><!-- %% Start SUBSCRIPTION FORM %% -->
							@csrf
							@method('POST')
								<div class="col-xs-12">
									<div class="form-group">
										<input type="email" id="userEmail" class="form form-control" placeholder="بريدك الالكتروني ...." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email...'" name="email" required="">
									</div>
								</div>
								<div class="col-xs-12">
									<div class="form-group">
										<button type="submit" id="submit-form" class="st-btn btn-fill">اشترك</button>
									</div>
								</div>
							</form><!-- %% End SUBSCRIPTION FORM %% -->

							<button type="button" class="close close-form" data-dismiss="modal">&times;</button>
						</div> <!-- ## End ABOUT US section ## -->
					</div>

				</div>
			</div>
		</div>
	</div> 