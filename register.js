const form = document.getElementById('registration-form');
const usernameInput = document.getElementById('username');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm-password');
const submitButton = document.getElementById('submit-button');
const errorMessage = document.getElementById('error-message');

form.addEventListener('submit', (e) => {
	e.preventDefault();
	const username = usernameInput.value.trim();
	const email = emailInput.value.trim();
	const password = passwordInput.value.trim();
	const confirmPassword = confirmPasswordInput.value.trim();

	if (username === '' || email === '' || password === '' || confirmPassword === '') {
		errorMessage.textContent = 'Please fill out all fields.';
		return;
	}

	if (password !== confirmPassword) {
		errorMessage.textContent = 'Passwords do not match.';
		return;
	}
    if (password.length < 8) {
		errorMessage.textContent = 'Password must be at least 8 characters long.';
		return;
	}

	if (!validateEmail(email)) {
		errorMessage.textContent = 'Invalid email address.';
		return;
	}

	// Submit the form data to the server
	const formData = new FormData();
	formData.append('username', username);
	formData.append('email', email);
	formData.append('password', password);

	fetch('/register', {
		method: 'POST',
		body: formData,
	})
	.then((response) => response.json())
	.then((data) => {
		if (data.success) {
			errorMessage.textContent = 'Registration successful!';
		} else {
			errorMessage.textContent = data.error;
		}
	})
.catch((error) => {
		errorMessage.textContent = 'Error registering user.';
	});
});

function validateEmail(email) {
	const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
	return emailRegex.test(email);
}
