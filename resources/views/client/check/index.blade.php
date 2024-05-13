@extends('client.layouts.two')

@section('container')
<div class="bg-gray-100 h-screen py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Shopping Cart</h1>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left font-semibold">Produk</th>
                                <th class="text-left font-semibold">Harga</th>
                                <th class="text-left font-semibold">Jumlah</th>
                                <th class="text-left font-semibold">Total</th>
                                <th class="text-left font-semibold">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <img class="h-16 w-16 mr-4" src="https://via.placeholder.com/150" alt="Product image">
                                        <span class="font-semibold">Nama Produk</span>
                                    </div>
                                </td>
                                <td class="py-4">$19.99</td>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        {{-- <button onclick="increment()" 
                                        class="border rounded-md py-2 px-4 mr-2">-</button> --}}
                                        <button onclick="increment()">+</button>
                                        <span class="text-center w-8" id="jumlah">1</span>
                                        <button onclick="decrement()">-</button>
                                        {{-- <button onclick="decrement()" class="border rounded-md py-2 px-4 ml-2">+</button> --}}
                                    </div>
                                </td>
                                <td class="py-4" id="harga">Rp 19.99</td>
                                <td class="py-4" id="harga">
                                    <div class="text-center border">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-8 h-8" viewBox="0 0 30 30">
                                            <path d="M 13 3 A 1.0001 1.0001 0 0 0 11.986328 4 L 6 4 A 1.0001 1.0001 0 1 0 6 6 L 24 6 A 1.0001 1.0001 0 1 0 24 4 L 18.013672 4 A 1.0001 1.0001 0 0 0 17 3 L 13 3 z M 6 8 L 6 24 C 6 25.105 6.895 26 8 26 L 22 26 C 23.105 26 24 25.105 24 24 L 24 8 L 6 8 z"></path>
                                            </svg>
                                    </div>
                                </td>
                            </tr>
                            <!-- More product rows -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold mb-4">Jumlah total</h2>
                    <div class="flex justify-between mb-2">
                        <span>Subtotal</span>
                        <span>Rp 19.99</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Taxes</span>
                        <span>Rp 1.99</span>
                    </div>
                    {{-- <div class="flex justify-between mb-2">
                        <span>Shipping</span>
                        <span>Rp 0.00</span>
                    </div> --}}
                    <hr class="my-2">
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">Total</span>
                        <span class="font-semibold">Rp 21.98</span>
                    </div>
                    <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    let jumlah = 0; // Inisialisasi jumlah awal
    const hargaPerItem = 10; // Harga per item

    function increment() {
        jumlah++; // Tambah jumlah
        updateJumlah(); // Perbarui tampilan jumlah
        updateHarga(); // Perbarui tampilan harga
    }

    function decrement() {
        if (jumlah > 0) {
            jumlah--; // Kurangi jumlah jika lebih dari 0
            updateJumlah(); // Perbarui tampilan jumlah
            updateHarga(); // Perbarui tampilan harga
        }
    }

    function updateJumlah() {
        document.getElementById('jumlah').innerText = jumlah; // Update tampilan jumlah
    }

    function updateHarga() {
        const totalHarga = jumlah * hargaPerItem; // Hitung total harga
        document.getElementById('harga').innerText = totalHarga; // Update tampilan harga
    }
</script>
@endpush