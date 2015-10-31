<html>
	<head>
		<title>Search Colleges</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6">
					<h1>Task Name</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<h4 class="text-center"><span id="seconds">00</span>:<span id="tens">00</span></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-offset-4 col-xs-2">
					<button class="btn btn-default btn-block pull-right" id="button-start">Start Working</button>
				</div>
				<div class="col-xs-2">
					<button class="btn btn-default btn-block pull-left" id="button-stop">Stop Working</button>
				</div>

			</div> 
			
			<div class="row">
				<div class="col-xs-offset-4 col-xs-4">
					<button class="btn btn-default btn-block center-block" id="button-reset">Task Completed</button>
				</div>
			</div>

		</div>

		<script>
		window.onload = function () {
		  
		  var seconds = 00; 
		  var tens = 00; 
		  var appendTens = document.getElementById("tens")
		  var appendSeconds = document.getElementById("seconds")
		  var buttonStart = document.getElementById('button-start');
		  var buttonStop = document.getElementById('button-stop');
		  var buttonReset = document.getElementById('button-reset');
		  var Interval ;

		  buttonStart.onclick = function() {
		    
		     clearInterval(Interval);
		     Interval = setInterval(startTimer, 10);
		  }
		  
		    buttonStop.onclick = function() {
		       clearInterval(Interval);
		  }
		  

		  buttonReset.onclick = function() {
		     clearInterval(Interval);
		    tens = "00";
		  	seconds = "00";
		    appendTens.innerHTML = tens;
		  	appendSeconds.innerHTML = seconds;
		  }
		  
		   
		  
		  function startTimer () {
		    tens++; 
		    
		    if(tens < 9){
		      appendTens.innerHTML = "0" + tens;
		    }
		    
		    if (tens > 9){
		      appendTens.innerHTML = tens;
		      
		    } 
		    
		    if (tens > 99) {
		      console.log("seconds");
		      seconds++;
		      appendSeconds.innerHTML = "0" + seconds;
		      tens = 0;
		      appendTens.innerHTML = "0" + 0;
		    }
		    
		    if (seconds > 9){
		      appendSeconds.innerHTML = seconds;
		    }
		  
		  }
		  

		}
		</script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-46156385-1', 'cssscript.com');
		  ga('send', 'pageview');

		</script>

	</body>
</html>
