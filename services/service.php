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
            padding-top: 20px;
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


        .food {
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

        .lunch {
            padding-left: 9px;
        }

        .dinner {
            padding-left: 6px;
        }
    </style>
</head>

<body>
    <h1>Services</h1>
    <form action="servicepay.php" method="post">
        <h1>Food</h1>
        <div class="food">
            <div class="food1">
                <img src="bf.jpg" alt="">
                <div class="container">
                    <h4><b>Breakfast</b></h4>
                    <p class="cost">Rs 50</p>
                    <input type="number" name="bf" class="numbers" id="bf" value="0" min="0">
                </div>
            </div>

            <div class="food2">
                <img src="lunch.jpg" alt="">
                <div class="container">
                    <h4 class="lunch"><b>Lunch</b></h4>
                    <p class="cost">Rs 100</p>
                    <input type="number" name="lun" class="numbers" id="lun" value="0" min="0">
                </div>

            </div>


            <div class="food3">
                <img src="dinner.jpg" alt="">
                <div class="container">
                    <h4 class="dinner"><b>Dinner</b></h4>
                    <p class="cost">Rs 100</p>
                    <input type="number" name="din" class="numbers" id="din" value="0" min="0">
                </div>


            </div>

        </div>
        <h1>Extra</h1>

        <div class="extra">

            <div class="food1">
                <img src="gym.jpg" alt="">
                <div class="container">
                    <h4 class="gym"><b>Gym</b></h4>
                    <p class="cost">Rs 150</p>
                    <input type="number" name="gym" class="numbers" id="gym" value="0" min="0">
                </div>
            </div>

            <div class="food2">
                <img src="laundry3.jpg" alt="">
                <div class="container">
                    <h4><b>Laundry</b></h4>
                    <p class="cost">Rs 100</p>
                    <input type="number" name="ldry" class="numbers" id="ldry" value="0" min="0">
                </div>

            </div>


            <div class="food3">
                <img src="massage.jpg" alt="">
                <div class="container">
                    <h4><b>Massage</b></h4>
                    <p class="cost">Rs 300</p>
                    <input type="number" name="msg" class="numbers" id="msg" value="0" min="0">
                </div>
            </div>

            <div class="food4">
                <img src="parking.jpg" alt="">
                <div class="container">
                    <h4 class="parking"><b>Parking</b></h4>
                    <p class="cost">Free</p>
                    <input type="number" name="prk" class="numbers" id="prk" value="0" min="0">
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



    <script>
        function gettin() {
            var bf = parseInt(document.getElementById('bf').value);
            var lun = parseInt(document.getElementById('lun').value);
            var din = parseInt(document.getElementById('din').value);
            var gym = parseInt(document.getElementById('gym').value);
            var ldry = parseInt(document.getElementById('ldry').value);
            var msg = parseInt(document.getElementById('msg').value);


            cost = (bf * 50 + lun * 100 + din * 100 + gym * 150 + ldry * 100 + msg * 300);
            console.log(typeof(cost));
            console.log(cost);
            var x = cost.toString();
            console.log(typeof(x));
            console.log(x);

            const content = document.getElementById('total_value');
            console.log(content);
            content.innerHTML = x;

        }
    </script>
</body>

</html>