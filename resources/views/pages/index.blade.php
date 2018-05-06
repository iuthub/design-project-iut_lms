@extends('layouts.app')

@section('content')
	<div class="row">
	  	  <div class="container main">
			  	<div class="row">
			    	<h1 class="popularTitle">Most popular books</h1>
				  	  <div class="first-section">
						  	<div class="parallax">
							   <div class="owl-carousel owl-theme">
									@foreach($books as $book)
									  <div class="item">
									  	<a href=""><h4>{{$book->bookName}}</h4></a>
									   	<img src="/storage/cover_images/{{$book->cover_image}}" alt="{{$book->bookName}}">
									  </div>
								  @endforeach
								</div>
								
								<div class="container">
									<div class="row">
										<h2 class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam dolorum at officia consequatur, minima, tempora eveniet fugiat sed cumque earum laborum obcaecati, libero doloremque quam adipisci amet necessitatibus! Possimus, voluptate.</h2>
									</div>
								</div>
						  	</div>
				  	  </div>
			  	</div>
			 	
		    <div class="description">
		  	  <div class="row">
		      	<div class="col-md-6">
		      	  <div class="about">
		      		<h1>What is IUT-LMS?</h1>
		      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste ipsum, labore, vero beatae fuga quos eveniet dolorum optio aut, expedita aliquid cum. Animi rerum facilis, amet sit fugit ipsa reiciendis?</p>
		      	  </div>
		      	</div>
		      	<div class="col-md-6">
		      		<img src="img/library.jpg" alt="library">
		      	</div>
		      </div>
		  	</div>
		  	<div class="row">
		  	  <div class="recently-added">
	    	  	<h1>Recently added</h1>
	    	  	<div class="row">
		    	  <div class="col-md-3">
		    	  	<img src="/storage/cover_images	/book1_1524911271.jpg" alt="book1">
		    	  	<a href="#"><h2>book name</h2></a>
		    	  </div>
		    	  <div class="col-md-3">
		    	  	<img src="/storage/cover_images/book10_1524925664.jpg" alt="book2">
		    	  	<a href=""><h2>book name</h2></a>
		    	  </div>
		    	  <div class="col-md-3">
		    	  	<img src="/storage/cover_images/book1_1524911271.jpg" alt="book3">
		    	  	<a href=""><h2>book name</h2></a>
		    	  </div>
		    	  <div class="col-md-3">
		    	  	<img src="/storage/cover_images/book10_1524925664.jpg" alt="book4">
		    	  	<a href=""><h2>book name</h2></a>
		    	  </div>
	    	  	</div>
		  	  </div>
		  	</div>
		  	<div class="more">
			  	  <div class="row">
				  	  <div class="col-md-4">
				  	  	<div>
						  	  <h2>Service</h2>
					          <i class="fas fa-clipboard-list"></i>
					          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quae atque quasi enim, error impedit! Pariatur ad itaque eveniet, quisquam, in praesentium laborum voluptatum aut similique, debitis nam, odit a!</p>
			            </div>
				  	  </div>
				  	  <div class="col-md-4">
					  	  	<div>
					  	  	  <h2>Entertainment</h2>
					  	  	  <i class="far fa-smile"></i>
					  	  	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error delectus culpa ipsa. Minima laborum, aperiam necessitatibus laudantium nemo qui, fugiat deleniti praesentium odio, atque eum repellat odit. Laudantium, tempore, quaerat.</p>
					  	    </div>
				  	  </div>
				  	  <div class="col-md-4">
					  	  	<div>
					  	  	  <h2>Audio books</h2>
					  	  	  <i class="fas fa-headphones"></i>
					  	  	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint corrupti aliquam eveniet, perferendis ipsam enim a. Ipsam voluptatibus doloribus eligendi voluptate aliquam, dicta illo, consectetur incidunt ab, sed explicabo totam?</p>
					  	    </div>
				  	  </div>
			  	  </div>
	  		</div>
	  		<div class="info">
		  		  <div class="row">
			  		  	<div class="col-md-6">
				  		  	  <table>
				  		  	  	<td>Inha University in <a href="">Tashkent</a> </td>
				  		  	  	<td></td>
				  		  	  </table>
			  		  	</div>
		  		  	    <div class="col-md-6">
		  		  	    </div>	
		  		  </div>  		  	
	  		</div>
	  		</div> 
	</div>
  		{{-- @foreach($books as $book)
  			  	<a href=""><h4>{{$book->bookName}}</h4></a>
  			  	<img src="/storage/cover_images/{{$book->cover_image}}" alt="{{$book->bookName}}">
  			    @endforeach --}}
  
	<script type="text/javascript" src="{{asset('js/index.js')}}"></script>
  <!-- parallax js -->
  <script type="text/javascript">
   $(window).scroll(function () {
     $(".parallax").css("background-position","50% " + ($(this).scrollTop() / -2) + "px");
   });
 </script> 
  <script type="text/javascript">
  	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    autoplay:true,
    	autoplayTimeout:2000,
    	autoplayHoverPause:true,
	    dots: false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:5
	        },
	        1000:{
	            items:10
	        }
	    }
	});
	$('.play').on('click',function(){
	    owl.trigger('play.owl.autoplay',[2000])
	})
	$('.stop').on('click',function(){
	    owl.trigger('stop.owl.autoplay')
	})
  </script>
@endsection