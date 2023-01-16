@extends('main.layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route('main.update', $person->id)}}" method="post" class="" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group w-50">
                    <label for="name">Имя</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Имя"
                           value="{{old('name') ?? $person->name}}">
                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="surname">Фамилия</label>
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Фамилия"
                           value="{{old('surname') ?? $person->surname}}">
                    @error('surname')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="thirdname">Отчество</label>
                    <input type="text" class="form-control" id="thirdname" name="thirdname" placeholder="Отчество"
                           value="{{old('thirdname') ?? $person->thirdname}}">
                    @error('thirdname')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="company">Компания</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Название компании"
                           value="{{old('company') ?? $person->company}}">
                    @error('company')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="phone">Телефон</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Номер телефона"
                           value="{{old('phone') ?? $person->phone}}">
                    @error('phone')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Электронная почта"
                           value="{{old('email') ?? $person->email}}">
                    @error('email')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="birthday">Дата рождения</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="{{old('birthday') ?? $person->birthday}}">
                    @error('birthday')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50 pt-1">
                    <div class="w-50 mb-2">
                        <img src="{{asset('storage/'.$person->avatar)}}" alt="avatar" class="w-50">
                    </div>
                    <div class="mb-3">
                        <label for="avatar" class="form-label">Выбрать фото</label>
                        <input class="form-control" name="avatar" type="file" id="avatar">
                        @error('avatar')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group ">
                    <input type="submit" class="btn btn-primary w-50" value="Изменить">
                </div>
            </form>
        </div>
    </div>
@endsection
