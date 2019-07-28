<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeTherapy - Mindfulness & Hypnotherapie bij lichamelijke klachten, afvallen en autisme.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon"                  sizes="57x57"   href="image/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon"                  sizes="60x60"   href="image/favicon//apple-icon-60x60.png">
    <link rel="apple-touch-icon"                  sizes="72x72"   href="image/favicon//apple-icon-72x72.png">
    <link rel="apple-touch-icon"                  sizes="76x76"   href="image/favicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon"                  sizes="114x114" href="image/favicon//apple-icon-114x114.png">
    <link rel="apple-touch-icon"                  sizes="120x120" href="image/favicon//apple-icon-120x120.png">
    <link rel="apple-touch-icon"                  sizes="144x144" href="image/favicon//apple-icon-144x144.png">
    <link rel="apple-touch-icon"                  sizes="152x152" href="image/favicon//apple-icon-152x152.png">
    <link rel="apple-touch-icon"                  sizes="180x180" href="image/favicon//apple-icon-180x180.png">
    <link rel="icon"             type="image/png" sizes="192x192" href="image/favicon//android-icon-192x192.png">
    <link rel="icon"             type="image/png" sizes="32x32"   href="image/favicon//favicon-32x32.png">
    <link rel="icon"             type="image/png" sizes="96x96"   href="image/favicon//favicon-96x96.png">
    <link rel="icon"             type="image/png" sizes="16x16"   href="image/favicon//favicon-16x16.png">
    <link rel="manifest"                                          href="image/favicon//manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="image/favicon//ms-icon-144x144.png">
    <meta name="theme-color"             content="#ffffff">
</head>
<body id="webpage" class="metherapy">
    <section id="home">
        <div class="scaleable_wrapper" id="scaleable_wrapper">
            <div class="metherapy_menu_container" id="metherapy_menu_container">
                <h1>Menu</h1>

                <img class="metherapy_menu_image_border" src="image/menu_image_border.svg" alt="Menu MeTherapy">
<?php
                $i = 0;
                foreach
                (
                    array
                    (
                        'Afspraak' =>
                        'MeTherapy wordt gerund door <a href="https://www.linkedin.com/in/marielle-janssen-b62b402b/" target="_blank">Mari&euml;lle Janssen</a>: maatschappelijk ondernemer, bewegingswetenschapper en integraal psycho- en hypnotherapeut. Mari&euml;lle is aangesloten bij de <a href="https://hypnotherapie.nl/praktijk-pagina/me-therapy-me-coaching/" target="_blank">NBVH</a>, <a href="https://samensterkzorg.nl/de-hulpverleners/mari-lle" target="_blank">SSZ</a>, <a href="https://www.scag.nl/register/?q=Me+Therapy+%26+Me+Coaching" target="_blank">SCAG</a> en <a href="https://www.rbcz.nu" target="_blank">RBCZ</a> waardoor vergoeding mogelijk is vanuit de aanvullende verzekering of jeugdhulp. De behandeling kan overdag of s&rsquo;avonds zowel aan huis, aan de Geuzingerbrink 94 te Emmen als online.',

                        'Mindfulness' =>
                        'Mindfulness helpt je bewust te worden van wat er allemaal in je lichaam en geest gebeurt zonder er nog in te worden gezogen. Deze aanpak is effectief bij autisme, verslavingen, depressie en lichamelijke klachten.',

                        'Hypnotherapie' =>
                        'Hypnotherapie zorgt dat je via hypnose contact krijgt met onbewuste processen. De trance is licht zodat je actief betrokken blijft bij deze verkenning. Deze aanpak is effectief bij het prikkelbaar darmsyndroom, afvallen en psychische klachten die zich lichamelijk uiten.',

                        'Lichamelijke<br/>Klachten' =>
                        'Vaak weet je al veel over je kwaal of klacht, maar ondanks van alles er aan gedaan te hebben, lost het probleem niet op. Integrale psycho- en hypnotherapie maakt gebruik van zowel bewuste als onbewuste processen in jezelf, waardoor klachten verminderen of verdwijnen.',

                        'Afvallen' =>
                        '',

                        'Autisme' =>
                        ''
                    )
                    as $menu_title => $menu_text
                )
                {
                    $menu_ident = str_repeat( " ", 16 );
                    $menu_title_wikipage = strip_tags( str_replace('<', '_<', $menu_title ) );
                    $menu_title_filename = strtolower( $menu_title_wikipage );
                    echo  PHP_EOL . $menu_ident . '<!--' . $menu_title . ' menu -->' . PHP_EOL  . PHP_EOL;
                    echo $menu_ident . '<img id="metherapy_menu_image_0' . $i . '" src="image/metherapy_menu_image_0' . $i . '.svg" alt="Menu Button 0' . $i . ' MeTherapy">' . PHP_EOL;
                    echo $menu_ident . '<a id="metherapy_menu_title0' . $i . '" class="metherapy_button" href="#home">' . $menu_title . '</a>' . PHP_EOL;
                    echo $menu_ident . '<p id="metherapy_menu_text0' . $i . '" class="metherapy_menutext">' . $menu_text . '<br/><br/><i>Lees meer op <a href="https://wiki.metherapy.nl/index.php/' . $menu_title_wikipage . '" target="_blank">Me Wiki.</a></i></p>' . PHP_EOL;
                    echo $menu_ident . '<img id="metherapy_menu_foto0' . $i . '" class="metherapy_menu_foto" src="image/' . $menu_title_filename . '.png" alt="Foto ' . $menu_title . '">' . PHP_EOL;
                    $i++;
                }
?>
                <img class="metherapy_title_me" src="image/logo_naam_me.svg" alt="Logo MeTherapy">
                <img class="metherapy_title_therapy" src="image/logo_naam_therapy.svg" alt="Logo MeTherapy">
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
