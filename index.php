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

<div id="main">
    <div class="splash-block">
        <div class="container">
            <img src="img/phone.png" id="img-phone">
        </div>  
    </div>

    <div class="container separator">
            <h1 class="separator-content"><img src="img/logo.png" height="63px"></h1>
    </div>

    <div id="block1" class="block">
        <div class="container">
            <div class="row">
                <h2 class="text-center text-blue col-lg-6 col-lg-push-3 col-md-8 col-md-push-2 col-sm-10 col-sm-push-1 col-xs-12">
                    Indoor and outdoor positioning in Tampere city centre area
                </h2>
            </div>
                <p class="text-center text-light">
                    CityTrack project will become an unique urban test site for the design, development and piloting of modern 
                    mobility services and service-rich dense urban venues. CityTrack helps companies create a highly personalized,
                    seamless and data-driven cross-channel event and shopping experience at Tampere station area 
                    both indoors and outdoors.
                </p>
            
        </div>
    </div>

    <div id="block2" class="block">
        <div class="container">
            <div class="row">
                <p class="text-center col-md-6 col-sm-12 margin-0 text-light">
                    CityTrack provides tools and analyzed information for venue owners to enhance their 
                    services in dense urban areas. This is achieved through combining contextual awareness 
                    of location data, traffic and people flow which includes open traffic data, customer
                    preferences, and customer engagement. <span class="text-blue text-regular"> In Tampere 
                    city centre around the railway station </span> CityTrack area includes <span class="text-blue text-regular"> 
                    shopping malls, parking halls, event venues, university campus, 
                    tourist attractions, and conference facilities. </span>
                </p>
                <div class="col-md-6 col-sm-12">
                    <div class="embed-video embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/HGRl9iePLFc" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <div id="block3" class="block">
         <div class="container">
            <div class="row">
                 <p class="text-center col-sm-12 text-light">
                     The positioning works indoors with wireless Internet, radio and bluetooth technology. 
                     The system uses Here positioning software. Therefore CityTrack offers seamless outdoor
                      to indoors positioning, routing and maps. CityTrack also counts in bus and train 
                      traffic, events, shopping times, and weather. The services and applications developed 
                      in the area can be exported to any other location using Here assets.
                 </p>
            </div>
        </div>
    </div>

    <?php include 'inc/partners.php';?>
    <?php include 'inc/footer.php';?>
	
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/jquery.matchHeight.js" type="text/javascript"></script>
<script src="js/main.js"></script>
</body>
</html>