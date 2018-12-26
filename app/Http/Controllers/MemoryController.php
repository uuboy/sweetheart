<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemoryRequest;
use App\Models\Memory;

class MemoryController extends Controller
{
    public function store(MemoryRequest $request,Memory $memory)
    {
        $memory->fill($request->all());
        $memory->save();
    }

    public function update(MemoryRequest $request,Memory $memory)
    {
        $memory->update($request->all());
    }

    public function destory(Memory $memory)
    {
        $memory->delete();
    }
}
