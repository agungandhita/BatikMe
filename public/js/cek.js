document.addEventListener("DOMContentLoaded", function() {
    const priceElement = document.getElementById("totalPrice");
    const quantityInput = document.getElementById("quantityInput");
    const increaseButton = document.getElementById("increaseButton");
    const decreaseButton = document.getElementById("decreaseButton");
    let harga = @json($data->harga);

    function calculateTotalPrice() {
        const price = 100000; // Harga per item
        const quantity = parseInt(quantityInput.value);
        const totalPrice = price * quantity;
        return totalPrice.toLocaleString(); // Format angka ke format mata uang
    }

    // Update total harga saat halaman dimuat
    const totalPrice = calculateTotalPrice();
    priceElement.innerText = `Rp ${totalPrice}`;

    // Event listener untuk tombol +
    increaseButton.addEventListener("click", function() {
        quantityInput.value++;
        const totalPrice = calculateTotalPrice();
        priceElement.innerText = `Rp ${totalPrice}`;
    });

    // Event listener untuk tombol -
    decreaseButton.addEventListener("click", function() {
        if (quantityInput.value > 1) {
            quantityInput.value--;
            const totalPrice = calculateTotalPrice();
            priceElement.innerText = `Rp ${totalPrice}`;
        }
    });
});