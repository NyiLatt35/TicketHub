@extends('UI.master')
@section('ticketHub')
    <section class="container-fluid px-5 bg-primary">
        <nav class="navbar sticky-top d-flex justify-content-between align-items-center px-5 top-navbars">
            <div class="d-flex align-items-center">
                <a href="#" class="navbar-brand"><img src="../assents/images/logoandbg/ts_logo.svg" class="logoimgs" alt="logo"/></a>
                <a href="#" class="navbar-brand logonames">
                    <span class="mainheaders text-white">Ticket Hub</span>
                    <br/>
                    <span class="subheaders text-white">Ticket Sale Service</span>
                </a>
            </div>

            <div>
                <ul class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="../index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active">Confirm Ticket</li>
                </ul>
            </div>
        </nav>
    </section>

    <section class="qr-code container my-4">
        <div class="row d-flex align-items-center justify-content-between">

            <div class="pay-left col-12 col-md-5 text-center py-3 rounded-2">
                <h3>Payment QR Code</h3>
                <div class="qrphoto d-flex align-items-center justify-content-center">
                    <img src="../assents/images/payments/qrcode.png" alt="qrphoto" class="qrcodes"/>
                </div>
                <div class="texts">
                    <h4>Account Name :</h4>
                    <h5>Phone No : </h5>
                </div>
            </div>

            <div class="pay-right col-12 col-md-5 m-3 py-3 rounded-2">

                <h2 class="text-center fw-bolder">Travel Ticket</h2>
                <div class="d-flex align-items-center justify-content-between my-3">
                    <img src="../assents/images/logo.png" alt="Logo Image" class="logo-img" />
                    <div>
                        <h6>Ticket Hub</h6>
                        <h6>Ticket Sale Service</h6>
                    </div>
                </div>
                <hr/>

                <div class="">
                    <h5><b>Line Information</b></h5>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Operator Line No</h6>
                        <h6 class="">3N/12345</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Operator Line Name</h6>
                        <h6 class="">Myat Mandalar Tun</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Route</h6>
                        <h6 class="">Yangon -> Mandalay</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Date</h6>
                        <h6 class="">1-7-2022(Monday)</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Depature Time</h6>
                        <h6 class="">00:00 AM/PM</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Duration</h6>
                        <h6 class="">00:00 Hours</h6>
                    </div>
                </div>

                <hr/>

                <div class="">
                    <h5><b>Passenger Information</b></h5>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Booking ID</h6>
                        <h6 class="">00000</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Name</h6>
                        <h6 class="">Mg Mg</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Phone</h6>
                        <h6 class="">09123456789</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Email</h6>
                        <h6 class="">example@gmail.com</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Gender</h6>
                        <h6 class="">Male</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">NRC</h6>
                        <h6 class="">12/PaKhaKa(N)123456</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Seat No</h6>
                        <h6 class="">no-1</h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-between px-3">
                        <h6 class="">Price</h6>
                        <h6 class="">25000 MMK</h6>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <p class="p-0">payment-Kpay</p>
                    <p class="p-0">Company-Transportation Serive</p>
                </div>

            </div>

        </div>
    </section>
@endsection
