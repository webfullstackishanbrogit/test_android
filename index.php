<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GW DISTRIBUTORS</title>

    <!-- Vendor CSS -->
    <link href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">



    <!-- CSS -->
    <link href="css/app.min.1.css" rel="stylesheet">
    <link href="css/app.min.2.css" rel="stylesheet">

</head>
<body>
    <?php
    date_default_timezone_set("Asia/Colombo");
    include 'config/core_database.php';
    ?>
    <!--including header-->
    <?php
    include './common/header.php';
    ?>

    <section id="main">
        <!--including sidebar-->
        <?php
        include './common/sidebar.php';
        ?>




        <section id="content">
            <div class="container">
                <div class="block-header">
                    <h2>Dashboard </h2>
                </div>


                <div class="dash-widgets">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div id="pie-charts" class="dash-widget-item">
                                <div class="bgm-amber">
                                    <div class="dash-widget-header">
                                        <div class="dash-widget-title">HARDWARE SALES</div>
                                    </div>
                                    <?php
                                    $sql = "SELECT
SUM(invoice.tot) AS total_hardware
FROM
item_reg
INNER JOIN invoice ON invoice.item_code = item_reg.item_id
WHERE item_reg.item_cat='Hardware' AND(invoice.`status`=1 AND invoice.deleted=0)";
                                    $result = mysql_query($sql);
                                    $fields_num = mysql_fetch_array($result);
                                    $sale_hardware = $fields_num[0];
                                    ?>
                                    <?php
                                    $pesentage = (($sale_hardware * 100) / 1000000);
                                    ?>

                                    <div class="clearfix"></div>

                                    <div class="text-center p-20 m-t-25">
                                        <div class="easy-pie main-pie" data-percent="<?php echo $pesentage; ?>">
                                            <div class="percent"><?php echo round($pesentage, 2); ?></div>
                                            <div class="pie-title">TARGET-1000000Rs HARDWARE ITEM SALES</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-t-20 p-b-20 text-center">
                                    <h4>TOTAL SALES OF HARDWARE ITEMS</h4>

                                    <h3>Rs<?php echo $sale_hardware; ?>/=</h3>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div id="pie-charts" class="dash-widget-item">
                                <div class="bgm-lightblue">
                                    <div class="dash-widget-header">
                                        <div class="dash-widget-title">DURABLE SALES</div>
                                    </div>
                                    <?php
                                    $sql = "SELECT
SUM(invoice.tot) AS total_durable
FROM
item_reg
INNER JOIN invoice ON invoice.item_code = item_reg.item_id
WHERE item_reg.item_cat='Durable' AND(invoice.`status`=1 AND invoice.deleted=0)";
                                    $result = mysql_query($sql);
                                    $fields_num = mysql_fetch_array($result);
                                    $sale_durable = $fields_num[0];
                                    ?>
                                    <?php
                                    $pesentage = (($sale_durable * 100) / 1000000);
                                    ?>

                                    <div class="clearfix"></div>

                                    <div class="text-center p-20 m-t-25">
                                        <div class="easy-pie main-pie" data-percent="<?php echo $pesentage; ?>">
                                            <div class="percent"><?php echo round($pesentage, 2); ?></div>
                                            <div class="pie-title">TARGET-1000000Rs DURABLE ITEM SALES</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-t-20 p-b-20 text-center">
                                    <h4>TOTAL SALES OF DURABLE ITEMS</h4>

                                    <h3>Rs<?php echo $sale_durable; ?>/=</h3>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div id="pie-charts" class="dash-widget-item">
                                <div class="bgm-lightblue">
                                    <div class="dash-widget-header">
                                        <div class="dash-widget-title">PVC SALES</div>
                                    </div>
                                    <?php
                                    $sql = "SELECT
