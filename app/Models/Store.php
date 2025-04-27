<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stock;

class Store extends Model
{
    use HasFactory;

    protected $table = 'stores';

    protected $fillable = ['name'];

    /**
     * Get the stocks for the store.
     */
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
