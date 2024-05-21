<?php

namespace App\Http\Controllers;

use App\Models\PollType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PollTypeController extends Controller
{
    public function index(): View
    {
        $pollTypes = PollType::all();
        return view('poll-types.index', compact(['pollTypes']));

    }

    public function create(): View
    {
        return view('poll-types.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->only(['name']);
        $pollType = new PollType();
        $pollType->fill($data);

        return redirect()->to(route('poll-types.index'));

    }

    public function edit(PollType $pollType)
    {
        return view('poll-types.edit', compact(['pollType']));
    }

    public function update(Request $request)
    {
        dd($request);

    }
}
