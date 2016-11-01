<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CityTrack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/>
</head>
<body>

<?php include 'inc/menu.php';?>

<div id="users">
    <div class="splash-block"></div>

    <div class="container separator">
        <h1 class="separator-content"><img src="img/logo.png" height="63px"></h1>
    </div>

    <div class="block1 block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="img/logo.png" height="63px">
                    <h2 class="text-blue">What is CityTrack?</h2>
                    <div class="text-light users-description">
                        <p>CityTrack is an application in development designed to make your life easier. 
                        Once the app is finished, it will guide you around Tampere city centre, both 
                        indoors and outdoors. It will also inform you of possible interesting events 
                        near you,  and have awesome offers from local businesses.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/logo.png" height="63px">
                    <h2 class="text-blue">Possibilities</h2>
                    <div class="text-light users-description">
                        <p class="text-truncate">In the future, CityTrack app will combine open data from different resources. 
                        It will know if there are traffic jams, when the next bus to your destination is 
                        coming, where to park your car if you want to take a train from the railway 
                        station, and much more.</p>
                        <p>The app’s indoor positioning is made possible with 
                        wireless networks and Bluetooth low energy technology.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/logo.png" height="63px">
                    <h2 class="text-blue">Download the app</h2>
                    <div class="text-light users-description">
                        <p>The app is only developed for Android at first, iOS app unfortunately won’t 
                        be available as fast. The first version of the Android app should be available
                         for download in Google’s Play Store towards the end of the year 2016. More 
                         accurate information will be published here later.</p>
                         <p>Some partners will 
                         develop their own apps on top of our CityTrack app, a link to those apps 
                         will also be posted here once those apps are available in Play Store.</p>
                     </div>
                </div>
            </div>
        </div>         
    </div>

    <div class="block2 block">
        <div class="container">
            <div class="row text-center">
                <h2 class="text-blue">Would you like to test CityTrack?</h2>
                <p class="text-light">Make a reservation</p>
            </div>
        </div>
    </div>
            




        </div>
    

    <?php include 'inc/partners.php';?>
    <?php include 'inc/footer.php';?>
    
</body>
</html>