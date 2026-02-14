<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shipment extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    protected $fillable = [
        'order_id',
        'carrier',
        'tracking_no',
        'shipped_at',
        'delivered_at',
        'status',
    ];
}
