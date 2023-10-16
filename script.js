function submitForm() {
    const name = document.getElementById("name").value;
    const phoneNumber = document.getElementById("phoneNumber").value;
    const provider = document.getElementById("provider").value;

    // Store user details in localStorage (for demonstration purposes)
    localStorage.setItem("name", name);
    localStorage.setItem("phoneNumber", phoneNumber);
    localStorage.setItem("provider", provider);

    // Redirect to the second page
    window.location.href = "second_page.php";
}
