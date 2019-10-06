@extends('layouts.userApp')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-3 bg-warning" style="padding: 20px; margin-right: 10px;">

            <img src="{{ asset('images/pph.png') }}" class="img-fluid" width="150" style="margin-left: 30%; ">
            <hr>
            <h5>
            <div class="list-group">
               <a href="{{ route('addQuestion') }}" class="list-item">
                <i class="fa fa-question" aria-hidden="true"></i>
                    Ask New Question 
                </a>
               <a href="{{ route('askedQuestion') }}" class="list-item">
                <i class="fa fa-question" aria-hidden="true"></i>
                Asked Question
                 <span class="badge badge-secondary">10</span>
                </a>
               <a href="{{ route('newAnswers') }}" class="list-item">
                <i class="fa fa-comment-o" aria-hidden="true"></i>
                New Answers
                 <span class="badge badge-secondary">5</span>
                  </a>
               <a href="{{ route('likedVideos') }}" class="list-item">
                <i class="fa fa-play" aria-hidden="true"></i>
                liked videos
                 <span class="badge badge-secondary">12</span> </a>
               <a href="{{ route('playlist') }}" class="list-item">
                <i class="fa fa-file-video-o" aria-hidden="true"></i>
                Subscribed Playlist <span class="badge badge-secondary">5</span> </a>
               <a href="{{ route('likedArticles') }}" class="list-item">
                <i class="fa fa-info" aria-hidden="true"></i>
                liked Articles </a>
               <a href="{{ route('savedTool') }}" class="list-item">
                <i class="fa fa-database" aria-hidden="true"></i>
                Saved Tool <span class="badge badge-secondary">5</span> </a>
               <a href="{{ route('connectedExpert') }}" class="list-item">
                <i class="fa fa-connectdevelop" aria-hidden="true"></i>
                Connected Exeprts <span class="badge badge-secondary">5</span> </a>
               <a href="{{ route('complains') }}" class="list-item">
                <i class="fa fa-list" aria-hidden="true"></i>
                Your Complains <span class="badge badge-secondary">5</span> </a>

            </div>

             </h5>   
        </div>


        <div class="col-md-8 bg-warning card">
            @yield('userDataContent')  
        </div>

    </div>
</div>
@endsection
