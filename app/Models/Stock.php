<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Stock extends Model
{
    use HasFactory;

    // Define table name if different from the default (optional)
    protected $table = 'stocks';

    // Define fillable fields to avoid mass-assignment issues
    protected $fillable = [
        'item_code',
        'item_name',
        'quantity',
        'location',
        'store_id',
        'in_stock_date',
        'status'
    ];

    /**
     * Get the store that owns the stock.
     */
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
