<?php

namespace App\Http\Controllers\client;

use Exception;
use Carbon\Carbon;
use App\Models\Size;
use App\Models\Produk;
use App\Models\Category;
use App\Models\Pemesanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Exceptions\HttpResponseException;

class DetailController extends Controller
{
    private $invoiceUrl, $apiKey, $callback_token;

    public function __construct()
    {
        $this->invoiceUrl = 'https://api.xendit.co/v2/invoices';
        $this->apiKey = config('services.xendit.apiKey');
        $this->callback_token = config('services.xendit.callback_token');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::latest()->get();

        $produk = Category::with('produk.produkimage')->get();

        $tes = Produk::with(['produkImage', 'size'])->withSum('size', 'qty')->get();



        return view('client.produk.index', [
            'data' => $data,
            'produk' => $produk,
            'tes' => $tes

        ]);
    }
    public function detailPesanan(Produk $id, Request $request)
    {
        $produk = $id->load('produkimage', 'kategori');
        $ukuranPesan = Size::where('size_id', $request->ukuran)->first();
        // dd($produk);
        $detailPesan = $request->all();
        return view('client.bayar.index', compact('produk', 'detailPesan', 'ukuranPesan'));
    }

    public function payment(Produk $id, Request $request)
    {

        // dd($request->all());
        // dd($this->invoiceUrl);


        try {
            $qty = $request->qty;
            $ukuran = Size::where('size_id', $request->ukuran)->first();
            $external_id = Str::uuid();
            DB::beginTransaction();
            $get = Http::withHeaders([
                'Authorization' => $this->apiKey
            ])->post($this->invoiceUrl, [
                'external_id' => $external_id,
                'amount' => $id->harga * $qty,
                'description' => $id->nama_produk . ', Size ' . $ukuran->size . ' , jumlah pesanan ' . $qty,
                'customer' => [
                    'nama pembeli' => auth()->user()->username,
                    'alamat pembeli' => auth()->user()->alamat,
                    'no_tlpn pembeli' => auth()->user()->no_tlpn,
                    'email pembeli' => auth()->user()->email,

                ]
            ]);
            $response = $get->object();
            $up = Pemesanan::create([
                'user_id' => auth()->user()->user_id,
                'produk_id' => $id->produk_id,
                'alamat' => auth()->user()->alamat,
                'doc_no' => $response->external_id,
                'amount' => $response->amount,
                'description' => $response->description,
                'payment_status' => $response->status,
                'payment_link' => $response->invoice_url,
                'expired' => Carbon::parse($response->expiry_date)->format('Y-m-d H:i:s'),
                'status' => 'unpaid',

            ]);
            DB::commit();
            return redirect($response->invoice_url);
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('toast_error', 'Pembayaran tidak berhasil coba lagi nanti');
        }
    }
    public function verifyCallbackToken($token)
    {
        if ($this->callback_token !== $token) {
            return false;
        }
        return true;
    }

    public function callback(Request $request)
    {
        // try {
        //     $callbackToken = $request->header('x-callback-token');
        //     $verifyCallbackToken = $this->verifyCallbackToken($callbackToken);
        //     if (!$verifyCallbackToken) {
        //         $message = 'Token tidak valid';
        //         throw new HttpResponseException(response([
        //             'error' => [
        //                 'code' => 400,
        //                 'message' => $message
        //             ],
        //         ], 400));
        //     }
        //     if ($request->status == 'PAID') {
        //         $payment_status = 'PAID';
        //     } else if ($request->status == 'EXPIRED') {
        //         $payment_status = 'EXPIRED';
        //     }

        //     DB::beginTransaction();
        //     $update = Pemesanan::where('doc_no', $request->external_id)->update([
        //         'payment_status' => $payment_status
        //     ]);

        //     DB::commit();
        //     return response()->json([
        //         'error' => false,
        //         'message' => 'callback success'
        //     ], 200);
        // } catch (Exception $e) {
        //     DB::rollBack();
        //     return response()->json([
        //         'error' => true,
        //         'message' => 'callback failed'
        //     ], 400);
        // }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
