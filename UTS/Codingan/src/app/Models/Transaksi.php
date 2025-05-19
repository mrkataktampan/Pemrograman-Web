<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    protected $fillable = [
        'customer_id',
        'kendaraan_id',
        'jumlah',
        'total_harga',
    ];

    protected static function booted(): void
    {
        static::creating(function (Transaksi $transaksi) {
            $kendaraan = Kendaraan::find($transaksi->kendaraan_id);

            if (!$kendaraan) {
                throw new \Exception('Kendaraan tidak ditemukan.');
            }

            if ($kendaraan->stok < $transaksi->jumlah) {
                throw new \Exception('Stok kendaraan tidak mencukupi.');
            }

            $kendaraan->stok -= $transaksi->jumlah;

            if ($kendaraan->stok <= 0) {
                $kendaraan->status = 'Sold Out';
            }

            $kendaraan->save();

            // Hitung total harga otomatis jika belum diisi
            if (empty($transaksi->total_harga)) {
                $transaksi->total_harga = $kendaraan->harga * $transaksi->jumlah;
            }
        });
    }

    public function customer() { return $this->belongsTo(Customer::class); }
    public function kendaraan() { return $this->belongsTo(Kendaraan::class); }

}