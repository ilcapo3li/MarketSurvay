<!DOCTYPE html>
<html lang="en">

	<!-- StyleCSS -->
	@include('website.layouts.header')
	<!-- /StyleCSS -->
	<body class="generator">

		<!-- =================================================================
		Stomp - Typographic Intro Scenes
		================================================================== -->
		@include('website.introSlider')

		<!-- =================================================================
		Main Page Content
		================================================================== -->
		@include('website.mainContent')

		<!-- =================================================================
		Splash page content (If autostart is set to false)
		================================================================== -->
		<div class="splash-page abs-fs vflow bg-cover">
			<div class="sven-scene halign-center">
				<div class="centered center-center">
					<p>Stomp is a typographic intro for your product. Just good rhythm and typography. In the basic version, it contains exactly 100 words.</p>
					<p style="margin-bottom: 0"><a class="st-btn btn-fill play-button">Get Started</a></p>
				</div>
			</div>
		</div>

		<!-- =================================================================
		Preloader Instance
		================================================================== -->
		<div class="loader-container">
			<div class="abs-center">
				<div class="sk-double-bounce">
					<div class="sk-child sk-double-bounce1"></div>
					<div class="sk-child sk-double-bounce2"></div>
				</div>
			</div>
			<div class="sound-info text-center">
				<p><img src={{asset("assets/images/sound.png")}} alt="Enable Sound" width="32" height="32"/><br/>Tap / Click anywhere to preload sound <br/> for an optimum experience</p>
			</div>
		</div>

		<!-- =================================================================
		Player Controls (Footer)
		================================================================== -->
		<div class="pl-wrapper vflow">
			<div class="pl-controls">
				<ul>
					<li><a class="pl-play">PLAY</a></li>
					<li><a class="pl-sound">SOUND</a></li>
					<li><a class="pl-skip">SKIP INTRO</a></li>
				</ul>
			</div>
		</div>

		<!-- =================================================================
		Page Reveal Transition
		================================================================== -->
		<div class="revealer"></div>

	


	<!-- =================================================================
	Root Element of PhotoSwipe
	================================================================== -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"><div class="pswp__bg"></div><div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button><button class="pswp__button pswp__button--share" title="Share"></button><button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button><button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"> </button><button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"> </button><div class="pswp__caption"><div class="pswp__caption__center"></div></div></div></div></div>


	<!-- JS -->
	@include('website.layouts.script')
	<!-- /JS -->

	</body>

	
</html>
