@extends('layouts.student')
@section ('content')
<style>

.cname{
	font-family: 'Raleway', sans-serif;
	padding: 10px;
    font-weight: 800;
    font-size: 27px;
	color:#323267;
	margin-left: 10px; 
	display:inline-block ;
}
</style>
<header id="head" class="secondary">
            <div class="container" id="page">
                    <h1>Courses</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
                </div>
				<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	</header>
	<br>
	<br>
	<!-- ----------------------------------------------------------------------------------- -->

	<!-- ----------------------------------------------------------------------------------- -->
	<div class="container">
		@foreach($courses as $course)	
				<div class="row">	
							
							<h2 class="cname">{{$course->name}}</h2>
							<br>
							<br>
							@foreach ($course->coursevideos as $coursevideo)
							<div class='col-lg-3'>
										<a href="{{route('coursevideo.show',$coursevideo)}}"><img src= "../assets/images/{{$coursevideo->image}}" alt="Barca" class="img-responsive " height="130px" id={{ asset($coursevideo->url) }} /></a>
										<br>
										<h3 style="color:grey;">{{$coursevideo->name}}</h3>
										<form style="display:none">

											<input  type="hidden" name="videoid" value={{ $coursevideo->id}}>
											<textarea name="comment"  cols="100" rows="5"></textarea>
											<input class="btn btn-success" type="submit" value="comment">
										</form>
									<button class="login100-form-btn lbtn" style="display:inline-block;" >
								<a href="https://docs.google.com/forms/d/e/1FAIpQLSduTKKfQUQOzdqJ3u3NDeVfNl7OHmnLEhjFgFF07-QhKLB-Tg/viewform?usp=sf_link
								" style="color:azure ; font-size: 17px"   target=_blank>  Tasks </a>
							</button>
				</div>
						@endforeach
			</div>
		@endforeach
	
	</div>
	
	
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.cslider.js"></script>
	<script src="../assets/js/jquery.isotope.min.js"></script>
	<script src="../assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>

	</div>
	</div>
@endsection