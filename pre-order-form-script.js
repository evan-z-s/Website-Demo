// pre-order.js

document.addEventListener('DOMContentLoaded', function () {
    const quantityInput = document.getElementById('quantity');
    const preOrderFeeInput = document.getElementById('preOrderFee');
    const preOrderFeeHidden = document.getElementById('preOrderFeeHidden');

    const baseFee = 250; // Base pre-order fee per item

    // Function to update the pre-order fee dynamically
    function updatePreOrderFee() {
        const quantity = parseInt(quantityInput.value) || 1; // Default to 1 if input is invalid
        const totalFee = baseFee * quantity;
        preOrderFeeInput.value = `$${totalFee}`;
        preOrderFeeHidden.value = totalFee; // Update hidden input value for submission
    }

    // Event listener to update the pre-order fee when quantity changes
    quantityInput.addEventListener('input', updatePreOrderFee);

    // Initialize the fee on page load
    updatePreOrderFee();
});
