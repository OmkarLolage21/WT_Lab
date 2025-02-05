<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<div class="card p-4">
    <div id="result" class="text-black mt-4 text-center">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $units = $_POST['units'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $bill = 0;

            if($units <= 50){
                $bill = $units * 3.50;
            }
            else if ($units <= 150) {
                $bill = (50 * 3.50) + (($units - 50) * 4.00);
            }
            else if ($units <= 250) {
                $bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
            } else {
                $bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
            } 
            echo "<div class='alert alert-success'>"."<br><div class='align-left'>Consumer Name: ". $name ."</div>"."<br><div>Consumer Address: ". $address ."</div>"."<br><div>Your electricity bill is <strong>Rs. " . number_format($bill, 2) . "</strong></div>"."</div>";
        }
                       
        ?>
    </div>
</div>
</html>