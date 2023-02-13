<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable=[
        "title", "cover_img","description","user_id","type_id"
    ];

    public function type(){
        return $this->belongsTo(Type::class,"type_id");
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }

}
