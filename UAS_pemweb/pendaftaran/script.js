// Element selectors
const slide1 = document.getElementById("slide-1");
const slide2 = document.getElementById("slide-2");
const nextButton = document.getElementById("nextButton");
const prevButton = document.getElementById("prevButton");
const registrationForm = document.getElementById("registrationForm");
const usernameField = document.getElementById("username");
const usernameStatus = document.getElementById("usernameStatus");

// Event: Next button
nextButton.addEventListener("click", () => {
    if (validateSlide1()) {
        slide1.classList.remove("active");
        slide2.classList.add("active");
    }
});

// Event: Previous button
prevButton.addEventListener("click", () => {
    slide2.classList.remove("active");
    slide1.classList.add("active");
});

// Event: Username validation (Client-side Only)
usernameField.addEventListener("input", () => {
    const username = usernameField.value.trim();

    // Basic validation for length and format
    if (username.length < 3) {
        usernameStatus.textContent = "Username must be at least 3 characters long.";
        usernameStatus.style.color = "red";
        return;
    }
    if (!/^[a-zA-Z0-9_]+$/.test(username)) {
        usernameStatus.textContent = "Username can only contain letters, numbers, and underscores.";
        usernameStatus.style.color = "red";
        return;
    }

    // If valid
    usernameStatus.textContent = "Username is valid.";
    usernameStatus.style.color = "green";
});

// Event: Form submit
registrationForm.addEventListener("submit", (e) => {
    e.preventDefault(); // Prevent default form submission
    if (validateSlide2()) {
        alert("Form submitted successfully!");
        registrationForm.submit(); // Submit the form programmatically
    }
});

// Validation for Slide 1
function validateSlide1() {
    const firstName = document.getElementById("firstName").value.trim();
    const lastName = document.getElementById("lastName").value.trim();
    const country = document.getElementById("country").value.trim();
    const gender = document.querySelector("input[name='gender']:checked");

    if (!firstName || !lastName || !country || !gender) {
        alert("All fields in Step 1 are required!");
        return false;
    }
    return true;
}

// Validation for Slide 2
function validateSlide2() {
    const email = document.getElementById("email").value.trim();
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const terms = document.getElementById("terms").checked;

    if (!email || !username || !password || !confirmPassword || !terms) {
        alert("All fields in Step 2 are required!");
        return false;
    }
    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return false;
    }
    if (usernameStatus.style.color === "red") {
        alert("Please fix the username field.");
        return false;
    }
    return true;
}
