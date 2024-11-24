<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','author','slug','body'];
    protected $with = ['author','category'];
    public function author():BelongsTo{
        return $this->belongsTo(User::class); // Assuming User model has a 'id' column for foreign key
    }

public function category():BelongsTo{
    return $this->belongsTo(Category::class); // Assuming Category model has a 'id' column for foreign key
}
}
