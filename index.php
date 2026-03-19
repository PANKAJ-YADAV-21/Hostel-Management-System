<!DOCTYPE html>
<html>
<head>
    <title>Hostel Management System</title>
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
            max-width:900px;
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(10px);
            padding:40px;
            border-radius:20px;
            text-align:center;
            box-shadow:0 8px 30px rgba(0,0,0,0.3);
        }

        h1{
            font-size:42px;
            margin-bottom:15px;
            color:#38bdf8;
        }

        p{
            color:#cbd5e1;
            font-size:18px;
            margin-bottom:35px;
        }

        .btn-group{
            display:flex;
            justify-content:center;
            gap:20px;
            flex-wrap:wrap;
        }

        a{
            text-decoration:none;
            padding:14px 28px;
            border-radius:10px;
            font-size:16px;
            font-weight:bold;
            transition:0.3s;
        }

        .btn-primary{
            background:#38bdf8;
            color:white;
        }

        .btn-primary:hover{
            background:#0ea5e9;
            transform:translateY(-3px);
        }

        .btn-secondary{
            background:transparent;
            border:2px solid #38bdf8;
            color:white;
        }

        .btn-secondary:hover{
            background:#38bdf8;
            transform:translateY(-3px);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Hostel Management System</h1>
    <p>Manage student hostel bookings in a simple and modern way.</p>

    <div class="btn-group">
        <a href="add_booking.php" class="btn-primary">Add Booking</a>
        <a href="view_bookings.php" class="btn-secondary">View Bookings</a>
    </div>
</div>

</body>
</html>