<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $name; ?></title>
        <meta name="description" content="<?php echo $description; ?>">

        <!-- opengraph -->
        <meta property="og:site_name" content="BrokenStuff"/>
        <meta property="og:url" content="<?php echo $site_url ?>" />
        <meta property="og:type" content="website" />
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
        <!-- schema.org / microformat for website -->
        <div itemscope itemtype="http://schema.org/WebSite">
            <a itemprop="url" href="<?php echo $site_url ?>">
                <h2 itemprop="name"><?php echo $name; ?></h2>
            </a>
                <p itemprop="description"><?php echo $description; ?></p>
                <img itemprop="image" src="<?php echo $site_url . $picture['proceeded']; ?>">
        </div>
    </body>
</html>