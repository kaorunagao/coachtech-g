<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'content' => 'required|max:20'
    );

     public function getDetail()
    {
        $txt = $this->content . $this->created_at . $this->updated_at;
        return $txt;
    }
}