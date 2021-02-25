<!doctype html>
<html>
<head>
    <title>HUGE</title>
    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css?pa=<?php echo time(); ?>" />
    <?php  //var_dump(Config::get('URL'));  ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <div class="container-fluid p-0 desktop">
        <div class="nav-bar header-main-div"  style="overflow-x:hidden;">
            <div class="row">
                <div class="col " style="top:20px;">
                    <a style="color:#7b88a8; font-weight: bold" href="javascript:scrollToTop(1);" class="horizontal-center">Home</a>
                </div>
                <div class="col " style="top:20px;">
                    <a href="javascript:scrollToTop(2);" class="horizontal-center">Skills</a>
                </div>
                <div class="col " style="top:20px; ">
                    <a href="javascript:scrollToTop(3);" class="horizontal-center">Background</a>
                </div>
                <div class="col " style="top:20px;">
                    <a href="javascript:scrollToTop(4);" class="horizontal-center">Work</a>
                </div>
                <div class="col" style="top:20px; ">
                    <a href="javascript:scrollToTop(5);" class="horizontal-center">Education</a>
                </div>
                <div class="col" style="top:20px; ">
                    <a href="javascript:scrollToTop(6);" class="horizontal-center">Portfolio</a>
                </div>
            </div>
        </div>
    </div>

<!--
    <div class="container-fluid p-0 mobile">
        <div class="dropdown" >
            <button class="dropbtn">Navigation</button>
            <div class="dropdown-content">
                <a href="javascript:scrollToTop(2);" >Skills</a>
                <a href="javascript:scrollToTop(3);" >Background</a>
                <a href="javascript:scrollToTop(4);" >Work</a>
                <a href="javascript:scrollToTop(5);" >Education</a>
                <a href="javascript:scrollToTop(6);" >Portfolio</a>
            </div>
        </div>
    </div>
-->
    <div class="container-fluid p-0 mobile">

    </div>



    <script>
        function scrollToTop(row) {
            switch (row)
            {
                case 1:
                    $('html, body').animate({scrollTop:0},'50');
                    break;
                case 2:
                    $('html, body').animate({scrollTop:650},'50');
                    break;
                case 3:
                    $('html, body').animate({scrollTop:1500},'50');
                    break;
                case 4:
                    $('html, body').animate({scrollTop:1970},'50');
                    break;
                case 5:
                    $('html, body').animate({scrollTop:2370},'50');
                    break;
                case 6:
                    $('html, body').animate({scrollTop:3170},'50');
                    break;
                default:
                    alert('Default case');
                    break;
            }

        }

    </script>

