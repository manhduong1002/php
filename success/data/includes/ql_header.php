<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="author" content="Nguyen Thai Hoc" />

	<link rel="stylesheet" type="text/css" href="css/tooltips.css" />

    <link rel="stylesheet" type="text/css" href="css/quanly.css" />

	<link rel="stylesheet" type="text/css" href="../css/datepicker.css" /> 

	<script type="text/javascript" src="../js/datepicker.js"></script> 

    <script type="text/javascript" src="../js_common/common.js"></script>

    <script type="text/javascript" src="../js/public.js"></script>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="ckeditor/config.js"></script>

	<link rel="stylesheet" type="text/css" media="all" href="../date/jsDatePick_ltr.min.css" />

<!-- 

	OR if you want to use the calendar in a right-to-left website

	just use the other CSS file instead and don't forget to switch g_jsDatePickDirectionality variable to "rtl"!

	

	<link rel="stylesheet" type="text/css" media="all" href="../date/jsDatePick_ltr.css" />

-->

<script type="text/javascript" src="../date/jsDatePick.min.1.3.js"></script>

<!-- 

	After you copied those 2 lines of code , make sure you take also the files into the same folder :-)

    Next step will be to set the appropriate statement to "start-up" the calendar on the needed HTML element.

    

    This example is of the direct HTML appending calendar version which can be used

    in two ways. with a stripped mode or without.

    

    BUT - in both cases , it simply attaches to an HTML element and stays there.    

    

    When used in this way , you will have to make a javascript function that will be registered

    as an event handler of the clicking action on each day.

    

    This is done easily like shown in the example.

-->

 <script type="text/javascript"

src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>



     <script type="text/javascript">

        $(document).ready(function() {

        $('#nav li a').hover(function() {

            $(this)

            .parent('li')

            .find('p')

            .css({

                position:'absolute',

                left: '260px',

                top: '-20px'

                

                })

            .removeClass('hidden')

            .stop()

            .animate({opacity: 1}, 'fast');

        }, function() {

            $(this)

            .parent()

            .find('p')

            .stop()

            .animate({opacity: 0}, 'fast');

        });

        });

     </script>

	<title><?php echo $page_title; ?></title>

</head>

<body>

    <div id="wrap">

        <div id="header">

            <div id="header_wrap">

                <div id="header1">

                <a class="tc" target="_blank" href="../index.php" title="quay lại trang chủ">Trang chủ</a>

                    <?php

                        if(isset($_SESSION['manv'])){

                            echo "<a class='hi' title='Thoát ra' href='../thoat.php'>Thoát</a>";

                            echo "<span>Xin chào ".$_SESSION['manv']."</span>";

                        }

                    ?>

                </div>

                <div id="header2"><h1><?php echo $page_title; ?></h1></div>

            </div>

        </div><!-- end #header -->