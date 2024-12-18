<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;
use Illuminate\Http\Request;

class CreateSnapTokenService extends Midtrans
{
   
    public function getSnapToken(array $transactionData)
    {
        try {
            $snapToken = Snap::getSnapToken($transactionData);
            return $snapToken;
        } catch (\Exception $e) {
            throw new \Exception("Gagal membuat Snap Token: " . $e->getMessage());
        }
    }

}
