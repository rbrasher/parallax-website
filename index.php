<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<title>Parallax Website</title>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />

</head>
<body>
<div
    class="parallax-image-wrapper"
    data-anchor-target="#page-intro"
    data-bottom-top="transform:translateY(200%)"
    data-top-bottom="transform:translateY(0)">

    <div
        class="parallax-image"
        style="background-image:url(img/coast.jpg)"
        data-anchor-target="#page-intro"
        data-bottom-top="transform: translateY(-80%);"
        data-top-bottom="transform: translateY(80%);"
        >

    </div>
</div>
<div
    class="parallax-image-wrapper"
    data-anchor-target=".body-text + .gap"
    data-bottom-top="transform:translateY(200%)"
    data-top-bottom="transform:translateY(0)">

    <div
        class="parallax-image"
        style="background-image:url(img/palmtrees.jpg)"
        data-anchor-target=".body-text + .gap"
        data-bottom-top="transform: translateY(-80%);"
        data-top-bottom="transform: translateY(80%);"
        >

    </div>
</div>
<div
    class="parallax-image-wrapper"
    data-anchor-target=".features-list + .gap"
    data-bottom-top="transform:translateY(200%)"
    data-top-bottom="transform:translateY(0)">

    <div
        class="parallax-image"
        style="background-image:url(img/bay.jpg)"
        data-anchor-target=".features-list + .gap"
        data-bottom-top="transform: translateY(-80%);"
        data-top-bottom="transform: translateY(80%);"
        >

    </div>
</div>
<div
    class="parallax-image-wrapper"
    data-anchor-target=".about-us + .gap"
    data-bottom-top="transform:translateY(200%)"
    data-top-bottom="transform:translateY(0)">

    <div
        class="parallax-image"
        style="background-image:url(img/sea.jpg)"
        data-anchor-target=".about-us + .gap"
        data-bottom-top="transform: translateY(-80%);"
        data-top-bottom="transform: translateY(80%);"
        >

    </div>
</div>
    
