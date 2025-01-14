<?php

namespace App\Http\Controllers;
use Illuminate\view\View;

use App\models\Upload;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['file' => 'required|file|mimes:jpg,png,webp,jpeg']);

        if ($request->file('file')->isValid()) {
            $originalFileName = $request->file('file')->getClientOriginalName();
            $newName = now()->format('YmdHis') . '-' . $originalFileName;
            $path = $request->file('file')->storeAs("uploads", $newName, 'public');

            Upload::create([
                'name' => $request->input("name"),
                'file_name' => $newName,
            ]);
            return back()->with('success', 'File sudah di unggah')->with('path', $path);
        }
        return back()->with('error', 'File gagal di unggah');
    }
}
