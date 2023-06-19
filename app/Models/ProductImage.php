<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{

    protected $fillable = [
        'product_id',
        'position',
        'image',
    ];

    use HasFactory;

    // Liaison 1 Produit pour plusieurs Images
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
