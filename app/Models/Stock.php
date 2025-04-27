<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    protected $fillable = [
        'item_code',
        'item_name',
        'quantity',
        'location',
        'store_id',
        'in_stock_date',
        'status'
    ];
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
