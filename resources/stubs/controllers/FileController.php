<?php

namespace App\\Http\\Controllers;

use App\\Models\\File;
use App\\Http\\Requests\\FileRequest;

class FileController extends Controller
{
    public function index()
    {
        $files = File::paginate();

        return view('files.index', compact('files'));
    }

    public function create()
    {
        return view('files.create');
    }

    public function store(FileRequest $request)
    {
        File::create($request->validated());

        return redirect()->route('files.index')->with('success', 'File created successfully.');
    }

    public function show(File $file)
    {
        return view('files.show', compact('file'));
    }

    public function edit(File $file)
    {
        return view('files.edit', compact('file'));
    }

    public function update(FileRequest $request, File $file)
    {
        $file->update($request->validated());

        return redirect()->route('files.index')->with('success', 'File updated successfully.');
    }

    public function destroy(File $file)
    {
        $file->delete();

        return redirect()->route('files.index')->with('success', 'File deleted successfully.');
    }
}
