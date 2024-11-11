<?php

namespace App\Models;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "product";
    protected $fillable = [
        'category_id',
        'name',
        'image',
       
    ];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
}
