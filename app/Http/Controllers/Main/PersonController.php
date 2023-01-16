<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\StoreRequest;
use App\Http\Requests\Main\UpdateRequest;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonController extends Controller
{

    public function index()
    {
        $people = Person::all();
        return view('main.index',compact('people'));
    }

    public function create()
    {
        return view('main.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['avatar'] = Storage::disk('public')->put('/images', $data['avatar']);

        Person::firstOrCreate($data);

        return redirect()->route('main.index');

    }

    public function show(Person $person)
    {
        return view('main.show', compact('person'));
    }

    public function edit(Person $person)
    {
        return view('main.edit', compact('person'));
    }

    public function update(UpdateRequest $request, Person $person)
    {
        $data = $request->validated();
        $data['avatar'] = Storage::disk('public')->put('/images', $data['avatar']);

        $person->update($data);

        return view('main.show', compact('person'));
    }

    public function delete(Person $person)
    {
        $person->delete();

        return view('main.index');
    }
}
