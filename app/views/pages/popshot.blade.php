@extends('layouts.master')

@section('topscript')
	<link rel="stylesheet" type="text/css" href="css/popshot.css">
@stop

@section('pop')
<header>
	<h1>Pop - A - Shot</h1>
	<h2><span id="run_score">Score: 0 </span>&nbsp &nbsp &nbsp Shot Clock: &nbsp<span id="countdown">24</span></h2>
	<h3><span id="start_game">Start</span></h3>
</header>
<div id="container">
	<div id="box1" class="box">
		<img src="/img/backboardtrue.png" class="pop_backboard">
	</div>
	<div id="box2" class="box">
		<img src="/img/backboardtrue.png" class="pop_backboard">

	</div>
	<div id="box3" class="box">
		<img src="/img/backboardtrue.png" class="pop_backboard">

	</div>
	<div id="box4" class="box">
		<img src="/img/backboardtrue.png" class="pop_backboard">

	</div>
	<div id="box5" class="box">
		<img src="/img/backboardtrue.png" class="pop_backboard">

	</div>
	<div id="box6" class="box">
		<img src="/img/backboardtrue.png" class="pop_backboard">

	</div>
	<div id="box7" class="box">
		<img src="/img/backboardtrue.png" class="pop_backboard">

	</div>
	<div id="box8" class="box">
		<img src="/img/backboardtrue.png" class="pop_backboard">

	</div>
	<div id="box9" class="box">
		<img src="/img/backboardtrue.png" class="pop_backboard">
	</div>
</div>
@stop

@section('bottomscript')
<script src="/js/jquery.js"></script>

<script>
	// var pop_backboard = $('.pop_backboard');
	var count = 0;
	var max = 20;
	var interval = 2000; // interval time in milliseconds
	var score = 0;
	var time = 24;

	//create function to grab  random int from  img class
	function getRandomInt(min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}

	$('#start_game').one("click", function(){

		// Create a timer to countdown
		var timer = setInterval(function () {
			if (time > 0) {
				--time;
				$('#countdown').html(time);
			} else {
				clearInterval(timer);
				clearInterval(show_pics);
				alert('Good Game. You Scored ' + score + ' points.');
			}
		}, 1000);

		//Function to count number of Picture Iterations
		var show_pics = setInterval(function() {
				if (count >= max) {
					clearInterval(show_pics);
				} else {
					count++;
					var number = getRandomInt(0, 8);
					var random_cell = $('.pop_backboard')[number];
					$(random_cell).fadeIn(500).fadeOut(500);
				}
		}, interval);
	});

	$('.pop_backboard').click(function(){
		// score add one ++
		console.log(this);
		$(this).hide();
		score += 2;
		if(score > 0 ){
			$('#run_score').html("Score: " + score);
		}
	});

</script>
@stop