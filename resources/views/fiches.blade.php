@extends('base')

@section('title')
    Présentation des personnages
@endsection

@section('container')
    <h1>Bad Boys Bad Boys watcha'gonna do watcha'gonna do when they come for you !</h1>
    {!!$description!!}
    
    <section class="fichePerso row">
        @foreach($fiches as $fiche)
            @if ($fiche['type'] == 'female')
                <section class="fiche-item col-md-3 mx-5 my-3 card male">
                    <img src="{{$fiche['imageUrl']}}" alt="photoDescription">
                    <h4> {{ $fiche['firstname'] }} </h4>
                    <p> {{ $fiche['description'] }} </p>
                </section>
            @else
                <section class="fiche-item col-md-3 mx-5 my-3 card female">
                    <img src="{{$fiche['imageUrl']}}" alt="photoDescription">
                    <h4> {{ $fiche['firstname'] }} </h4>
                    <p> {{ $fiche['description'] }} </p>
                </section>
            @endif
        @endforeach
    </section>
@endsection