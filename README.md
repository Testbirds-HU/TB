# TB

Page-effects (source: http://tympanus.net/Development/PageLoadingEffects/)

When you use this effects, include next files:
- js/snap.svg-min.js
- js/classie.js
- js/loader.js
- js/svgLoader.js

Every page has a script tag:

	<script>
		(function() {
			docInteractive('lazy_stretch');
			var pageWrap = document.getElementById( 'pagewrap' ),
				triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a.pageload-link' ) ),
				loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 100 } );
				
			function init() {
				triggerLoading.forEach( function( trigger ) {
					trigger.addEventListener( 'click', function( ev ) {
						ev.preventDefault();
						loader.show();
						setTimeout( function() {
							loader.hide();
							document.location.href= ev.target.href;
						}, 1000 );
					} );
				} );
			}

			init();
		})();
	</script>

The page has pageload effects, when you clicked 'a.pageload-link' link.
The next function select the current effect for example:

docInteractive('lazy_stretch');

Effects list in js/loader.js
circle
curtain
frame_it
jammed_blind
lateral_swipe
lazy_stretch
origami
parallelogram
spill
tilted
tunnel_vision
wave
windscreen_wiper
