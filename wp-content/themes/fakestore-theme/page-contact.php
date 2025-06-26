<?php
/*
Template Name: Contact
*/
get_header();
?>

<h2 style="text-align:center;">📞 Contact Us </h2>
<div id="contact-container" style="max-width: 800px; margin: auto; padding: 20px;">
    <form id="contact-form">
        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; margin-bottom: 5px;">Name:</label>
            <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; margin-bottom: 5px;">Email:</label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="message" style="display: block; margin-bottom: 5px;">Message:</label>
            <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 10px; border-radius: 4px; border: 1px solid #ccc;"></textarea>
        </div>
        <button type="submit" style="background-color: #0073aa; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">Send Message</button>
    </form>
</div>
<script>
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Collect form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Here you can handle the form submission, e.g., send it to a server or display a success message
    alert(`Thank you, ${name}! Your message has been sent.`);
    
    // Reset the form
    this.reset();
});
</script>
<?php get_footer(); ?>