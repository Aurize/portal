@extends('front.layout.layout')

@section('content')
    <div class="Middle">
        <div class="row">
        @foreach($offers as $offer)
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nazwa: {{ $offer->name }}
                    </div>
                    <div class="panel-body">
                        <h3>Obiekt: {{ $offer->place->name }}</h3>
                        <h3>Kategoria: {{ $offer->category->name }}</h3>
                    </div>
                    <div class="panel-footer">
                        @foreach($offer->groups as $group)
                            <h4>Grupa: {{ $group->name }}</h4>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
