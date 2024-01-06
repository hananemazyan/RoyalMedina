// auth.js

// Function to handle login
function handleLogin() {
    // Get the email and password from the form
    const email = document.getElementsByName('loginEmail')[0].value;
    const password = document.getElementsByName('loginPassword')[0].value;

    // Perform authentication logic (this is just a placeholder)
    // In a real-world application, you would send a request to the server for authentication
    if (email === 'user@example.com' && password === 'password') {
        alert('Login successful!');
    } else {
        alert('Invalid email or password. Please try again.');
    }
}

// Function to handle registration
function handleRegistration() {
    // Get the registration form data
    const firstName = document.getElementsByName('registerFirstName')[0].value;
    const lastName = document.getElementsByName('registerLastName')[0].value;
    const email = document.getElementsByName('registerEmail')[0].value;
    const password = document.getElementsByName('registerPassword')[0].value;

    // Perform registration logic (this is just a placeholder)
    // In a real-world application, you would send a request to the server to create a new user
    alert(`Registration successful! Welcome, ${firstName} ${lastName}!`);
}

// Event listener for login form submission
document.querySelector('.authForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the default form submission
    handleLogin();
});

// Event listener for registration form submission
document.querySelector('.authForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the default form submission
    handleRegistration();
});
