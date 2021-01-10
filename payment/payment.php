<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background: #0d1521;
            font-family: tahoma;
            color: #bdc3c7;
            font-size: 23px;
        }

        h1 {
            display: flex;
            justify-content: center;
        }

        .container {
            display: flex;
            height: 70vh;
            width: 100%;
        }

        .form {
            margin: auto;
            display: grid;
        }

        .icon-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body>
    <h1>Payment</h1>
    <div class="container">
        <form action="payinfo.php" method="post" class="form">

            <div class="icon-container">
                <p>Accepted Cards:</p>
                <div class="cards-icons">
                    <i class="fa fa-cc-visa" style="color:lightgreen; font-size: 1.4em;"></i>
                    <i class="fa fa-cc-amex" style="color: #C4E538; font-size: 1.4em;"></i>
                    <i class="fa fa-cc-mastercard" style="color:#ED4C67; font-size: 1.4em;"></i>
                    <i class="fa fa-cc-discover" style="color:#F79F1F; font-size: 1.4em;"></i>
                </div>
            </div>
            <div>
                <br>
                <label for="">Name on Card:</label>
                <input type="text" name="username" placeholder="John More Doe" style=" font-size: 0.8em;">
            </div>

            <div>
                <br>
                <label for="">Credit Card Number:</label>
                <input type="text" id="" placeholder="1111-2222-3333-4444" name="credit" style=" font-size: 0.8em;">
            </div>

            <div>
                <br>
                <label for="">Exp Month:</label>
                <input type="text" placeholder="September" name="month" style=" font-size: 0.8em;">
            </div>

            <div>
                <br>
                <label for="">Exp Year:</label>
                <input type="text" id="" placeholder="2018" name="year" style=" font-size: 0.8em;">
            </div>

            <div>
                <br>
                <label for="">CVV:</label>
                <input type="text" id="" placeholder="123" name="cvv" style=" font-size: 0.8em;">
            </div>
            <br>
            <br>
            <input type="submit" value="Continue To Checkout" name="submit" style=" font-size: 0.8em;">

        </form>
    </div>
</body>

</html>