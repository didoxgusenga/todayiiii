<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Simple PHP Calculator</title>
    <style>
        body {
            background: linear-gradient(to right, #83a4d4, #b6fbff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calculator {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f0f8ff;
            border-left: 4px solid #007bff;
            font-size: 18px;
            color: #333;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <div class="calculator">
        <h2>Simple PHP Calculator</h2>
        <form method="get" action="">
            Type First Number: 
            <input type="number" name="num1" required>

            Type Second Number: 
            <input type="number" name="num2" required>

            <input type="submit" value="Add">
        </form>

        <?php
        if (isset($_GET["num1"]) && isset($_GET["num2"])) {
            $sum = $_GET["num1"] + $_GET["num2"];
            echo "<div class='result'>Answer: $sum</div>";
        }
        ?>
    </div>

</body>
</html>