<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GW DISTRIBUTORS</title>

    <!-- Vendor CSS -->
    <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <link href="vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
    <link href="vendors/bower_components/nouislider/distribute/jquery.nouislider.min.css" rel="stylesheet">
    <link href="vendors/bower_components/summernote/dist/summernote.css" rel="stylesheet">
    <link href="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="vendors/farbtastic/farbtastic.css" rel="stylesheet">
    <link href="vendors/chosen_v1.4.2/chosen.min.css" rel="stylesheet">


    <link href="vendors/bootgrid/jquery.bootgrid.min.css" rel="stylesheet">




    <!-- CSS -->
    <link href="css/app.min.1.css" rel="stylesheet">
    <link href="css/app.min.2.css" rel="stylesheet">

    <!-- Following CSS are used only for the Demp purposes thus you can remove this anytime. -->
    <style type="text/css">
        .toggle-switch .ts-label {
            min-width: 130px;
        }
    </style>
</head>

<body>
    <!--including header-->
    <?php
    include './common/header.php';
    allow_admin_normal();
    ?>

    <section id="main">
        <!--including sidebar-->
        <?php
        include './common/sidebar.php';
        ?>
        <section id="content">

            <div class="container">
                <ol class="breadcrumb hidden-xs pull-right" >
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Set Invoice and Payments</li>
                </ol>
                <div class="block-header">
                    <h2>INVOICE</h2>
                </div>

                <!-----------------------------------------------------------------form section---------------------------------------------------->
                <div id="main_inv">
                    <div class="card" >
                        <div class="card-body card-padding">
                            <p class="c-black f-500"><b>Dealers Informations</b></p>
                            <!---------------------------------------------dealer details------------------------------------------------>
                            <div class="row">

                                <div class="col-sm-2">
                                    Invoice ID
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control" id="invo_no" placeholder="Invoice Number" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    Invoice Date
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type='text' class="form-control" id="dob" readonly value=" <?php
                                            echo date("Y-m-d");
                                            ?>    ">


                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    Dealer Type
                                    <div class="form-group" id="dealer_type">
                                        <label>
                                            <input type="radio" id="non_reg_dealer" name="Dealers" value="non_reg">
                                            <i class="input-helper"></i>
                                            Non Register
                                        </label>
                                        <label>
                                            <input type="radio" id="reg_dealer" name="Dealers" value="reg" checked="checked">
                                            <i class="input-helper"></i>
                                            Registered
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4" id="hide_dealer_id">

                                    <div class="form-group">
                                        <div class="fg-line" id="radio_dealer_id">
                                            Dealer ID
                                            <select class="form-control" id="dealer_id" placeholder=""></select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">




                                <div class="col-sm-6">
                                    Dealer Name
                                    <div class="form-group">
                                        <div class="fg-line" id="radio_reg_dealer_name">
                                            <input type="text" class="form-control" id="reg_dealer_name" placeholder="Dealer Name"readonly>
                                        </div>
                                        <div class="fg-line hidden" id="radio_non_reg_dealer_name">
                                            <input type="text" class="form-control" id="non_reg_dealer_name" placeholder="Type Dealer Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6" id="address_type">
                                    Dealer Address
                                    <div class="form-group">
                                        <div class="fg-line" id="radio_reg_dealer_add">   
                                            <input type="text" class="form-control" id="reg_dealer_add" placeholder=""readonly>
                                        </div>
                                        <div class="fg-line hidden" id="radio_non_reg_dealer_add">   
                                            <input type="text" class="form-control" id="non_reg_dealer_add" placeholder="Type Address Here">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 hidden">
                                    <div class="form-group">
                                        <div class="fg-line">   
                                            <input type="text" class="form-control" id="cusRegIdd" placeholder="Type Address Here">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!---------------------------------------------dealer details------------------------------------------------>

                        </div>
                    </div>
                    <!-----------------------------------------------------------------form section---------------------------------------------------->

                    <!---------------------------------------------other details------------------------------------------------>
                    <div class="card">
                        <div class="card-body card-padding">
                            <p class="c-black f-500">Other Informations</p>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="fg-line">   
                                            <input type="text" class="form-control" id="remark" placeholder="Remarks">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4" id="hide_rep_id">

                                    <div class="form-group">
                                        <div class="fg-line" id="radio_rep_id">
                                            Rep ID(NIC)
                                            <select class="form-control" id="rep_id" placeholder=""></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <div class="fg-line" id="radio_rep_name"> 
                                            Rep Name
                                            <input type="text" class="form-control" id="rep_name" placeholder="" readonly="true">
                                        </div>
                                    </div>
                                </div>

                            </div>                       
                        </div>
                    </div>
                    <!---------------------------------------------other details------------------------------------------------>

                    <!---------------------------------------------item details------------------------------------------------>
                    <div class="card">
                        <div class="card-body card-padding">
                            <p class="c-black f-500">Items Informations</p>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-group" id="item_select">
                                        <div class="fg-line" id="itemNamesection">
                                            Select Item Code
                                            <select class="form-control" id="item_code"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Item Description
                                            <input type="text" class="form-control" id="item_des"  readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 hidden">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control" id="" placeholder="Sell Price" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Sell Price Rs-
                                            <input type="text" class="form-control" id="sell_price"  readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">

                                            <input type="text" class="form-control" id="quantity" data-mask="000000" placeholder="Quantity">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Discount Rs-
                                            <input type="text" class="form-control" id="discount"   readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Total Rs-
                                            <input type="text"  class="form-control" id="total" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 "><!--hidden value for tot final-->
                                    <div class="form-group">
                                        <div class="fg-line hidden">
                                            <input type="text"  class="form-control" id="total_final" placeholder="Total">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <button class="btn btn-success btn-block" id="save_item">ADD ITEMS</button>
                                    <input type="hidden" class="form-control" id="check_ava_item_qty"><!--for check available quantity-->

                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group" id="item_select">
                                        <div class="fg-line" id="itemNamesection">
                                            Select Free Issue Item code
                                            <select class="form-control" id="free_issue_item_code"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Free Issue Item Description
                                            <input type="text"  class="form-control" id="free_issue_item_des" placeholder="Total" readonly>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">

                                            <input type="text" class="form-control" id="free_quantity" data-mask="000000" placeholder="Quantity">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Total Rs-
                                            <input type="text"  class="form-control" id="free_total"  readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3"><!--hidden value for tot final-->
                                    <div class="form-group">
                                        <div class="fg-line hidden">
                                            <input type="text"  class="form-control" id="total_final" placeholder="Sub Total">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-3 ">
                                    <button class="btn btn-success btn-block " id="save_free_item">ADD FREE ISSUE ITEMS</button>
                                    <input type="hidden" class="form-control" id="check_ava_free_item_qty"><!--for check available quantity-->
                                </div>
                            </div>
                            <br/>
                            <div class="row ">
                                <div class="col-md-6"> 
                                    <button class="btn btn-primary btn-block " id="com_invo">COMPLETE INVOICE</button>
                                </div>
                            </div>

                            <br/>
                            <div class="row">
                                <div class=" col-md-6 ">   
                                    <button class="btn btn-warning btn-block" id="hold_invo">HOLD INVOICE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------------------------item details------------------------------------------------>






                <!---------------------------------------------item data and free item data data table------------------------------------------------>

                <div class="card" id="add_items"> 
                    <div class="card"> 
                        <div class="card-header">
                            <h4>Currently Added Item Details</h4>
                            <div class="col-sm-3 pull-right">
                                <p class="f-500 m-b-15 c-black ">Filter Number Of Data</p>

                                <select class="selectpicker record-size">
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-header">                              
                                    <input type="text" class="form-control main-search-box" id="dev-table-filter" data-action="filter" data-filters="#invoice_item_data_table" placeholder="Search here....."/>

                                    <div class="table-responsive overflow">
                                        <hr class="whiter m-t-20" />
                                        <div style="height:50%;display:inherit">
                                            <table class="table table-hover" id="invoice_item_data_table">
                                                <thead>
                                                    <tr>
                                                        <th>Invoice ID</th>
                                                        <th>Item/Free Issue Item Code</th>
                                                        <th>Item/Free Issue Item Description</th>
                                                        <th>Quantity</th>
                                                        <th>Total</th>
                                                        <th>Remove Records</th>

                                                    </tr>
                                                </thead>
                                                <tbody>							
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>			
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------------------------item data and free item data data table------------------------------------------------>

                <!---------------------------------------------hold item data table------------------------------------------------>

                <div class="card" id="hold"> 
                    <div class="card"> 
                        <div class="card-header">
                            <h4>Currently Added Hold Item Details</h4>
                            <div class="col-sm-3 pull-right">
                                <p class="f-500 m-b-15 c-black ">Filter Number Of Data</p>

                                <select class="selectpicker hold_record_size">
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-header">                              
                                    <input type="text" class="form-control hold_main_search_box" id="dev-table-filter" data-action="filter" data-filters="#hold_item_data_table" placeholder="Search here....."/>

                                    <div class="table-responsive overflow">
                                        <hr class="whiter m-t-20" />
                                        <div style="height:50%;display:inherit">
                                            <table class="table table-hover" id="hold_item_data_table">
                                                <thead>
                                                    <tr>
                                                        <th>Invoice ID</th>
                                                        <th>Dealer Name</th>
                                                        <th>Sub Total</th>
                                                        <th>Remain Amount</th>
                                                        <th>Add payment</th>


                                                    </tr>
                                                </thead>
                                                <tbody>							
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>			
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------------------------hold item data table------------------------------------------------>

            </div>
            </div>
        </section>
    </section>

    <!---------------------------------------------------------------------------------------------------------------------------->

    <section id="main">

        <section id="content">
            <div class="container hidden" id="pay">


                <!-----------------------------------------------------------------form section---------------------------------------------------->
                <div class="card">
                    <div class="card-body card-padding">
                        <p class="c-black f-500"><b>Payment Information</b></p>
                        <div class="row">

                            <form action="./reports/direct_sales_invoice.php" method="POST" target="_blank">
                                <input type="hidden" value="Customer Invoice" name="title"/>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Invoice ID
                                            <input type="text" class="form-control" id="pay_invo_no" name="invo_no"  readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Sub Total Rs-
                                            <input type="text" class="form-control" id="total_inv"   value="" name="total_invo" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            <input type="text" class="form-control" id="amount" placeholder="Type pay amount here..." name="amount_pay" data-mask="00000000000000000000">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Due Balance Rs-
                                            <input type="text" class="form-control" id="due_over"  name="balance_inv" readonly>

                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" class="form-control" id="del_name" name="del_name" >
                                <input type="hidden" class="form-control" id="date"  name="date">


                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn btn-success btn-block" type="submit" id="pay_complete" value="generate">PAYMENT COMPLETE AND PRINT</button>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn btn-primary btn-block" type="button" id="add_payment">ADD PAYMENT</button>
                                    </div>
                                </div>
                            </form>

                            <br/>
                            <div class="row">
                                <div class="col-sm-3">
                                    <button class="btn btn-primary btn-block bgm-black" id="back">BACK TO INVOICE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                </div>
            </div>
            <!-----------------------------------------------------------------form section---------------------------------------------------->
            </div>
        </section>
    </section>


    <section id="main">

        <section id="content">
            <div class="container hidden" id="installment">


                <!-----------------------------------------------------------------hold payment form section---------------------------------------------------->
                <div class="card">
                    <div class="card-body card-padding">
                        <p class="c-black f-500"><b>Payment Information</b></p>
                        <div class="row">

                            <form action="./reports/hold_sales_invoice.php" method="POST" target="_blank">
                                <input type="hidden" value="Customer Invoice" name="title"/>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Invoice ID
                                            <input type="text" class="form-control" id="hold_id" name="hold_id"  readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="fg-line">    
                                        <input type='text' class="form-control date-picker" placeholder="Payment date" id="hold_date" name="hold_date">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Sub Total Rs-
                                            <input type="text" class="form-control" id="hold_total" name="hold_total" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Remain Value Rs-
                                            <input type="text" class="form-control" id="hold_remain"  name="hold_remain" readonly>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Pay Amount Rs-
                                            <input type="text" class="form-control" id="hold_amount" placeholder="Type amount here..." name="hold_amount" data-mask="00000000000000000000">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <div class="fg-line">
                                            Due Amount Rs-
                                            <input type="text" class="form-control" id="hold_due" name="hold_due" readonly >

                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" id="hold_del_name" name="hold_del_name" >
                                <input type="hidden" class="form-control" id="hold_date"  name="hold_da">


                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn btn-success btn-block" type="submit" id="hold_print" value="generate"> PRINT INVOICE</button>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn btn-primary btn-block" type="button" id="hold_payment">ADD PAYMENT</button>
                                    </div>
                                </div>
                            </form>

                            <br/>
                            <div class="row">
                                <div class="col-sm-3">
                                    <button class="btn btn-primary btn-block bgm-black" id="hold_back">BACK TO INVOICE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                </div>
            </div>
            <!-----------------------------------------------------------------hold payment form section---------------------------------------------------->
            </div>
        </section>
    </section>

    <!-- Javascript Libraries -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
    <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>

    <script src="vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
    <script src="vendors/bower_components/nouislider/distribute/jquery.nouislider.all.min.js"></script>
    <script src="vendors/bower_components/summernote/dist/summernote.min.js"></script>
    <script src="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
    <script src="vendors/datatable/data_table.js"></script>
    <script src="vendors/bootgrid/jquery.bootgrid.min.js"></script>



    <!-- Javascript controllers -->


    <script src="vendors/chosen_v1.4.2/chosen.jquery.min.js"></script>
    <script src="vendors/fileinput/fileinput.min.js"></script>
    <script src="vendors/input-mask/input-mask.min.js"></script>
    <script src="vendors/farbtastic/farbtastic.min.js"></script>


    <script src="js/functions.js"></script>
    <script src="js/demo.js"></script>

    <!-- link controller category -->
    <script src="controllers/invoice_controller.js"></script>

    <script>

        ////////////////////////////////////////dealer info///////////////////////////////////////////////////////////////////////
        save_invoice_item_data();//load added items
        load_hold_invoice_table();//show holded payment history
        get_invoice_num();//get invoice number
        radio_validation();//hide hold invoice and complete invoice button when page load



        get_reg_dealer_id(null, function () {//load dealer id and first value of dealer name
            get_reg_dealer_name($('#dealer_id').val());
        });

        get_reg_dealer_id(null, function () {//load dealer id and first value of dealer address
            get_reg_dealer_address($('#dealer_id').val());
        });

        $('#dealer_id').change(function () {//change dealer address and anme when select another dealer id 
            var deal_id = $(this).val();
            get_reg_dealer_name(deal_id);
            get_reg_dealer_address(deal_id);
        });

        get_rep_id(null, function () {//load rep id and first value of rep name
            get_rep_name($('#rep_id').val());
        });

        $('#rep_id').change(function () {//change rep name  when select another rep id 
            var rep_id = $(this).val();
            get_rep_name(rep_id);

        });



        $('#non_reg_dealer').click(function () {//select non register
            $('#non_reg_dealer_add').val('');//empty dealer address textbox
            $('#non_reg_dealer_name').val('');//empty dealer name textbox
//            $('#cusRegIdd').val('-1');
            $('#radio_non_reg_dealer_add').removeClass("hidden");//show non reg dealer address textbox
            $('#radio_reg_dealer_add').addClass("hidden");//hide reg dealer address
            $('#radio_non_reg_dealer_name').removeClass("hidden");//show non reg dealer name textarea
            $('#radio_reg_dealer_name').addClass("hidden");//hide reg dealer name textarea
            $('#radio_dealer_id').addClass("hidden");//hide reg dealer id textarea
            $('#radio_rep_id').addClass("hidden");//hide rep id textarea
            $('#radio_rep_name').addClass("hidden");//hide rep name textarea
            $('#com_invo').addClass("hidden");//hide complete invoice button
            $('#pay_complete').addClass("hidden");//hide payment complete button
            $('#add_payment').addClass("hidden");//hide add payment button
            $('#hold_invo').addClass("hidden");//hide hold invoice button
            $('#hold_payment').addClass("hidden");//hide hold payment button in hold payment interface
            // $('#print_invo').addClass("hidden");//hide print invoice button
            get_invoice_num();//refresh invoice no drop down when click unregister radio under the register state
        });
        $('#reg_dealer').click(function () {//select register
            get_reg_dealer_address();//load registered dealers addresses
            get_reg_dealer_name();//load registered dealers names
            get_rep_name();//load rep names
            $('#radio_reg_dealer_add').removeClass("hidden");//show reg dealers address
            $('#radio_non_reg_dealer_add').addClass("hidden");//hide non reg dealeers address
            $('#radio_reg_dealer_name').removeClass("hidden");//show reg dealers name
            $('#radio_non_reg_dealer_name').addClass("hidden");///hide non reg dealeers name
            $('#radio_dealer_id').removeClass("hidden");//show dealer id
            $('#radio_rep_id').removeClass("hidden");//show rep id
            $('#radio_rep_name').removeClass("hidden");//show rep name                        
            $('#pay_complete').addClass("hidden");//hide payment complete button
            $('#add_payment').addClass("hidden");//hide add payment button
            $('#hold_invo').addClass("hidden");//hide hold invoice button
            $('#com_invo').addClass("hidden");//hide complete invoice button
            $('#hold_payment').addClass("hidden");//hide hold payment button in hold payment interface
            // $('#print_invo').addClass("hidden");//hide print invoice button
            get_invoice_num();//refresh invoice no drop down when click unregister radio under the register state
        });

        ////////////////////////////////////////dealer info///////////////////////////////////////////////////////////////////////


