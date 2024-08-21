
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Numbers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .in-numbers {
            text-align: center;
            padding: 40px 20px;
        }
        .in-numbers h2 {
            font-size: 2rem;
            color: #0056b3;
            margin-bottom: 20px;
        }
        .number-box {
            border: 2px solid #0056b3;
            padding: 30px;
            transition: transform 0.3s;
            margin-bottom: 20px;
            height: 100%;
        }
        .number-box h3 {
            font-size: 2.5rem;
            color: #0056b3;
            margin-bottom: 10px;
        }
        .number-box p {
            font-size: 1rem;
            color: #333;
            margin: 0;
        }
        .number-box:hover {
            transform: translateY(-5px);
            border-color: #004080;
        }
       
    </style>
</head>
<body>

<section class="in-numbers">
    <h2>IN NUMBERS</h2>
    <div class="container">
        <div class="row">
     
            <div class="col-md-3 col-sm-3">
                <div class="number-box">
                    <h3 id="counter1">17</h3>
                    <p>U.G. PROGRAMMES</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="number-box">
                    <h3 id="counter2">0</h3>
                    <p>P.G. PROGRAMMES</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="number-box">
                    <h3 id="counter3">0</h3>
                    <p>M.PHIL PROGRAMMES</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="number-box">
                    <h3 id="counter4">0</h3>
                    <p>PH.D PROGRAMMES</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3 col-sm-3">
                <div class="number-box">
                    <h3 id="counter5">0</h3>
                    <p>STUDENTS</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="number-box">
                    <h3 id="counter6">0</h3>
                    <p>FACULTY MEMBERS</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="number-box">
                    <h3 id="counter7">0</h3>
                    <p>RESEARCH GUIDES</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="number-box">
                    <h3 id="counter8">1</h3>
                    <p>RESEARCH SCHOLARS</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript to handle the random number logic and final correct numbers -->
<script>
    function startRandomCount(elementId, finalValue) {
        let interval = setInterval(function () {
            // Generate random number between 1 and 100
            let randomNum = Math.floor(Math.random() * 100) + 1;
            document.getElementById(elementId).innerHTML = randomNum;
        }, 100); // Change the number every 100 milliseconds

        // Stop after 1 minute (60000 milliseconds) and display the correct final value
        setTimeout(function () {
            clearInterval(interval); // Stop the random numbers
            document.getElementById(elementId).innerHTML = finalValue; // Show the final correct number
        }, 50000); // Stop after 1 minute
    }

    // Start counting when the DOM is fully loaded
    document.addEventListener('DOMContentLoaded', function () {
        startRandomCount("counter1", 17);
        startRandomCount("counter2", 13);
        startRandomCount("counter3", 11);
        startRandomCount("counter4", 8);
        startRandomCount("counter5", 17);
        startRandomCount("counter6", 13);
        startRandomCount("counter7", 11);
        startRandomCount("counter8", 8);
    });
</script>

   
</body>
</html>

