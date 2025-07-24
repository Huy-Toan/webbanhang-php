<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>DOUBLE T SHOP</title>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            session_start();
            include("admin/config/config.php");
            include("pages/menu.php");
            include("pages/slider.php");
            include("pages/main.php");
            include("pages/footer.php");
            ?>
        </div>
    </div>

   <!-- JS thư viện -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" 
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
            crossorigin="anonymous"></script>

    <!-- PayPal SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AQKrjCsj_SRLPTKVRvLP2TMcky4_HGKGUxb23z0RVpqiZPXQkTlxGhXrKoN49n-vvsgs98EHPwFsn7LF&currency=USD"></script>

    <!-- JS chính -->
    <script src="./js/main.js"></script>

</body>

</html>