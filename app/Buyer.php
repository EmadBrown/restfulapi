<?php

namespace App;

use App\Transaction;

class Buyer extends Model
{
    public function transaction()
    {
      return $this->hasMany(Transaction::class);
    }
}
