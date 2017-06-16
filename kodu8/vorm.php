<!--Thanks hpaves (CSS & TEXTAREA) !-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>8.harjutus</title>
    <?php
    $text="Siia tuleb tekst";
    if (isset($_POST['text']) && $_POST['text']!="") {
        $text=htmlspecialchars($_POST['text']);
    }
    $bg_col="navy";
    if (isset($_POST['bg_color']) && $_POST['bg_color']!="") {
        $bg_col=htmlspecialchars($_POST['bg_color']);
    }
    $fcolor="black";
    if (isset($_POST['fcolor']) && $_POST['fcolor']!="") {
        $fcolor=htmlspecialchars($_POST['fcolor']);
    }
    $bcolor="5";
    if (isset($_POST['bcolor']) && $_POST['bcolor']!="") {
        $bcolor=htmlspecialchars($_POST['bcolor']);
    }
    $bwidth="5";
    if (isset($_POST['bwidth']) && $_POST['bwidth']!="") {
        $bwidth=htmlspecialchars($_POST['bwidth']);
    }
    $bradius="10";
    if (isset($_POST['bradius']) && $_POST['bradius']!="") {
        $bradius=htmlspecialchars($_POST['bradius']);
    }
    ?>

    <style type="text/css">
        .form {
            border-radius: 30px;
            background: yellowgreen;
            padding: 20px;
            margin: 10px;
            width: 300px;
        }
        .feedback {
            border-radius: <?php echo $bradius; ?>px;
            background: <?php echo $bg_col; ?>;
            color: <?php echo $fcolor; ?>;
            padding: 20px;
            margin: 10px;
            width: 220px;
            border-style: double;
            border-color: <?php echo $bcolor; ?>;
            border-width: <?php echo $bwidth; ?>px;
        }
    </style>

</head>
<body>
<h1>8. harjutus</h1>
<div class="feedback">
    <?php echo $text; ?>
</div>
<div class="form">
    <form action="vorm.php" method="POST">
        Tektsi kuvatakse selliselt:<br />
        <textarea type="text" name="text"></textarea><br />
        <input type="color" name="bg_color" value="#ff0010"> Tausta värvus<br />
        <input type="color" name="fcolor"> Teksti värv<br />
        <input type="color" name="bcolor"> Piirjoone värv<br />
        <input type="number" name="bwidth" min="0" max="20"> Piirjoone laius (max 20)<br />
        <input type="number" name="bradius" min="0" max="100"> Piirjoone nurga raadius (max 100)<br />
        <input type="submit" value="sisesta"/>
    </form>

</div>
</body>
</html>

<?php