<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KND Apartment</title>
        <link rel="icon" type="image/png" href="images/top.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">


        <style>
            .login-btn {
                background-color: #00acc1;
            }
            .login-btn:hover 
            {
                background-color: #00acc1;
            }

            .register-btn {
                background-color: #ff6f61;
            }
            .register-btn:hover {
                background-color: #ff6f61;
            }
            .details-btn {
                background-color: #00acc1;
                padding: 10px 25px;
                border: none;
                color: white;
                font-size: 16px;
                border-radius: 5px;
                cursor: pointer;
            }

            .details-btn:hover {
                background-color: #0095a6;
                transition: background 0.3s ease;
            }
        </style>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="nav container">
                <a href="#" class="logo">KND Apartment</a>
                <nav>
                    <ul class="mb-0">
                        <li><a href="#">Home</a></li>
                        <li><a href="#floor">Floor</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="auth-buttons">
                    <!-- <button class="btn login-btn" onclick="openLogin()">Login</button>
                    <button class="btn register-btn" onclick="openRegister()">Register</button> -->
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- If logged in, show Logout button -->
                        <button type="button" class="btn logout-btn" id="logoutButton">
                            Logout
                        </button>
                    <?php else: ?>
                        <!-- If not logged in, show Login and Register buttons -->
                        <button type="button" class="btn login-btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Logi
                            n
                        </button>
                        <button type="button" class="btn register-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
                            Register
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        </header>