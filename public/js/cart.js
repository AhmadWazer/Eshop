
// Function to calculate and update "You Pay"
function updateYouPay() {
    var cartSubtotal = parseFloat(document.getElementById('cartSubtotal').textContent.replace('Total: $', ''));
    var youSave = parseFloat(document.getElementById('youSave').textContent.replace('$', ''));
    var shipping = document.getElementById('shippingCheckbox').checked ? 10 : 0; // Set shipping to 10 if checked, otherwise 0

    var youPay = cartSubtotal + shipping - youSave;

    document.getElementById('shipping').textContent = '$' + shipping.toFixed(2);

    // Update the "You Pay" element
    document.getElementById('youPay').textContent = '$' + youPay.toFixed(2);
}

// Call the updateYouPay function initially
updateYouPay();
// Add an event listener to the checkbox to update the calculation when it's checked or unchecked
var shippingCheckbox = document.getElementById('shippingCheckbox');
shippingCheckbox.addEventListener('change', updateYouPay);
