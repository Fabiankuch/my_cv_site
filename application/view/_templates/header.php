<!doctype html>
<html>
<head>
    <title>HUGE</title>
    <!-- META -->
    <meta charset="utf-8">
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css?pa=<?php echo time(); ?>" />
    <?php  //var_dump(Config::get('URL'));  ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <div class="navigation header-main-div">
        <div class="row">
            <div class="col " style="top:20px;">
                <a href="javascript:scrollToTop("row2");" class="horizontal-center">Background</a>
            </div>
            <div class="col " style="top:20px; ">
                <a href="javascript:scrollToTop("row2");" class="horizontal-center">Skills</a>
            </div>
            <div class="col " style="top:20px;">
                <a href="javascript:scrollToTop("row2");" class="horizontal-center">Work</a>
            </div>
            <div class="col" style="top:20px; ">
                <a href="javascript:scrollToTop("row2");" class="horizontal-center">Education</a>
            </div>
        </div>
    </div>

    <script>
        function scrollToTop(element) {
            var element_obj = document.getElementById(element);
            element_obj.scrollIntoView(true); // Top
        }
    </script>
<!-- TABS: Background, Skills, Work Experience, Education -->

