@extends('main.layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('main.store')}}" method="post" class="" enctype="multipart/form-data">
                @csrf
                <div class="form-group w-50">
                    <label for="name">Имя</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Имя"
                           value="{{old('name')}}">
                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="surname">Фамилия</label>
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Фамилия"
                           value="{{old('surname')}}">
                    @error('surname')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="thirdname">Отчество</label>
                    <input type="text" class="form-control" id="thirdname" name="thirdname" placeholder="Отчество"
                           value="{{old('thirdname')}}">
                    @error('thirdname')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="company">Компания</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Название компании"
                           value="{{old('company')}}">
                    @error('company')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="phone">Телефон</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Номер телефона"
                           value="{{old('phone')}}">
                    @error('phone')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Электронная почта"
                           value="{{old('email')}}">
                    @error('email')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <label for="birthday">Дата рождения</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="{{old('birthday')}}">
                    @error('birthday')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group w-50">
                    <div class="mb-3">
                        <label for="avatar" class="form-label">Выбрать фото</label>
                        <input class="form-control" name="avatar" type="file" id="avatar">
                        @error('avatar')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group ">
                    <input type="submit" class="btn btn-primary w-50" value="Добавить">
                </div>
            </form>
        </div>
    </div>
@endsection
