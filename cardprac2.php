<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f4f7f6;
            font-family: 'Arial', sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Card Styling */
        .card {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: flex-start;
            border: 1px solid #ddd;
            border-radius: 15px;
            background-color: #fff;
            max-width: 900px;
            width: 100%;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 30px auto;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        /* Left: Image */
        .card img {
            width: 350px;
            height: 420px;
            object-fit: cover;
            border-radius: 15px;
            margin-right: 20px;
        }
        
        /* Right: Content */
        .card-content {
            padding: 20px;
            flex: 1;
            color: #444;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Card Title */
        .card-title {
            font-size: 2em;
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
        }

        .dropdown select:hover {
            background-color: #ff4e3b;
            border-color: #e55e4f;
        }

        .dropdown select:focus {
            outline: none;
            border-color: #ff6f61;
        }
    </style>
</head>
<body>

<!-- First Card -->
<div class="card">
    <img src="images/photo1.jpg" alt="Image">
    <div class="card-content">
        <h2 class="card-title">First Floor</h2>
        <div class="inclusions">
            <h4>Inclusions:</h4>
            <p><i class="bi bi-person"></i>Good for 4-5 people</p>
            <p><i class="bi bi-house-door"></i>Bedroom</p>
            <p><i class="bi bi-bath"></i>Comfort Room</p>
            <p><i class="bi bi-house-door"></i>Living Area / Kitchen with built-in cabinets</p>
            <p><i class="bi bi-washing-machine"></i>Laundry Area</p>
            <p><i class="bi bi-car-front"></i>With Parking (1 car per unit)</p>
            <p><i class="bi bi-paw"></i>No pets allowed</p>
        </div>
        <div class="dropdown">
            <label for="options1">Choose Unit:</label>
            <select id="options1">
                <option value="option1">Option A</option>
                <option value="option2">Option B</option>
                <option value="option3">Option C</option>
                <option value="option4">Option D</option>
                <option value="option5">Option E</option>
            </select>
        </div>
    </div>
</div>

<!-- Second Card -->
<div class="card">
    <img src="images/photo1.jpg" alt="Image">
    <div class="card-content">
        <h2 class="card-title">Second Floor</h2>
        <div class="inclusions">
            <h4>Inclusions:</h4>
            <p><i class="bi bi-person"></i>Good for 4-5 people</p>
            <p><i class="bi bi-house-door"></i>Bedroom</p>
            <p><i class="bi bi-bath"></i>Comfort Room</p>
            <p><i class="bi bi-house-door"></i>Living Area / Kitchen with built-in cabinets</p>
            <p><i class="bi bi-washing-machine"></i>Laundry Area</p>
            <p><i class="bi bi-car-front"></i>With Parking (1 car per unit)</p>
            <p><i class="bi bi-paw"></i>No pets allowed</p>
        </div>
        <div class="dropdown">
            <label for="options2">Choose Unit:</label>
            <select id="options2">
                <option value="option1">Option A</option>
                <option value="option2">Option B</option>
                <option value="option3">Option C</option>
                <option value="option4">Option D</option>
                <option value="option5">Option E</option>
            </select>
        </div>
    </div>
</div>

</body>
</html>
