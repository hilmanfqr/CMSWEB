<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::latest()->get();
        return view('auth.dashboard-media', compact('media'));
    }

    public function create()
    {
        return view('auth.media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,gif,svg,mp4,pdf,doc,docx,xls,xlsx|max:20480',
        ]);
        $path = $request->file('file')->store('media', 'public');
        $media = Media::create([
            'filename' => $request->file('file')->getClientOriginalName(),
            'path' => $path,
        ]);
        return redirect()->route('media.index')->with('alert-success', 'Media uploaded successfully!');
    }

    public function destroy(Media $media)
    {
        Storage::disk('public')->delete($media->path);
        $media->delete();
        return redirect()->route('media.index')->with('alert-success', 'Media deleted successfully!');
    }
} 