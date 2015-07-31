<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $name; ?></title>
        <meta name="description" content="<?php echo $description; ?>">

        <!-- opengraph -->
        <meta property="og:site_name" content="BrokenStuff"/>
        <meta property="og:url" content="<?php echo $site_url . $article_url; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo $name; ?>" />
        <meta property="og:description" content="<?php echo $description; ?>" />
        <meta property="og:image" content="<?php echo $site_url . $picture['proceeded']; ?>" />
        <meta property="og:locale" content="fr_FR" />
        <meta property="article:author" content="https://www.facebook.com/kevin.lagaisse" />
        <meta property="article:publisher" content="https://www.facebook.com/kevin.lagaisse" />
        

        <!-- twitter large card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@kevinlagaisse">
        <meta name="twitter:creator" content="@kevinlagaisse">
        <meta name="twitter:title" content="<?php echo $name; ?>">
        <meta name="twitter:description" content="<?php echo $description; ?>">
        <meta name="twitter:image" content="<?php echo $site_url . $picture['proceeded']; ?>">
    </head>
    <body>
        <!-- schema.org / microformat for report -->
        <div itemscope itemtype="http://schema.org/Event">
            <a itemprop="url" href="<?php echo $site_url . $article_url; ?>">
                <h2 itemprop="name"><?php echo $name; ?></h2>
            </a>
            <meta itemprop="startDate" content="<?php echo date("c", strtotime($add_date)); ?>">
            <?php  echo $add_date; ?>
            <p itemprop="description"><?php echo $description; ?></p>
            <img itemprop="image" src="<?php echo $site_url . $picture['proceeded']; ?>">
        
            <div itemprop="location" itemscope itemtype="http://schema.org/Place">
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="addressLocality"><?php echo $location[0]['name'] ?></span>,
                    <span itemprop="addressCountry">FR</span>
                </div>
                Lieu : <span itemprop="name"><?php echo $location[0]['name'] ?> - <?php echo $location[0]['parent'] ?></span>
                <div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
                    Latitude: <?php echo $location[0]['geolocation']['latitude'] ?>
                    Longitude: <?php echo $location[0]['geolocation']['longitude'] ?>
                    <meta itemprop="latitude" content="<?php echo $location[0]['geolocation']['latitude'] ?>" />
                    <meta itemprop="longitude" content="<?php echo $location[0]['geolocation']['longitude'] ?>" />
                </div>
            </div>
        </div>
    </body>
</html>