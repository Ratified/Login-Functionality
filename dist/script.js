document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');

        form.addEventListener('submit', function (event) {
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const invalidUsername = document.getElementById('invalid_username');
            const invalidEmail = document.getElementById('invalid_email');
            const invalidPassword = document.getElementById('invalid_password');
            let valid = true;

            if (username.trim() === '') {
                invalidUsername.textContent = 'Username is required';
                invalidUsername.classList.remove('hidden');
                valid = false;
            } else if (!/^[a-zA-Z0-9_]+$/.test(username)) {
                invalidUsername.textContent = 'Invalid Username';
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

            if (!valid) {
                event.preventDefault();
            }

            var LoginData = new FormData();
            LoginData.append('username', username);
            LoginData.append('email', email);
            LoginData.append('password', email);

            fetch('includes/login.inc.php', {
                method: "POST",
                body: LoginData
            }) .then((res) => res.text)
            .then((data) => console.log(data))
            .catch((error) => {
                console.log(`Error: ${error}`)
            })
        });
    });