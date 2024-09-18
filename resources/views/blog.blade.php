@extends('base')

@section('title')
    Blog Homepage
@endsection

@section('container')
    <h1>{{ $title }}</h1>
    {!!$description!!}

    <section class='posts row'>
        @foreach($posts as $post)
            @if ($post['id'] % 2 == 0)
                <section class="post-item col-md-3 mx-5 my-3 card pair">
                    <img src="{{$post['imageUrl']}}" alt="photoDescription">
                    <h4> {{ $post['title'] }} </h4>
                    <p> {{ $post['description'] }} </p>
                </section>
            
            @else
                <section class="post-item col-md-3 mx-5 my-3 card impair">
                    <img src="{{$post['imageUrl']}}" alt="photoDescription">
                    <h4> {{ $post['title'] }} </h4>
                    <p> {{ $post['description'] }} </p>
                </section>
            @endif
        @endforeach
    </section>
@endsection
