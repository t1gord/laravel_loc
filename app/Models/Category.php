<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    /**
     * @return BelongsToMany
     */
    public function arts(): BelongsToMany
    {
        return $this->BelongsToMany(Art::class);
    }
}
