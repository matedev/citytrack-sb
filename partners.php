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
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
            	<span><img id="logo" src="img/logo.png" alt="" height="35px"></span>
            	<span>CityTrack</span>
            </a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="#">Citytrack</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="partners">
    <div class="splash-block">
    </div>

    <div id="block1" class="block">
        <div class="container">

            <div class="separator">
                <h1 class="separator-content"><img src="img/logo.png" height="63px"></h1>
            </div>
            <div class="row">
                <h2 class="text-center text-blue col-lg-6 col-lg-push-3 col-md-8 col-md-push-2 col-sm-10 col-sm-push-1 col-xs-12">
                    Interested in the pilot?
                </h2>
            </div>
                <p class="text-center text-light">
                    Are you interested in joining the Citytrack piloting project? Do you own a business in Tampere city centre? 
                    Could your customers for example benefit from indoor positionging? 
                    Or do you have other ideas and are looking for someone to achieve them with?
                </p>
                <p class="text-center padding-t30">
                    If you think CityTrack could be the right thing for your business, please contact us! 
                    <br>Send e-mail to <a href="mailto:marko.luomi@uta.fi">marko.luomi@uta.fi</a>.
                </p>
                <p class="text-center padding-50">
                    <button type="button" class="btn btn-blue" data-toggle="modal" href='#modal-contact'>Contact Us</button>
                </p>
        </div>
    </div>


    <div class="container separator">
            <h1 class="separator-content">CityTrack Project Partners</h1>
    </div>

    <div id="block3" class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="img/logo-beemray.jpg">
                </div>
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="img/logo-allbright.jpg">
                </div>
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="img/logo-here.jpg">
                </div>
            </div>  
            <div class="row">
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="img/logo-sryhma.jpg">
                </div>
                <div class="col-md-4 col-sm-6 img-container clear-both">
                    <span class="helper"></span><img class="img-class" src="img/logo-finnpark.jpg">
                </div>
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="img/logo-talo.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="img/logo-tampere.jpg">
                </div>
                <div class="col-md-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="img/logo-kesko.jpg">
                </div>
                <div class="col-md-4 col-sm-6 img-container clear-both">
                    <span class="helper"></span><img class="img-class" src="img/logo-tredea.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-push-4 col-sm-6 img-container">
                    <span class="helper"></span><img class="img-class" src="img/logo-uta.jpg">
                </div>
            </div>
        </div>
    </div>

    <?php include 'modals.php';?>
    <?php include 'footer.php';?>

</div>  

<footer class="text-center">
	<small class="text-blue text-light" >2016 &copy; All rights reserved</small>
</footer>
	
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/jquery.matchHeight.js" type="text/javascript"></script>
<script src="js/main.js"></script>
</body>
</html>