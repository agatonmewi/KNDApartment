<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Pay with GCash</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    border-radius: 8px;
}

header {
    text-align: center;
    margin-bottom: 20px;
}

.logo {
    width: 100px;
}

h1 {
    color: #0072b5; /* GCash color */
}

.payment-section, .qr-section, .message {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="number"],
input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #0072b5; /* GCash color */
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #005f9e;
}

.qr-code {
    width: 250px; /* Set your desired width */
    height: auto; /* Maintain aspect ratio */
    display: block; /* Center alignment helper */
    margin: 0 auto; /* Center horizontally */
}

/* Optional: Add padding for aesthetics */
.qr-section {
    text-align: center;
    padding: 20px;
}
.payment-details {
    margin: 10px 0;
}

.hidden {
    display: none;
}

footer {
    text-align: center;
    font-size: 0.9em;
}

</style>
<body>
<div class="container">
    <header>
        <img src="images/gcash-logo-1.png" alt="GCash Logo" class="logo">
        <h1>Pay with GCash</h1>
    </header>

    <div class="payment-section">
        <button id="nextBtn">Pay P7,000</button>
    </div>

    <!-- Back button that goes to the previous page -->
    <button onclick="window.history.back()">Back</button>

    <div class="qr-section hidden">
        <h2>Scan to Pay</h2>
        <img src="images/code.jpg" alt="QR Code" class="qr-code">
        <div class="payment-details">
            <p><strong>Recipient Name:</strong> Mabel Ebalo</p>
            <p><strong>Transaction Reference:</strong> 09121222222</p>
            <p><strong>Payment Description:</strong> Renting Unit</p>
            <p><strong>Amount:</strong> PHP 7,000</p>
        </div>
        <button id="confirmBtn">Confirm Payment</button>
    </div>

    <div class="message hidden">
        <p id="statusMessage"></p>
        <button id="backBtn" class="hidden">Back</button>
    </div>

    <footer>
        <p>
            <input type="checkbox" id="termsCheckbox">
            I agree to the <a href="#">terms and conditions</a>.
        </p>
    </footer>
</div>


<script>
    // Show QR Section and Hide Payment Section
    document.getElementById('nextBtn').addEventListener('click', function () {
        document.querySelector('.payment-section').classList.add('hidden');
        document.querySelector('.qr-section').classList.remove('hidden');
    });

    // Confirm Payment
    document.getElementById('confirmBtn').addEventListener('click', function () {
        const pin = document.getElementById('pin').value;

        if (pin) {
            document.querySelector('.qr-section').classList.add('hidden');
            document.querySelector('.message').classList.remove('hidden');
            document.getElementById('statusMessage').innerText = 'Payment Successful!';
        } else {
            alert('Please enter your PIN.');
        }
    });

    // Back Button
    document.getElementById('backBtn').addEventListener('click', function () {
        document.querySelector('.message').classList.add('hidden');
        document.querySelector('.payment-section').classList.remove('hidden');
    });

    // Redirect to another page (if needed)
    document.getElementById('confirmBtn').onclick = function () {
        window.location.href = "index.html";
    };
</script>

</body>
</html>
