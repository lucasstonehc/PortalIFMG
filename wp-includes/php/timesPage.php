<head>
    <title>Demo 4 - with Navigation Buttons</title>
    <link href="futifmg.serveblog.net:8080/wp-includes/php/themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="futifmg.serveblog.net:8080/wp-includes/php/themes/4/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="div1"><h2>Demo 4 - Customize Navigation Controls</h2>
        <p>Demos: <a href="demo1.html">1</a><a href="demo2.html">2</a><a href="demo3.html">3</a><a href="demo4.html" class="current">4</a>
        <a href="demo5.html">5</a><a href="demo6.html">6</a><a href="demo7.html">7</a><a href="demo8.html">8</a></p>
    </div>
    
    
    <div id="sliderFrame">
        <div id="slider">
            <img src="futifmg.serveblog.net:8080/wp-includes/php/images/slider-1.jpg" />
            <img src="futifmg.serveblog.net:8080/wp-includes/php/images/slider-2.jpg" />
            <img src="futifmg.serveblog.net:8080/wp-includes/php/images/slider-3.jpg" />
            <img src="futifmg.serveblog.net:8080/wp-includes/php/images/slider-4.jpg" />
        </div>
        <!--Custom navigation buttons on both sides-->
        <div class="group1-Wrapper">
            <a onclick="imageSlider.previous()" class="group1-Prev"></a>
            <a onclick="imageSlider.next()" class="group1-Next"></a>
        </div>
        <!--nav bar-->
        <div style="text-align:center;padding:20px;z-index:20;">
            <a onclick="imageSlider.previous()" class="group2-Prev"></a>
            <a id='auto' onclick="switchAutoAdvance()"></a>
            <a onclick="imageSlider.next()" class="group2-Next"></a>
        </div>
    </div>


    <div class="div2">
        <p>In Demo 1 and Demo 2, we have introduced two ways of navigation: the built-in <b>Navigation Bullets</b> and the <b>Thumbnails</b>.</p>
        <p>This demo introduces another type of navigation - <b>Navigation Buttons</b>.</p>
        <p>Visit <a href="http://www.menucool.com/slider/javascript-image-slider-demo4" target="_blank">Online Demo 4</a> for more detailed instructions.</p>
        <p>This demo contains no advanced features. It is free to use. License is not required.</p>
    </div>
    <script type="text/javascript">
        //The following script is for the group 2 navigation buttons.
        function switchAutoAdvance() {
            imageSlider.switchAuto();
            switchPlayPauseClass();
        }
        function switchPlayPauseClass() {
            var auto = document.getElementById('auto');
            var isAutoPlay = imageSlider.getAuto();
            auto.className = isAutoPlay ? "group2-Pause" : "group2-Play";
            auto.title = isAutoPlay ? "Pause" : "Play";
        }
        switchPlayPauseClass();
    </script>