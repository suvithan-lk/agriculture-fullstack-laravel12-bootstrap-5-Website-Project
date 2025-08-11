<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Farm - Authentication</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.1/sweetalert2.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-green: #2d5016;
            --accent-green: #4a7c59;
            --light-green: #8fbc8f;
            --earth-brown: #8b4513;
            --cream: #f5f5dc;
            --gold: #daa520;
            --sage: #9caf88;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--sage) 0%, var(--light-green) 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated background elements */
        .bg-leaves {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .leaf {
            position: absolute;
            color: rgba(45, 80, 22, 0.1);
            font-size: 2rem;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(10deg); }
        }

        .leaf:nth-child(1) { top: 10%; left: 20%; animation-delay: 0s; }
        .leaf:nth-child(2) { top: 70%; left: 80%; animation-delay: 2s; }
        .leaf:nth-child(3) { top: 30%; left: 70%; animation-delay: 4s; }
        .leaf:nth-child(4) { top: 60%; left: 10%; animation-delay: 1s; }
        .leaf:nth-child(5) { top: 20%; left: 50%; animation-delay: 3s; }

        /* Main container */
        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .auth-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(45, 80, 22, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            overflow: hidden;
            max-width: 450px;
            width: 100%;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .auth-header {
            background: linear-gradient(135deg, var(--primary-green), var(--accent-green));
            color: white;
            text-align: center;
            padding: 2rem;
            position: relative;
        }

        .auth-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
            opacity: 0.3;
        }

        .auth-header h2 {
            font-weight: 600;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }

        .auth-header p {
            opacity: 0.9;
            font-weight: 300;
            position: relative;
            z-index: 1;
        }

        .logo-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--gold);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .auth-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-label {
            color: var(--primary-green);
            font-weight: 500;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(245, 245, 220, 0.3);
        }

        .form-control:focus {
            border-color: var(--accent-green);
            box-shadow: 0 0 0 0.2rem rgba(74, 124, 89, 0.25);
            background: white;
            transform: translateY(-2px);
        }

        .input-group {
            position: relative;
        }

        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--accent-green);
            cursor: pointer;
            z-index: 5;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-green), var(--accent-green));
            border: none;
            border-radius: 12px;
            padding: 0.875rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--accent-green), var(--primary-green));
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(45, 80, 22, 0.3);
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid var(--accent-green);
            color: var(--accent-green);
            border-radius: 12px;
            padding: 0.875rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 0.5rem;
        }

        .btn-secondary:hover {
            background: var(--accent-green);
            color: white;
            transform: translateY(-2px);
        }

        .password-requirements {
            background: rgba(74, 124, 89, 0.1);
            border-radius: 12px;
            padding: 1rem;
            margin-top: 0.5rem;
            font-size: 0.875rem;
        }

        .requirement {
            display: flex;
            align-items: center;
            margin-bottom: 0.25rem;
            color: var(--primary-green);
        }

        .requirement.valid {
            color: var(--accent-green);
        }

        .requirement i {
            margin-right: 0.5rem;
            width: 16px;
        }

        .auth-footer {
            text-align: center;
            padding: 1.5rem 2rem;
            background: rgba(245, 245, 220, 0.3);
            color: var(--primary-green);
        }

        .auth-footer a {
            color: var(--accent-green);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .auth-footer a:hover {
            color: var(--primary-green);
        }

        .otp-inputs {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
            margin: 1rem 0;
        }

        .otp-input {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 1.25rem;
            font-weight: 600;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            transition: all 0.3s ease;
            background: rgba(245, 245, 220, 0.3);
        }

        .otp-input:focus {
            border-color: var(--accent-green);
            box-shadow: 0 0 0 0.2rem rgba(74, 124, 89, 0.25);
            background: white;
        }

        .resend-timer {
            text-align: center;
            color: var(--primary-green);
            font-size: 0.875rem;
            margin-top: 1rem;
        }

        .form-page {
            display: none;
        }

        .form-page.active {
            display: block;
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Responsive design */
        @media (max-width: 576px) {
            .auth-card {
                margin: 1rem;
                border-radius: 15px;
            }

            .auth-header {
                padding: 1.5rem;
            }

            .auth-body {
                padding: 1.5rem;
            }

            .otp-inputs {
                gap: 0.25rem;
            }

            .otp-input {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
        }

        /* Custom SweetAlert2 styling */
        .swal2-popup {
            border-radius: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .swal2-confirm {
            background: linear-gradient(135deg, var(--primary-green), var(--accent-green)) !important;
            border-radius: 12px !important;
            font-weight: 600;
        }

        /* Loading spinner */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
            margin-right: 0.5rem;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Animated background -->
    <div class="bg-leaves">
        <div class="leaf"><i class="fas fa-leaf"></i></div>
        <div class="leaf"><i class="fas fa-seedling"></i></div>
        <div class="leaf"><i class="fas fa-leaf"></i></div>
        <div class="leaf"><i class="fas fa-tree"></i></div>
        <div class="leaf"><i class="fas fa-leaf"></i></div>
    </div>

    <div class="auth-container">
        <div class="auth-card">
            <!-- Registration Page -->
            <div id="registerPage" class="form-page active">
                <div class="auth-header">
                    <div class="logo-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h2>Join Organic Farm</h2>
                    <p>Start your sustainable farming journey</p>
                </div>

                <div class="auth-body">
                    <form id="registerForm">
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-user"></i> Full Name
                            </label>
                            <input type="text" class="form-control" id="fullName" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-envelope"></i> Gmail Address
                            </label>
                            <input type="email" class="form-control" id="email" pattern=".*@gmail\.com$" required>
                            <small class="text-muted">Only Gmail accounts are allowed</small>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-phone"></i> Mobile Number
                            </label>
                            <input type="tel" class="form-control" id="mobile" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-map-marker-alt"></i> Address
                            </label>
                            <textarea class="form-control" id="address" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-lock"></i> Password
                            </label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" required>
                                <span class="input-icon" onclick="togglePassword('password')">
                                    <i class="fas fa-eye" id="passwordEye"></i>
                                </span>
                            </div>
                            <div class="password-requirements">
                                <div class="requirement" id="lengthReq">
                                    <i class="fas fa-times"></i> Minimum 15 characters
                                </div>
                                <div class="requirement" id="uppercaseReq">
                                    <i class="fas fa-times"></i> At least 1 uppercase letter
                                </div>
                                <div class="requirement" id="lowercaseReq">
                                    <i class="fas fa-times"></i> At least 1 lowercase letter
                                </div>
                                <div class="requirement" id="numberReq">
                                    <i class="fas fa-times"></i> At least 1 number
                                </div>
                                <div class="requirement" id="specialReq">
                                    <i class="fas fa-times"></i> At least 1 special character
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-lock"></i> Confirm Password
                            </label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="confirmPassword" required>
                                <span class="input-icon" onclick="togglePassword('confirmPassword')">
                                    <i class="fas fa-eye" id="confirmPasswordEye"></i>
                                </span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i> Create Account
                        </button>
                    </form>
                </div>

                <div class="auth-footer">
                    Already have an account?
                    <a href="#" onclick="showLogin()">Sign in here</a>
                </div>
            </div>

            <!-- OTP Verification Page -->
            <div id="otpPage" class="form-page">
                <div class="auth-header">
                    <div class="logo-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h2>Verify Email</h2>
                    <p>Enter the 6-digit code sent to your email</p>
                </div>

                <div class="auth-body">
                    <form id="otpForm">
                        <div class="otp-inputs">
                            <input type="text" class="otp-input" maxlength="1" id="otp1" onkeyup="moveToNext(this, 'otp2')" onkeydown="moveToPrev(this, null)">
                            <input type="text" class="otp-input" maxlength="1" id="otp2" onkeyup="moveToNext(this, 'otp3')" onkeydown="moveToPrev(this, 'otp1')">
                            <input type="text" class="otp-input" maxlength="1" id="otp3" onkeyup="moveToNext(this, 'otp4')" onkeydown="moveToPrev(this, 'otp2')">
                            <input type="text" class="otp-input" maxlength="1" id="otp4" onkeyup="moveToNext(this, 'otp5')" onkeydown="moveToPrev(this, 'otp3')">
                            <input type="text" class="otp-input" maxlength="1" id="otp5" onkeyup="moveToNext(this, 'otp6')" onkeydown="moveToPrev(this, 'otp4')">
                            <input type="text" class="otp-input" maxlength="1" id="otp6" onkeyup="moveToNext(this, null)" onkeydown="moveToPrev(this, 'otp5')">
                        </div>

                        <div class="resend-timer" id="resendTimer">
                            Resend code in <span id="countdown">60</span> seconds
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check"></i> Verify Email
                        </button>

                        <button type="button" class="btn btn-secondary" id="resendBtn" onclick="resendOTP()" style="display: none;">
                            <i class="fas fa-redo"></i> Resend Code
                        </button>
                    </form>
                </div>

                <div class="auth-footer">
                    <a href="#" onclick="showRegister()">← Back to Registration</a>
                </div>
            </div>

            <!-- Login Page -->
            <div id="loginPage" class="form-page">
                <div class="auth-header">
                    <div class="logo-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h2>Welcome Back</h2>
                    <p>Sign in to your organic farm account</p>
                </div>

                <div class="auth-body">
                    <form id="loginForm">
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-envelope"></i> Email Address
                            </label>
                            <input type="email" class="form-control" id="loginEmail" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-lock"></i> Password
                            </label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="loginPassword" required>
                                <span class="input-icon" onclick="togglePassword('loginPassword')">
                                    <i class="fas fa-eye" id="loginPasswordEye"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Remember me
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-sign-in-alt"></i> Sign In
                        </button>
                    </form>
                </div>

                <div class="auth-footer">
                    Don't have an account?
                    <a href="#" onclick="showRegister()">Create one here</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.1/sweetalert2.all.min.js"></script>
    <script>
        // Global variables
        let otpTimer;
        let otpCountdown = 60;
        let generatedOTP = '';

        // Page navigation functions
        function showLogin() {
            document.getElementById('registerPage').classList.remove('active');
            document.getElementById('otpPage').classList.remove('active');
            document.getElementById('loginPage').classList.add('active');
        }

        function showRegister() {
            document.getElementById('loginPage').classList.remove('active');
            document.getElementById('otpPage').classList.remove('active');
            document.getElementById('registerPage').classList.add('active');
        }

        function showOTP() {
            document.getElementById('registerPage').classList.remove('active');
            document.getElementById('loginPage').classList.remove('active');
            document.getElementById('otpPage').classList.add('active');
            startOTPTimer();
        }

        // Password toggle function
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const eyeIcon = document.getElementById(inputId + 'Eye');

            if (input.type === 'password') {
                input.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }

        // Password validation
        function validatePassword() {
            const password = document.getElementById('password').value;

            // Length check
            const lengthReq = document.getElementById('lengthReq');
            if (password.length >= 15) {
                lengthReq.classList.add('valid');
                lengthReq.querySelector('i').className = 'fas fa-check';
            } else {
                lengthReq.classList.remove('valid');
                lengthReq.querySelector('i').className = 'fas fa-times';
            }

            // Uppercase check
            const uppercaseReq = document.getElementById('uppercaseReq');
            if (/[A-Z]/.test(password)) {
                uppercaseReq.classList.add('valid');
                uppercaseReq.querySelector('i').className = 'fas fa-check';
            } else {
                uppercaseReq.classList.remove('valid');
                uppercaseReq.querySelector('i').className = 'fas fa-times';
            }

            // Lowercase check
            const lowercaseReq = document.getElementById('lowercaseReq');
            if (/[a-z]/.test(password)) {
                lowercaseReq.classList.add('valid');
                lowercaseReq.querySelector('i').className = 'fas fa-check';
            } else {
                lowercaseReq.classList.remove('valid');
                lowercaseReq.querySelector('i').className = 'fas fa-times';
            }

            // Number check
            const numberReq = document.getElementById('numberReq');
            if (/[0-9]/.test(password)) {
                numberReq.classList.add('valid');
                numberReq.querySelector('i').className = 'fas fa-check';
            } else {
                numberReq.classList.remove('valid');
                numberReq.querySelector('i').className = 'fas fa-times';
            }

            // Special character check
            const specialReq = document.getElementById('specialReq');
            if (/[^A-Za-z0-9]/.test(password)) {
                specialReq.classList.add('valid');
                specialReq.querySelector('i').className = 'fas fa-check';
            } else {
                specialReq.classList.remove('valid');
                specialReq.querySelector('i').className = 'fas fa-times';
            }
        }

        // OTP input navigation
        function moveToNext(current, nextFieldId) {
            if (current.value.length === 1 && nextFieldId) {
                document.getElementById(nextFieldId).focus();
            }
        }

        function moveToPrev(current, prevFieldId) {
            if (current.value.length === 0 && prevFieldId && event.key === 'Backspace') {
                document.getElementById(prevFieldId).focus();
            }
        }

        // OTP Timer
        function startOTPTimer() {
            otpCountdown = 60;
            document.getElementById('resendBtn').style.display = 'none';
            document.getElementById('resendTimer').style.display = 'block';

            otpTimer = setInterval(() => {
                document.getElementById('countdown').textContent = otpCountdown;
                otpCountdown--;

                if (otpCountdown < 0) {
                    clearInterval(otpTimer);
                    document.getElementById('resendTimer').style.display = 'none';
                    document.getElementById('resendBtn').style.display = 'block';
                }
            }, 1000);
        }

        // Generate OTP
        function generateOTP() {
            return Math.floor(100000 + Math.random() * 900000).toString();
        }

        // Resend OTP
        function resendOTP() {
            generatedOTP = generateOTP();
            console.log('New OTP generated:', generatedOTP); // In real app, this would be sent via email

            Swal.fire({
                icon: 'success',
                title: 'OTP Sent!',
                text: 'A new verification code has been sent to your email.',
                confirmButtonText: 'OK'
            });

            // Clear OTP inputs
            for (let i = 1; i <= 6; i++) {
                document.getElementById(`otp${i}`).value = '';
            }
            document.getElementById('otp1').focus();

            startOTPTimer();
        }

        // Email validation
        function validateEmail(email) {
            return email.endsWith('@gmail.com');
        }

        // Form submissions
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const mobile = document.getElementById('mobile').value;
            const address = document.getElementById('address').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            // Validate Gmail
            if (!validateEmail(email)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Email',
                    text: 'Please use a valid Gmail address (@gmail.com)',
                    confirmButtonText: 'OK'
                });
                return;
            }

            // Validate password
            if (password.length < 15 ||
                !/[A-Z]/.test(password) ||
                !/[a-z]/.test(password) ||
                !/[0-9]/.test(password) ||
                !/[^A-Za-z0-9]/.test(password)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Password',
                    text: 'Please ensure your password meets all requirements.',
                    confirmButtonText: 'OK'
                });
                return;
            }

            // Validate password match
            if (password !== confirmPassword) {
                Swal.fire({
                    icon: 'error',
                    title: 'Password Mismatch',
                    text: 'Passwords do not match. Please try again.',
                    confirmButtonText: 'OK'
                });
                return;
            }

            // Generate and "send" OTP
            generatedOTP = generateOTP();
            console.log('OTP generated:', generatedOTP); // In real app, this would be sent via email

            Swal.fire({
                icon: 'success',
                title: 'Registration Successful!',
                text: 'Please check your email for the verification code.',
                confirmButtonText: 'Continue'
            }).then(() => {
                showOTP();
            });
        });

        document.getElementById('otpForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const otpValue = Array.from({length: 6}, (_, i) =>
                document.getElementById(`otp${i + 1}`).value
            ).join('');

            if (otpValue.length !== 6) {
                Swal.fire({
                    icon: 'error',
                    title: 'Incomplete OTP',
                    text: 'Please enter all 6 digits.',
                    confirmButtonText: 'OK'
                });
                return;
            }

            // Verify OTP (in real app, this would be server-side verification)
            if (otpValue === generatedOTP) {
                clearInterval(otpTimer);
                Swal.fire({
                    icon: 'success',
                    title: 'Email Verified!',
                    text: 'Your account has been created successfully. You can now login.',
                    confirmButtonText: 'Login Now'
                }).then(() => {
                    showLogin();
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid OTP',
                    text: 'The verification code is incorrect. Please try again.',
                    confirmButtonText: 'OK'
                });

                // Clear OTP inputs
                for (let i = 1; i <= 6; i++) {
                    document.getElementById(`otp${i}`).value = '';
                }
                document.getElementById('otp1').focus();
            }
        });

        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            const rememberMe = document.getElementById('rememberMe').checked;

            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="loading"></span>Signing In...';
            submitBtn.disabled = true;

            // Simulate login process (in real app, this would be server-side authentication)
            setTimeout(() => {
                // Reset button state
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;

                // Simulate successful login
                if (email && password) {
                    // Log login activity (in real app, this would be sent to server)
                    const loginLog = {
                        userId: 'user_123',
                        timestamp: new Date().toISOString(),
                        ip: '192.168.1.1', // Would be actual IP
                        device: navigator.userAgent,
                        rememberMe: rememberMe
                    };
                    console.log('Login Log:', loginLog);

                    Swal.fire({
                        icon: 'success',
                        title: 'Welcome Back!',
                        text: 'You have successfully logged in to your organic farm account.',
                        confirmButtonText: 'Continue',
                        timer: 3000,
                        timerProgressBar: true
                    }).then(() => {
                        // In real app, redirect to dashboard
                        showDashboard();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Failed',
                        text: 'Invalid email or password. Please try again.',
                        confirmButtonText: 'OK'
                    });
                }
            }, 2000); // Simulate network delay
        });

        // Simulate dashboard after login
        function showDashboard() {
            document.querySelector('.auth-card').innerHTML = `
                <div class="auth-header">
                    <div class="logo-icon">
                        <i class="fas fa-tractor"></i>
                    </div>
                    <h2>Dashboard</h2>
                    <p>Welcome to your organic farm management system</p>
                </div>

                <div class="auth-body">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="card h-100 text-center" style="background: rgba(74, 124, 89, 0.1); border: none; border-radius: 12px;">
                                <div class="card-body">
                                    <i class="fas fa-seedling fa-2x text-success mb-2"></i>
                                    <h6>My Crops</h6>
                                    <p class="small">5 Active</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card h-100 text-center" style="background: rgba(74, 124, 89, 0.1); border: none; border-radius: 12px;">
                                <div class="card-body">
                                    <i class="fas fa-chart-line fa-2x text-success mb-2"></i>
                                    <h6>Revenue</h6>
                                    <p class="small">$2,450</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card h-100 text-center" style="background: rgba(74, 124, 89, 0.1); border: none; border-radius: 12px;">
                                <div class="card-body">
                                    <i class="fas fa-users fa-2x text-success mb-2"></i>
                                    <h6>Customers</h6>
                                    <p class="small">23 Active</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card h-100 text-center" style="background: rgba(74, 124, 89, 0.1); border: none; border-radius: 12px;">
                                <div class="card-body">
                                    <i class="fas fa-warehouse fa-2x text-success mb-2"></i>
                                    <h6>Inventory</h6>
                                    <p class="small">85% Full</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h6 class="text-success mb-3">Recent Activities</h6>
                        <div class="list-group">
                            <div class="list-group-item border-0" style="background: rgba(74, 124, 89, 0.1); border-radius: 8px; margin-bottom: 0.5rem;">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-plus-circle text-success me-3"></i>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">New crop planted</h6>
                                        <small class="text-muted">Organic tomatoes - 2 hours ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item border-0" style="background: rgba(74, 124, 89, 0.1); border-radius: 8px; margin-bottom: 0.5rem;">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-dollar-sign text-success me-3"></i>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Sale completed</h6>
                                        <small class="text-muted">$125 from John's Market - 5 hours ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4" onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </div>
            `;

            // Start session timeout (30 minutes = 1800000ms)
            // For demo purposes, using 10 seconds
            sessionTimeout = setTimeout(() => {
                Swal.fire({
                    icon: 'warning',
                    title: 'Session Expired',
                    text: 'You have been logged out due to inactivity.',
                    confirmButtonText: 'Login Again'
                }).then(() => {
                    location.reload();
                });
            }, 10000); // 10 seconds for demo, change to 1800000 for 30 minutes
        }

        // Logout function
        function logout() {
            clearTimeout(sessionTimeout);

            Swal.fire({
                icon: 'success',
                title: 'Logged Out',
                text: 'You have been successfully logged out. Session data cleared.',
                confirmButtonText: 'OK'
            }).then(() => {
                location.reload();
            });
        }

        // Session timeout variable
        let sessionTimeout;

        // Reset session timeout on user activity
        function resetSessionTimeout() {
            if (sessionTimeout) {
                clearTimeout(sessionTimeout);
                sessionTimeout = setTimeout(() => {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Session Expired',
                        text: 'You have been logged out due to inactivity.',
                        confirmButtonText: 'Login Again'
                    }).then(() => {
                        location.reload();
                    });
                }, 1800000); // 30 minutes
            }
        }

        // Add event listeners for user activity
        document.addEventListener('click', resetSessionTimeout);
        document.addEventListener('keypress', resetSessionTimeout);
        document.addEventListener('scroll', resetSessionTimeout);
        document.addEventListener('mousemove', resetSessionTimeout);

        // Password field event listener
        document.getElementById('password').addEventListener('input', validatePassword);

        // Initialize OTP inputs with paste support
        function initializeOTPInputs() {
            const otpInputs = document.querySelectorAll('.otp-input');

            otpInputs.forEach((input, index) => {
                // Handle paste event
                input.addEventListener('paste', function(e) {
                    e.preventDefault();
                    const pastedData = e.clipboardData.getData('text');
                    const digits = pastedData.replace(/\D/g, '').slice(0, 6);

                    digits.split('').forEach((digit, i) => {
                        if (otpInputs[i]) {
                            otpInputs[i].value = digit;
                        }
                    });

                    // Focus on the last filled input or the next empty one
                    const lastIndex = Math.min(digits.length - 1, 5);
                    otpInputs[lastIndex].focus();
                });

                // Allow only numbers
                input.addEventListener('input', function(e) {
                    this.value = this.value.replace(/\D/g, '');
                    if (this.value.length > 1) {
                        this.value = this.value.slice(-1);
                    }
                });
            });
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            initializeOTPInputs();

            // Add some demo data to console
            console.log('=== ORGANIC FARM AUTH SYSTEM ===');
            console.log('Demo Features:');
            console.log('1. Gmail-only registration validation');
            console.log('2. Strong password requirements (15+ chars, mixed case, numbers, special chars)');
            console.log('3. OTP email verification simulation');
            console.log('4. Session management with 30min timeout');
            console.log('5. Login activity logging');
            console.log('6. SweetAlert2 notifications');
            console.log('7. Responsive organic farming themed UI');
            console.log('================================');
        });

        // Add smooth form transitions
        function addFormTransitions() {
            const formControls = document.querySelectorAll('.form-control');

            formControls.forEach(control => {
                control.addEventListener('focus', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.boxShadow = '0 4px 12px rgba(74, 124, 89, 0.2)';
                });

                control.addEventListener('blur', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '';
                });
            });
        }

        // Initialize form transitions
        addFormTransitions();

        // Add loading animation for buttons
        function addButtonLoadingStates() {
            const buttons = document.querySelectorAll('.btn');

            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    if (this.type === 'submit') {
                        // Add slight delay for visual feedback
                        this.style.transform = 'scale(0.98)';
                        setTimeout(() => {
                            this.style.transform = '';
                        }, 150);
                    }
                });
            });
        }

        // Initialize button states
        addButtonLoadingStates();

        // Add floating labels effect
        function initFloatingLabels() {
            const formGroups = document.querySelectorAll('.form-group');

            formGroups.forEach(group => {
                const input = group.querySelector('.form-control');
                const label = group.querySelector('.form-label');

                if (input && label) {
                    input.addEventListener('focus', () => {
                        label.style.color = 'var(--accent-green)';
                        label.style.transform = 'translateY(-2px)';
                    });

                    input.addEventListener('blur', () => {
                        if (!input.value) {
                            label.style.color = '';
                            label.style.transform = '';
                        }
                    });
                }
            });
        }

        // Initialize floating labels
        initFloatingLabels();
    </script>
</body>
</html>
