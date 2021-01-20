@extends ('layouts.guest')
@extends ('layouts.parent')
@extends ('layouts.teacher')
@extends ('layouts.student')
@section('content')






@foreach($magazines as $magazine)
<div class="magazin" style="background-image: url(' ../assets/images/{{$magazine->picpath}}');">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
				</div>

				<div class="col-lg-offset-8">
					<h2 class="hmag">{{$magazine->title}} </h2>
					<p class="pmag"> {{$magazine->body}}</p>
				</div>


			</div>
		</div>
	</div>
	@endforeach
    @yield('magazine')
@endsection