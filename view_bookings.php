<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Bookings</title>
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
            padding:40px;
            color:white;
        }

        .container{
            width:95%;
            max-width:1100px;
            margin:auto;
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(10px);
            padding:30px;
            border-radius:20px;
            box-shadow:0 8px 30px rgba(0,0,0,0.3);
        }

        h2{
            text-align:center;
            margin-bottom:25px;
            color:#38bdf8;
        }

        table{
            width:100%;
            border-collapse:collapse;
            overflow:hidden;
            border-radius:12px;
        }

        th, td{
            padding:14px;
            text-align:center;
        }

        th{
            background:#38bdf8;
            color:white;
        }

        td{
            background:rgba(255,255,255,0.05);
            color:#e2e8f0;
        }

        tr:nth-child(even) td{
            background:rgba(255,255,255,0.08);
        }

        .back{
            display:inline-block;
            margin-top:20px;
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
    <h2>All Bookings</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Room</th>
            <th>Meal</th>
            <th>Total Cost</th>
        </tr>

        <?php
        $sql = "SELECT * FROM bookings";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['student_name'] . "</td>
                        <td>" . $row['room_type'] . "</td>
                        <td>" . $row['meal_option'] . "</td>
                        <td>₹" . $row['total_cost'] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No bookings found</td></tr>";
        }
        ?>
    </table>

    <a href="index.php" class="back">← Back to Home</a>
</div>

</body>
</html>