@extends('main.layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 w-50">
                <img src="{{asset('storage/'.$person->avatar)}}" class="card-img-top h-75" alt="...">
            </div>
            <div class="card mb-5 w-50 h-75">
                <div class="card-body">
                    <h5 class="card-title">{{$person->surname}} {{$person->name}} {{$person->thirdname}}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Название компании:</b> {{$person->company}}</li>
                        <li class="list-group-item"><b>Телефон для связи:</b> {{$person->phone}}</li>
                        <li class="list-group-item"><b>Эдектронная почта:</b> {{$person->email}}</li>
                        <li class="list-group-item"><b>Дата рождения:</b> {{$person->birthday}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
