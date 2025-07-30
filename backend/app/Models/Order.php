<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['product_id', 'quantity', 'totalPrice'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}