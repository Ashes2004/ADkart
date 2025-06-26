# 🅰️ ADkart – My First WordPress E-commerce Site (PHP + FakeStore API)
![ADkart Banner](screenshots/banner.png)
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
> 📂 Place your screenshots in a `/screenshots` folder
| Homepage with Search | Cart Page | Contact Page |
|----------------------|-----------|--------------|
| ![](screenshots/home.png) | ![](screenshots/cart.png) | ![](screenshots/contact.png) |

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