////////////////////////////////item info///////////////////////////////////////////////////////////////////////////////////
        get_item_code(null, function () {//load item code and first value of selling price
            get_sell_price($('#item_code').val());
        });

        get_item_code(null, function () {//load item code,free issue item code and first value of item description
            get_item_description($('#item_code').val());
        });

        $('#item_code').change(function () {//change sell price, item description,item discount  when select another item code 
            var item_id = $(this).val();
            $('#quantity').val('');//empty quantity field when select another  item code
            get_sell_price(item_id);
            get_item_description(item_id);
            get_discount(item_id);

        });

        get_item_code(null, function () {//load item code,free issue item code and first value of free issue item description
            get_free_issue_item_description($('#item_code').val());
        });

        $('#free_issue_item_code').change(function () {//change  item description  when select another free issue item code 
            var item_id = $(this).val();
            $('#free_quantity').val('');//empty quantity field when select another free issue item code
            get_free_issue_item_description(item_id);
        });

        get_item_code(null, function () {//load item code,free issue item code and first value of item discount
            get_discount($('#item_code').val());
        });

//------------------quantity and discount with total--------------------------------
        $('#quantity').keyup(function () {
            var qun = $(this).val();
            var discount = $('#discount').val();
            var one_itm_price = $('#sell_price').val();
            var tot_price = parseFloat(one_itm_price) * parseFloat(qun);

            var tot_discount = parseFloat(discount) * parseFloat(qun);
            var after_sell = parseFloat(tot_price) - parseFloat(tot_discount);
            var round_after_sell = after_sell.toFixed(2);//limit to 2 decimal places
            $('#total').val(round_after_sell);


            if (qun === '') {
                $('#total').val('');

            }
        });
        //------------------quantity and discount with total--------------------------------

        //------------------free issue item quantity with  total--------------------------------
        $('#free_quantity').keyup(function () {

            var free_qun = $(this).val();

            if (free_qun === '') {
                $('#free_total').val('');
            } else {
                $('#free_total').val('0');
            }
        });
        //------------------free issue item quantity with total--------------------------------

        //--------------------------------data table filtering----------------------------------------------
        $(".main-search-box").keyup(function () {
            commondataload();
        });
        $(".record-size").change(function () {
            commondataload();
        });
        function commondataload() {
            var search_key = $(".main-search-box").val();
            var no_of_record = $(".record-size").val();
            save_invoice_item_data(search_key, no_of_record);
        }
        //--------------------------------data table filtering---------------------------------------------- 

        //--------------------------------hold data table filtering----------------------------------------------
        $(".hold_main_search_box").keyup(function () {
            common_data_load();
        });
        $(".hold_record_size").change(function () {
            common_data_load();
        });
        function common_data_load() {
            var search_key = $(".hold_main_search_box").val();
            var no_of_record = $(".hold_record_size").val();
            load_hold_invoice_table(search_key, no_of_record);
        }
        //--------------------------------hold data table filtering----------------------------------------------    


        $('#save_item').click(function () {//add invoice items to the table when click add items button

            check_availability();



        });

        $('#save_free_item').click(function () {//add invoice items to the table when click add free issue items button
            check_availability_free_item();
        });



        $('#com_invo').click(function () {
            $('#main_inv').addClass("hidden");//hide main part
            $('#pay').removeClass("hidden");//show pay part
            $('#hold').addClass("hidden");//hide hold item data table
            $('#add_items').addClass("hidden");//hide  item data table

            complete_invo();//get invioce no
            total_final();//total final function
            amount_validation();//validation check when press complete invoice button and display payment complete button and add payment button  
            save_invoice_item_data();//load saved item data table
            get_del_name_date();//get dealer name and date for print invoice(hidden)



        });

        $('#back').click(function () {//back button
            $('#amount').val('');//clear amount
            $('#pay_complete').addClass("hidden");
            $('#add_payment').addClass("hidden");
            $('#main_inv').removeClass("hidden");//show main part
            $('#pay').addClass("hidden");//hide pay part
            save_invoice_item_data();//load saved item data table
            load_hold_invoice_table();
            $('#hold').removeClass("hidden");//show hold item data table

            $('#add_items').removeClass("hidden");//show item data table

        });




        $('#pay_complete').click(function () {//click payment complete button
            get_invoice_num();//change invoice id when click payment complete button
            payment_complete();
            radio_validation();//remove payment complete button when complte payment

        });

        $('#hold_invo').click(function () {//click payment complete button
            check_cre_lim();//check credit limit befor hold data



        });


        $('#amount').keyup(function () {//set balance when click amount key up
            var amount = $(this).val();
            var sub_tot = $('#total_inv').val();

            var balance = parseFloat(sub_tot) - parseFloat(amount);
            var plus_balance = Math.abs(balance);//convert minus values into plus values
            var round_plus_balance = plus_balance.toFixed(2);//limit to 2 decimal places
            $('#due_over').val(round_plus_balance);

            if (amount === '') {
                $('#due_over').val('');
            }
        });


        $('#hold_amount').keyup(function () {//set balance when click hold amount key up
            var hold_amount = $(this).val();
            var remain = $('#hold_remain').val();

            var balance = parseFloat(remain) - parseFloat(hold_amount);
            var plus_balance = Math.abs(balance);//convert minus values into plus values
            var round_plus_balance = plus_balance.toFixed(2);//limit to 2 decimal places
            $('#hold_due').val(round_plus_balance);

            if (hold_amount === '') {
                $('#hold_due').val('');
            }
        });

        $('#hold_back').click(function () {//hold back button

            $('#hold_amount').val('');//clear amount          
            $('#hold_payment').addClass("hidden");
            $('#main_inv').removeClass("hidden");//show main part
            $('#installment').addClass("hidden");//hide hold pay part
            save_invoice_item_data();//load saved item data table
            load_hold_invoice_table();
            $('#hold').removeClass("hidden");//show hold item data table

            $('#add_items').removeClass("hidden");//show item data table

        });

        $('#hold_payment').click(function () {//click add payment  button in hold payment interface
            hold_payment_complete();
            get_invoice_num();//change invoice id when click payment complete button

            radio_validation();//remove payment complete button when complte payment

        });


    </script>

</body>
</html>