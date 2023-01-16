<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['type_id', 'title', 'proj_description', 'slug', 'image'];

    public static function getSlug($title)
    {
        return Str::slug($title, '-');
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
