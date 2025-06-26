<?php
/*
Template Name: Cart
*/
get_header();
?>

<h2 style="text-align:center; margin-top: 20px;">🛒 Your Cart</h2>
<div id="cart-container" style="max-width: 900px; margin: auto; padding: 20px;"></div>

<script>
function loadCart() {
  const cartContainer = document.getElementById('cart-container');
  let cart = JSON.parse(localStorage.getItem('cart')) || [];

  if (cart.length === 0) {
    cartContainer.innerHTML = "<h3 style='text-align:center;'>Your cart is empty.</h3>";
    return;
  }

  let total = 0;
  let html = `
    <table style="width:100%; border-collapse: collapse; margin-top: 20px;">
      <tr style="background-color: #f2f2f2;">
        <th style="border: 1px solid #ccc; padding: 12px;">Image</th>
        <th style="border: 1px solid #ccc; padding: 12px;">Title</th>
        <th style="border: 1px solid #ccc; padding: 12px;">Price</th>
        <th style="border: 1px solid #ccc; padding: 12px;">Quantity</th>
        <th style="border: 1px solid #ccc; padding: 12px;">Subtotal</th>
        <th style="border: 1px solid #ccc; padding: 12px;">Action</th>
      </tr>
  `;

  cart.forEach((item, index) => {
    const subtotal = item.price * item.quantity;
    total += subtotal;
    html += `
      <tr>
        <td style="border: 1px solid #ccc; padding: 10px; text-align: center;">
          <img src="${item.image}" width="60" style="border-radius: 6px;"/>
        </td>
        <td style="border: 1px solid #ccc; padding: 10px;">${item.title}</td>
        <td style="border: 1px solid #ccc; padding: 10px;">$${item.price.toFixed(2)}</td>
        <td style="border: 1px solid #ccc; padding: 10px; text-align: center;">
          <button onclick="changeQuantity(${index}, -1)" style="padding: 4px 8px;">-</button>
          <span style="margin: 0 10px;">${item.quantity}</span>
          <button onclick="changeQuantity(${index}, 1)" style="padding: 4px 8px;">+</button>
        </td>
        <td style="border: 1px solid #ccc; padding: 10px;">$${subtotal.toFixed(2)}</td>
        <td style="border: 1px solid #ccc; padding: 10px; text-align: center;">
          <button onclick="removeFromCart(${index})" style="background-color: red; color: white; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer;">Delete</button>
        </td>
      </tr>
    `;
  });

  html += `</table>
    <h3 style="margin-top: 20px; text-align: right;">Total: $${total.toFixed(2)}</h3>
    <div style="text-align: center; margin-top: 20px;">
      <button onclick="window.location.href='/'" style="background-color: #0073aa; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; margin-right: 10px;">Continue Shopping</button>
    </div>
  `;

  cartContainer.innerHTML = html;
}

function removeFromCart(index) {
  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.splice(index, 1);
  localStorage.setItem('cart', JSON.stringify(cart));
  loadCart();
}

function changeQuantity(index, delta) {
  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  if (!cart[index].quantity) cart[index].quantity = 1;
  cart[index].quantity += delta;
  if (cart[index].quantity < 1) cart[index].quantity = 1;
  localStorage.setItem('cart', JSON.stringify(cart));
  loadCart();
}

// Initialize default quantity if not set
function initializeCartQuantities() {
  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart = cart.map(item => {
    if (!item.quantity) item.quantity = 1;
    return item;
  });
  localStorage.setItem('cart', JSON.stringify(cart));
}

initializeCartQuantities();
loadCart();
</script>

<?php get_footer(); ?>
