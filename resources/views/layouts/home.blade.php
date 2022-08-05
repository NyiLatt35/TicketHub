@extends('UI.master')
@section('homeContent')
    <!-- Start Home Page -->

    <!-- Start HOME -->
    <section class="homes">
        <!-- start  top navbar -->
        <nav class="navbar sticky-top d-flex justify-content-between align-items-center px-5 bg-primary top-navbars">
            <div class="d-flex align-items-center">
                <a href="#" class="navbar-brand">
                    <img src="assents/images/logoandbg/ts_logo.svg" class="logoimgs" alt="logo" />
                </a>
                <a href="#" class="navbar-brand logonames">
                    <span class="mainheaders text-white">Ticket Hub</span>
                    <br />
                    <span class="subheaders text-white">Ticket Sale Service</span>
                </a>
            </div>

            <div>
                <ul class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Login</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Sign Up</a></li>
                </ul>
            </div>
        </nav>
        <!-- end top nav bar  -->

        <div class="row banners">
            <!-- start left nav bar -->
            <div class="col-2 d-flex align-items-center justify-content-evenly">
                <nav class="navbar left-navbars ps-2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-house"></i>
                                <span class="ms-1">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#homebooking" class="nav-link">
                                <i class="fa-solid fa-calendar-check"></i>
                                <span class="ms-1">Booking</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-bus"></i>
                                <span class="ms-1">Service</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-user-group"></i>
                                <span class="ms-1">About Us</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-paper-plane"></i>
                                <span class="ms-1">Contact us</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="lines"></div>
            </div>
            <!-- end left nav bar -->


            <div id="homebooking" class="col-10 imgroutes">

                <img src="assents/images/logoandbg/trip.svg" class="col-6 d-block" width="600px" alt="homebg" />

                <div class="col-6 routes ">
                    <h1>
                        <span class="fs-2">Welcome!</span><br />
                        <span class="h2 fw-bold mainheaders">Ticket Hub</span><br />
                        <span class="fs-3 fst-italic">Ticket Sale Service</span>
                    </h1>

                    <div class="px-5 fromtos">
                        <h2>Search Trip</h2>
                        <div>
                            <div class="form-group my-3">
                                <label for="from" class="fw-bold">From:</label>
                                <select id="from" class="form-selects">
                                    <option selected disabled>-- Choose City --</option>
                                    <option value="mdy">Mandalay</option>
                                    <option value="ygn">Yangon</option>
                                </select>

                                <span class="mx-2"><i class="fa-solid fa-angles-right"></i></span>

                                <label for="to" class="fw-bold">To:</label>
                                <select id="to" class="form-selects">
                                    <option selected disabled>-- Choose City --</option>
                                    <option value="mdy">Mandalay</option>
                                    <option value="ygn">Yangon</option>
                                </select>
                            </div>

                            <div class="my-3">
                                <label for="date" class="fw-bold">Date:</label>
                                <input type="date" name="date" id="date" class="" />
                            </div>

                            <div class="my-3">
                                <label for="type" class="fw-bold">Travel Type:</label>
                                <select id="type" class="form-selects">
                                    <option selected disabled>-- Choose Type --</option>
                                    <option value="bus">Bus</option>
                                    <option value="air">Airplane</option>
                                    <option value="train">Train</option>
                                </select>
                            </div>

                            <a href="/home/operator">
                                <button type="submit" id="submit" class="btns">Search Book</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End HOME -->

    <!-- Start SERVICE -->
    <section id="service" class=" py-3 services ">
        <!-- start title -->
        <div class="container my-3">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="titles">SERVICE</h1>
                </div>
            </div>
        </div>
        <!-- end title -->

        <div class="container my-3">
            <div class="row align-items-center">

                <div class="col-4 traveltypes">
                    <h1 class="m-3">Operators</h1>

                    <div class="types">
                        <img src="assents/images/logoandbg/bus.svg" width="50px" alt="bus" />
                        <span>Bus</span>
                    </div>
                    <div class="types">
                        <p>Airplane</p>
                    </div>
                    <div class="types">
                        <p>Train</p>
                    </div>
                </div>

                <div class="col-8 operators">
                    <h2>Operators</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End SERVICE -->
    <!-- End Home Page -->



    <!-- Start OPERATOR -->
    <section id="tservice" class="tservices">

        <!-- start navbar -->
        <nav class="navbar sticky-top d-flex justify-content-between align-items-center px-5 top-navbars">
            <div class="d-flex align-items-center">
                <a href="#" class="navbar-brand"><img src="assents/images/logoandbg/ts_logo.svg" class="logoimgs"
                                                      alt="logo" /></a>
                <a href="#" class="navbar-brand logonames"><span class="mainheaders">Ticket Hub</span><br /><span
                        class="subheaders">Ticket Sale Service</span></a>
            </div>

            <div>
                <ul class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Operators</li>
                </ul>
            </div>
        </nav>
        <!-- end nav bar  -->

        <div class="operators">

            <div class="row">
                <div class="col-6">
                    <div class="card linecards">
                        <div class="row">
                            <div class="col-6 lineimgs">
                                <img src="assents/images/bus/buslogo1.png" alt="buslogo1" width="250px" height="200px" />
                            </div>
                            <div class="col-6">
                                <p class="fw-bold dtimes mt-4">8:00 AM - VIP CLASS</p>
                                <ul class="list-unstyled lineinfos">
                                    <li>From : <span>City</span></li>
                                    <li>To : <span>City</span></li>
                                    <li>Date : <span>DD/MM/YYYY</span></li>
                                    <li>Duration: <span>Time</span></li>
                                </ul>
                                <p class="fw-bold d-flex justify-content-center">1seat x 25000</p>
                                <div class="d-flex justify-content-end mx-4 my-2"><a href="#" class="text-secondary"><i
                                            class="fa-solid fa-circle-arrow-right fs-3"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card linecards">
                        <div class="row">
                            <div class="col-6 lineimgs">
                                <img src="assents/images/bus/buslogo1.png" alt="buslogo1" width="250px" height="200px" />
                            </div>
                            <div class="col-6">
                                <p class="fw-bold dtimes mt-4">2:00 PM - NORMAL CLASS</p>
                                <ul class="list-unstyled lineinfos">
                                    <li>From : <span>City</span></li>
                                    <li>To : <span>City</span></li>
                                    <li>Date : <span>DD/MM/YYYY</span></li>
                                    <li>Duration: <span>Time</span></li>
                                </ul>
                                <p class="fw-bold d-flex justify-content-center">1seat x 20000 MMK</p>
                                <div class="d-flex justify-content-end mx-4 my-2"><a href="#" class="text-secondary"><i
                                            class="fa-solid fa-circle-arrow-right fs-3"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="card linecards">
                        <div class="row">
                            <div class="col-6 lineimgs">
                                <img src="assents/images/bus/buslogo3.png" alt="buslogo3" width="250px" height="200px" />
                            </div>
                            <div class="col-6">
                                <p class="fw-bold dtimes mt-4">6:00 PM - VIP CLASS</p>
                                <ul class="list-unstyled lineinfos">
                                    <li>From : <span>City</span></li>
                                    <li>To : <span>City</span></li>
                                    <li>Date : <span>DD/MM/YYYY</span></li>
                                    <li>Duration: <span>Time</span></li>
                                </ul>
                                <p class="fw-bold d-flex justify-content-center">1seat x 20000 MMK</p>
                                <div class="d-flex justify-content-end mx-4 my-2"><a href="#" class="text-secondary"><i
                                            class="fa-solid fa-circle-arrow-right fs-3"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card linecards">
                        <div class="row">
                            <div class="col-6 lineimgs">
                                <img src="assents/images/bus/buslogo3.png" alt="buslogo3" width="250px" height="200px" />
                            </div>
                            <div class="col-6">
                                <p class="fw-bold dtimes mt-4">2:00 PM - VIP CLASS</p>
                                <ul class="list-unstyled lineinfos">
                                    <li>From : <span>City</span></li>
                                    <li>To : <span>City</span></li>
                                    <li>Date : <span>DD/MM/YYYY</span></li>
                                    <li>Duration: <span>Time</span></li>
                                </ul>
                                <p class="fw-bold d-flex justify-content-center">1seat x 20000 MMK</p>
                                <div class="d-flex justify-content-end mx-4 my-2"><a href="#" class="text-secondary"><i
                                            class="fa-solid fa-circle-arrow-right fs-3"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="card linecards">
                        <div class="row">
                            <div class="col-6 lineimgs">
                                <img src="assents/images/bus/buslogo2.png" alt="buslogo2" width="250px" height="200px" />
                            </div>
                            <div class="col-6">
                                <p class="fw-bold dtimes mt-4">8:00 AM - VIP CLASS</p>
                                <ul class="list-unstyled lineinfos">
                                    <li>From : <span>City</span></li>
                                    <li>To : <span>City</span></li>
                                    <li>Date : <span>DD/MM/YYYY</span></li>
                                    <li>Duration: <span>Time</span></li>
                                </ul>
                                <p class="fw-bold d-flex justify-content-center">1seat x 25000</p>
                                <div class="d-flex justify-content-end mx-4 my-2"><a href="#" class="text-secondary"><i
                                            class="fa-solid fa-circle-arrow-right fs-3"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card linecards">
                        <div class="row">
                            <div class="col-6 lineimgs">
                                <img src="assents/images/bus/buslogo2.png" alt="buslogo2" width="250px" height="200px" />
                            </div>
                            <div class="col-6">
                                <p class="fw-bold dtimes mt-4">6:00 PM - VIP CLASS</p>
                                <ul class="list-unstyled lineinfos">
                                    <li>From : <span>City</span></li>
                                    <li>To : <span>City</span></li>
                                    <li>Date : <span>DD/MM/YYYY</span></li>
                                    <li>Duration: <span>Time</span></li>
                                </ul>
                                <p class="fw-bold d-flex justify-content-center">1seat x 25000</p>
                                <div class="d-flex justify-content-end mx-4 my-2"><a href="#" class="text-secondary"><i
                                            class="fa-solid fa-circle-arrow-right fs-3"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- End TRANSPORTATION SERVICE -->

@endsection
