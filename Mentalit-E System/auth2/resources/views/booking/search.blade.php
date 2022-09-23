@extends('layouts.app')
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<section>
<div class="container">
	<h1 class="text-center">Book now!</h1>
	<br><hr class="divider"><br>
	
	<div class="d-flex bd-highlight mb-3">
	
		<div class="me-auto p-2 bd-highlight"></div>

        <form action="/booking/search" method="post">
			@csrf
            <input type="search" name="query" class="form-control-md p-2" placeholder="Search...">
            <button class="btn btn-outline btn-search m-0" type="submit">
                    <i class="fa fa-search"></i>
            </button>
        </form>
	
	</div>

	<br>
    <div class="row">
        @forelse($searched_items as $clinic)
        <div class="col-lg-3 col- md-6 col-xs-12">
            <div class="card p-4">
				@if ($clinic->clinicMainPhoto == null)  
					<img src="{{ asset('storage/avatars/hospital.png')}}" class="img-fluid auto" width=180>		
				@else
					<img src="{{ asset('storage/avatars/'.$clinic->clinicMainPhoto) }}" class="img-fluid auto" width=180>
				@endif	
				<h4>{{$clinic->clinicName}}</h4>
				@forelse($clinic->clinicRating as $rating) 
					@for($i=1; $i<=$rating->star_rating; $i++) 
						<span><i class="fa fa-star"></i></span>
					@endfor
				@empty
					<i>(No ratings yet)</i>
				@endforelse
				<br>
				<p class="text-left">Located at: {{$clinic->clinicAddress}}
					<br>{{$clinic->clinicDescription}}
				</p>
				<a href="/booking/{{ $clinic->id }}/show" class="m-auto">
					<button type="submit" class="btn btn-outline pull-right">View</button>
				</a> 
            </div>
        </div>
		@empty
            <h3 class="text-center">No results</h3>
        @endforelse
		
    </div>
</div>	
</section>
@endsection

