<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Midtrans\CreateSnapTokenService;

class LandingPageController extends Controller
{
    protected $createsnaptokenservice;

    public function __construct(CreateSnapTokenService $createsnaptokenservice)
    {
        $this->createsnaptokenservice = $createsnaptokenservice;
    }

    public function home()
    {
        $tittle = "Product";
        $page = "Product";
        return view('client.home', compact('tittle', 'page'));
    }

    public function product()
    {
        $data = Produk::get();
        $tittle = "Product";
        $page = "Product";
        return view('client.product', compact('tittle', 'page', 'data'));
    }

    public function contact()
    {
        return view('client.contact', [
            "tittle" => "Contact",
            "page" => "Contact Us"
        ]);
    }

    public function product_detail($id)
    {
        $data = DB::table('products')->where('id', $id)->first(); 
        if (!$data) {
            return redirect()->back()->withErrors(['error' => 'Produk tidak ditemukan.']);
        }
        $tittle = "Product";
        $page = "Product Details";

        $transactionData = [
            'transaction_details' => [
                'order_id' => uniqid('ORDER-'),
                'gross_amount' => $data->harga_produk,
            ],
            'item_details' => [
                [
                    'id' => $data->id,
                    'price' => $data->harga_produk,
                    'quantity' => 2,
                    'name' => $data->nama_produk,
                ]
            ],
            'customer_details' => [
                'first_name' => 'Pembeli Test', 
                'email' => 'email@contoh.com', 
            ],
        ];

        try {
            $snapToken = $this->createsnaptokenservice->getSnapToken($transactionData);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }

        return view('client.product_detail', compact('tittle', 'page', 'data', 'snapToken'));
    }
}
