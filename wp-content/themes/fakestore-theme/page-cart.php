<?php
/*
Template Name: Cart
*/
get_header();
?>

<h2 style="text-align:center;">🛒 Your Cart</h2>
<div id="cart-container" style="max-width: 800px; margin: auto; padding: 20px;"></div>

<script>
function loadCart() {
  const cartContainer = document.getElementById('cart-container');
  const cart = JSON.parse(localStorage.getItem('cart')) || [];

  if (cart.length === 0) {
    cartContainer.innerHTML = "<h3>Your cart is empty.</h3>";
    return;
  }

  let total = 0;
  let html = '<table style="width:100%; border-collapse: collapse;">';
  html += `<tr>
      <th style="border: 1px solid #ccc; padding: 10px;">Image</th>
      <th style="border: 1px solid #ccc; padding: 10px;">Title</th>
      <th style="border: 1px solid #ccc; padding: 10px;">Price</th>
      <th style="border: 1px solid #ccc; padding: 10px;">Action</th>
  </tr>`;

  cart.forEach((item, index) => {
    total += item.price;
    html += `
      <tr>
        <td style="border: 1px solid #ccc; padding: 10px;"><img src="${item.image}" width="50"/></td>
        <td style="border: 1px solid #ccc; padding: 10px;">${item.title}</td>
        <td style="border: 1px solid #ccc; padding: 10px;">₹${item.price.toFixed(2)}</td>
        <td style="border: 1px solid #ccc; padding: 10px;">
          <button onclick="removeFromCart(${index})" style="background-color: red; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">Delete</button>
        </td>
      </tr>
    `;
  });

  html += `</table><h3 style="margin-top: 20px;">Total: ₹${total.toFixed(2)}</h3><button onclick="window.location.href='/'" style="background-color: #0073aa; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; margin:10px">Continue Shopping</button>`;
  cartContainer.innerHTML = html;
}

function removeFromCart(index) {
  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.splice(index, 1); // Remove the item at index
  localStorage.setItem('cart', JSON.stringify(cart));
  loadCart(); // Re-render the updated cart
}

loadCart();
</script>

<?php get_footer(); ?>
