<!DOCTYPE html>

<html>
<head>
	<title>UReserve</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	
	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="css/styles.css">

    
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
          		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            		<span class="sr-only">Toggle navigation</span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
          		<a class="navbar-brand" href="index.php">UReserve</a>

        	</div>

	        <div id="navbar" class="navbar-collapse collapse">
	         	<ul class="addGreeting nav navbar-nav navbar-right" id="addGreeting">
	         		<li><a id="home" href="javascript: void(0)"><span class="glyphicon glyphicon-home"></span></a></li>
	         		<li><a id="user" href="javascript: void(0)"><span class="glyphicon glyphicon-user"></span></a></li>
		            <li><a id="log-out" href="log-out.php"><span class="glyphicon glyphicon-off"></span></a></li>
	          	</ul>
	        </div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div id="sidebar" class="col-md-3 sidebar">
				<br/>
				<!-- NEW SEARCH -->
				<div class="row">
					<button id="new-search" type="button" class="header btn btn-primary btn-lg btn-block">
						<span class="glyphicon glyphicon-search"></span><br/>New Search
					</button>
				</div>

				<hr/>

				<!-- UPCOMING -->
				<div class="row" id="upcoming-reservations">
					
				</div>


				<div class="upcoming-reservations">


				
				<!-- RESERVATION CARDS will be added below with JS if the user is logged in -->

			

				</div>
			</div>

			<div class="col-md-9 main map">
				<!-- SVG CAMPUS MAP -->

				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1080 1080" enable-background="new 0 0 1080 1080" xml:space="preserve">
				<g id="grass_and_stuff">
				</g>
				<g id="non_clickable_buildings">
					<g>
						<rect fill="#BCE2DB" width="1080" height="1080"/>
						<path fill="#D1E0B8" d="M0,1012.5v67.5h1080V190.5c0,0-919.116-562.887-957.116,301.113
							C122.884,491.613,146.185,1009.533,0,1012.5z"/>
						<polygon fill="#ADA19A" points="443.5,252.289 395.941,252.289 396.096,241.584 377.5,241.584 376.5,310.5 395.096,310.5 
							395.735,266.5 443.5,266.5 		"/>
						<polygon fill="#ADA19A" points="465.083,252.289 512.642,252.289 512.487,241.584 531.083,241.584 532.083,310.5 513.487,310.5 
							512.848,266.5 465.083,266.5 		"/>
						<polygon fill="#ADA19A" points="444.168,164.5 396.609,164.5 396.764,153.795 378.168,153.795 377.168,222.711 395.764,222.711 
							396.403,178.711 444.168,178.711 		"/>
						<polygon fill="#ADA19A" points="540.171,164.5 540.171,123.5 523.995,123.5 523.995,164.5 486.427,164.5 486.427,123.5 
							470.25,123.5 470.25,164.5 463.997,164.5 463.997,177.674 470.25,177.674 486.427,177.674 513.625,177.674 513.625,218.5 
							514.623,218.5 514.623,254.289 523.763,254.289 523.763,218.5 528.11,218.5 528.11,177.674 540.171,177.674 549.923,177.674 
							549.923,164.5 		"/>
						<polygon fill="#ADA19A" points="421.826,334.5 421.826,338.5 395.096,338.5 395.096,333.5 376.5,333.5 376.5,366 395.096,366 
							395.096,355.5 421.826,355.5 421.826,367 440.422,367 440.422,334.5 		"/>
						<polygon fill="#ADA19A" points="514.948,335.5 514.948,339.5 488.218,339.5 488.218,334.5 469.622,334.5 469.622,367 488.218,367 
							488.218,356.5 514.948,356.5 514.948,368 533.544,368 533.544,335.5 		"/>
						<polygon fill="#ADA19A" points="351.5,203 349.5,203 349.5,196 335.5,196 335.5,203 333,203 333,222.711 335.5,222.711 335.5,233 
							349.5,233 349.5,222.711 351.5,222.711 		"/>
						<polygon fill="#ADA19A" points="328,254.289 328,268.895 325.5,268.895 325.5,278 328,278 328,283.5 342.25,283.5 342.25,254.289 
									"/>
						<polygon fill="#ADA19A" points="333.875,312.42 333.875,300.34 321,300.34 321,324.5 326.938,324.5 333.875,324.5 351.5,324.5 
							351.5,312.42 		"/>
						<polygon fill="#ADA19A" points="312.5,264 307.5,264 307.5,260.384 304.398,260.384 304.398,256.5 288.5,256.5 288.5,260.384 
							283.922,260.384 283.922,264 279.5,264 279.5,279 288.5,279 288.5,283.5 304.398,283.5 304.398,279 312.5,279 		"/>
						<polygon fill="#ADA19A" points="271.5,310.5 271.5,297 257,297 257,310.5 246.044,310.5 246.044,321.5 272.446,321.5 
							272.446,310.5 		"/>
						<polygon fill="#ADA19A" points="267,340 255.5,340 246.044,340 243.5,340 243.5,367 255.5,367 255.5,351.25 267,351.25 		"/>
						<polygon fill="#ADA19A" points="265,397.75 259.245,397.75 259.245,382.5 243.5,382.5 243.5,413 259.245,413 259.245,408.5 
							265,408.5 		"/>
						<polygon fill="#ADA19A" points="333.875,389.5 333.875,397.75 323,397.75 323,410.5 333.875,410.5 333.875,413 346.336,413 
							346.336,410.5 346.336,397.75 346.336,389.5 		"/>
						<polygon fill="#ADA19A" points="267.922,741.034 266.199,747.455 237.044,739.632 240.375,726.242 246.524,727.771 
							251.016,709.719 221.009,702.255 216.518,720.308 223.073,721.938 211.949,766.648 205.395,765.018 200.903,783.071 
							230.91,790.535 235.401,772.482 229.251,770.953 232.977,755.979 261.834,763.724 260.331,769.328 277.333,773.891 
							278.837,768.285 283.202,752.018 284.925,745.597 		"/>
						<polygon fill="#ADA19A" points="847.804,579.57 848.438,574.703 829.928,572.292 829.294,577.16 813.429,575.094 810.059,600.969 
							862.283,607.771 865.653,581.896 		"/>
						<path fill="#ADA19A" d="M725.172,213.828l28.666,4c0,0-14,118.667,0,122s-28.666,3.333-28.666,3.333
							S717.839,254.494,725.172,213.828z"/>
						<polygon fill="#ADA19A" points="936.377,511.479 949.36,503.718 953.107,509.513 984.326,489.33 952.526,440.147 921.311,460.33 
							924.146,464.716 925.864,467.375 911.253,476.11 910.688,475.941 917.923,442.657 906.375,440.147 899.328,472.561 
							895.773,471.503 876.794,484.182 876.146,490.403 838.261,483.637 836.184,495.271 876.904,502.542 881.169,503.812 
							878.895,512.914 891.344,526.847 898.465,525.898 888.925,569.78 900.473,572.291 907.865,538.287 914.001,540.475 
							933.629,528.826 934.189,525.288 965.885,530.948 967.961,519.315 936.039,513.614 		"/>
						<path fill="#BC997F" d="M860.986,198.5c-3.543-23.164-25.426-41-51.907-41s-48.364,17.836-51.907,41h-0.514v152.75h0.027
							c0.589,25.829,23.812,46.605,52.394,46.605s51.805-20.777,52.394-46.605h0.027V198.5H860.986z"/>
						<rect x="767.5" y="201.5" fill="#899B79" width="83" height="154"/>
						<path fill="#BC997F" d="M1047,288.434l-16.622-43.678l-145.065-67.082l-1.895,157.584c-0.041-0.001-0.08-0.007-0.122-0.007
							c-3.478,0-6.296,3.189-6.296,7.125s2.818,7.125,6.296,7.125c3.383,0,6.136-3.02,6.283-6.806l134.251,6.806L1047,288.434z"/>
						<polygon fill="#899B79" points="889,285 890.512,186.42 1026.5,247 1042.5,287.5 1021.5,343.161 886.5,337 		"/>
						<path fill="#BC997F" d="M889.031,282.985c0,0,26.469-7.485,46.219,11.015c0,0,19.25,17.737,4.686,45.438
							c-6.021,11.448-23.08,0-23.08,0S935.25,300.34,886.5,307.5L889.031,282.985z"/>
						<ellipse fill="#BC997F" cx="904.877" cy="320.933" rx="5.377" ry="4.567"/>
					</g>
				</g>


				<g id="buildings">

					<a class="building" id="gac">
					<g class="graphic">
					
						<polygon id="gac" fill="#ECF0F1" points="597.106,372.34 597.106,412.007 627.008,412.007 627.008,423.007 652.008,423.007 
							652.008,412.34 679.008,411.673 679.008,372.34 695.674,372.34 695.674,312.007 688.342,312.007 688.342,177.674 583.342,177.674 
							583.342,184.34 590.008,184.34 590.345,208.67 568.178,209.17 568.178,283.169 591.678,283.169 591.845,303.002 600.512,303.002 
							600.345,312.668 581.345,312.668 581.512,331.001 576.345,331.334 576.845,352.501 582.512,352.334 582.512,372.674 		"/>
						<rect x="604.299" y="233" fill="none" width="71.818" height="42.578"/>
					

						<text transform="matrix(1 0 0 1 604.2988 243.584)" font-family="'Avenir-Roman'" font-size="14">Goergen </text>
						<text transform="matrix(1 0 0 1 604.2988 260.3838)" font-family="'Avenir-Roman'" font-size="14">Athletic </text>
						
					</g>
					</a>

					<a class="building" id="douglass">
					<g class=graphic>
						<polygon id="douglass" fill="#ECF0F1" points="618.333,516.002 618.333,544.002 658.666,544.002 658.666,516.002 672,516.002 
							672,478.336 604.333,478.336 604.333,515.336 		"/>
						<rect x="611.823" y="481.029" fill="none" width="71.816" height="42.578"/>
						<text transform="matrix(1 0 0 1 611.8232 491.6133)" font-family="'Avenir-Roman'" font-size="14">Frederick </text>
						<text transform="matrix(1 0 0 1 611.8232 508.4131)" font-family="'Avenir-Roman'" font-size="14">Douglass</text>
					</g>
					</a>

					<a class="building" id="spurrier">
					<g class="building">
						<polygon id="spurrier" fill="#ECF0F1" points="975.5,379 957.5,379 957.5,369.5 951,369.5 951,366 912.5,366 912.5,369.5 
							906,369.5 906,379 895,379 895,417.5 912.5,417.5 912.5,420.5 951,420.5 951,417.5 975.5,417.5 		"/>
						<rect x="906.682" y="385.825" fill="none" width="71.818" height="42.578"/>
						<text transform="matrix(1 0 0 1 906.6816 396.4092)" font-family="'Avenir-Roman'" font-size="14">Spurrier</text>
					</g>
					</a>


					<a class="building" id="wilson">
					<g class="building">
						<polygon id="wilson" fill="#ECF0F1" points="515.916,516.083 515.916,485.75 501.583,468.083 515.916,453.417 522.25,457.75 
							576.25,457.75 576.25,516.083 567.583,508.083 567.583,516.083 		"/>
						<rect x="514.014" y="463.246" fill="none" width="71.818" height="42.578"/>
						<text transform="matrix(1 0 0 1 514.0137 473.8301)" font-family="'Avenir-Roman'" font-size="14">Wilson </text>
						<text transform="matrix(1 0 0 1 514.0137 490.6299)" font-family="'Avenir-Roman'" font-size="14">Commons</text>
					</g>
					</a>

					<a class="building" id="morey">
					<g class="building">
						<polygon id="morey" fill="#ECF0F1" points="557,539.25 470.25,539.25 470.25,559.25 501.583,559.25 501.583,561.5 525.5,561.5 
							525.5,559.25 557,559.25 		"/>
						<rect x="479.986" y="541.562" fill="none" width="68.055" height="21.287"/>
						<text transform="matrix(1 0 0 1 479.9863 552.1455)" font-family="'Avenir-Roman'" font-size="14">Morey</text>
					</g>
					</a>

					<a class="building" id="rettner">
					<g class="graphic">
						<path id="rettner" fill="#ECF0F1" d="M468.521,538.5l5.479-8.667c0,0-13.666-21,2.167-41.667l8.5,4.667l19.667-0.167V530.5
							l-12.5,0.167L492,538.5H468.521z"/>
						<rect x="446.565" y="499.711" fill="none" width="68.058" height="21.289"/>
						<text transform="matrix(1 0 0 1 446.5654 510.2949)" font-family="'Avenir-Roman'" font-size="14">Rettner</text>
					</g></a>

					<a class="building" id="lattimore">
					<g class="graphic">
						<polygon id="lattimore" fill="#ECF0F1" points="446.336,550.375 438.836,550.375 438.836,536.673 429.336,536.673 
							429.336,539.25 408.336,539.25 408.336,502.34 404.002,502.34 404.002,498.34 391.002,498.34 391.002,502.34 385.669,502.34 
							385.669,539.25 364.336,539.25 364.336,536.673 346.336,536.673 346.336,544.34 354.669,544.34 354.669,559.34 385.669,559.34 
							385.669,561.5 408.336,561.5 408.336,559.34 438.669,559.34 438.669,558.586 446.336,558.586 		"/>
						<rect x="361.068" y="541.562" fill="none" width="68.056" height="21.287"/>
						<text transform="matrix(1 0 0 1 361.0684 552.1455)" font-family="'Avenir-Roman'" font-size="14">Lattimore</text>
					</g></a>
					

					<a class="building" id="dewey">
					<g class="graphic">
						<polygon id="dewey" fill="#ECF0F1" points="440.002,647.001 412.002,647.001 412.002,644 385.336,644 385.336,647.001 
							354.336,647.001 354.336,666.668 356.336,666.668 356.336,676.334 370.002,676.334 370.002,682.834 356.336,682.834 
							356.336,688.334 377.67,688.334 377.67,682.834 383.67,682.834 383.67,702.334 412.002,702.334 412.002,676.334 439.002,676.334 
							439.002,666.668 440.002,666.668 		"/>
						<rect x="371.917" y="653.05" fill="none" width="68.056" height="21.289"/>
						<text transform="matrix(1 0 0 1 371.917 663.6338)" font-family="'Avenir-Roman'" font-size="14">Dewey</text>
					</g></a>
					

					<a class="building" id="schlegel">
					<g class="graphic">
						<path id="schlegel" fill="#ECF0F1" d="M311.667,702.334v-13.667h1.667v-61h-36v20.995c-0.856-0.207-1.747-0.329-2.667-0.329
							h-0.666c-6.259,0-11.333,5.074-11.333,11.333c0,6.26,5.074,11.334,11.333,11.334h0.666c0.92,0,1.81-0.122,2.667-0.328v17.995h2
							v13.667H311.667z"/>
						<rect x="260.428" y="648.946" fill="none" width="68.057" height="21.288"/>
						<text transform="matrix(1 0 0 1 260.4282 659.5303)" font-family="'Avenir-Roman'" font-size="14">Schlegel</text>
					</g></a>
					

					<a class="building" id="simon">
					<g class="graphic">
						<polygon id="simon" fill="#ECF0F1" points="409.334,708.999 409.334,702.334 386.001,702.334 386.001,708.999 382.334,708.999 
							382.334,756.666 413.668,756.666 413.668,708.999 		"/>
						<rect x="356.903" y="725.922" fill="none" width="93.191" height="30.822"/>
						<text transform="matrix(1 0 0 1 356.9033 736.5059)" font-family="'Avenir-Roman'" font-size="14">Carol G. </text>
						<text transform="matrix(1 0 0 1 356.9033 753.3057)" font-family="'Avenir-Roman'" font-size="14">Simon</text>
					</g></a>


					<a class="building" id="hoyt">
					<g class="graphic">
						<polygon id="hoyt" fill="#ECF0F1" points="469.583,692.588 463.949,674.834 446.755,674.834 440.002,691.342 443.377,710.342 
							441.666,710.342 441.666,725.675 467.666,725.675 467.666,710.342 463.949,710.342 		"/>
						<rect x="436.222" y="691.689" fill="none" width="68.059" height="21.289"/>
						<text transform="matrix(1 0 0 1 436.2217 702.2734)" font-family="'Avenir-Roman'" font-size="14">Hoyt</text>
					</g></a>
					

					<a class="building" id="meliora">
					<g class="graphic">
						<rect x="576.25" y="693.333" fill="#ECF0F1" width="94.332" height="48"/>
						<rect x="599.34" y="710.293" fill="none" width="68.059" height="21.289"/>
						<text transform="matrix(1 0 0 1 599.3398 720.877)" font-family="'Avenir-Roman'" font-size="14">Meliora</text>
					</g></a>
					

					<a class="building" id="gavett">
					<g class="graphic">
						<polygon id="gavett" fill="#ECF0F1" points="497,800.5 497,773.667 481.168,773.667 481.168,787.084 429.5,787.084 
							429.5,773.667 413.668,773.667 413.668,800.5 403.5,800.5 403.5,822 413.668,822 413.668,827.5 478.5,827.5 478.5,855 504,855 
							504,822 504,817.75 504,800.5 		"/>
						<rect x="420.395" y="802.031" fill="none" width="68.056" height="21.289"/>
						<text transform="matrix(1 0 0 1 420.3936 812.6152)" font-family="'Avenir-Roman'" font-size="14">Gavett</text>
					</g></a>


					<g id="taylor">
						<rect x="403.5" y="849.5" fill="#ECF0F1" width="60.5" height="32.5"/>
						<rect x="405.945" y="867.308" fill="none" width="68.056" height="21.289"/>
						<text transform="matrix(1 0 0 1 405.9453 877.8916)" font-family="'Avenir-Roman'" font-size="14">Taylor</text>
					</g>
					

					<a class="building" id="hylan">
					<g class="graphic">
						<polygon id="hylan" fill="#ECF0F1" points="262.713,891.229 266.288,884.031 242.951,872.438 239.375,879.633 236.919,878.413 
							231.45,889.417 233.908,890.639 230.333,897.834 253.669,909.429 257.245,902.233 259.292,903.25 264.761,892.246 		"/>
						<rect x="236.479" y="878.925" fill="none" width="68.056" height="21.289"/>
						<text transform="matrix(1 0 0 1 236.479 889.5088)" font-family="'Avenir-Roman'" font-size="14">Hylan</text>
					</g></a>

					<a class="building" id="csb">
					<g class="graphic">
						<polygon id="csb" fill="#ECF0F1" points="281.188,957.957 276.319,968.192 259.764,960.318 251.603,977.477 241.368,972.608 
							230.201,996.088 280.471,1019.998 287.916,1004.344 291.638,996.519 296.22,986.886 299.799,979.36 304.667,969.125 		"/>
						<rect x="249.044" y="987.11" fill="none" width="71.756" height="53.959"/>
						<text transform="matrix(1 0 0 1 249.0439 997.6943)" font-family="'Avenir-Roman'" font-size="14">Computer </text>
						<text transform="matrix(1 0 0 1 249.0439 1014.4941)" font-family="'Avenir-Roman'" font-size="14">Studies</text>
					</g></a>

					<a class="building" id="goergen">
					<g class="graphic">
						<polygon id="goergen" fill="#ECF0F1" points="388.811,950.134 386.426,954.903 382.848,953.114 377.48,950.43 362.277,942.826 
							364.662,938.056 357.807,934.627 366.156,917.932 363.473,916.59 365.334,912.868 355.795,908.097 353.934,911.818 
							350.951,910.328 307.71,996.783 310.692,998.274 308.456,1002.746 317.995,1007.518 320.232,1003.046 322.915,1004.388 
							329.771,1007.817 341.85,983.67 362.42,993.958 376.734,965.338 380.312,967.127 384.188,969.065 390.301,956.842 
							392.688,952.072 		"/>
						<rect x="315.916" y="962.609" fill="none" width="58.314" height="35.921"/>
						<text transform="matrix(1 0 0 1 315.9155 973.1934)" font-family="'Avenir-Roman'" font-size="14">Goergen</text>
					</g>
					</a>

					<a class="building" id="wilmot">
					<g class="graphic">
						<polygon id="wilmot" fill="#ECF0F1" points="404.395,929.717 398.888,926.927 401.889,921.006 379.039,909.429 
							376.039,915.352 370.258,912.423 359.011,934.621 364.792,937.551 362.393,942.287 385.242,953.862 387.642,949.126 
							393.146,951.916 		"/>
						<rect x="369.294" y="922.704" fill="none" width="58.314" height="35.921"/>
						<text transform="matrix(1 0 0 1 369.2944 933.2881)" font-family="'Avenir-Roman'" font-size="14">Wilmot</text>
					</g>
					</a>

					<a class="building" id="hutchinson">
					<g class="graphic">
						<polygon id="hutchinson" fill="#ECF0F1" points="234.585,909.622 223.259,903.916 243.253,863.602 244.114,864.035 
							248.163,855.997 235.66,849.697 234.161,852.676 206.476,838.729 206.998,837.691 192.708,830.492 187.836,840.163 
							189.379,840.94 168.35,883.346 164.16,881.236 159.211,891.061 163.462,893.201 161.425,897.31 157.446,895.306 152.497,905.129 
							156.537,907.166 138.286,943.97 136.098,942.868 131.149,952.691 133.398,953.824 131.769,957.11 129.5,955.965 124.551,965.789 
							126.882,966.964 122.884,975.026 155.333,991.373 146.185,1009.533 161.069,1017.031 170.218,998.872 174.98,1001.271 
							178.979,993.208 186.471,996.981 191.42,987.158 183.866,983.354 198.972,952.893 206.717,956.793 216.5,937.372 219.776,939.021 
									"/>
						<rect x="141.073" y="877.952" fill="none" width="96.404" height="21.289"/>
						<text transform="matrix(1 0 0 1 141.0732 888.5361)" font-family="'Avenir-Roman'" font-size="14">Hutchinson</text>
					</g></a>
					

					<a class="building" id="hopeman">
					<g class="graphic">
						<polygon id="hopeman" fill="#ECF0F1" points="365,773.667 365,771 345.5,771 345.5,773.667 321.5,773.667 321.5,813 385.5,813 
							385.5,773.667 		"/>
						<rect x="315.841" y="788.351" fill="none" width="68.059" height="21.289"/>
						<text transform="matrix(1 0 0 1 315.8408 798.9346)" font-family="'Avenir-Roman'" font-size="14">Hopeman</text>
					</g></a>
					

					<a class="building" id="harkness">
					<g class="graphic">
						<polygon id="harkness" fill="#ECF0F1" points="523.342,773.667 523.342,785.001 518.676,785.001 518.676,794.667 
							523.342,794.667 523.342,808.001 588.01,808.001 588.01,773.667 		"/>
						<rect x="525.043" y="785.614" fill="none" width="68.055" height="21.289"/>
						<text transform="matrix(1 0 0 1 525.043 796.1982)" font-family="'Avenir-Roman'" font-size="14">Harkness</text>
					</g></a>
					

					<a class="building" id="bauschlomb">
					<g class="graphic">
						<polygon id="bauschlomb" fill="#ECF0F1" points="530.334,646.334 530.334,644 501.667,644 501.667,646.334 469.583,646.334 
							469.583,666.667 492,666.667 492,751.667 516.334,751.667 516.334,666.667 557.667,666.667 557.667,646.334 		"/>
						<rect x="463.997" y="653.05" fill="none" width="119.532" height="21.289"/>
						<text transform="matrix(1 0 0 1 463.9971 663.6338)" font-family="'Avenir-Roman'" font-size="14">Bausch &amp; Lomb</text>
					</g></a>


					<a class="building" id="lechase">
					<g class="graphic">
						<polygon id="lechase" fill="#ECF0F1" points="442.5,470.792 440,470.792 440,453.417 418,453.417 418,448 378.5,448 
							378.5,453.417 354.5,453.417 354.5,470.792 351.5,470.792 351.5,481.5 354.5,481.5 354.5,488.167 440,488.167 440,481.5 
							442.5,481.5 		"/>
						<rect x="361.068" y="460.042" fill="none" width="68.056" height="21.289"/>
						<text transform="matrix(1 0 0 1 361.0684 470.627)" font-family="'Avenir-Roman'" font-size="14">LeChase</text>
					</g></a>
					

					<a class="building" id="todd">
					<g class="graphic">
						<polygon id="todd" fill="#ECF0F1" points="323,453.417 310.667,453.417 310.667,451 276.333,451 276.333,453.417 265,453.417 
							265,484.75 265,488.167 265,498.34 284,498.34 284,488.167 323,488.167 		"/>
						<rect x="263.446" y="463.804" fill="none" width="40.952" height="17.227"/>
						<text transform="matrix(1 0 0 1 274.4463 474.3877)" font-family="'Avenir-Roman'" font-size="14">Todd</text>
					</g></a>


					<a class="building" id="strong">
					<g class="graphic">
						<polygon id="strong" fill="#ECF0F1" points="308.333,513.334 308.333,509 280,509 280,513.334 277.333,513.334 
							277.333,575.667 311.667,575.667 311.667,513.334 		"/>
						<rect x="223.579" y="526.92" fill="none" width="73.699" height="50.571"/>
						<text transform="matrix(1 0 0 1 223.5791 537.5039)" font-family="'Avenir-Roman'" font-size="14">Strong </text>
						<text transform="matrix(1 0 0 1 223.5791 554.3047)" font-family="'Avenir-Roman'" font-size="14">Auditorium</text>
					</g></a>
					

					<a class="building" id="ifc">
					<g class="graphic">
						<polygon id="ifc" fill="#ECF0F1" points="175.667,585.666 167.667,585.666 167.667,583 145.667,583 145.667,593 
							134.334,593 134.334,615.333 145.667,615.333 145.667,625.666 167.667,625.666 167.667,623.333 175.667,623.333 		"/>
						<rect x="107.9" y="550.021" fill="none" width="73.699" height="50.569"/>
						<text transform="matrix(1 0 0 1 107.8999 560.6064)" font-family="'Avenir-Roman'" font-size="14">Interfaith </text>
						<text transform="matrix(1 0 0 1 107.8999 577.4062)" font-family="'Avenir-Roman'" font-size="14">Chapel</text>
					</g></a>

					<a class="building" id="rushrhees">
					<g class="graphic">
						<polygon id="rushrhees" fill="#ECF0F1" points="612.334,564.5 612.334,573.5 596.762,573.5 596.762,564.5 578,564.5 578,590.5 
							571,590.5 571,617.834 578,617.834 578,642.5 596.762,642.5 596.762,632.834 612.334,632.834 612.334,642.5 699.666,642.5 
							699.666,564.5 		"/>
						<rect x="575.29" y="597.049" fill="none" width="125.754" height="30.609"/>
						<text transform="matrix(1 0 0 1 575.29 607.6328)" font-family="'Avenir-Roman'" font-size="14">Rush Rhees Library</text>
					</g></a>


					<a class="building" id="gleason">
					<g class="graphic">
						<polygon id="gleason" fill="#ECF0F1" points="321.645,702.333 268.91,702.333 268.91,728.914 281.645,728.914 281.645,732.333 
							310.891,732.333 310.891,728.914 321.645,728.914 		"/>
						<rect x="261.25" y="707.626" fill="none" width="68.057" height="21.289"/>
						<text transform="matrix(1 0 0 1 261.2495 718.21)" font-family="'Avenir-Roman'" font-size="14">Gleason</text>
					</g></a>

					<a class="building" id="carlson">
					<g class="graphic">
						<path id="carlson" fill="#ECF0F1" d="M216.027,958.166c0,0,17.902-2.9,25.582,12.938l-12.937,25.582l12.791,6.47c0,0-21.957,9.438-28.935,3.296
							c0,0-12.647-5.275-2.161-16.407l-8.178-4.51L216.027,958.166z"/>
						<rect x="183.686" y="969.925" fill="none" width="68.056" height="21.289"/>
						<text transform="matrix(1 0 0 1 183.6855 980.5088)" font-family="'Avenir-Roman'" font-size="14">Carlson</text>
					</g></a>

				</g>
				</svg>
			</div>
		</div>

		<!-- LOG IN Modal -->
  		<div class="modal fade" id="login-modal" role="dialog">
    		<div class="modal-dialog">
    
      		<!-- Modal content-->
      		<div class="modal-content">

      			<!-- Modal header -->
		        <div class="modal-header">
		        
		        	<button type="button" class="close" data-dismiss="modal">×</button>

		        	<h4><span class="glyphicon glyphicon-user"></span> Log in</h4>
		        </div>


		        <div class="modal-body">


		        	<!-- Form -->
		        	<form class="login" id="loginForm" role="form" method="post">


		          	<!-- EMAIL Form group -->
		       		<div class="form-group">

		       			<!-- label and input-->
		       			<label for="inputEmail" >Email Address</label>
						<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email Address" required autofocus>
		              	
		              	
		            </div>


		            <!-- PASSWORD form group -->
		            <div class="form-group">

		            	<!-- Label and input for password -->
						<label for="inputPassword">Password</label>
		              	<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
		            </div>

		            <div class="checkbox">
							<label><input type="checkbox" value="remember-me"> Remember Me </label>
					</div>

		            <!-- Log in or submit Button -->
		              <button type="submit" class="btn btn-lg btn-primary">Log in
		                <span class="glyphicon glyphicon-ok"></span>
		              </button>

		              <button type="button" class="btn btn-lg" id="create-account">Create Account
		              </button>

		          </form>
		        </div>

		        <!-- Modal Footer -->
        		<div class="modal-footer">
         			 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      			  </div>
      			</div>
      
    		</div>
 		 </div><!-- model div container-->


 		 <!-- CREATE ACCOUNT Modal -->
  		<div class="modal fade" id="create-account-modal" role="dialog">
    		<div class="modal-dialog">
    
      		<!-- Modal content-->
      		<div class="modal-content">

      			<!-- Modal header -->
		        <div class="modal-header">
		        
		        	<button type="button" class="close" data-dismiss="modal">×</button>

		        	<h4><span class="glyphicon glyphicon-user"></span> Create Account</h4>
		        </div>


		        <div class="modal-body" id="create-account-modal-body">


		        	<!-- Form for create account-->
		        	<form class="form-horizontal create-account" role="form" method="post">


		          	<!-- First Name Form group -->
		       		<div class="form-group">
		       			<!-- label and input-->
		       			<label for="firstName">First Name</label>
						<input class="form-control" id="firstName" type="text" name="firstName" placeholder="e.g. Walter" required autofocus>
		            </div>

		            <!-- Last Name Form Group -->
		            <div class="form-group">
		            	 <label for="lastName">Last Name</label>
		            	 <input class="form-control" id="lastName" type="text" name="lastName" placeholder="e.g. White" required>
		            </div>

		            <!-- Email -->
		            <div class="form-group">
		            	<label for="email">Email</label>
		            	<input class="form-control" id="email" type="email" name="email" placeholder="e.g. walterwhite@mail.com" required>
		            </div>


		            <!-- PASSWORD -->
		            <div class="form-group">

		            	<!-- Label and input for password -->
						<label for="password">Password</label>
		              	<input class="form-control" id="password" type="password" name="password" required>
		            </div>


		            <!-- Confirm Password -->
		            <div class="form-group">
		            	<label for="password">Confirm Password</label>
		            	<input class="form-control" id="confirm-password" type="password" name="confirmPassword" required>
		            </div>
		            

		          <!-- Submit -->

		              <button type="submit" class="btn btn-lg btn-primary" id="create-account">Create Account <span class="glyphicon glyphicon-ok"></span>
		              </button>

		          </form>
		        </div>

		        <!-- Modal Footer -->
        		<div class="modal-footer">
        			<button id="create-account-back" type="button" class="btn btn-default"><span class="glyphicon glyphicon-backward"></span> Back</button>
         			 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      			  </div>
      			</div>
      
    		</div>
 		 </div><!-- model div container-->

 		<!-- EDIT Modal -->
  		<div class="modal fade" id="edit-modal" role="dialog">
    		<div class="modal-dialog">
      		<div class="modal-content">
		        <div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal">×</button>
		        	<h4><span class="glyphicon glyphicon-pencil"></span> Edit</h4>
		        </div>
		        <div id="edit-modal-body" class="modal-body">
		    		<!-- generated dynamically from edit-modal.php -->
		    	</div>
      		</div>
    		</div>
 		 </div>

 		 <!-- DELETE ACCOUNT OPTIONS Modal -->
  		<div class="modal fade" id="confirm-delete-modal" role="dialog">
    		<div class="modal-dialog">
      		<div class="modal-content" id="confirm-delete-modal-content">
		        <!-- generated dynamically from delete-modal.php -->
		        <div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal">×</button>
		        	<h4><span class="glyphicon glyphicon-trash"></span> Are you sure you want to delete your reservation?</h4>
		        </div>
		        <div class="modal-body">
		        	<div class="btn-group btn-group-justified" role="group" aria-label="...">
		        		<a class="btn btn-default" id="delete-confirm" value="' . $day . '">Yes</a>
		        		<a class="btn btn-danger" data-dismiss="modal">No</a>
		        	</div>
		        </div>
      		</div>
    		</div>
 		 </div>

 		  <!-- ACCOUNT Modal -->
  		

	</div><!-- end main container -->

