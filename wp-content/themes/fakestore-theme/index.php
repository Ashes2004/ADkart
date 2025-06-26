<?php get_header(); ?>

<style>
  #product-search {
    width: 300px;
    padding: 10px;
    margin: 20px auto;
    display: block;
    border: 1px solid #ccc;
    border-radius: 8px;
  }

  #product-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 20px;
    padding: 20px;
    max-width: 1200px;
    margin: 0px auto 80px auto;
  }

  .product-card {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    background: #fff;
    box-shadow: 2px 8px 10px rgba(0,0,0,0.5);
    transition: transform 0.2s ease;
  }

  .product-card:hover {
    transform: scale(1.02);
  }

  .product-card img {
    height: 120px;
    object-fit: contain;
    margin-bottom: 10px;
  }

  .product-title {
    font-size: 1em;
    margin: 10px 0;
    height: 50px;
    overflow: hidden;
  }

  .product-price {
    color: #009688;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .product-card button {
    padding: 8px 12px;
    background-color: #0073aa;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .product-card button:hover {
    background-color: #005f8d;
  }
</style>

<!-- 🔍 Search Input -->
<input type="text" id="product-search" placeholder="Search products..." />

<!-- 🛍 Product Container -->
<div id="product-container"></div>

<script>
  let allProducts = [];

  // Fetch products from API
  fetch('https://fakestoreapi.com/products')
    .then(res => res.json())
    .then(data => {
      allProducts = data;
      renderProducts(data); // Initial render
    });

  // Render product cards
  function renderProducts(products) {
    const container = document.getElementById('product-container');
    container.innerHTML = '';

    products.forEach(product => {
      const card = document.createElement('div');
      card.classList.add('product-card');
      card.innerHTML = `
        <img src="${product.image}" alt="${product.title}">
        <div class="product-title">${product.title}</div>
        <div class="product-price">₹${product.price.toFixed(2)}</div>
        <button 
          class="add-to-cart" 
          data-id="${product.id}"
          data-title="${product.title}"
          data-price="${product.price}"
          data-image="${product.image}"
        >
          Add to Cart
        </button>
      `;
      container.appendChild(card);
    });

    attachCartListeners();
  }

  // Add event listeners to cart buttons
  function attachCartListeners() {
    document.querySelectorAll('.add-to-cart').forEach(button => {
      button.addEventListener('click', (e) => {
        const btn = e.currentTarget;
        const item = {
          id: btn.dataset.id,
          title: btn.dataset.title,
          price: parseFloat(btn.dataset.price),
          image: btn.dataset.image
        };

        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push(item);
        localStorage.setItem('cart', JSON.stringify(cart));
        alert(`${item.title} added to cart`);
      });
    });
  }

  // Filter on search input
  document.getElementById('product-search').addEventListener('input', (e) => {
    const searchText = e.target.value.toLowerCase();
    const filtered = allProducts.filter(p => p.title.toLowerCase().includes(searchText));
    renderProducts(filtered);
  });
</script>

<?php get_footer(); ?>
