document.addEventListener("DOMContentLoaded", function() {
    const totalPriceElement = document.getElementById("total");
    const quantityInput = document.getElementById("qty");
    const increaseButton = document.getElementById("btnIncrease");
    const decreaseButton = document.getElementById("btnDecrease");

    function calculateTotalPrice() {
        const price = 100000; // Harga per item
        const quantity = parseInt(quantityInput.value);
        const totalPrice = price * quantity;
        return totalPrice.toLocaleString(); // Format angka ke format mata uang
    }

    // Update total harga saat halaman dimuat
    const totalPrice = calculateTotalPrice();
    totalPriceElement.innerText = `Rp ${totalPrice}`;

    // Event listener untuk tombol +
    increaseButton.addEventListener("click", function() {
        quantityInput.value++;
        const totalPrice = calculateTotalPrice();
        totalPriceElement.innerText = `Rp ${totalPrice}`;
    });

    // Event listener untuk tombol -
    decreaseButton.addEventListener("click", function() {
        if (quantityInput.value > 1) {
            quantityInput.value--;
            const totalPrice = calculateTotalPrice();
            totalPriceElement.innerText = `Rp ${totalPrice}`;
        }
    });
});