<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $room = $_POST['room'];
    $meal = $_POST['meal'];

    $roomCost = [
        "Apartment AC" => 60000,
        "Standard AC" => 50000,
        "Standard Non-AC" => 40000
    ];

    $mealCost = [
        "Alacarte" => 55000,
        "4 Meals" => 46000,
        "3 Meals" => 42000,
        "2 Meals BD" => 38000,
        "2 Meals LD" => 38000
    ];

    $total = $roomCost[$room] + $mealCost[$meal];

    $sql = "INSERT INTO bookings (student_name, room_type, meal_option, total_cost)
            VALUES ('$name', '$room', '$meal', '$total')";

    if ($conn->query($sql)) {
        header("Location: add_booking.php?success=1");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Booking</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background: linear-gradient(135deg, #0f172a, #1e293b);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            color:white;
        }

        .container{
            width:90%;
            max-width:500px;
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(10px);
            padding:35px;
            border-radius:20px;
            box-shadow:0 8px 30px rgba(0,0,0,0.3);
        }

        h2{
            text-align:center;
            margin-bottom:25px;
            color:#38bdf8;
        }

        .success{
            background:#16a34a;
            padding:10px;
            border-radius:8px;
            margin-bottom:20px;
            text-align:center;
        }

        label{
            display:block;
            margin-bottom:8px;
            margin-top:15px;
            font-weight:bold;
        }

        input, select{
            width:100%;
            padding:12px;
            border:none;
            border-radius:10px;
            outline:none;
            font-size:15px;
        }

        button{
            width:100%;
            margin-top:25px;
            padding:14px;
            border:none;
            border-radius:10px;
            background:#38bdf8;
            color:white;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s;
        }

        button:hover{
            background:#0ea5e9;
        }

        .back{
            display:block;
            text-align:center;
            margin-top:18px;
            color:#cbd5e1;
            text-decoration:none;
        }

        .back:hover{
            color:#38bdf8;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Add Booking</h2>

    <?php
    if (isset($_GET['success'])) {
        echo "<div class='success'>Booking Added Successfully!</div>";
    }
    ?>

    <form method="POST">
        <label>Student Name</label>
        <input type="text" name="name" required>

        <label>Room Type</label>
        <select name="room">
            <option value="Apartment AC">Apartment AC (60000)</option>
            <option value="Standard AC">Standard AC (50000)</option>
            <option value="Standard Non-AC">Standard Non-AC (40000)</option>
        </select>

        <label>Meal Option</label>
        <select name="meal">
            <option value="Alacarte">Alacarte (55000)</option>
            <option value="4 Meals">4 Meals (46000)</option>
            <option value="3 Meals">3 Meals (42000)</option>
            <option value="2 Meals BD">2 Meals BD (38000)</option>
            <option value="2 Meals LD">2 Meals LD (38000)</option>
        </select>

        <button type="submit">Submit Booking</button>
    </form>

    <a href="index.php" class="back">← Back to Home</a>
</div>

</body>
</html>