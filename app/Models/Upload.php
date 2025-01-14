<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Upload extends Model
{
    use HasFactory;

    protected $table = 'uploads';
    protected $fillable = ['name', 'file_name'];

    public static function getAll()
    {
        return self::all();
    }

    public static function getById($id)
    {
        return self::find($id);
    }

    public static function createData($data)
    {
        // return self::create($data);
        return self::where('name');
    }

    public static function updateData($id, $data)
    {
        $data = self::find($id);

        if ($data) {
            $data->update($data);
            return true;
        }
        return null;
    }

    public static function deleteD($id)
    {
        $data = self::find($id);
        if ($data) {
            $data->delete($id);
            return true;
        }
        return false;
    }
}
