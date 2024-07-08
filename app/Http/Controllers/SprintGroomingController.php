<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SprintGrooming;

class SprintGroomingController extends Controller
{
    public function index()
    {
        $sprintGroomings = SprintGrooming::all();
        return view('sprint_groomings.index', compact('sprintGroomings'));
    }

    public function create()
    {
        return view('sprint_groomings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'meeting_date' => 'required|date',
        ]);

        // Jika meeting_date tidak ada dalam request, atur default ke hari ini
        $data = $request->all();
        if (!isset($data['meeting_date'])) {
            $data['meeting_date'] = now()->toDateString(); // Ganti dengan nilai default yang sesuai
        }

        SprintGrooming::create($data);
        return redirect()->route('sprint_groomings.index');
    }


    public function show(SprintGrooming $sprintGrooming)
    {
        return view('sprint_groomings.show', compact('sprintGrooming'));
    }

    public function edit(SprintGrooming $sprintGrooming)
    {
        return view('sprint_groomings.edit', compact('sprintGrooming'));
    }

    public function update(Request $request, SprintGrooming $sprintGrooming)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'meeting_date' => 'required|date',
        ]);

        $sprintGrooming->update($request->all());

        return redirect()->route('sprint_groomings.index');
    }


    public function destroy(SprintGrooming $sprintGrooming)
    {
        $sprintGrooming->delete();

        return redirect()->route('sprint_groomings.index');
    }
}
