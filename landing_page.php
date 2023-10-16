<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
      
    <h1>User Information</h1>
    <p>Name: <span id="display-name"></span></p>
    <p>Phone Numbeqr: <span id="display-phone"></span></p>
    <p>Network Provider: <span id="display-provider"></span></p>
    <p style="color:red">note: click on complate task and make sure you complate the task</p>
<a href='https://gamam.vercel.app/'><button type="submit">complete task</button></a>
    <script>
        // Get parameters from the URL
        const params = new URLSearchParams(window.location.search);
        const name = params.get("name");
        const phone = params.get("phone");
        const provider = params.get("provider");

        // Display the submitted information
        document.getElementById("display-name").textContent = name;
        document.getElementById("display-phone").textContent = phone;
        document.getElementById("display-provider").textContent = provider;
    </script>

</body>
</html>

<?php
// Check if the cookie is set to determine if the user has already viewed the landing page
if (!isset($_COOKIE['viewed_landing_page'])) {
    // User has not viewed the landing page, so set the cookie
    setcookie('viewed_landing_page', '3', time() + 1296000); // Set a cookie that expires in 24 hours
} else {
    // User has already viewed the landing page, so redirect them to another page
    header('Location: ot.html'); // Replace 'other_page.php' with your desired redirect URL.
    exit();
}
?>
