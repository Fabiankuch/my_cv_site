<!DOCTYPE html>

<div class="container-fluid" style="margin-top: 80px;">

    <div class="row" id="row1">
        <div class="col div_block_blue" >
            <div class="horizontal-center elementToFadeIn" style="top:200px;">
                <h1 class="main_name_title">Hi, I'm Fabian, a software developer</h1><br>
                <button class="button-standard">Email me</button>
            </div>
        </div>
        <div class="col div_block_blue " >
            <div class="elementToFadeIn">
                <img  src="/_images/title_image_me.jpeg" alt="Me" style="width:600px; height:600px; top: 50px " class="horizontal-center">
            </div>
        </div>
    </div>

    <div class="row hideme" id="row2">
        <div class="col div_block_white" style="height: 850px;">
            <div class="horizontal-center" style="top:100px; ">
                <h1 class="homepage-h1"> MY SKILLS </h1><br>
                <img src="/_images/working_skills.PNG" style="width:970px; height:550px" alt="skills" class="horizontal-center">
            </div>
        </div>
    </div>

    <div class="row hideme" id="row3">
        <div class="col div_block_blue" style="height:400px;">
            <div class="horizontal-center" style="top: 140px;">
                <h1 class="homepage-h1">-MY BACKGROUND</h1><br>
            </div>
        </div>
        <div class="col div_block_blue" style="height:400px;">
            <div class="vertical-center" style="width:500px;">
                <p>I’ve gone through a number of phases in my career, and each of them has informed my current work ethos and philosophy. I have excelled in a number of project management roles in diverse industries, and believe that my number one asset is my ability to adapt to any challenge that is thrown my way.</p>
            </div>
        </div>
    </div>
    <div class="row hideme" id="row4">
        <div class="col div_block_white" style="height:400px;">
            <div class="horizontal-center" style="top:100px;">
                <h1 class="homepage-h1">-MY WORK EXPERIENCE </h1><br>
                <p>I’ve gone through a number of phases in my career, and each of them has informed my current work ethos and philosophy. I have excelled in a number of project management roles in diverse industries, and believe that my number one asset is my ability to adapt to any challenge that is thrown my way.</p>
            </div>

        </div>
    </div>
    <div class="row hideme" id="row5">
        <div class="col div_block_blue" style="height:400px;">
            <div class="horizontal-center" style="top:100px;">
                <h1 class="homepage-h1">-MY EDUCATION</h1><br>
                <p>I’ve gone through a number of phases in my career, and each of them has informed my current work ethos and philosophy. I have excelled in a number of project management roles in diverse industries, and believe that my number one asset is my ability to adapt to any challenge that is thrown my way.</p>
            </div>

        </div>
    </div>
<div class="row hideme" id="row16">
    <div class="col div_block_purple" style="height:400px;">
        <div class="horizontal-center" style="top:100px;">
            <h1 class="">“Some really really inspirational brainfart which lets people think I am really smart and a deep thinker, but to be honest, I saw it online and just copy-pasted it”
                </h1><br>
            <p>- My Brain </p>
        </div>

    </div>
</div>

    <script>
        $(document).ready(function() {

            /* Every time the window is scrolled ... */
            $(window).scroll( function(){

                /* Check the location of each desired element */
                $('.hideme').each( function(i){

                    var bottom_of_object = $(this).position().top + $(this).outerHeight();
                    var bottom_of_window = $(window).scrollTop() + $(window).height();

                    /* If the object is completely visible in the window, fade it it */
                    if( bottom_of_window > bottom_of_object -300 ){

                        $(this).animate({'opacity':'1'},1000);
                    }
                });

            });

            function scrollToTop(element) {
                var element_obj = document.getElementById(element);
                element_obj.scrollIntoView(true); // Top
            }


        });
    </script>








</div>




