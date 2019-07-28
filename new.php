<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeTherapy - Mindfulness & Hypnotherapie bij lichamelijke klachten, afvallen en autisme.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
<body id="webpage" class="metherapy">
    <section id="home">
        <div class="scaleable-wrapper" id="scaleable-wrapper">
            <div class="very-specific-design" id="very-specific-design">
                <h1>Menu</h1>

                <img class="metherapy_menu_left_Border" src="images/Menu_Button_00_MeTherapy.svg" alt="Menu MeTherapy">
                <img id="metherapy_menu_left_00" class="metherapy_home_icon" src="images/baseline-home-24px.svg" alt="Home Icon">
                <img id="metherapy_menu_left_01" class="metherapy_menu_left" src="images/Menu_Button_01_MeTherapy.svg" alt="Menu Button 01 MeTherapy">
                <img id="metherapy_menu_left_02" class="metherapy_menu_left" src="images/Menu_Button_02_MeTherapy.svg" alt="Menu Button 02 MeTherapy">
                <img id="metherapy_menu_left_03" class="metherapy_menu_left" src="images/Menu_Button_03_MeTherapy.svg" alt="Menu Button 03 MeTherapy">
                <img id="metherapy_menu_left_04" class="metherapy_menu_left" src="images/Menu_Button_04_MeTherapy.svg" alt="Menu Button 04 MeTherapy">
                <img id="metherapy_menu_left_05" class="metherapy_menu_left" src="images/Menu_Button_05_MeTherapy.svg" alt="Menu Button 05 MeTherapy">

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
                        'Vaak weet je al (jaren lang) veel over je kwaal of klacht, maar ondanks van alles er aan gedaan te hebben, lost het probleem niet op. Integrale psycho- en hypnotherapie maakt gebruik van onbewuste processen in jezelf, waardoor het kwartje nu eindelijk kan vallen en klachten verminderen of verdwijnen.',

                        'Afvallen' =>
                        '',

                        'Autisme' =>
                        ''
                    )
                    as $menu_title => $menu_text
                )
                {
                    echo '<!--' . $menu_title . ' menu -->' . PHP_EOL;
                    echo '<a id="metherapy_menu_title0' . $i . '" class="metherapy_button" href="#home">' . $menu_title . '</a>' . PHP_EOL;
                    echo '<p id="metherapy_menu_text0' . $i . '" class="metherapy_menutext">' . $menu_text . '<br/><br/><i>Lees meer op <a href="http://wiki.metherapy.nl" target="_blank">Me Wiki.</a></i></p>';
                    $i++;
                }
?>

                <img id="metherapy_foto00" class="metherapy_foto" src="image/afspraak.png" alt="Foto Meisje">
                <img id="metherapy_foto01" class="metherapy_foto" src="image/psychosociaal.png" alt="Foto Meisje">
                <img id="metherapy_foto02" class="metherapy_foto" src="images/wanneer.jpg" alt="Foto Klachten">
                <img id="metherapy_foto03" class="metherapy_foto" src="images/wat.jpg" alt="Foto">
                <img id="metherapy_foto04" class="metherapy_foto" src="images/pasfoto.jpg" alt="Pasfoto">
                <img id="metherapy_foto05" class="metherapy_foto" src="images/waar.png" alt="Foto">

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
