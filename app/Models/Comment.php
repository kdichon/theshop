<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{

    protected $fillable = [
        'user_id',
        'product_id',
        'comment',
    ];

    use HasFactory;

    // Liaison 1 Commentaire a un produit
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    // Liaison 1 Commentaire a un utilisateur
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
