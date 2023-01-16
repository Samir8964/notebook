<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\StoreRequest;
use App\Http\Resources\PersonResource;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();

        return PersonResource::collection($people)->resolve();
    }

    public function show(Person $person)
    {
        return PersonResource::make($person)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $person = Person::firstOrCreate($data);

        return PersonResource::make($person)->resolve();

    }

    public function update(Person $person ,StoreRequest $request)
    {
        $data = $request->validated();

        $person->update($data);
        $person->fresh();

        return PersonResource::make($person)->resolve();

    }

    public function delete(Person $person)
    {
        $person->delete();

        return response()->json([
           'message'=> 'person was deleted'
        ]);
    }
}
