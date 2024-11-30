<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function edit(Section $section)
    {
        return view('sections.edit', compact('section'));
    }

    public function update(Request $request, Section $section)
    {
        $request->validate([
            'section_name' => 'required|string|max:255',
        ]);

        $section->update([
            'section_name' => $request->section_name,
        ]);

        return redirect()->route('sections.index')->with('success', 'Section updated successfully');
    }
}
