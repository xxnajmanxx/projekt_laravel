@extends('master')
@section('content')

<div class="videos-header card">
    <h2>Najnowsze filmy</h2>
</div>

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
 @endif

<div class="row">

    @foreach($videos as $video)

            <!-- 1 Wideo -->
            <div class="col-xs-12 col-md-6 col-lg-4 single-video">
                <div class="card">
                
                    <div class="embed-responsive embed-responsive-16by9">
                       <iframe class="embed-responsive-item" src="{{$video->url }}?showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>                                        
                    <div class="card-content">
                        <a href="{{url('videos',$video->id)}}">
                            <h4>{{$video->title}}</h4>
                        </a>
                        <p>{{ str_limit($video->description, $limit=80) }}</p>
                        <span class="upper-label">Dodał</span>
                        <span class="video-author">Marcin&Tharas</span>
                    </div>
                    
                </div>
            </div>

    @endforeach

</div>

@stop