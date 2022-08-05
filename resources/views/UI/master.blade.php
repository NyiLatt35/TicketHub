<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!--    Bootstrap & fontawesome-->
    <link rel="stylesheet" href="../assents/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
          integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
</head>
<body>

@yield('homeContent')
@yield('selectSeatContent')
@yield('ticketHub')

<section class="bg-primary footer d-flex justify-content-center align-items-center text-center">
    <p class="text-white-50">&copy; 2023 Travel Ticket Pick Design By TS Group</p>
</section>

<script src="../assents/libs/jquery-3.6.0.min.js"></script>
<script src="../assents/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../js/app.js" type="text/javascript"></script>

</body>
</html>
