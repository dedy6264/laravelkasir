
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="https://colorlib.com/etc/regform/colorlib-regform-2/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Add Products</h2>
                    <form method="POST" action="/store">
                    @csrf
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Pruducts" name="nama_p">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Pruducts Code" name="kode_p">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="number" placeholder="Pruducts Price" name="harga">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Satuan" name="satuan">
                        </div>
                        
                        <!--div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="text" placeholder="Product Price" name="harga">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="class">
                                    <option disabled="disabled" selected="selected">Class</option>
                                    <option>Class 1</option>
                                    <option>Class 2</option>
                                    <option>Class 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Product Code" name="kode_p">
                                </div>
                            </div>
                        </div-->
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/select2/select2.min.js"></script>
    <script src="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/datepicker/moment.min.js"></script>
    <script src="https://colorlib.com/etc/regform/colorlib-regform-2/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="https://colorlib.com/etc/regform/colorlib-regform-2/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->