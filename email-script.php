<?php
if (isset($_POST['sendMailBtn'])) {
  $firstName = $_POST['etunimi'];
  $lastName = $_POST['sukunimi'];
  $fromEmail = $_POST['fromEmail'];
  $toEmail = "jarmo.laakko@hotmail.com";
	$puh = $_POST['puh'];
	$K_osoite = $_POST['K_osoite'];
	$K_neliomaara = $_POST['K_neliomaara'];
  $K_kerros = $_POST['K_kerros'];
	$K_talotyyppi = $_POST['K_talotyyppi'];
	$K_hissi = $_POST['K_hissi'];
	$K_varasto = $_POST['K_varasto'];
	$K_kantaja = $_POST['K_kantaja'];

	$M_osoite = $_POST['M_osoite'];
  $M_Kerros = $_POST['M_Kerros'];
	$M_Talotyyppi = $_POST['M_Talotyyppi'];
	$M_hissi = $_POST['M_Hissi'];
	$M_varasto = $_POST['M_varasto'];
  $Maksutapa = $_POST['maksutapa'];
  $message = $_POST['message'];

   //Tarkista, että käyttäjä kirjoittaa oikeanalaisen sähköpostin
   if (strpos($fromEmail, '@') == 0)  {
    ?><button onclick="history.back()">Takaisin</button><br><?php
    die('ERROR: Ilmoita oikea sähköpostiosoite kiitos');
    }

  //Tarkista, että käyttäjä valitsee talotyypin
  if (strpos($K_talotyyppi , 'valintaa') > 0)  {
    ?><button onclick="history.back()">Takaisin</button><br><?php
    die('ERROR: Kerrothan, muuttokohteen talotyypin');
    }

    
  //Tarkista, että käyttäjä valitsee onko hissi vai ei
  if (strpos($K_hissi, 'valintaa') > 0)  {
    ?><button onclick="history.back()">Takaisin</button><br><?php
    die('ERROR: Kerrothan, onko talossa hissi.');
    }
  //Tarkista, että käyttäjä valitsee onko varasto vai ei
    if (strpos($K_varasto, 'valintaa') > 0)  {
      ?><button onclick="history.back()">Takaisin</button><br><?php
      die('ERROR: Kerrothan, onko talossasi/taloyhtiössäsi varasto.');
      }
//Tarkista, että käyttäjä valitsee onko kantajia vai ei
      
    if (strpos($K_kantaja , 'valintaa') > 0)  {
      ?><button onclick="history.back()">Takaisin</button><br><?php
      die('ERROR: Kerrothan, onko apunasi omia kantajia.');
      }

//Tarkista määränpään talotyyppi
      if (strpos($M_Talotyyppi  , 'valintaa') > 0)  {
        ?><button onclick="history.back()">Takaisin</button><br><?php
        die('ERROR: Kerrothan, määränpään talotyypin.');
        }
//Tarkista määränpään hissi
        if (strpos($M_hissi  , 'valintaa') > 0)  {
          ?><button onclick="history.back()">Takaisin</button><br><?php
          die('ERROR: Kerrothan, onko määränpäässä hissiä.');
          }
//Tarkista määränpään varasto
          if (strpos($M_varasto  , 'valintaa') > 0)  {
            ?><button onclick="history.back()">Takaisin</button><br><?php
            die('ERROR: Kerrothan, onko määränpäässä varastoa.');
            }

//Tarkista maksutapa

            if (strpos($Maksutapa , 'valintaa') > 0)  {
              ?><button onclick="history.back()">Takaisin</button><br><?php
              die('ERROR: Kerrothan haluamasi maksutavan.');
              }
             
      

    $to = $toEmail;
    $subject = "Tarjouspyyntö";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
				<div class="container">
        <h2>Uusi tarjouspyyntö</h2>
        <p>Nimi:> '.$firstName.' '.$lastName.' </p><br/>
        <p>säpo:> '.$fromEmail.' </p><br/>
        <p>Osoite:> '.$K_osoite.' </p><br/>
        <p>Neliömäärä:> '.$K_neliomaara.' </p><br/>
        <p>Talotyyppi: '.$K_talotyyppi.' </p><br/>
        <p>Onko hissi?> '.$K_hissi.' </p><br/>
        <p>Onko varasto?> '.$K_varasto.' </p><br/>
        <p>Onko kantajia?> '.$K_kantaja.'</p><br/>
        <p>Osoite: '.$M_osoite.' </p><br/>
        <p>Talotyyppi määränpää:>'.$M_Talotyyppi.'</p><br/>
        <p>Onko hissiä määränpäässä?> '.$M_hissi.'</p><br/>
        <p>Onko varasto määränpäässä?> '.$M_varasto.'</p><br/>
        <p>Onko varasto määränpäässä?> '.$M_varasto.'</p><br/>
        <p>Maksutapa:?> '.$Maksutapa.'</p><br/>
        <p>Lähettäjän viesti:> '.$message.'</p><br/>
				</div>
			</body>
			</html>';
    $result = @mail($to, $subject, $message, $headers);
    //$result2 = @mail($const_mail, $subject, $message, $headers);

    echo '<script>alert("Kiitos tarjouspyynnöstä, palaamme sinulle!")</script>';
    echo '<script>window.location.href="/";</script>';
}