<div id="skrollr-body">

    <div id="page-intro" class="gap" style="background-image:url(img/coast.jpg); ">
        <h1>Parallax Website</h1>
        <a href="javascript: void(0);" class="btn">Learn More</a>
    </div>

    <div class="body-text content">

        <h2>Body Text</h2>

        <p data-300-center-top="transform: scale(0.8); opacity: 0" data-300-center-center="transform: scale(1); opacity: 1">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida in odio vel tincidunt. Fusce quis lectus accumsan, accumsan nibh sed, aliquet purus. In vitae velit eu est cursus malesuada sed ut nibh. Curabitur a leo enim.
        </p>


        <p data-200-center-top="transform: scale(0.8); opacity: 0" data-200-center-center="transform: scale(1); opacity: 1">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida in odio vel tincidunt. Fusce quis lectus accumsan, accumsan nibh sed, aliquet purus. In vitae velit eu est cursus malesuada sed ut nibh. Curabitur a leo enim.
        </p>

        <p data-100-center-top="transform: scale(0.8); opacity: 0" data-100-center-center="transform: scale(1); opacity: 1">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida in odio vel tincidunt. Fusce quis lectus accumsan, accumsan nibh sed, aliquet purus. In vitae velit eu est cursus malesuada sed ut nibh. Curabitur a leo enim.
        </p>

    </div>

    <div class="gap" style="background-image:url(img/palmtrees.jpg); "></div>

    <div class="features-list">

        <h2>Features</h2>

        <div data-100-bottom-top="transform: translateX(-200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
            <i class="material-icons">cloud_done</i>
            <h4>10 GB of free <b>cloud storage</b></h4>
        </div>

        <div data-100-bottom-top="transform: translateY(200px); opacity: 0" data-center-top="transform: translateY(0px); opacity: 1">
            <i class="material-icons">public</i>
            <h4>Servers in over <b>45 locations</b></h4>
        </div>

        <div data-100-bottom-top="transform: translateX(200px); opacity: 0" data-center-top="transform: translateX(0px); opacity: 1">
            <i class="material-icons">security</i>
            <h4>Guaranteed <b>data protection</b></h4>
        </div>

    </div>

    <div class="gap" style="background-image:url(img/bay.jpg); "></div>


    <div class="about-us">

        <h2>About us</h2>

        <div data-150-bottom-center="transform: rotate(-90deg); opacity: 0" data-150-center-center="transform: rotate(0); opacity: 1">
            <img src="img/avatars/1.jpg" alt="avatar">
        </div>

        <div data-100-bottom-center="transform: rotate(-90deg); opacity: 0" data-100-center-center="transform: rotate(0); opacity: 1">
            <img src="img/avatars/2.jpg" alt="avatar">
        </div>

        <div data-50-bottom-center="transform: rotate(-90deg); opacity: 0" data-50-center-center="transform: rotate(0); opacity: 1">
            <img src="img/avatars/3.jpg" alt="avatar">
        </div>

        <div data-150-bottom-center="transform: rotateY(-90deg); opacity: 0" data-150-center-center="transform: rotate(0); opacity: 1">
            <img src="img/avatars/4.jpg" alt="avatar">
        </div>

        <div data-100-bottom-center="transform: rotateY(-90deg); opacity: 0" data-100-center-center="transform: rotate(0); opacity: 1">
            <img src="img/avatars/5.jpg" alt="avatar">
        </div>

        <div data-50-bottom-center="transform: rotateY(-90deg); opacity: 0" data-50-center-center="transform: rotate(0); opacity: 1">
            <img src="img/avatars/6.jpg" alt="avatar">
        </div>

    </div>

    <div class="gap" style="background-image:url(img/sea.jpg);"></div>

    <div class="gallery"></div>


    <footer>

        <div class="footer-left">

            <h3>Company Logo</h3>

            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">Blog</a>
                ·
                <a href="#">Pricing</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Faq</a>
                ·
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Company Name &copy; 2015</p>

        </div>

        <div class="footer-right"  data-bottom-top="max-width: 200px;" data-bottom-bottom="max-width: 600px;">

            <form method="get" action="#">
                <input placeholder="Search our website"  />
                <i class="material-icons">search</i>
            </form>

        </div>

    </footer>


</div>




<div class="scroll-pause" data-anchor-target=".gallery" data-100p-top-top="transform:translateY(100%);" data-top-top="transform:translateY(0%)" data--150p-top-top="" data--300p-top-top="transform:translateY(-100%)">

    <div class="row" data-anchor-target=".gallery" data-top-top="transform: translateX(0%);" data--150p-top-top="transform: translateX(-50%);">
        <div style="background-image:url(img/small/coast.jpg);" ></div>

        <div style="background-image:url(img/small/palmtrees.jpg);" ></div>

        <div style="background-image:url(img/small/bay.jpg);" ></div>

        <div style="background-image:url(img/small/sea.jpg);" ></div>

        <div style="background-image:url(img/small/coast.jpg);" ></div>

        <div style="background-image:url(img/small/palmtrees.jpg);" ></div>

        <div style="background-image:url(img/small/bay.jpg);" ></div>

        <div style="background-image:url(img/small/sea.jpg);" ></div>
    </div>


    <div class="row" data-anchor-target=".gallery" data-top-top="transform: translateX(-50%);" data--150p-top-top="transform: translateX(0);">

        <div style="background-image:url(img/small/sea.jpg);" ></div>

        <div style="background-image:url(img/small/bay.jpg);" ></div>

        <div style="background-image:url(img/small/palmtrees.jpg);" ></div>

        <div style="background-image:url(img/small/coast.jpg);" ></div>

        <div style="background-image:url(img/small/sea.jpg);" ></div>

        <div style="background-image:url(img/small/bay.jpg);" ></div>

        <div style="background-image:url(img/small/palmtrees.jpg);" ></div>

        <div style="background-image:url(img/small/coast.jpg);" ></div>

    </div>

</div>
    
<script type="text/javascript" src="js/skrollr.min.js"></script>
<script>
    skrollr.init();
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>