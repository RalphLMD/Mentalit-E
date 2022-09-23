@extends('layouts.app')
@section('content')

<div class="container">
    
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

    <div class="d-flex justify-content-between">
        <div class="p-2 bd-highlight">
            <a href="/forum">
                <i class="fa fa-angle-left"></i>
            </a>
        </div>

        <div class="p-2 bd-highlight"></div>

        <div class="p-2 bd-highlight"></div>
    </div> 

    <br>

    <div class="row border p-5 shadow-lg">
        <div class="d-flex justify-content-end mb-3">
            @if (auth()->user()->id != $forum->user_id)
            <a href="/forum/{{$forum->id}}/warningForum" class="text-decoration-none text-black">
                <img src="{{asset('img/report.png')}}" width=20>
            </a>
            @endif
        </div>
    
        <div class="d-flex justify-content-start">
            <div class="p-2 me-5 bd-highlight">
                @if ($forum->userForum->profile_image == null)  
                    <img src="{{ asset('storage/avatars/default.png')}}" width=50 class="ms-3">		
                @else
                    <img src="{{ asset('storage/avatars/'.$forum->userForum->profile_image) }}" class="profile ms-2" width=80>
                @endif	                    
            </div>
            <div class="p-2 me-auto bd-highlight">			
                    <h4 class="text-left"><b>{{$forum->forumSubject}}</b></h4>
                <p class="text-left"><b><i>{{$forum->userForum->firstName}}</i></b></p>
                <p class="text-left">
                    {{$forum->forumComment}}
                </p>
            </div>		
            <div class="p-2 bd-highlight">
                <i>{{ \Carbon\Carbon::parse($forum->dateTime)->format('F j , Y  h:i A')}}</i>              
            </div>            				
        </div>
    </div>

    <br><br>

    <div class="row border p-5 shadow-lg">
        <h4 class="text-left mb-3">Add a comment</h4>

        <form method="POST" action="/forum/{{$forum->id}}">
        @csrf
        <textarea class="form-control @error('forumCommentContent') is-invalid @enderror" rows="4" name="forumCommentContent" required autocomplete="forumCommentContent">{{ old('forumCommentContent') }}</textarea>
            @error('forumCommentContent')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror   
        <div class="d-flex bd-highlight">
  
            <div class="me-auto p-2 bd-highlight"></div>

            <div class="p-2 bd-highlight">		
                <button type="submit" class="btn btn-outline ms-auto mt-2" onclick="return confirm('Post the comment?')">Submit</button>
            </div>
        </form>
        </div>	
    </div>

    <br><br>

    <div class="row border p-5 shadow-lg">
        <h4 class="text-left mb-3">Comments</h4>
        @forelse ($comments as $comment)
            @if($comment->user_id == $user->id)
            <div class="row border p-5 shadow-sm mb-3">
                <div class="d-flex justify-content-start">
                    <div class="p-2 me-auto bd-highlight">
                        <i>{{ \Carbon\Carbon::parse($comment->dateTime)->format('F j , Y  h:i A')}}</i>
                    </div>	
                    <div class="p-2 bd-highlight">			
                        <h5>{{$comment->userForumComment->firstName}}</h5> 
                        <p class="mt-3">
                            {{$comment->forumCommentContent}}                                 			
                        </p>
                    </div>
                    <div class="p-2 bd-highlight">
                        @if($comment->userForumComment->profile_image == null)
                            <img src="{{asset('img/user.png')}}" class="profile" width=80>	    
                        @else       
                            <img src="{{ asset('storage/avatars/'.$comment->userForumComment->profile_image) }}" class="profile ms-2" width=80>  
                        @endif    
                    </div>
                </div>
            </div>
                
            @else
            <div class="row border p-5 shadow-sm mb-3">
                <div class="d-flex justify-content-start">
                    <div class="p-2 bd-highlight">
                        @if($comment->userForumComment->profile_image == null)
                            <img src="{{asset('img/user.png')}}" class="profile" width=80>	    
                        @else       
                            <img src="{{ asset('storage/avatars/'.$comment->userForumComment->profile_image) }}" class="profile ms-2" width=80>  
                        @endif                
                    </div>
                    <div class="p-2 me-auto bd-highlight">			
                        <h5>{{$comment->userForumComment->firstName}}</h5> 
                        <p class="mt-3">
                            {{$comment->forumCommentContent}}                                 			
                        </p>	
                        </p>
                    </div>		
                    <div class="p-2 bd-highlight">
                        <i>{{ \Carbon\Carbon::parse($comment->dateTime)->format('F j , Y  h:i A')}}</i>
                    </div>				
                </div>
                <div class="d-flex justify-content-end">
                    <a href="/forum/{{$comment->id}}/warningForumComment" class="text-decoration-none text-black">
                        <img src="{{asset('img/report.png')}}" width=20>
                    </a>
                </div>                   
            </div>	
            @endif	
        @empty
        <div class="row border p-5 shadow-sm mb-3">
            <p class="text-center">No comments yet</p>
        </div>
        @endforelse
    </div>

</div>

<br><br>
@endsection












