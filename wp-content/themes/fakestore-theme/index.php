<?php get_header(); ?>

<style>
  /* Category Filter Styles */
  .category-filter {
    max-width: 1200px;
    margin: 20px auto;
    padding: 0 20px;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    justify-content: center;
  }

  .category-btn {
    padding: 8px 16px;
    background-color: #f0f0f0;
    border: 2px solid #ddd;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 14px;
    text-transform: capitalize;
    min-width: 80px;
  }

  .category-btn:hover {
    background-color: #e0e0e0;
    transform: translateY(-2px);
  }

  .category-btn.active {
    background-color: #0073aa;
    color: white;
    border-color: #0073aa;
  }

  .search-controls {
    max-width: 1200px;
    margin: 20px auto;
    padding: 0 20px;
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
  }

  #product-search {
    flex: 1;
    min-width: 250px;
    max-width: 400px;
    padding: 12px 20px;
    border: 2px solid #ddd;
    border-radius: 25px;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  #product-search:focus {
    outline: none;
    border-color: #0073aa;
    box-shadow: 0 0 0 3px rgba(0, 115, 170, 0.1);
  }

  .sort-select {
    padding: 10px 15px;
    border: 2px solid #ddd;
    border-radius: 20px;
    background: white;
    cursor: pointer;
  }

  .results-info {
    text-align: center;
    margin: 20px auto;
    color: #666;
    font-size: 14px;
    display: none;
    justify-content: center;
    align-items: center;
    gap: 20px;
  }

  .api-status {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
  }

  .api-badge {
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: bold;
  }

  .api-success { background: #d4edda; color: #155724; }
  .api-error { background: #f8d7da; color: #721c24; }

  #product-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
    max-width: 1400px;
    margin: 0px auto 80px auto;
  }

  .product-card {
    border: 1px solid #ddd;
    border-radius: 12px;
    padding: 15px;
    text-align: center;
    background: #fff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
  }

  .product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
  }

  .product-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    margin-bottom: 15px;
    border-radius: 8px;
    background: #f8f9fa;
  }



  .product-category {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(255, 193, 7, 0.9);
    color: #000;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 10px;
    text-transform: uppercase;
    font-weight: bold;
  }

  .product-rating {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
    margin-bottom: 10px;
    font-size: 12px;
    color: #666;
  }

  .stars {
    color: #ffc107;
  }

  .product-title {
    font-size: 1em;
    margin: 10px 0;
    height: 50px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    font-weight: 500;
    flex-grow: 1;
  }

  .product-price {
    color: #009688;
    font-weight: bold;
    font-size: 1.3em;
    margin-bottom: 15px;
  }

  .product-discount {
    background: #ff4757;
    color: white;
    padding: 2px 6px;
    border-radius: 8px;
    font-size: 11px;
    margin-left: 8px;
  }

  .product-card button {
    width: 100%;
    padding: 12px;
    background: linear-gradient(45deg, #0073aa, #005f8d);
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.3s ease;
    margin-top: auto;
  }

  .product-card button:hover {
    background: linear-gradient(45deg, #005f8d, #004a73);
    transform: translateY(-2px);
  }

  .product-card button:disabled {
    background: #ccc;
    cursor: not-allowed;
    transform: none;
  }

  .loading {
    text-align: center;
    padding: 60px 20px;
    color: #666;
    grid-column: 1 / -1;
  }

  .loading-spinner {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #0073aa;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
    margin: 0 auto 20px;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

  .no-results {
    text-align: center;
    padding: 60px 20px;
    color: #888;
    grid-column: 1 / -1;
  }

  .no-results h3 {
    margin-bottom: 10px;
    font-size: 1.5em;
  }

  /* Optimized Preloader styles */
  #preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgb(15, 14, 14);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-family: 'Segoe UI', sans-serif;
  }

  .brand-loader {
    font-size: 3rem;
    color: #fff;
    letter-spacing: 4px;
    animation: glow 1s ease-in-out infinite alternate;
    text-shadow: 0 0 20px rgba(255,255,255,0.5);
  }

  @keyframes glow {
    from {
      text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff;
      transform: scale(1);
    }
    to {
      text-shadow: 0 0 20px #00ffff, 0 0 30px #00ffff, 0 0 40px #00ffff;
      transform: scale(1.05);
    }
  }

  .tagline-loader {
    margin-top: 15px;
    font-size: 18px;
    color: rgba(255,255,255,0.9);
    font-style: italic;
    animation: fadeIn 2s ease-in-out infinite alternate;
  }

  @keyframes fadeIn {
    from { opacity: 0.5; }
    to   { opacity: 1; }
  }

  .loading-progress {
    margin-top: 30px;
    width: 300px;
    height: 4px;
    background: rgba(255,255,255,0.3);
    border-radius: 2px;
    overflow: hidden;
  }

  .progress-bar {
    height: 100%;
    background: linear-gradient(90deg, #00d8ff, #00ffff);
    width: 0%;
    animation: loading 1.5s ease-in-out forwards;
  }

  @keyframes loading {
    0% { width: 0%; }
    50% { width: 70%; }
    100% { width: 100%; }
  }

  @media (max-width: 768px) {
    .category-filter {
      padding: 0 10px;
    }
    
    .search-controls {
      flex-direction: column;
      padding: 0 10px;
    }
    
    #product-search {
      max-width: 100%;
    }
    
    #product-container {
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      gap: 15px;
      padding: 15px;
    }

    .results-info {
      flex-direction: column;
      gap: 10px;
    }
  }
</style>

<div id="preloader">
  <div class="brand-loader">🅰️Dkart</div>
  <div class="tagline-loader">Loading Premium Products...</div>
  <div class="loading-progress">
    <div class="progress-bar"></div>
  </div>
</div>

<!-- Category Filter -->
<div class="category-filter" id="category-filter">
  <button class="category-btn active" data-category="all">All Products</button>
</div>

<!-- Search Controls -->
<div class="search-controls">
  <input type="text" id="product-search" placeholder="🔍 Search products, brands, categories..." />
  <select class="sort-select" id="sort-select">
    <option value="default">Sort by: Default</option>
    <option value="price-low">Price: Low to High</option>
    <option value="price-high">Price: High to Low</option>
    <option value="rating">Rating: High to Low</option>
    <option value="name">Name: A to Z</option>
  </select>
</div>

<!-- Results Info -->
<div class="results-info" id="results-info">
  <div id="product-count">Loading products...</div>
  <div class="api-status" id="api-status"></div>
</div>

<!-- Product Container -->
<div id="product-container">
  <div class="loading">
    <div class="loading-spinner"></div>
    <h3>Fetching Products...</h3>
    <p>Please wait while we load the latest products</p>
  </div>
</div>

<script>
  // Optimized API Configuration - Reduced to fastest API only
  const API_SOURCES = {
    fakeStore: {
      url: 'https://fakestoreapi.com/products',
      name: 'FakeStore',
      timeout: 5000 // 5 second timeout
    },
    // Additional APIs can be added here if needed like dummyjson 
    dummyJson: {
      url: 'https://dummyjson.com/products',
      name: 'DummyJSON',
      timeout: 5000 // 5 second timeout
    }
   

  };

  let allProducts = [];
  let filteredProducts = [];
  let allCategories = new Set();
  let currentCategory = 'all';
  let currentSearchTerm = '';
  let currentSort = 'default';
  let apiStatus = {};
  let isLoading = false;

  // Optimized fetch with timeout
  async function fetchWithTimeout(url, timeout = 5000) {
    const controller = new AbortController();
    const timeoutId = setTimeout(() => controller.abort(), timeout);
    
    try {
      const response = await fetch(url, {
        signal: controller.signal,
        cache: 'force-cache' // Use cache for faster loading
      });
      clearTimeout(timeoutId);
      return response;
    } catch (error) {
      clearTimeout(timeoutId);
      throw error;
    }
  }

  // Optimized product fetching
  async function fetchAllProducts() {
    if (isLoading) return;
    isLoading = true;
    
    try {
      updateApiStatus('loading', 'Connecting to API...');
      
      const source = API_SOURCES.fakeStore;
      console.log(`Fetching from ${source.name}...`);
      
      const response = await fetchWithTimeout(source.url, source.timeout);
      if (!response.ok) throw new Error(`HTTP ${response.status}`);
      
      const data = await response.json();
      const products = normalizeProducts(data, 'fakeStore', source.name);
      
      allProducts = products;
      apiStatus.fakeStore = { status: 'success', count: products.length, name: source.name };
      
      // Extract categories
      allProducts.forEach(product => {
        if (product.category) {
          allCategories.add(product.category);
        }
      });

      console.log(`✅ ${allProducts.length} products loaded`);
      
      updateApiStatus('success', `${allProducts.length} products loaded`);
      renderCategories();
      filterAndRenderProducts();
      
      // Hide preloader immediately after data loads
      hidePreloader();
      
    } catch (error) {
      console.error('❌ Error:', error);
      apiStatus.fakeStore = { status: 'error', error: error.message, name: 'FakeStore' };
      updateApiStatus('error', 'Failed to load products');
      showError();
      hidePreloader();
    } finally {
      isLoading = false;
    }
  }

  // Hide preloader function
  function hidePreloader() {
    const preloader = document.getElementById('preloader');
    if (preloader) {
      preloader.style.opacity = '0';
      preloader.style.transition = 'opacity 0.5s ease';
      setTimeout(() => {
        preloader.style.display = 'none';
      }, 500);
    }
  }

  // Optimized product normalization
  function normalizeProducts(data, sourceKey, sourceName) {
    const products = Array.isArray(data) ? data : [];

    return products.map((product, index) => {
      const uniqueId = `${sourceKey}_${product.id || index}`;
      
      let category = product.category;
      if (typeof category === 'object' && category?.name) {
        category = category.name;
      }
      category = category ? category.toString().toLowerCase().replace(/[^a-z0-9\s]/g, '').trim() : 'general';
      
      let image = product.image || product.thumbnail;
      if (!image || image.includes('placeholder')) {
        image = `https://via.placeholder.com/300x300/e3f2fd/1976d2?text=${encodeURIComponent((product.title || 'Product').slice(0, 10))}`;
      }

      return {
        id: uniqueId,
        title: product.title || product.name || 'Unknown Product',
        price: parseFloat(product.price) || Math.floor(Math.random() * 100) + 10,
        originalPrice: product.price ? parseFloat(product.price) * 1.2 : null,
        image: image,
        category: category,
        description: product.description || 'High-quality product with great features.',
        rating: {
          rate: product.rating?.rate || product.rating || (Math.random() * 2 + 3).toFixed(1),
          count: product.rating?.count || Math.floor(Math.random() * 500) + 50
        },
        stock: product.stock || Math.floor(Math.random() * 50) + 10,
        brand: product.brand || extractBrand(product.title),
        source: sourceName,
        discount: product.discountPercentage ? Math.round(product.discountPercentage) : null
      };
    }).filter(product => product.title && product.price > 0);
  }

  // Extract brand from title
  function extractBrand(title) {
    if (!title) return 'Generic';
    const brands = ['Apple', 'Samsung', 'Nike', 'Adidas', 'Sony', 'LG', 'HP', 'Dell', 'Canon', 'Nikon'];
    const foundBrand = brands.find(brand => title.toLowerCase().includes(brand.toLowerCase()));
    return foundBrand || title.split(' ')[0];
  }

  // Update API status display
  function updateApiStatus(status, message) {
    const statusEl = document.getElementById('api-status');
    const countEl = document.getElementById('product-count');
    
    if (status === 'loading') {
      countEl.textContent = message;
      statusEl.innerHTML = '';
      return;
    }
    
    if (status === 'success') {
      countEl.textContent = message;
      statusEl.innerHTML = Object.entries(apiStatus).map(([key, info]) => 
        `<span class="api-badge ${info.status === 'success' ? 'api-success' : 'api-error'}">
          ${info.name}: ${info.status === 'success' ? info.count : 'Failed'}
        </span>`
      ).join('');
    }
  }

  // Render category buttons
  function renderCategories() {
    const container = document.getElementById('category-filter');
    
    const allBtn = container.querySelector('[data-category="all"]');
    container.innerHTML = '';
    container.appendChild(allBtn);
    
    Array.from(allCategories).sort().forEach(category => {
      const button = document.createElement('button');
      button.classList.add('category-btn');
      button.dataset.category = category;
      button.textContent = category.charAt(0).toUpperCase() + category.slice(1);
      container.appendChild(button);
    });

    container.addEventListener('click', (e) => {
      if (e.target.classList.contains('category-btn')) {
        container.querySelectorAll('.category-btn').forEach(btn => 
          btn.classList.remove('active')
        );
        e.target.classList.add('active');
        currentCategory = e.target.dataset.category;
        filterAndRenderProducts();
      }
    });
  }

  // Filter and render products
  function filterAndRenderProducts() {
    filteredProducts = [...allProducts];

    if (currentCategory !== 'all') {
      filteredProducts = filteredProducts.filter(product => 
        product.category === currentCategory
      );
    }

    if (currentSearchTerm) {
      const searchLower = currentSearchTerm.toLowerCase();
      filteredProducts = filteredProducts.filter(product =>
        product.title.toLowerCase().includes(searchLower) ||
        product.category.toLowerCase().includes(searchLower) ||
        product.brand.toLowerCase().includes(searchLower)
      );
    }

    sortProducts();
    renderProducts(filteredProducts);
    updateResultsInfo();
  }

  // Sort products
  function sortProducts() {
    switch (currentSort) {
      case 'price-low':
        filteredProducts.sort((a, b) => a.price - b.price);
        break;
      case 'price-high':
        filteredProducts.sort((a, b) => b.price - a.price);
        break;
      case 'rating':
        filteredProducts.sort((a, b) => parseFloat(b.rating.rate) - parseFloat(a.rating.rate));
        break;
      case 'name':
        filteredProducts.sort((a, b) => a.title.localeCompare(b.title));
        break;
      default:
        break;
    }
  }

  // Render product cards
  function renderProducts(products) {
    const container = document.getElementById('product-container');
    
    if (products.length === 0) {
      container.innerHTML = `
        <div class="no-results">
          <div style="font-size: 3em; margin-bottom: 20px;">🔍</div>
          <h3>No products found</h3>
          <p>Try adjusting your search or category filter.</p>
        </div>
      `;
      return;
    }

    container.innerHTML = products.map(product => `
      <div class="product-card">
      
        <div class="product-category">${product.category}</div>
        <img src="${product.image}" 
             alt="${product.title}" 
             loading="lazy"
             onerror="this.src='https://via.placeholder.com/300x300/e3f2fd/1976d2?text=No+Image'">
        
        <div class="product-rating">
          <span class="stars">${'★'.repeat(Math.floor(product.rating.rate))}${'☆'.repeat(5-Math.floor(product.rating.rate))}</span>
          <span>(${product.rating.count})</span>
        </div>
        
        <div class="product-title">${product.title}</div>
        
        <div class="product-price">
          $${(product.price).toFixed(2)}
          ${product.discount ? `<span class="product-discount">-${product.discount}%</span>` : ''}
        </div>
        
        <button 
          class="add-to-cart" 
          data-product='${JSON.stringify(product).replace(/'/g, "&apos;")}'
          ${product.stock <= 0 ? 'disabled' : ''}
        >
          ${product.stock <= 0 ? 'Out of Stock' : 'Add to Cart'}
        </button>
      </div>
    `).join('');

    attachCartListeners();
  }

  // Update results information
  function updateResultsInfo() {
    const countEl = document.getElementById('product-count');
    const total = allProducts.length;
    const showing = filteredProducts.length;
    
  
  }

  // Add event listeners to cart buttons
  function attachCartListeners() {
    document.querySelectorAll('.add-to-cart').forEach(button => {
      button.addEventListener('click', (e) => {
        if (button.disabled) return;
        
        const product = JSON.parse(button.dataset.product);
        
        let cart = [];
        try {
          cart = JSON.parse(localStorage.getItem('cart')) || [];
        } catch (e) {
          cart = [];
        }

        const existingItem = cart.find(item => item.id === product.id);
        
        if (existingItem) {
          existingItem.quantity += 1;
        } else {
          cart.push({
            ...product,
            quantity: 1,
            addedAt: new Date().toISOString()
          });
        }

        localStorage.setItem('cart', JSON.stringify(cart));
        
        const originalText = button.textContent;
        button.textContent = 'Added!';
        button.style.background = '#4CAF50';
        setTimeout(() => {
          button.textContent = originalText;
          button.style.background = '';
        }, 1500);
        
        showNotification(`${product.title} added to cart!`);
      });
    });
  }

  // Show notification
  function showNotification(message) {
    const notification = document.createElement('div');
    notification.style.cssText = `
      position: fixed;
      top: 20px;
      right: 20px;
      background: #4CAF50;
      color: white;
      padding: 15px 20px;
      border-radius: 8px;
      z-index: 10000;
      animation: slideIn 0.3s ease;
    `;
    notification.textContent = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
      notification.remove();
    }, 3000);
  }

  // Show error state
  function showError() {
    document.getElementById('product-container').innerHTML = `
      <div class="no-results">
        <div style="font-size: 3em; margin-bottom: 20px;">⚠️</div>
        <h3>Failed to load products</h3>
        <p>Please check your internet connection and try again</p>
        <button onclick="location.reload()" 
                style="margin-top: 20px; padding: 12px 24px; background: #0073aa; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px;">
          Retry
        </button>
      </div>
    `;
  }

  // Event listeners
  document.getElementById('product-search').addEventListener('input', (e) => {
    currentSearchTerm = e.target.value.trim();
    filterAndRenderProducts();
  });

  document.getElementById('sort-select').addEventListener('change', (e) => {
    currentSort = e.target.value;
    filterAndRenderProducts();
  });

  // Optimized initialization - no fixed delay
  document.addEventListener('DOMContentLoaded', () => {
    fetchAllProducts();
  });
</script>

<?php get_footer(); ?>