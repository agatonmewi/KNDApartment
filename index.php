<?php
    include("header.php");
?>

<?php

    if (isset($_POST["submit"]))
    {
        header ('Location: unit_booking.php');
    }


?>

    <style>
        /* Card Row Container */
        .card-row {
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 20px; /* Space between cards */
            flex-wrap: wrap; /* Wrap cards on smaller screens */
            margin-top: 50px;
            max-width: 100%;
            background-color: white;
        }

        /* Card Styling */
        .card {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: stretch;
            border: 1px solid #ddd;
            border-radius: 15px;
            background-color: #fff;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        h2{
            text-align: center;
            font-weight: bold;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        /* Card Content */
        .card-content {
            padding: 20px;
            color: #444;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-title {
            font-size: 1.8em;
            font-weight: 600;
            color: #333;
            margin-bottom: 12px;
        }

        /* Inclusions Section */
        .inclusions {
            margin-bottom: 20px;
        }

        .inclusions h4 {
            font-size: 1.2em;
            font-weight: 600;
            margin-bottom: 10px;
            color: #555;
        }

        .inclusions p {
            display: flex;
            align-items: center;
            font-size: 1em;
            color: #666;
            margin-bottom: 8px;
        }

        .inclusions i {
            font-size: 1.2em;
            margin-right: 10px;
            color: #ff6f61;
        }

        /* Dropdown Styling */
        .dropdown {
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .dropdown label {
            font-size: 1em;
            color: #333;
            margin-right: 12px; 
        }

        /* Price Styling */
        .price {
            margin-left: 220px; /* Align price to the right */
        }

        span {
            font-weight: bold;
        }

        .dropdown select {
            padding: 12px;
            font-size: 1em;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: #ff6f61;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            width: 100%;
            max-width: 200px;
            margin-bottom: 20px;
        }

        .dropdown select:hover {
            background-color: #ff4e3b;
            border-color: #e55e4f;
        }

        .dropdown select:focus {
            outline: none;
            border-color: #ff6f61;
        }
        /* Submit Button Styling */
        .submit-button {
            padding: 12px;
            background-color: #ff6f61;
            border: none;
            color: white;
            font-size: 1.2em;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .submit-button:hover {
            background-color: #ff4e3b;
            transform: scale(1.05);
        }

        .submit-button:focus {
            outline: none;
        }
        /* Modal Styles */
       /* .modal {
            display: none; /* Hidden by default 
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; 
            background-color: rgba(0, 0, 0, 0.5); /* Black with transparency 
        }
       
        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }

        .modal .btn {
            margin: 10px;
            padding: 10px 20px;
            background-color: #ff6f61;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .modal .btn:hover {
            background-color: #ff4e3b;
        }
*/
    </style>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>Find Your Perfect Rental Unit</h1>
            <p>Browse for premium rental units designed for your comfort.</p>
        </div>
    </section>

   

    <form action="actions/insert_data.php" method="POST">
        <!-- Container for Card Row -->
        <section id="floor">
            <div class="card-row">
                <!-- First Card -->
                <div class="card">
                    <div class="card-content">
                        <h2 class="card-title">First Floor</h2>
                        <div class="inclusions">
                            <h4>Inclusions:</h4>
                            <p><i class="bi bi-person"></i>Good for 4-5 people</p>
                            <p><i class="bi bi-house-door"></i>Bedroom</p>
                            <p><i class="bi bi-water"></i>Comfort Room</p>
                            <p><i class="bi bi-house-door"></i>Living Area / Kitchen with built-in cabinets</p>
                            <p><i class="bi bi-window"></i>Laundry Area</p>
                            <p><i class="bi bi-car-front"></i>With Parking (1 car per unit)</p>
                            <p><i class="bi bi-exclamation-diamond"></i>No pets allowed</p>
                        </div>
                        <div class="price">
                            <span> P 7,000 monthly</span>
                        </div>
                        <div class="dropdown">
                            <label for="options1">Choose Unit:</label>
                            <select name="unit" id="floor1">
                             <option value="">Select a Unit</option>
                                <option value="A">Unit A</option>
                                <option value="B">Unit B</option>
                                <option value="C">Unit C</option>
                                <option value="D">Unit D</option>
                                <option value="E">Unit E</option>
                            </select>
                        </div>
                        <button type="submit" id="submit" name="submit" onclick="redirectToPage()" value="submit" class="btn btn-primary" >Submit </button>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="card">
                    <div class="card-content">
                        <h2 class="card-title">Second Floor</h2>
                        <div class="inclusions">
                            <h4>Inclusions:</h4>
                            <p><i class="bi bi-person"></i>Good for 4-5 people</p>
                            <p><i class="bi bi-house-door"></i>Bedroom</p>
                            <p><i class="bi bi-water"></i>Comfort Room</p>
                            <p><i class="bi bi-house-door"></i>Living Area / Kitchen with built-in cabinets</p>
                            <p><i class="bi bi-window"></i>Laundry Area</p>
                            <p><i class="bi bi-car-front"></i>With Parking (1 car per unit)</p>
                            <p><i class="bi bi-exclamation-diamond"></i>No pets allowed</p>
                        </div>
                        <div class="price">
                            <span> P 7,000 monthly</span>
                        </div>
                        <div class="dropdown">
                            <label for="options1">Choose Unit:</label>
                            <select name="unit" id="floor2">
                             <option value="">Select a Unit</option>
                                <option value="F">Unit F</option>
                                <option value="G">Unit G</option>
                                <option value="H">Unit H</option>
                                <option value="I">Unit I</option>
                                <option value="J">Unit J</option>
                            </select>
                        </div>
                       
                        <button class="btn btn-primary" name="submit" id="btn2" type="submit" value="submit" >Submit </button>
                       
                    </div> 
                </div>
            </div>
        </section>
    </form>

 
    



    <!--<div id="accountModal" class="modal">
    <div class="modal-content">
        <h2>Do you have an account?</h2>
        <p>You need an account to proceed with booking a room.</p>
        <button id="yesButton" class="btn">Yes, I have an account</button>
        <button id="noButton" class="btn">No, I don’t have an account</button>
    </div>
    </div>
    
<?php
include("footer.php");
?>