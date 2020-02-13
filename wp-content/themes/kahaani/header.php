<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is a platform to inspire people through some zidd ki kahaani.

     If your story is Kahaani zidd ki them contact with us, tell your zidd ki kahaani to inspire or motivate other people with your story and we share your story to everyone. " />
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
     <?php wp_head(); ?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
</head>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5251538.js"></script>
<!-- End of HubSpot Embed Code -->
<body <?php body_class();  ?>>
<!--   Start Main Slider area  -->
<header class="navbar-fixed-top clearHeader">

<div class="container">

<div class="navbar-header">

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>                        
</button>

<a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo get_theme_file_uri('img/logo.png')?>" type="image/jpg"></a>

</div>

<div class="collapse navbar-collapse" id="myNavbar">
<?php wp_nav_menu(array(
    'theme_location' => 'headerMenuLocation',
    'menu_class' => 'nav navbar-nav' 
));?>
</div>

</div>

</header>