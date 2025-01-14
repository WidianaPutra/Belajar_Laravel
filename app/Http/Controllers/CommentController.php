<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'comment' => 'required|string'
        ]);
        Comment::createComment([
            'username' => $request->input('username'),
            'comment' => $request->input('comment')
        ]);

        return redirect("/form")->with('success', "Data berhasil diunggah");
    }

    public function destroy($id = null)
    {
        if ($id) {
            Comment::deleteComment($id);
            return redirect("/form")->with('success', "Data berhasil dihapus");
        }
        return redirect('/form')->with('err', 'Data gagal dihapus');
    }

    public function update(Request $request, $id = null)
    {
        $request->validate([
            'username' => 'required|string',
            'comment' => 'required|string'
        ]);
        if ($id) {
            Comment::updateComment($id, [
                'username' => $request->input('username'),
                'comment' => $request->input('comment')
            ]);
            return redirect("/form")->with('success', "Data berhasil diunggah");
        }
        return redirect('/form')->with('err', 'Data gagal diperbaharui');
    }
}
// CRUD, Controller, Model di Laravel