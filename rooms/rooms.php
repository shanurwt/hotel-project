<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background: #0d1521;
            font-family: tahoma;
            color: #bdc3c7;
            font-size: 17 px;
        }

        h1 {
            display: flex;
            justify-content: center;
        }

        .rooms {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
        }

        img {
            height: 30vh;
        }

        .room1,
        .room2,
        .room3,
        .room4 {
            margin: 15px;
        }

        .container {
            margin: auto;
            width: 50%;
        }

        /* p {
            margin: auto;
            width: 50%;
        } */
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
    </style>
</head>

<body>

    <h1>Rooms</h1>

    <form action="booking.php" method="post">
        <div class="rooms">

            <div class="room1">
                <img src="room.jpg" alt="">
                <div class="container">
                    <h4><b>Single Bedroom</b></h4>
                    <p class="cost">Rs 200</p>
                    <input type="number" name="si_bed" class="numbers" id="sb" value="0" min="0">
                    <p class="cost"></p>
                </div>
            </div>

            <div class="room2">
                <img src="room4.jpg" alt="">
                <div class="container">
                    <h4><b>Double Bedroom</b></h4>
                    <p class="cost">Rs 400</p>
                    <input type="number" name="do_bed" class="numbers" id="db" value="0" min="0">
                </div>

            </div>


            <div class="room3">
                <img src="room3.jpg" alt="">
                <div class="container">
                    <h4><b>Single Bed A/C</b></h4>
                    <p class="cost">Rs 750</p>
                    <input type="number" name="si_ac" class="numbers" id="sac" value="0" min="0">
                </div>

            </div>

            <div class=" room4">
                <img src="room2.jpg" alt="">
                <div class="container">
                    <h4><b>Double Bed A/C</b></h4>
                    <p class="cost">Rs 1000</p>
                    <input type="number" name="do_ac" class="numbers" id="dac" value="0" min="0">
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
            var sb = parseInt(document.getElementById('sb').value);
            var db = parseInt(document.getElementById('db').value);
            var sac = parseInt(document.getElementById('sac').value);
            var dac = parseInt(document.getElementById('dac').value);

            cost = (sb * 200 + db * 400 + sac * 750 + dac * 1000);
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