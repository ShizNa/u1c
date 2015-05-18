@extends('main_layout')
@section('title')
	Компания u1c.
@stop
@section('menu')
	<div id="navbar-main">
		<!-- Fixed navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
					</button>
					<a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="#home" class="smoothScroll">Дом</a></li>
						<li> <a href="#about" class="smoothScroll"> О нас</a></li>
						<li> <a href="#services" class="smoothScroll"> Предложения</a></li>
						<li> <a href="#team" class="smoothScroll"> Команда</a></li>
						<li> <a href="#portfolio" class="smoothScroll"> Наши клиенты</a></li>
						<li> <a href="#blog" class="smoothScroll"> Blog</a></li>
						<li> <a href="#contact" class="smoothScroll"> Контакты</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

@stop
@section('content')
	@include('parts.headwrap')
	@include('parts.greywrap_top')
	@include('parts.about')
	@include('parts.section_divider', array('num'=>'1',
											'h1'=>'DESIGN EXPAND BOUNDARIES',
											'p'=>'To achieve real change, we have to expand boundaries. Because the Wild West of what-could-be is unexplored but rife with opportunity.'
											))

	@include('parts.services')
	@include('parts.section_divider', array('num'=>'2',
											'h1'=>'DESIGN IS AN INTERACTION',
											'p'=>'To develop a deeper and more meaningful connection with consumers, we believe design must invite them to take part in the conversation.'
											))
	@include('parts.team')
	@include('parts.greywrap_middle')
	@include('parts.section_divider', array('num'=>'3',
											'h1'=>'DESIGN SOLVE PROBLEMS',
											'p'=>'From the purely practical to the richly philosophical, design is the solution to a host of challenges.'
											))
	@include('parts.portfolio')
	@include('parts.section_divider', array('num'=>'4',
											'h1'=>'DESIGN CREATES EMOTIONAL CONNECTION',
											'p'=>'There’s more to design than meets the eye. It’s when it meets the heart that design creates a meaningful, lasting connection with the audience.'
											))
	@include('parts.blog')
	@include('parts.section_divider', array('num'=>'6',
											'h1'=>'Contact US!',
											'p'=>'Some Address 987,</p>
													<p>+34 9884 4893</p>
													<p><a class="icon icon-twitter" href="#"></a> | <a class="icon icon-facebook" href="#"></a>'
											))
	@include('parts.contacts')
@stop
@section('footer')
	<div id="footerwrap">
		<div class="container">
			<h4>Created by ShizNa - Copyright 2015</h4>
		</div>
	</div>
@stop