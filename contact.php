<html>
<head>
  <link rel="stylesheet" type="text/css" href="tess.css">
  <title>Gemeente New York</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
#formuliertje {
    box-shadow: 1px 1px 4px;
    border: double;
}
</style>
</head>
<header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-sm bg-white navbar-white">

  <!-- Brand/logo -->
    <img id="logo" src="nnyy.gif" alt="logo" height="150px" width="200px">
<nav role="navigation">
  <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="over.php">Over</a></li>
      <li><a href="afspraak.php">Afspraak</a></li>
      <li><a href="info.php">Informatie</a>
      <ul class="dropdown">
              <li><a href="paspoort.php">Paspoort</a></li>
              <li><a href="uittreksel.php">Uittreksel</a></li>
              <li><a href="kapvergunning.php">Kapvergunning</a></li>
      </ul>
  </li>
      <li><a href="toerismenl.php">Toerisme</a></li>
      <li><a href="contact.php">Contact</a></li>
  </ul>
  </nav>
</header>

<body>
  <div class="container">

    <div class="right-div right-text" style="max-width: 800px">
        <div class="box-title"> <h2>Contact</h2></div>
        <form name="formulier"
        action = "mailto: nieyambusiness@gmail.com"
        method = "POST"
        entcode="text/plain">

        <div id="formuliertje">

        <table cellspacing="2" cellpadding="2">

            <tr>
                    <!--Voornaam-->
                <td> <label for="vnaam" style=color:black;>Voornaam:</label> <br> </td>
                <td> <input required type="text"
                    name="voornaam" placeholder="Voornaam"> </td>
            </tr>
            <tr>
                    <!--Achternaam-->
                <td> <label style=color:black;>Achternaam:</label> <br> </td>
                <td> <input required type="text" placeholder="Achternaam"
                    name="anaam"> </td>
            </tr>
            <tr>
                    <!--Email-->
                <td> <label style=color:black;>Email:</label> </td>
                <td> <input required type="text" placeholder="Email"
                    name="email"> </td>
            </tr>
            <tr>
                    <!--Telefoon nummer-->
                <td> <label style=color:black;>Telefoonnummer:</label> </td>
                <td> <input required type="number" placeholder="Telefoonnummer"
                    name="nummer"> </td>
            </tr>
            <tr>
                    <!--Adres-->
                <td> <label style=color:black;>Adres:</label> </td>
                <td> <input required type="text" placeholder="Adres"
                    name="adres"> </td>
            </tr>
            <tr>
                <td> <br> </td>
                <td> <textarea name="extra" placeholder="Heeft u nog iets te melden?"  style="width:244px; height:105px;"></textarea> </td>
            </tr>
            <tr>
                    <!--Verzend knop-->
                <td> <input type="submit" name="submit" value="Verzend"> </td>
            </tr>
        </table>
        </div>
        </form>
</div>
</div>

</body>

<!--Footer-->
<footer>
  <div class="gegevens">
      <table>
        <tr>
            <td>Stadhuisplein 1</td>
            <td>Postbus 15</td>
            <td>Volg ons op:</td>
        </tr>
        <tr>
            <td>2711 EC New York</td>
            <td>2700 AA New York</td>
            <td><a href="https://nl-nl.facebook.com/" target="_blank"> <img src="33702.png" alt="facebook" style="width: 20px; height: 20px"></a>
            <a href="https://www.instagram.com/?hl=nl" target="_blank"><img src="87390.png" alt="instagram" style="width: 20px; height: 20px"></a>
            <a href="https://twitter.com/?lang=nl" target="_blank"><img src="23931.png" alt="twitter" style="width: 20px; height: 20px"></a></td>
        </tr>
        <tr>
            <td>Email: info@gemeentenewyork.nl</td>
            <td>Telefoonnummer: 14 079</td>
        </tr>

      </table>
  </div>
</footer>
</html>

<?php

if (isset($_POST['submit'])) {
    $a = $_POST['vnaam'];
    $b = $_POST['anaam'];
    $c = $_POST['email'];
    $d = $_POST['nummer'];
    $e = $_POST['adres'];
    $f = $_POST['extra'];

    $jestinkt = $a."\r\n".$b."\r\n".$c."\r\n".$d."\r\n".$e."\r\n".$f."\r\n";
    echo rand(0, $jestinkt);
    echo "
        Naam: $a $b \r\n
        Email: $c \r\n
        Nummer: $d \r\n
        Adres: $e \r\n
        Toevoeging: $f \n";
}
?>
