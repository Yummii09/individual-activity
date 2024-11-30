<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable =['name', 'username', 'id_number', 'section_id', 'score_id'];

    
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}

