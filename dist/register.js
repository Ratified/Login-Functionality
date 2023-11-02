document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        const username = document.getElementById('username').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm_password').value;
        const invalidUsername = document.getElementById('invalid_username');
        const invalidEmail = document.getElementById('invalid_email');
        const invalidPassword = document.getElementById('invalid_password');
        let valid = true;

        if (username.trim() === '') {
            invalidUsername.textContent = 'Username is required';
            invalidUsername.classList.remove('hidden');
            valid = false;
        } else {
            invalidUsername.classList.add('hidden');
        }

        if (email.trim() === '') {
            invalidEmail.textContent = 'Email is required';
            invalidEmail.classList.remove('hidden');
            valid = false;
        } else if (!/\S+@\S+\.\S+/.test(email)) {
            invalidEmail.textContent = 'Invalid Email';
            invalidEmail.classList.remove('hidden');
            valid = false;
        } else {
            invalidEmail.classList.add('hidden');
        }

        if (password.trim() === '') {
            invalidPassword.textContent = 'Password is required';
            invalidPassword.classList.remove('hidden');
            valid = false;
        } else {
            invalidPassword.classList.add('hidden');
        }

        if (confirmPassword.trim() === '') {
            alert('Please confirm your password');
            valid = false;
        } else if (confirmPassword !== password) {
            alert('Passwords do not match');
            valid = false;
        }

        if (!valid) {
            event.preventDefault();
        }

        var formData = new FormData()
        formData.append("username", username)
        formData.append("email", email)
        formData.append("password", password)

        fetch('includes/signup.inc.php', {
            method: "POST",
            body: formData
        }) .then((res) => res.text)
        .then((data)=> console.log(data))
        .catch((err) => console.log(`Error: ${err}`))
    });
});
