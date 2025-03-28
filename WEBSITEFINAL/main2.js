let cart = [];

function addToCart(productName, productPrice) {
    let existingProduct = cart.find(item => item.name === productName);
    if (existingProduct) {
        existingProduct.quantity++;
    } else {
        cart.push({ name: productName, price: productPrice, quantity: 1 });
    }
    updateCartUI();
}

function updateCartUI() {
    let cartHtml = '';
    let total = 0;
    cart.forEach(product => {
        cartHtml += `
            <div class="cart-item">
                <p class="cart-item-name">${product.name} x ${product.quantity}</p>
                <p class="cart-item-price">Price: ₱${product.price * product.quantity}</p>
                <button class="cart-item-remove" onclick="removeFromCart('${product.name}')">Remove</button>
            </div>
        `;
        total += product.price * product.quantity;
    });
    document.getElementById('cart-items').innerHTML = cartHtml;
    document.getElementById('total').innerHTML = `Total: ₱${total}`;
}

function removeFromCart(productName) {
    cart = cart.filter(item => item.name !== productName);
    updateCartUI();
}

function toggleCart() {
    const cartElement = document.getElementById('cart');
    cartElement.style.display = cartElement.style.display === 'none' ? 'block' : 'none';
    updateCartUI();
}

function showPaymentModal() {
    const paymentModal = document.getElementById('payment-modal');
    paymentModal.style.display = 'flex';
    paymentModal.style.visibility = 'visible';
}

function closePaymentModal() {
    const paymentModal = document.getElementById('payment-modal');
    paymentModal.style.display = 'none';
    paymentModal.style.visibility = 'hidden';
}

function processPayment() {
    const cardNumber = document.getElementById('card-number').value;
    const cardName = document.getElementById('card-name').value;
    const expiryDate = document.getElementById('expiry-date').value;
    const cvv = document.getElementById('cvv').value;

    if (!cardNumber || !cardName || !expiryDate || !cvv) {
        alert('Please fill in all payment fields.');
        return;
    }

    alert('Payment successful! Thank you for your purchase.');
    cart = [];
    updateCartUI();
    closePaymentModal();
    toggleCart();
}

function checkout() {
    if (cart.length === 0) {
        alert('Your cart is empty. Please add items to the cart before proceeding to payment.');
        return;
    }
    showPaymentModal();
}

updateCartUI();