@extends('UI.master')
@section('selectSeatContent')
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
                    <li class="breadcrumb-item active">Operators</li>
                </ul>
            </div>
        </nav>
    </section>

    <section class="container">
        <div class="container-fluid">

            <div class="row d-flex justify-content-between my-3">
                <div class="op-left col-12 col-md-12 col-lg-6 py-2">
                    <h3 class="text-center mb-3">Line Name(Select Seat)</h3>
                    <div class="b-shadows bg-light rounded-2 py-2">
                        <div class="d-flex align-items-center justify-content-between px-2">
                            <span>Time: 00:00 AM/PM</span>
                            <span>Line No: 0001</span>
                        </div>
                        <p class="bg-gray m-3 p-2 text-center rounded-2"><b>Driver</b></p>
                        <div class="px-5 pb-3" id="seats"></div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-6 py-2">
                    <div class="infos mb-3 py-3 rounded-2">
                        <h3 class="text-center pb-2">Information</h3>

                        <div class="d-flex align-items-center justify-content-between px-3">
                            <h6 class="">Line Name</h6>
                            <h6 class="">Myat Mandalar Tun</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between px-3">
                            <h6 class="">Route</h6>
                            <h6 class="">Yangon -> Mandalay</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between px-3">
                            <h6 class="">Date</h6>
                            <h6 class="">dd-mm-yy</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between px-3">
                            <h6 class="">Time</h6>
                            <h6 class="">Selected Time</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between px-3">
                            <h6 class="">Duration</h6>
                            <h6 class="">00:00 Hours</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between px-3">
                            <h6 class="">Price</h6>
                            <h6 class="">20000 MMK</h6>
                        </div>
                    </div>

                    <div class="p-infos py-3 rounded-2">
                        <h3 class="text-center pb-2">Pessanger Information</h3>

                        <div class="d-flex align-items-center justify-content-between px-3">
                            <h6 class="">Name</h6>
                            <input type="text" name="username" id="username" class="text-end border-0 selecters"
                                   placeholder="Enter Your Name" value="" required/>
                        </div>
                        <div class="px-3">
                            <h6 class="list-group">Gender</h6>
                            <div class=" mx-3">
                                <input type="radio" name="gender" id="mgender" value="male"/> <span class="me-3">Male</span>
                                <input type="radio" name="gender" id="fgender" value="female"/> <span class="me-3">Female</span>
                                <input type="radio" name="gender" id="ogender" value="other"/> <span class="me-3">Other</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between px-3">
                            <h6 class="">NRC</h6>
                            <input type="text" name="NRC" id="NRC" class="text-end border-0 selecters"
                                   placeholder="12/PaKhaKa(N)123456" required />
                        </div>

                        <div class="d-flex align-items-center justify-content-between px-3">
                            <h6 class="">Phone No</h6>
                            <input type="text" name="phone-no" id="phone_no" class="text-end border-0 selecters"
                                   placeholder="0978948687" required />

                        </div>

                        <div class="d-flex align-items-center justify-content-between px-3">
                            <h6 class="">Email</h6>
                            <input type="email" name="email" id="email" class="text-end border-0 selecters"
                                   placeholder="example@gmail.com"/>
                        </div>

                        <div class="d-flex align-items-center justify-content-between px-3">
                            <h6 class="">Seat No</h6>
                            <h6 class="list-group" id="seat_no">00</h6>
                        </div>

                        <div class="px-3">
                            <h6 class="list-group">Payment</h6>

                            <div class="payments d-flex align-items-center mx-3">
                                <div class="d-flex align-items-center px-3">
                                    <input type="radio" name="payment" id="kpay" value="kpay" required/>
                                    <img src="../assents/images/payments/kpayLogo.svg" alt="Kpay Logo" class="pay-logo p-2 bg-transparent">
                                    <span class="pay-text">Kpay</span>
                                </div>
                                <div class="d-flex align-items-center px-3">
                                    <input type="radio" name="payment" id="wavepay" value="wavepay" required/>
                                    <img src="../assents/images/payments/wave_money.svg" alt="Wavepay Logo" class="pay-logo p-2 bg-transparent">
                                    <span class="pay-text">Wave Pay</span>
                                </div>
                            </div>
                        </div>

                        <div class="mx-4 text-end">
                            <a href="/operator/confirm">
                                <input type="submit" name="" class="btn btn-primary me-0" id="" value="Book Now"/>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection
