<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'created_at', 'updated_at'];

    public static $rules = array(
        'content' => 'required|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    );

    public function getDetail()
    {
        $txt = $this->content . $this->created_at . $this->updated_at;
        return $txt;
    }
}