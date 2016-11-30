@extends('front.layout.layout')

@section('content')
    <div class="Middle">
        <div class="row">
        @foreach($offers as $offer)
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Nazwa: {{ $offer->name }} <span class="pull-right">Ocena: {{ round($offer->reviews->avg('rate'), 2) }}/ 10</span></h4>

                    </div>
                    <div class="panel-body">
                        <h3>Obiekt: {{ $offer->place->name }}</h3>
                        <h3>Kategoria: {{ $offer->category->name }}</h3>
                    </div>
                    <div class="panel-footer">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Grupa</th>
                                    <th>Pn</th>
                                    <th>Wt</th>
                                    <th>Śr</th>
                                    <th>Cz</th>
                                    <th>Pt</th>
                                    <th>So</th>
                                    <th>N</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($offer->groups as $group)
                                <tr>
                                    <td>{{ $group->name }}</td>
                                    <td>18:00</td>
                                    <td>18:00</td>
                                    <td>18:00</td>
                                    <td>18:00</td>
                                    <td>18:00</td>
                                    <td>18:00</td>
                                    <td>18:00</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
