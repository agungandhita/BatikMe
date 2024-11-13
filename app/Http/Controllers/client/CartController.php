<?php

namespace App\Http\Controllers\client;

use Exception;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request, $produk_id)
    {
        try {
            $user = Auth::user();

            $keranjang = Keranjang::where('user_id', $user->user_id)
                ->where('produk_id', $produk_id)
                ->first();

            if ($keranjang) {
                $keranjang->qty += $request->qty;
                $keranjang->save();
            } else {
                Keranjang::create([
                    'user_id' => $user->user_id,
                    'produk_id' => $produk_id,
                    'qty' => $request->qty
                ]);
            }

            return redirect()->route('cart.index')->with('success', 'Produk berhasil ditambahkan ke keranjang');
        } catch (Exception $e) {
            Log::error('Error adding product to cart', ['error' => $e->getMessage()]);

            return redirect()->route('cart.index')->with('error', 'Terjadi kesalahan saat menambahkan produk ke keranjang. Silakan coba lagi.');
        }
    }

    public function remove($keranjang_id)
    {
        try {
            $keranjang = Keranjang::findOrFail($keranjang_id);
            $keranjang->delete();

            return redirect()->route('cart.index')->with('success', 'Produk berhasil dihapus dari keranjang');
        } catch (Exception $e) {
            Log::error('gagal menghapus keranjang', ['error' => $e->getMessage()]);

            return redirect()->route('cart.index')->with('error', 'Terjadi kesalahan saat menghapus produk dari keranjang. Silakan coba lagi.');
        }
    }

    public function index()
    {
        try {
            $user = Auth::user();
            $cartItems = Keranjang::with('produk')->where('user_id', $user->user_id)->get();

            $totalCost = 0;
            foreach ($cartItems as $item) {
                $totalCost += $item->produk->harga * $item->qty;
            }

            return view('cart.index', compact('cartItems', 'totalCost'));
        } catch (Exception $e) {
            Log::error('Error fetching cart items', ['error' => $e->getMessage()]);

            return redirect()->route('home')->with('error', 'Terjadi kesalahan saat memuat keranjang. Silakan coba lagi.');
        }
    }

    public function update(Request $request, $keranjang_id)
    {
        try {
            $cartItem = Keranjang::findOrFail($keranjang_id);
            $cartItem->qty = $request->qty;
            $cartItem->save();

            return redirect()->route('cart.index')->with('success', 'Jumlah produk berhasil diperbarui');
        } catch (Exception $e) {
            Log::error('Error updating product quantity', ['error' => $e->getMessage()]);

            return redirect()->route('cart.index')->with('error', 'Terjadi kesalahan saat memperbarui jumlah produk. Silakan coba lagi.');
        }
    }
}
