<?php

namespace App\Http\Controllers;

use App\Models\PollType;
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

    public function store(Request $request)
    {
        dd($request->all());
    }
}
