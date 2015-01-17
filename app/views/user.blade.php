@extends('layouts.default')

@section('body')
	@include('layouts.header')
    <div id="categories">
	    <ul>
		    <li><a href="#" id="filterAll" data-filter="*" class="filters active">All</a></li>
		    <li><a href="#" id="filterPeople" data-filter="people" class="filters">People</a></li>
		    <li><a href="#" id="filterAnimals" data-filter="animals" class="filters">Animals</a></li>
		    <li><a href="#" id="filterNature" data-filter="nature" class="filters">Nature</a></li>
		    <li><a href="#" id="filterArt" data-filter="art" class="filters">Art</a></li>
	    </ul>
    </div>
    
    <div id="container">   
		<div class="item people">
			<img src="http://placekitten.com/g/160/160" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item people">
			<img src="http://placekitten.com/g/340/160" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item animals">
			<img src="http://placekitten.com/g/160/160" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item nature">
			<img src="http://placekitten.com/g/340/160" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item art">
			<img src="http://placekitten.com/g/160/340" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item art">
			<img src="http://placekitten.com/g/160/160" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item nature">
			<img src="http://placekitten.com/g/160/340" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item people">
			<img src="http://placekitten.com/g/340/340" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item animals">
			<img src="http://placekitten.com/g/160/160" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item art">
			<img src="http://placekitten.com/g/160/160" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item nature">
			<img src="http://placekitten.com/g/160/340" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item people">
			<img src="http://placekitten.com/g/160/160" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item art">
			<img src="http://placekitten.com/g/160/160" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item animals">
			<img src="http://placekitten.com/g/340/160" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item people">
			<img src="http://placekitten.com/g/160/160" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item people">
			<img src="http://placekitten.com/g/700/340" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item nature">
			<img src="http://placekitten.com/g/160/160" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
		<div class="item animals">
			<img src="http://placekitten.com/g/160/340" />
			<div class="thumb-text">
				<p class="printTitle">Print Title</p>
				<p class="printArtist"><i>Author Name</i></p>
				<p class="printPrice">$9.99</p>
			</div>
		</div>
	</div>
  
	@include('layouts.login')
	@include('layouts.register')
@stop