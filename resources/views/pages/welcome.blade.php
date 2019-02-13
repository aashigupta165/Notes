@extends('main')

@section('title', '|Homepage')

@section('content')
 <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
           <div class="post">
               <h3>{{ $post->title }}</h3>
               <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) >300 ? "..." : "" }}</p>
               <a href="{{ url('') }}" class="btn btn-primary">Read More</a>

           </div>
            <hr>
            @endforeach

        </div>
    </div>
@endsection

