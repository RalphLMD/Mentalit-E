@extends('layouts.app')
@section('content')

<div class="container">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
	<h1 class="text-center">Mentalit-E Community Forum</h1>
	<br><hr class="divider"><br>
	<div class="d-flex bd-highlight mb-3">
	
		<div class="me-auto p-2 bd-highlight">
            <a href="/forum/create">
			    <button type="submit" class="btn btn-outline">Add new post</button>
            </a>
		</div>
		
		<div class="p-2 bd-highlight">
    

            <form action="/forum/search" method="post">
                @csrf
                <input type="search" name="query" class="form-control-md p-2" placeholder="Search...">
                <button class="btn btn-outline btn-search m-0" type="submit">
                        <i class="fa fa-search"></i>
                </button>
            </form>
		</div>
	
	</div>	

	<br>
    <div class="row mt-5">

        @forelse($forums as $forum)

            <div class="col-lg-6 col- md-6 col-xs-12">
                <div class="shadow p-2 text-left m-1 w-75 pointer">
                    <br>   
                    @if($forum->userForum->id == Auth::user()->id)
                    <div class="d-flex bd-highlight mb-3">
                        <div class="me-auto p-2 bd-highlight">
                            <a href="/forum/{{$forum->id}}/edit">
                                <i class="fa fa-edit green me-3"></i>
                            </a>
                        </div>
                        <div class="p-2 bd-highlight">
                            <form method="POST" action="/forum/{{$forum->id}}">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="delete" onclick="return confirm('Delete a post?')">
                                    <i class="fa fa-trash-o red"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    @endif
                    <div class="d-flex justify-content-start">
                        <div class="p-2 me-5 bd-highlight">
                            @if ($forum->userForum->profile_image == null)  
                                <img src="{{ asset('storage/avatars/default.png')}}" width=50 class="ms-3">		
                            @else
                                <img src="{{ asset('storage/avatars/'.$forum->userForum->profile_image) }}" class="profile ms-3" width=80>
                            @endif	                            
                        </div>
                        <div class="p-2 me-5 bd-highlight">		
                            <h4 class="text-left"><b>{{$forum->forumSubject}}</b></h4>
                            <p class="text-left"><b><i>by {{$forum->userForum->firstName}}</i></b></p>
                            <p class="text-left">
                                {{$forum->forumComment}}
                            </p>
                        </div>						
                    </div>				


                    <br><hr>
                    <div class="d-flex bd-highlight mb-3">
                        <div class="me-auto p-2 bd-highlight">
                            <i>{{ \Carbon\Carbon::parse($forum->dateTime)->format('F j , Y  h:i A')}}</i>
                        </div>
                        <div class="p-2 bd-highlight">
                            <a href="/forum/{{$forum->id}}/show" class="text-decoration-none text-black">
                                <img src="{{asset('img/reply.png')}}" width=20>
                            </a>                        
                        </div>
                        <div class="p-2 bd-highlight">
                            @if (auth()->user()->id != $forum->user_id)
                            <a href="/forum/{{$forum->id}}/warningForum" class="text-decoration-none text-black">
                                <img src="{{asset('img/report.png')}}" width=20>
                            </a>
                            @endif
                        </div>                          				
                    </div>

                </div>	
            </div>

        @empty
            <h4 class="text-center mt-5">No posts yet</h4>
        @endforelse
        

		
    </div>
</div>	

@endsection

