<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Bookmark;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

    protected $fillable = [
        'user_id',
        'product_id',
        'name',
        'description',
        'price',
    ];

    use HasFactory;

    // Liaison 1 Produit pour plusieurs Utilisateurs
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Liaison 1 Produit a une Catégorie
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Liaison 1 Produit pour plusieurs Favoris
    public function bookmarks(): HasMany
    {
        return $this->hasMany(Bookmark::class);
    }

    // Liaison 1 Produit pour plusieurs Commentaires
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    // Liaison 1 Produit pour plusieurs Images
    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }
}