SUM(invoice.tot) AS total_pvc
FROM
item_reg
INNER JOIN invoice ON invoice.item_code = item_reg.item_id
WHERE item_reg.item_cat='PVC' AND(invoice.`status`=1 AND invoice.deleted=0)";
                                    $result = mysql_query($sql);
                                    $fields_num = mysql_fetch_array($result);
                                    $sale_pvc = $fields_num[0];
                                    ?>
                                    <?php
                                    $pesentage = (($sale_pvc * 100) / 1000000);
                                    ?>


                                    <div class="clearfix"></div>

                                    <div class="text-center p-20 m-t-25">
                                        <div class="easy-pie main-pie" data-percent="<?php echo $pesentage; ?>">
                                            <div class="percent"><?php echo round($pesentage, 2); ?></div>
                                            <div class="pie-title">TARGET-1000000Rs PVC ITEM SALES</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-t-20 p-b-20 text-center">
                                    <h4>TOTAL SALES OF PVC ITEMS</h4>

                                    <h3>Rs<?php echo $sale_pvc; ?>/=</h3>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div id="pie-charts" class="dash-widget-item">
                                <div class="bgm-lime">
                                    <div class="dash-widget-header">
                                        <div class="dash-widget-title">FURNITURE SALES</div>
                                    </div>
                                    <?php
                                    $sql = "SELECT
SUM(invoice.tot) AS total_furniture
FROM
item_reg
INNER JOIN invoice ON invoice.item_code = item_reg.item_id
WHERE item_reg.item_cat='Furniture' AND(invoice.`status`=1 AND invoice.deleted=0)";
                                    $result = mysql_query($sql);
                                    $fields_num = mysql_fetch_array($result);
                                    $sale_furniture = $fields_num[0];
                                    ?>
                                    <?php
                                    $pesentage = (($sale_furniture * 100) / 1000000);
                                    ?>


                                    <div class="clearfix"></div>

                                    <div class="text-center p-20 m-t-25">
                                        <div class="easy-pie main-pie" data-percent="<?php echo $pesentage; ?>">
                                            <div class="percent"><?php echo round($pesentage, 2); ?></div>
                                            <div class="pie-title">TARGET-1000000Rs FURNITURE ITEM SALES</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-t-20 p-b-20 text-center">
                                    <h4>TOTAL SALES OF FURNITURE ITEMS</h4>

                                    <h3>Rs<?php echo $sale_furniture; ?>/=</h3>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="dash-widgets">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div id="pie-charts" class="dash-widget-item">
                                <div class="bgm-lightblue">
                                    <div class="dash-widget-header">
                                        <div class="dash-widget-title">TOTAL SALES</div>
                                    </div>
                                    <?php
                                    $sql = "SELECT
SUM(invoice.tot) AS total
FROM
invoice
WHERE invoice.`status`=1 AND invoice.deleted=0";
                                    $result = mysql_query($sql);
                                    $fields_num = mysql_fetch_array($result);
                                    $payment_com = $fields_num[0];
                                    ?>
                                    <?php
                                    $pesentage = (($payment_com * 100) / 1000000);
                                    ?>

                                    <div class="clearfix"></div>

                                    <div class="text-center p-20 m-t-25">
                                        <div class="easy-pie main-pie" data-percent="<?php echo $pesentage; ?>">
                                            <div class="percent"><?php echo round($pesentage, 2); ?></div>
                                            <div class="pie-title">TARGET-1000000Rs COMPLETED SALES</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-t-20 p-b-20 text-center">
                                    <h4>TOTAL NUMBER OF PAYMENT COMPLETED SALES</h4>

                                    <h3>Rs<?php echo $payment_com; ?>/=</h3>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div id="pie-charts" class="dash-widget-item">
                                <div class="bgm-orange">
                                    <div class="dash-widget-header">
                                        <div class="dash-widget-title">HOLD SALES</div>
                                    </div>
                                    <?php
                                    $sql = "SELECT
