<!DOCTYPE html>

<html>

<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	
	<link rel="stylesheet" href="style.css?v=1" type="text/css"/>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
	<script src="jquery-3.2.1.min.js"></script>
	
</head>


<body>

	<header class="main-header">
		
	</header>

	<main class="main-content">
		
		<section class="row">
			<div class="grid">
				
				<div class="col-33 max-width-250px flex justify-content-end height-480px hide-under-900px">
					<!-- <div class="width-50"></div> -->
					<div id="fisheye" class="fisheye_logo logo background-image" style="background-image: url('img/logo.svg'); "></div>
					

					<div class="width-100 align-self-end flex justify-content-end">
						<div class="width-80p align-self-end">
							<div class="text width-100 align-self-end">
								<img id="textimg_right" class="width-100" src="img/text_wood_2.svg">
							</div>
							
							
						</div>

						<div class="width-99 align-self-end">
							<div class="width-100 align-self-end height-60px flex align-items-end justify-content-end">
								<!-- <span class="font-size-8 font-family-arial margin-right-3">Wobblewelt 2007 All rights reserved. www.wobblewelt.com</span> -->
								<img class="width-100" src="img/rights.svg">
							</div>
						</div>
					</div>
				</div>
				
				<script>
					(function($){
						$(document).ready(function() {

							var audio = new Audio('resources/wobblewelt.mp3');
							audio.play();
							
							var audioElement = document.createElement('audio');
						    audioElement.setAttribute('src', 'resources/blink.mp3');
						    audioElement.loop = false;
						    audioElement.volume = 0.1;

							var i = 0;
							setInterval(function() {
								
							      audio.play();
							      i = i + 1;
							      
							      if (i % 45 == 0) {
							        $('.fisheye_logo').each( function( key, value ) {
							        	value.style.backgroundImage = "url('img/logo2.svg')";
							        });
							        audioElement.play();
							        //console.log('blink');
							      }

							      else {
							      	$('.fisheye_logo').each( function( key, value ) {
							        	value.style.backgroundImage = "url('img/logo.svg')";
							        });
							      }



							}, 100);

							
						});
					})(jQuery)
				</script>

				<div class="relative background-image width-600px text-align-center justify-content-center akvarium" style="background-image:url('img/bgdefault.jpg')">

					<div class="inner-content relative">
						
						<div class="clickhere"><img class="clickhere-img" src="img/click.svg"/></div>

						<div id="switch-container" class="height-100 flex popping-images">
							<!-- <img class="float" src="img/model_FLOAT.png">
							<img class="gold" src="img/model_GOLD.png"> -->
							

							<div class="wood-div z-9 visible">
								<img class="wood" src="img/model_WOOD.png" usemap="">
								<map name="image-map-wood">
								    <area target="" alt="wood" title="wood" href="#wood" coords="82,212,121,228,157,224,196,196,224,181,292,162,412,144,470,156,541,149,534,112,567,67,583,35,575,13,536,2,472,1,434,1,322,44,218,77,152,92,92,121,18,131,2,170" shape="poly" onclick="selectType('wood')">
								</map>
							</div>

							<div class="sink-div z-5 visible">
								<img class="sink" src="img/model_SINK.png" usemap="">
								<map name="image-map-sink">
								    <area target="" alt="" title="sink" href="#sink" coords="0,173,95,150,111,116,142,124,153,133,170,134,177,122,179,108,180,96,170,84,156,83,155,93,162,95,145,96,132,95,133,88,144,78,154,75,165,75,178,84,188,98,201,97,209,87,216,78,217,68,212,58,224,51,234,51,242,41,253,46,264,38,264,12,258,2,231,0,225,15,232,19,222,28,214,30,194,29,167,28,147,26,139,5,113,19,49,73,13,139" shape="poly" onclick="selectType('sink')">
								</map>
							</div>

							<div class="bite-div z-8 visible">
								<img class="bite" src="img/model_BITE.png" usemap="">
								<map name="image-map-bite">
								    <area target="" alt="" title="bite" href="#bite" coords="120,244,224,208,224,198,167,78,176,61,163,44,147,40,142,39,143,23,140,10,132,1,117,1,107,21,102,38,85,34,72,31,55,37,50,54,43,72,18,65,13,78,17,94,30,110,6,129,2,146,8,158,28,164,32,152,34,139,49,135,66,139" shape="poly" onclick="selectType('bite')">
								</map>
							</div>

							<div class="gold-div z-7 visible">
								<img class="gold" src="img/model_GOLD.png">
							</div>
							
							<div class="float-div z-6 visible">
								<img class="float" src="img/model_FLOAT.png">
							</div>

						</div>	
					
					</div>

				</div>

				<div class="col-100 width-600px flex justify-content-start hide-over-900px">
					<div class="fisheye_logo logo background-image top-0 margin-bottom-20px" style="background-image: url('img/logo.svg'); "></div>
					

					<div class="width-100 flex justify-content-start ">
						
						<div class="text text-left padding-bottom-20px">
							<img id="textimg_left" class="width-100" src="img/text_wood_left.svg">
						</div>
						
						<div class="width-100">
							<div class="width-100 flex justify-content-start">
								<!-- <span class="font-size-8 font-family-arial margin-right-3">Wobblewelt 2007 All rights reserved. www.wobblewelt.com</span> -->
								<img class="width-100" src="img/rights.svg">
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- <audio class="audio-controls" src="resources/wobblewelt.mp3" controls autoplay hidden preload loop></audio> -->


		</section>

	</main>

	<footer class="main-footer" id="footer">

	</footer>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
	<script src="jquery.min.js"></script>
	<!--<script src="image-map.js"></script>-->
	<script>

		var clicks = 0;
		/*
	    $(function () {
	        ImageMap('img[usemap]');
	    });*/

	    function selectType( type ) {
	        /*document.querySelector("#textimg").setAttribute('src', 'img/text_' + type + '.svg');
	        divselector = "." + type + "-div";*/
	        /*if( type == 'wood' ) {
	        	$( ".wood-div" ).css('z-index', '1');
	        }*/

	       	switchAll();
	    }

	    $('#switch-container').click( function( ) {
	    	$('.clickhere').hide();
	    	clicks = switchAll( clicks );
	    });

		function switchAll( clicks ) {
			clicks = clicks + 1;
	    	
	    	$('#switch-container > div').each(function() {

	    		if( clicks == 1 ) {
					if( $( this ).hasClass('wood-div') ) {
						$( this ).removeClass('visible');
						//console.log('hiding wood');
						/*$("#textimg_right").fadeOut(150);
						$("#textimg_left").fadeOut(150);*/
						document.querySelector("#textimg_right").setAttribute('src', 'img/text_bite_2.svg');
						document.querySelector("#textimg_left").setAttribute('src', 'img/text_bite_left.svg');
						/*$("#textimg_right").fadeIn(150);
						$("#textimg_left").fadeIn(150);*/
					}
				}

				if( clicks == 2 ) {
					if( $( this ).hasClass('bite-div') ) {
						$( this ).removeClass('visible');
						//console.log('hiding bite');
						document.querySelector("#textimg_right").setAttribute('src', 'img/text_gold_2.svg');
						document.querySelector("#textimg_left").setAttribute('src', 'img/text_gold_left.svg');
					}
				}

				if( clicks == 3 ) {
					if( $( this ).hasClass('gold-div') ) {
						$( this ).removeClass('visible');
						//console.log('hiding gold');
						document.querySelector("#textimg_right").setAttribute('src', 'img/text_float_2.svg');
						document.querySelector("#textimg_left").setAttribute('src', 'img/text_float_left.svg');
					}
				}

    			if( clicks == 4 ) {
					if( $( this ).hasClass('float-div') ) {
						$( this ).removeClass('visible');
						//console.log('hiding float');
						document.querySelector("#textimg_right").setAttribute('src', 'img/text_sink_2.svg');
						document.querySelector("#textimg_left").setAttribute('src', 'img/text_sink_left.svg');
					}
				}

				if( clicks == 5 ) {
					if( $( this ).hasClass('float-div') ) {
						$( this ).addClass('visible');
						//console.log('showing float');
						document.querySelector("#textimg_right").setAttribute('src', 'img/text_float_2.svg');
						document.querySelector("#textimg_left").setAttribute('src', 'img/text_float_left.svg');
					}
				}

				if( clicks == 6 ) {
					if( $( this ).hasClass('gold-div') ) {
						$( this ).addClass('visible');
						//console.log('showing gold');
						document.querySelector("#textimg_right").setAttribute('src', 'img/text_gold_2.svg');
						document.querySelector("#textimg_left").setAttribute('src', 'img/text_gold_left.svg');
					}
				}

				if( clicks == 7 ) {
					if( $( this ).hasClass('bite-div') ) {
						$( this ).addClass('visible');
						//console.log('showing bite');
						document.querySelector("#textimg_right").setAttribute('src', 'img/text_bite_2.svg');
						document.querySelector("#textimg_left").setAttribute('src', 'img/text_bite_left.svg');
					}
				}

				if( clicks == 8 ) {
					if( $( this ).hasClass('wood-div') ) {
						$( this ).addClass('visible');
						//console.log('showing wood');
						document.querySelector("#textimg_right").setAttribute('src', 'img/text_wood_2.svg');
						document.querySelector("#textimg_left").setAttribute('src', 'img/text_wood_left.svg');
						clicks = 0;
					}
				}
			});

			return clicks
			
		}

	    $(document).ready(function() {
		    var audioElement = document.createElement('audio');
		    audioElement.setAttribute('src', 'resources/sound.mp3');
		    audioElement.loop = false;
		    
		    $('#switch-container').click(function() {
		        audioElement.play();
		    });
		});
		    
	</script>

	<!-- preload images to avoid flicker -->
	<div id="preload">
	   <img src="img/logo.svg" width="1" height="1" alt="Image 01" />
	   <img src="img/logo2.svg" width="1" height="1" alt="Image 02" />
	</div>

</body>

</html>