<?php

namespace App\Models;
use App\Models\product;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $table = "brands";
    protected $fillable = [
        'name',
        'product_id',
        'category_id',
       
    ];

    public function product()
    {
        return $this->belongsTo(product::class, 'product_id', 'id');
    }

public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
    
}
