<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <style>
        body {
            background: #0d1521;
            font-family: tahoma;
            color: #bdc3c7;
            font-size: 20px;
        }

        h1 {
            display: flex;
            justify-content: center;
            padding: 20px;
            font-family: 'Redressed', cursive;
        }

        h4 {
            display: flex;
            margin-left: 20px;
        }

        .extra {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            margin-top: -90px;
        }

        img {
            height: 30vh;
        }

        .food1,
        .food2,
        .food3,
        .food4 {
            margin: 15px;
        }

        .container {
            margin: auto;
            width: 50%;
        }

        .cost {
            margin-left: 30px;
            width: 50%;
        }


        .numbers {
            margin-left: 10px;
            width: 50%;
        }

        .total {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .submit_btn {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gym {
            padding-left: 18px;
        }


        .dropdown-content {
            display: none;
            position: absolute;
            color: #0d1521;
            background-color: #bdc3c7;
            min-width: 100px;
            min-height: 20px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .rm1 {
            position: relative;
            display: inline-block;
        }

        .rm1:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>

    <script>
        var foo = 0;

        function food() {
            foo += 200;
            var x = foo.toString();
            const content = document.getElementById('total_food');
            content.innerHTML = x;
        }

        function gettin() {
            var gym = parseInt(document.getElementById('gym').value);
            var ldry = parseInt(document.getElementById('ldry').value);
            var msg = parseInt(document.getElementById('msg').value);

            cost = (gym * 200 + ldry * 150 + msg * 300) + foo;
            var x = cost.toString();
            const content = document.getElementById('total_value');
            content.innerHTML = x;
            console.log(foo);
        }
    </script>


    <h1>Services</h1>
    <form action="servicepay.php" method="POST">

        <div class="extra">
            <div class="food1">
                <img src="gym.jpg" alt="">
                <div class="container">
                    <h4 class="gym"><b>Gym</b></h4>
                    <p class="cost">Rs 200</p>
                    <input type="number" name="gym" class="numbers" id="gym" value="0" min="0" max="5">days
                </div>
            </div>

            <div class="food2">
                <img src="laundry3.jpg" alt="">
                <div class="container">
                    <h4><b>Laundry</b></h4>
                    <p class="cost">Rs 150</p>
                    <input type="number" name="ldry" class="numbers" id="ldry" value="0" min="0" max="5">days
                </div>
            </div>


            <div class="food3">
                <img src="massage.jpg" alt="">
                <div class="container">
                    <h4><b>Massage</b></h4>
                    <p class="cost">Rs 300</p>
                    <input type="number" name="msg" class="numbers" id="msg" value="0" min="0" max="5">days
                </div>
            </div>

            <div class="food4">
                <img src="parking.jpg" alt="">
                <div class="container">
                    <h4 class="parking"><b>Parking</b></h4>
                    <p class="cost">Free</p>
                    <input type="number" name="prk" class="numbers" id="prk" value="0" min="0" max="5">days
                </div>
            </div>

        </div>

        <div class="total">
            <button onclick="gettin()" type="button" style=" font-size: 0.9em;">Total</button>
            <p> Rs </p>
            <p id="total_value">0</p>
        </div>

        <br>
        <br>

        <div class="submit_btn">
            <input type="submit" value="Proceed" class="final_submit" name="submit" style=" font-size: 0.9em;">
        </div>
    </form>
</body>

</html>