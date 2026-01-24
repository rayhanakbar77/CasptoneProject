<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $casts = [
        'total_harga' => 'decimal:2',
        'order_date' => 'datetime',
    ];

    protected $fillable = [
        'user_id',
        'event_id',
        'payment_type_id', // <--- TAMBAHKAN INI (Agar bisa disimpan ke database)
        'order_date',
        'total_harga',
    ];

    // ... method user() yang lama biarkan saja ...
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ... method tikets() yang lama biarkan saja ...
    public function tikets()
    {
        return $this->belongsToMany(Tiket::class, 'detail_orders')
            ->withPivot('jumlah', 'subtotal_harga');
    }

    // ... method event() yang lama biarkan saja ...
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    // ... method detailOrders() yang lama biarkan saja ...
    public function detailOrders()
    {
        return $this->hasMany(DetailOrder::class);
    }

    // --- TAMBAHKAN FUNGSI BARU DI BAWAH SINI ---

    /**
     * Relasi ke PaymentType
     * Order dimiliki oleh satu Tipe Pembayaran
     */
    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }
}
