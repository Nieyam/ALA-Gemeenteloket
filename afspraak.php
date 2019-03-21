<html>
<head>
  <link rel="stylesheet" type="text/css" href="tess.css">
  <title>Gemeente New York</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
<!--Hier eindigt de NAV bar -->

<!--Hier begint de Body-->
<body>
  <div class="container">
    <div class="right-div right-text" style="max-width: 800px">
        <div class="box-title"> <h2>Afspraak maken</h2></div>
        <form name="formulier"
            method = "POST">

             <!-- LET OP tekst -->
            <p><h5> LET OP! U moet alle velden invullen anders wordt de afspraak niet gemaakt.</h5></p>

        <table cellspacing="2" cellpadding="2">
                <tr>
                        <!--Tijdstip-->
                    <td> <label style=color:black;>Waarvoor wilt u een afspraak maken:</label> </td>
                    <td> <select name="afspraak">
                            <option value="paspoort">Paspoort</option>
                            <option value="uittreksel">Uittreksel</option>
                            <option value="kapvergunning">Kapvergunning</option>
                        </select>
                    </td>
                </tr>
                <tr>
                        <!--Voornaam-->
                    <td> <label style=color:black;>Voornaam:</label> <br> </td>
                    <td> <input required type="text" placeholder="Voornaam"
                        name="vnaam"> </td>
                </tr>
                <tr>
                        <!--Achternaam-->
                    <td> <label style=color:black;>Achternaam:</label> <br> </td>
                    <td> <input required type="text" placeholder="Achternaam"
                        name="anaam"> </td>
                </tr>
                <tr>
                        <!--Leeftijd-->
                    <td> <label style=color:black;>Leeftijd:</label> <br> </td>
                    <td> <input required type="number"  placeholder="Leeftijd"
                        name="ltijd"> </td>
                </tr>
                <tr>
                        <!--Adres-->
                    <td> <label style=color:black;>Adres:</label> </td>
                    <td> <input required type="text" placeholder="Adres"
                        name="adres"> </td>
                </tr>
                <tr>
                        <!--Postcode-->
                    <td> <label style=color:black;>Postcode:</label> </td>
                    <td> <input required type="text" placeholder="Postcode"
                        name="postcode"> </td>
                </tr>
                <tr>
                        <!--Plaats-->
                    <td> <label style=color:black;>Plaats:</label> </td>
                    <td> <input required type="text" placeholder="Plaats"
                        name="plaats"> </td>
                </tr>
                <tr>
                        <!--Email-->
                    <td> <label style=color:black;>Email:</label> </td>
                    <td> <input required type="text" placeholder="Email"
                        name="email"> </td>
                </tr>
                <tr>
                        <!--Tijdstip-->
                    <td> <label style=color:black;>Tijdstip van afspraak:</label> </td>
                    <td> <select name="tijdstip">
                            <option value="08:30">08:30</option>
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> <br> </td>
                    <td> <textarea name="extra" placeholder="Heeft u nog iets te melden?" style="height:80px"></textarea> </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="submit" value="Verzend" onclick="alert('Afspraak is gemaakt!')"> </td>
                </tr>
        </table>
        </form>
</div>
</div>

</body>
<!--Hier eindigt de Body-->

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
    if(isset($_POST['submit']))
    {
        $afspraak = $_POST['afspraak'];
        $vnaam = $_POST['vnaam'];
        $anaam = $_POST['anaam'];
        $ltijd = $_POST['ltijd'];
        $adres = $_POST['adres'];
        $postcode = $_POST['postcode'];
        $plaats = $_POST['plaats'];
        $email = $_POST['email'];
        $tijdstip = $_POST['tijdstip'];
        $extra = $_POST['extra'];

        $file = fopen("Afspraken/Afspraak.txt","w+") or die ("file not open");

        $s = $afspraak."\r\n".$vnaam."\r\n".$anaam." ".$ltijd."\r\n".$adres."\r\n".$postcode."\r\n".$plaats."\r\n".$email."\r\n".$tijdstip."\r\n".$extra."\n";
        fputs($file,$s) or die ("Data not write");
        fclose($file);
    }
?>
