# 🅰️ ADkart – My First WordPress E-commerce Site (PHP + FakeStore API)
![ADkart Banner](https://i.ibb.co/7xv0LQV9/Screenshot-318.png)
Welcome to **ADkart**, my first self-made PHP project using **WordPress** and the **FakeStore API**. This project is built locally with **LocalWP** as a premium-style shopping demo. It includes product listing, a shopping cart system using `localStorage`, custom pages, and modern styling.
---
## 🚀 Features
- 🛒 Product listing from [FakeStore API](https://fakestoreapi.com/)
- 📦 Add to Cart + Cart page with total price
- ❌ Delete items from cart
- 🔍 Product search filter
- 📩 Contact Us page
- 💅 Custom Header & Footer (styled like premium e-commerce)
- 💻 Fully built in PHP + JavaScript (no external plugins used)
---
## 📸 Screenshots

### 🏠 Home Page – Product Listings
![Home](https://i.ibb.co/gZWRLsp3/Screenshot-319.png)

The homepage features a stylish, responsive layout with:
- A premium header branded as **🅰️Dkart**
- Live **search filter** to find products in real-time
- Product cards showing images, titles, prices, and “Add to Cart” buttons
- Data fetched from the **FakeStore API**
- Clean, modern UI using custom CSS and vanilla JavaScript

---

### 🛒 Cart Page – View & Manage Cart
![Cart](https://i.ibb.co/8LL3GgHd/Screenshot-320.png)

The cart page lets users:
- See all products added to the cart from localStorage
- View item image, title, and individual prices
- See the **total amount** at the bottom
- **Remove items** from the cart with a single click (Delete button)

---

### 📬 Contact Us Page – Custom Template
![Contact Us](https://i.ibb.co/5xg48zDj/Screenshot-321.png)

A dedicated **Contact Us** page built using a custom WordPress template:
- Includes a professional layout with branding
- Can be extended to include forms (e.g., Name, Email, Message)
- Easily created and assigned using WordPress Page Template feature

---


---
## 🛠️ How I Built It
- Installed [LocalWP](https://localwp.com/) to run WordPress locally
- Created a custom WordPress theme from scratch
- Fetched data from FakeStore API using JS `fetch()`
- Managed cart with JavaScript + `localStorage`
- Styled using pure CSS (no frameworks yet)
- Created `contact-us.php` and `page-cart.php` as **custom page templates**
---
## 📄 How to Use
1. **Install LocalWP** and create a new WordPress site
2. Copy this theme into `/wp-content/themes/adkart`
3. Go to **WordPress dashboard** → Appearance → Themes → **Activate ADkart**
4. Create pages:
   - **Cart** (select `Cart` template)
   - **Contact Us** (select `Contact Us` template)
5. Visit `http://your-local-site.local/` in your browser
6. Done! 🎉
---
## 🧠 What I Learned
- Basics of PHP and how WordPress themes work
- How WordPress loads templates
- How to create custom pages
- How to fetch external API data in a theme
- Handling localStorage cart logic in JS
- How to style UI like real-world shopping websites
---
## 📌 Next Goals
- Add **quantity & total update** in cart
- Use **WP REST API** to store cart
- Add **user login & checkout**
- Create a **WordPress plugin**
---
## 📃 License
This project is open-source for learning purposes. No commercial use of FakeStore API or branding intended.
---
## 🙏 Acknowledgements
- [WordPress.org](https://wordpress.org/)
- [FakeStore API](https://fakestoreapi.com/)
- [LocalWP](https://localwp.com/)
