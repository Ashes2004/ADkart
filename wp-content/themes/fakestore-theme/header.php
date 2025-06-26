<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ADkart</title>
    <?php wp_head(); ?>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        padding-top: 80px; /* space for fixed header */
        font-family: 'Segoe UI', sans-serif;
        background-color: #f5f5f5;
      }

      header {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #1a1a1a;
        color: white;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px 30px;
        z-index: 1000;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      }

      header .logo {
        font-size: 24px;
        font-weight: bold;
        letter-spacing: 1px;
        color: #00d8ff;
        text-decoration: none;
      }

      nav a {
        color: white;
        text-decoration: none;
        margin-left: 20px;
        font-size: 16px;
        transition: color 0.3s;
      }

      nav a:hover {
        color: #00d8ff;
      }
    






 </style>
</head>
<body>
  <header>
    <a href="/" class="logo">🅰️Dkart</a>
    <nav>
      <a href="/">🏠 Home</a>
      <a href="/cart">🛒 Cart</a>
      <a href="/contact">📞 Contact</a>
    </nav>
   

</header>