SUM(invoice.tot) AS total
FROM
invoice
WHERE invoice.`status`=2 AND invoice.deleted=0";
                                    $result = mysql_query($sql);
                                    $fields_num = mysql_fetch_array($result);
                                    $payment_hold = $fields_num[0];
                                    ?>
                                    <?php
                                    $pesentage = (($payment_hold * 100) / 1000000);
                                    ?>

                                    <div class="clearfix"></div>

                                    <div class="text-center p-20 m-t-25">
                                        <div class="easy-pie main-pie" data-percent="<?php echo $pesentage; ?>">
                                            <div class="percent"><?php echo round($pesentage, 2); ?></div>
                                            <div class="pie-title">TARGET-1000000Rs HOLD SALES</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-t-20 p-b-20 text-center">
                                    <h4>TOTAL NUMBER OF HOLD SALES</h4>

                                    <h3>Rs<?php echo $payment_hold; ?>/=</h3>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div id="pie-charts" class="dash-widget-item">
                                <div class="bgm-cyan">
                                    <div class="dash-widget-header">
                                        <div class="dash-widget-title">NUMBER OF ITEMS</div>
                                    </div>
                                    <?php
                                    $sql = "SELECT DISTINCT
COUNT(item_reg.item_code)
FROM
item_reg
WHERE  item_reg.deleted=0";
                                    $result = mysql_query($sql);
                                    $fields_num = mysql_fetch_array($result);
                                    $items_count = $fields_num[0];
                                    ?>
                                    <?php
                                    $pesentage = (($items_count * 100) / 1000);
                                    ?>

                                    <div class="clearfix"></div>

                                    <div class="text-center p-20 m-t-25">
                                        <div class="easy-pie main-pie" data-percent="<?php echo $pesentage; ?>">
                                            <div class="percent"><?php echo round($pesentage, 2); ?></div>
                                            <div class="pie-title">TARGET-1000 ITEMS</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-t-20 p-b-20 text-center">
                                    <h4>TOTAL NUMBER OF ITEMS IN STOCK</h4>

                                    <h3>ITEMS-<?php echo $items_count; ?></h3>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6">
                            <div id="pie-charts" class="dash-widget-item">
                                <div class="bgm-lightblue">
                                    <div class="dash-widget-header">
                                        <div class="dash-widget-title">REGISTERED DEALERS</div>
                                    </div>
                                    <?php
                                    $sql = "SELECT DISTINCT
COUNT(dealer_reg.name)
FROM
dealer_reg
WHERE  dealer_reg.deleted=0";
                                    $result = mysql_query($sql);
                                    $fields_num = mysql_fetch_array($result);
                                    $dealer_count = $fields_num[0];
                                    ?>
                                    <?php
                                    $pesentage = (($dealer_count * 100) / 1000);
                                    ?>

                                    <div class="clearfix"></div>

                                    <div class="text-center p-20 m-t-25">
                                        <div class="easy-pie main-pie" data-percent="<?php echo $pesentage; ?>">
                                            <div class="percent"><?php echo round($pesentage, 2); ?></div>
                                            <div class="pie-title">TARGET-1000 DEALERS</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-t-20 p-b-20 text-center">
                                    <h4>TOTAL NUMBER OF REGISTERED DEALERS</h4>

                                    <h3><?php echo $dealer_count; ?> DEALERS</h3>



                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </section>
    </section>




    <!-- Javascript Libraries -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="vendors/bower_components/flot/jquery.flot.js"></script>
    <script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
    <script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
    <script src="vendors/sparklines/jquery.sparkline.min.js"></script>
    <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

    <script src="vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js "></script>
    <script src="vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
    <script src="vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
    <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>



    <script src="js/flot-charts/curved-line-chart.js"></script>
    <script src="js/flot-charts/line-chart.js"></script>
    <script src="js/charts.js"></script>

    <script src="js/charts.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/demo.js"></script>


</body>
</html>