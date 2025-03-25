document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('login');

    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Validar correo y contraseña
            const isEmailValid = validateEmail(document.getElementById('Correo_usu'));
            const isPasswordValid = validatePassword(document.getElementById('pass'));

            // Si ambos son válidos, proceder con el login
            if (isEmailValid && isPasswordValid) {
                // Simular envío exitoso (reemplazar con tu lógica real)
                simulateLogin();
            }
        });

        // Validar en tiempo real el correo
        document.getElementById('Correo_usu').addEventListener('input', function() {
            validateEmail(this);
        });

        //Validar en tiempo real para la contraseña
        document.getElementById('pass').addEventListener('input', function() {
            validatePassword(this);
        });

        // Botón para mostrar/ocultar contraseña
        setupPasswordToggle();
    }

    // Función de validación de email
    function validateEmail(emailInput) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
        const errorElement = emailInput.parentElement.querySelector('.invalid-feedback');
        const successElement = emailInput.parentElement.querySelector('.valid-feedback');

        if (!emailInput.value) {
            showError(emailInput, errorElement, 'El correo electrónico es requerido');
            return false;
        }

        if (!emailRegex.test(emailInput.value)) {
            showError(emailInput, errorElement, 'Por favor ingresa un correo electrónico válido');
            return false;
        }

        showSuccess(emailInput, successElement, '¡Correo válido!');
        return true;
    }

    // Función de validación de contraseña
    function validatePassword(passwordInput) {
        const errors = [];
        const password = passwordInput.value;

        if (!password) {
            showError(passwordInput, passwordInput.parentElement.querySelector('.invalid-feedback'),
                    'La contraseña es requerida');
            return false;
        }

        // Verificar cada requisito de la contraseña
        if (password.length < 8) errors.push("Mínimo 8 caracteres");
        if (!/[A-Z]/.test(password)) errors.push("1 letra mayúscula");
        if (!/[a-z]/.test(password)) errors.push("1 letra minúscula");
        if (!/[0-9]/.test(password)) errors.push("1 número");
        if (!/[\W_]/.test(password)) errors.push("1 carácter especial");

        if (errors.length > 0) {
            const errorMessage = "La contraseña necesita:<br>" + errors.map(e => `• ${e}`).join("<br>");
            showError(passwordInput, passwordInput.parentElement.querySelector('.invalid-feedback'), errorMessage);
            return false;
        }

        showSuccess(passwordInput, passwordInput.parentElement.querySelector('.valid-feedback'),
                  '¡Contraseña segura!');
        return true;
    }

    // Funciones auxiliares
    function showError(input, errorElement, message) {
        errorElement.innerHTML = message;
        input.classList.remove('is-valid');
        input.classList.add('is-invalid');
    }

    function showSuccess(input, successElement, message) {
        successElement.textContent = message;
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
    }

    function setupPasswordToggle() {
        const passwordInput = document.getElementById('pass');
        const toggleButton = document.createElement('button');

        toggleButton.type = 'button';
        toggleButton.innerHTML = '<i class="far fa-eye"></i>';
        toggleButton.className = 'btn btn-outline-secondary';
        toggleButton.style.position = 'absolute';
        toggleButton.style.right = '5px';
        toggleButton.style.top = '50%';
        toggleButton.style.transform = 'translateY(-50%)';
        toggleButton.style.border = 'none';
        toggleButton.style.background = 'transparent';

        const inputGroup = passwordInput.parentElement;
        inputGroup.style.position = 'relative';
        inputGroup.appendChild(toggleButton);

        toggleButton.addEventListener('click', function() {
            const icon = this.querySelector('i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
    }


});
