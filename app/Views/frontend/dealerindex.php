<!DOCTYPE html>
<html>

<head>
    <title>Dealer</title>
    <link rel="stylesheet" type="text/css" href="<?php base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php base_url() ?>/assets/bootstrap/css/bootstrap.css">

    <script type="text/javascript" src="<?php base_url() ?>/assets/bootstrap/js/jquery.js"></script>
    <script src="<?php base_url() ?>/assets/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="<?php base_url() ?>/assets/bootstrap/js/bootstrap.js"></script>

    <script src="<?php base_url(); ?>/assets/js/jquery-3.5.1.min"></script>
    <script src="<?php base_url(); ?>/assets/js/script"></script>

    <style>
        .paralax {
            background-image: url(" <?php base_url() ?>/assets/images/img/ns1.jpg");
            height: 690px;
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            transform: translatez(0);
            -webkit-transform: translatez(0);
        }
    </style>

</head>

<body>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <style>
        .carousel-caption {
            right: 0;
            text-align: left;
            max-width: 1500px;
            margin-right: 1000px;
        }

        .ss {
            width: 400px;
            height: 190px;
            margin-top: 140px;
            border: black;
            border-radius: 8px;

        }

        .nana {
            background-image: url(img/cr4.jpg);
            background-size: cover;
        }

        .daftarmobil {
            width: 100%;
            display: block;

        }

        .shadow {
            position: relative;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
        }


        .shadow:after {
            content: '';
            position: absolute;
            z-index: -1;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
            top: 50%;
            bottom: 0;
            left: 10px;
            right: 10px;
            border-radius: 100px / 10px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .card{
            border-radius : 15 px;
            box-shadow: inset 3px 3px 4px rgba(0,0,0,0.4);
            border: 1px solid grey;
            padding: 10px;
        }

        .p{
        padding-top: 10px;
        padding-bottom: -4px;
        }
    </style>






    <!---------Navbar------->
    <div class="shadow">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top sticky">
            <a class="navbar-brand" href="#" style="font-size:x-large;"><img src="<?php base_url() ?>/assets/images/img/xp.png" style="height: 60px; width:auto"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul></ul>
            <ul></ul>
            <ul></ul>
            <ul></ul>
            <ul></ul>
            <ul></ul>
            <ul></ul>
            <ul></ul>
            <ul></ul>
            <ul></ul>
            <ul></ul>
            <ul></ul>
            <ul></ul>
            <ul></ul>
            <ul></ul>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#staticBackdrop" data-toggle="modal" style="font-size: large; "><b>Auto</b> <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php base_url() ?>/about" data-toggle="modal" style="font-size: large;"><b>About</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="store.html" style="font-size: large;"><b>Contact Us</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php base_url() ?>/login" style="font-size: large;"><b>Login</b></a>
                    </li>

                </ul>
                <span class="navbar-text">
                    <a href="#">
                        <img src="<?php base_url() ?>/assets/images/img/news.png" style="width: 35px;">
                    </a>
                </span>
            </div>
        </nav>
    </div>
    <!-------------Carousel------------>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: 80px;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner" data-interval="10000">
            <div class="carousel-item active" data-interval="10000">
                <img src="<?php base_url() ?>/assets/images/img/banner/ftt-01.jpg" class="d-block w-100" alt="..." style="height: 600px;">
                <div class="carousel-caption d-none d-lg-block">


                </div>
            </div>
            <div class="carousel-item" data-interval="10000">
                <img src="<?php base_url() ?>/assets/images/img/banner/av-01.jpg" class="d-block w-100" alt="..." style="height: 600px;">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item" data-interval="10000">
                <img src="<?php base_url() ?>/assets/images/img/banner/x-01.jpg" class="d-block w-100" alt="..." style="height: 600px;">
                <div class="carousel-caption d-none d-md-block">


                </div>
            </div>
            <div class="carousel-item" data-interval="10000">
                <img src="<?php base_url() ?>/assets/images/img/banner/ertg-01-01.jpg" class="d-block w-100" alt="..." style="height: 600px;">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>

    </div>

    <div class="jumbotron bg-light">
    <div class="row">
      <div class="col-4">
      <div class="w3-card-4 card">
        <img src="<?php base_url() ?>/assets/images/img/toyota/Toyota Rush.png" alt="...">
         <div class="w3-container w3-center p">
          <center>
            <b><p>ALL NEW TOYOTA RUSH</p></b>
            <b><p>Rp. 150.000.000</p></b>
        </center>
        </div>
      </div>
      </div>

      <div class="col-4">
        <div class="w3-card-4 card">
        <img src="<?php base_url() ?>/assets/images/img/toyota/Fortuner.png" alt="Alps">
          <div class="w3-container w3-center p">
            <center>
              <b><p>TOYOTA FORTUNER ALL IN ONE</p></b>
              <B><p>Rp. 500.000.000</p></B>
            </center>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="w3-card-4 card">
          <img src="<?php base_url() ?>/assets/images/img/toyota/Toyota Vios.png" alt="Alps">
            <div class="w3-container w3-center p">
            <center>
              <b><p>ALL NEW TOYOTA VIOS</p></b>
              <B><p>Rp. 300.000.000</p></B>
            </center>
            </div>
        </div>
      </div>
    </div>

    <div class="row" style="padding-top: 20px;">
      <div class="col-4">
      <div class="w3-card-4 card">
        <img src="<?php base_url() ?>/assets/images/img/nissan/Nissan Terra.png" alt="...">
         <div class="w3-container w3-center p">
          <center>
            <b><p>NISSAN TERRA</p></b>
            <b><p>Rp. 750.000.000</p></b>
        </center>
        </div>
      </div>
      </div>

      <div class="col-4">
        <div class="w3-card-4 card">
        <img src="<?php base_url() ?>/assets/images/img/honda/Honda Civic.png" alt="Alps">
          <div class="w3-container w3-center p">
            <center>
              <b><p>HONDA CIVIC</p></b>
              <B><p>Rp. 700.000.000</p></B>
            </center>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="w3-card-4 card">
          <img src="<?php base_url() ?>/assets/images/img/mitsubishi/Mitsubishi Outlander.png" alt="Alps">
            <div class="w3-container w3-center p">
            <center>
              <b><p>MITSUBISHI OUTLANDER</p></b>
              <B><p>Rp. 800.000.000</p></B>
            </center>
            </div>
        </div>
      </div>
    </div>

  </div>






    <!--Jumbotron-->
    <div class="jumbotron paralax">



        <div class="row" style="margin-top: 60px;">
            <div class="col-sm-6">
                <div class="card bg-light rounded" style="height: 230px;border: 50px ;">
                    <div class="card-body">
                        <center>
                            <h5 class=" card-title">About Us</h5>

                            <hr>
                            <br>
                            <p class="card-text" style="font-family:ardestine;font-size: x-large;">Selamat Datang di Official<br>Website XPE Sport</p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-light" style="height: 230px;border: black;">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Contact Us</h5>
                        </center>
                        <hr>
                        <p class="card-text"><img src="<?php base_url() ?>/assets/images/img/social-media.png" style="width: 30px;height: 33px;"> @XPE_sport<br><br>
                            <img src="<?php base_url() ?>/assets/images/img/fb.png" style="width: 30px;height: 33px;"> @XPEsport Official
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <center>
            <a href="about.html">
                <button type="button" href="about.html" data-toggle="modal" class="btn btn-outline-danger btn-lg" style="width: 170px;">> Goo...</button>
            </a>
        </center>
    </div>


    <div class="jumbotron bg-light" style="margin-top: 10px;">
        <div class="row">
            <div class="col-5">

                <center>
                    <p style=" font-size: xx-large;"><span data-toggle="tooltip" title="Layanan Service"><b>Service</b> </span> <img src="<?php base_url() ?>/assets/images/img/kunci.png" style="width: 35px;height: 40px;"></p>

                    <hr style="background-color: white;width: 120px;">
                    <button type="button" href="#service" data-toggle="modal" class="btn btn-danger btn-lg" style="width: 170px; data-toggle: tooltip" data-placement="top" data-html="true" title="
         Menu
         1.Ganti Spare Part
         2.Tune Up Engine
         3.Perbaikan Khusus
         4.General Check up
         5.Service Rutin">Book</button>
                    <br>
                    <br>
                    <p style="font-size:x-medium;">Authorised services from our official Ferrari technical experts.</p>
                </center>
            </div>

            <div class="col-7">
                <img src="<?php base_url() ?>/assets/images/img/toyota/alp.jpg" style="height: 500px;width: auto; border-radius:12px;">
            </div>
        </div>
        <br>
        <br>
        <div class="jumbotron bg-light">
            <center>
                <img src="<?php base_url() ?>/assets/images/img/logo fix-01.png" style="width: 45px;height: 50px;">
                <hr>

                <div class="row">
                    <div class="col-3">
                        <h5 style="font-size: xx-medium;">New Cars</h5>
                        <h6>Alphard</h6>
                        <h6>Fortuner</h6>
                        <h6>All New Ertiga</h6>
                    </div>
                    <div class="col-3">
                        <h5 style="font-size: xx-medium;">Explore</h5>
                        <h6>Book a Service</h6>
                        <h6>Service</h6>
                        <h6>Clients</h6>
                    </div>
                    <div class="col-3">
                        <h5 style="font-size: xx-medium;">Meet Us</h5>
                        <h6>Contact Us</h6>
                        <h6>About Us</h6>
                        <h6>Careers</h6>
                    </div>
                    <div class="col-3">
                        <h5 style="font-size: xx-medium;">Pre-Owned</h5>
                        <h6>XPE Sport</h6>
                        <h6>Value Your Car</h6>
                        <h6></h6>
                    </div>
            </center>
            <hr>
            <!--bawah-->

            <center>
                <img src="<?php base_url() ?>/assets/images/img/xp.png" style="width:130px" height="70px">
                <p style="font-size: 11px; ">
                    XPE Sport - Holding company - A company under Dutch law, having its official seat in Amsterdam,<br>
                    the Netherlands and its corporate address at Via Abetone Inferiore No. 4, I-41053 Maranello (MO),<br><br>
                    Italy, registered with the Dutch trade register under number 64060977

                    Ferrari S.p.A. - A company under Italian law, having its<br>
                    registered office at Via Emilia Est No. 1163,<br>
                    Modena, Italy, Companies’ Register of Modena, VAT and Tax number 00159560366 and share capital of Euro 20,260,000<br><br><br>

                    <b>Copyright 2020 - All rights reserved</b>
                </p>
                <img src="<?php base_url() ?>/assets/images/img/logo fix-01.png" style="width: 90px" height="80px">
            </center>
        </div>
    </div>
    </div>


    <!----Modal Service-->

    <div class="modal fade" id="service" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content" style="background-color:whitesmoke;">
                <div class="modal-header bg-primary">
                    <img src="<?php base_url() ?>/assets/images/img/logoo.png" style="width: 30px;">
                    <h5 class="modal-title" id="staticBackdropLabel">Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-primary">

                    <form method="post" action="service.php">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama</label>
                                    <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Anda">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">No Telephone</label>
                                    <input name="tlp" type="number" class="form-control" id="exampleFormControlInput1" placeholder="No Tlp Anda">
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" placeholder="Dealer">Pilih Dealer</label>
                                    <select name="dealer" class="form-control" id="exampleFormControlSelect1">
                                        <option name="dealer" value="jakarta">Jakarta</option>
                                        <option name="dealer" value="bandung">Bandung</option>
                                        <option name="dealer" value="surabaya">Surabaya</option>
                                        <option name="dealer" value="jogjakarta">Jogjakarta</option>
                                        <option name="dealer" value="makassar">Makassar</option>
                                        <option name="dealer" value="medan">Medan</option>
                                        <option name="dealer" value="samarinda">Samarinda</option>
                                        <option name="dealer" value="Bali">Bali</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Waktu Layanan</label>
                                    <input name="date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Nama Anda">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Layanan</label>
                                    <select name="layanan" multiple class="form-control" id="exampleFormControlSelect2">
                                        <option name="layanan" value="Service Rutin">Service Rutin</option>
                                        <option name="layanan" value="General Check Up">General Check Up</option>
                                        <option name="layanan" value="Perbaikan Khusus">Perbaikan Khusus</option>
                                        <option name="layanan" value="Tune Up">Tune Up engine</option>
                                        <option name="layanan" value="Ganti Spare Part">Ganti Spare Part</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>



                        </div>




                        <div class="modal-footer bg-dark">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>

                            <input type="submit" value="Booking" class="btn btn-outline-warning">
                        </div>
                    </form>

                </div>



            </div>
        </div>
    </div>



</body>

</html>