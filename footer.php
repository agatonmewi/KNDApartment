        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <div class="container">
                <h2>Contact Us</h2>
                <div class="contact-row">
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <h3>Email</h3>
                        <span>We look forward to hearing from you!</span>
                        <br>
                        <br>
                        <span>mabelebalo@gmail.com</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <h3>Phone</h3>
                        <span>For any urgent matters or immediate assistance, please give us a call.</span>
                        <br>
                        <br>
                        <span>0999-9932-591</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Location</h3>
                        <span>You can also visit for a face-to-face consultation.</span>
                        <br>
                        <span>Brgy. Zone 1, Purok 4, Victorino Josafat Sr. St. Iba, Zambales</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <p>&copy; 2024 KND Apartment . All rights reserved.</p>
        </footer>

        <!-- LOGIN -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="login-form">
                            <div class="mb-3">
                                <label for="user_email" class="form-label">Email address</label>
                                <input type="email" placeholder="Enter your email address" name="user_email" class="form-control" id="user_email" required>
                            </div>
                            <div class="mb-3">
                                <label for="user_pass" class="form-label">Password</label>
                                <input type="password" placeholder="Enter your password" class="form-control" name="user_pass" id="user_pass" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-cprimary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- REGISTER -->
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="registerModalLabel">Register</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="register-form">
                            <div class="mb-3">
                                <label for="reg_first_name" class="form-label">First Name</label>
                                <input type="text" placeholder="Enter your first name" name="reg_first_name" class="form-control" id="reg_first_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="reg_last_name" class="form-label">Last Name</label>
                                <input type="text" placeholder="Enter your last name" name="reg_last_name" class="form-control" id="reg_last_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="reg_user_email" class="form-label">Email address</label>
                                <input type="email" placeholder="Enter your email address" name="reg_user_email" class="form-control" id="reg_user_email" required>
                            </div>
                            <div class="mb-3">
                                <label for="reg_user_pass" class="form-label">Password</label>
                                <input type="password" placeholder="Enter password" class="form-control" name="reg_user_pass" id="reg_user_pass" required>
                            </div>
                            <div class="mb-3">
                                <label for="reg_user_pass_repeat" class="form-label">Password</label>
                                <input type="password" placeholder="Repeat password" class="form-control" name="reg_user_pass_repeat" id="reg_user_pass_repeat" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-cprimary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        


        
        <script>

            jQuery(function($) {

                // LOGIN FUNCTION
                $('#login-form').on('submit', function(event) {
                    event.preventDefault();

                    var formData = $(this).serialize();

                    $.ajax({
                        url: 'actions/login.php',
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                alert('Login successful!');
                                location.reload();
                            } else {
                                alert('Login failed: ' + response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('AJAX error:', error);
                            alert('An error occurred. Please try again.');
                        }
                    });
                });

                // REGISTER FUNCTION
                $('#register-form').on('submit', function(event) {
                    event.preventDefault();
                    
                    var formData = $(this).serialize();
                    
                    $.ajax({
                        url: 'actions/register.php',
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                alert('Registration successful!');
                                $('#register-form')[0].reset();
                                location.reload();
                            } else {
                                alert(response.message || 'Registration failed. Please try again.');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('AJAX error:', error);
                            console.error('XHR object:', xhr);
                            alert('An error occurred. Please try again.');
                        }
                    });
                });

                $('#logoutButton').on('click', function() {
                    $.ajax({
                        url: 'actions/logout.php',
                        type: 'POST',
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                alert(response.message);
                                location.reload();
                            } else {
                                alert('Logout failed.');
                            }
                        },
                        error: function() {
                            alert('An error occurred. Please try again.');
                        }
                    });
                });



            });

            // ROOM STATUS
            function toggleAvailability(button, unitId) {
                if (button.innerText === "Check Availability") {
                    button.innerText = "Available";
                    button.classList.add("available");
                    localStorage.setItem(unitId, "Available");
                } else {
                    button.innerText = "Check Availability";
                    button.classList.remove("available");
                    localStorage.setItem(unitId, "Check Availability");
                }
            }

            // View Details
            function viewDetails(unitCode) {
                alert("Showing details for Unit " + unitCode);
            }

            // View Floor
            function viewFloor(floorNumber) {
                alert("Showing details for Floor " + floorNumber);
            }
            
        </script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>