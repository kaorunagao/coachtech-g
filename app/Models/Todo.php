<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = array('id');

    public function getDetail()
    {
        $txt = $this->content . $this->created_at . $this->updated_at;
        return $txt;
    }
}