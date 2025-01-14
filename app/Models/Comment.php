<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";

    protected $fillable = [
        'username',
        'comment',
    ];

    public static function getAllComments()
    {
        return self::all();
    }

    public static function createComment($data)
    {
        return self::create($data);
    }

    public static function getCommentById($id)
    {
        return self::find($id);
    }

    public static function updateComment($id, $data)
    {
        $comment = self::find($id);
        if ($comment) {
            $comment->update($data);
            return true;
        }
        return null;
    }

    public static function deleteComment($id)
    {
        $comment = self::find($id);
        if ($comment) {
            $comment->delete($id);
            return true;
        }
        return false;
    }
}