<!-- PHP -->
<?php
	//include our file with ureserve class
	include_once("ureserve.php");
	//initialize a new ureserve object
	$object = new ureserve();
	//If connection failed, display an error message
	if( $object->getDB() === null ){
		echo "Connection to your web server failed.";
	}
	
	//Else, continue to show the user their account information
	else {
		if( isset($_COOKIE["user"]) ){ //if cookie has been set

			//first name, save the user's email as the cookie
			// echo "cookie email";
			$email = $_COOKIE["user"];
			$emailString = (string)$email;//cast email to string

			//get first name from database using the email unique Identifier
			$firstName = $object->getFirstName($email);

			//java script to indicate user is logged in "Hello " + User's first name in the navigation bar
			echo '<script type="text/javascript">$(function() { $(\'<li id="greeting"><a id="account" href="javascript: void(0)">Hello, <span id="firstName">' . $firstName . '</span></a></li>\').prependTo(\'.addGreeting\');});</script>';


			echo '<script type="text/javascript">

			 	$(function() {
					showReservations(\'' . $emailString . ' \');
			 	});</script>';


			 //echo account options modal so user can log out or delete account
			 echo '<div class="modal fade" id="account-modal" role="dialog">
    		<div class="modal-dialog">
      		<div class="modal-content" id="confirm-delete-modal-content">
		        <!-- generated dynamically from delete-modal.php -->
		        <div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal">×</button>
		        	<h4>Account Options</h4>
		        </div>
		        <div class="modal-body">
		        	<div class="btn-group btn-group-justified" role="group" aria-label="...">
		        		<a class="btn btn-default" id="log-out" href="log-out.php"><span class="glyphicon glyphicon-off"></span> Log Out</a>
		        		<a class="btn btn-danger" id="delete-account" href="javascript: void(0)" data-dismiss="modal" value="' . $emailString.'"><span class="glyphicon glyphicon-trash"></span> Delete Account</a>
		        	</div>
		        </div>
      		</div>
    		</div>
 		 </div>';
			
			


			
		}//end if
		else{ //there is no cookie
			//javascript to execute jquery pop up modal
			echo <<< EOT
				<script type="text/javascript">
			   //automatically pops up the modal
			   $(function() {
			    $('#login-modal').modal('show');
			   });
			 	</script>  
EOT;
			//have the user log in
			//then create cookie with value = email address

		}
	
	}
	?>


	<script src="js/searchrooms.js"></script>
	<script src="js/reservation.js"></script>
	<script src="js/sidebar.js"></script>
	<script src="js/navbar.js"></script>

</body>
</html>
