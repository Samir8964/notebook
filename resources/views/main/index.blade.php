@extends('main.layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center ">
            <table class="table table-bordered table-hover text-nowrap">
                <thead>
                <tr>
                    <th>№</th>
                    <th>ФИО</th>
                    <th>Телефон</th>
                    <th colspan="3" class="text-center">действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($people as $person)
                    <tr>
                        <td>{{$person->id}}</td>
                        <td>{{$person->surname}} {{$person->name}} {{$person->thirdname}}</td>
                        <td>{{$person->phone}}</td>
                        <td class="text-center">
                            <a href="{{route('main.show',$person->id )}}">
                                посмотреть
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{route('main.edit',$person->id )}}" class="text-success">
                                изменить
                            </a>
                        </td>
                        <td class="text-center">
                            <form action="{{route('main.delete', $person->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="border-0 bg-transparent">
                                    удалить
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
