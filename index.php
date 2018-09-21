<?php
    $name = "User";
    if (isset($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    }   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FREEBAN CARD || <?=$name?></title>
        <link rel="stylesheet" href="ban.min.css">
    </head>
    <body>
        <div id="card">
            <div id="card-top">
                <img src="TheCodingDen.jpg" alt="" srcset="">
                <h1>TCD FREEBAN</h1>
            </div>
            <div id="card-middle">
                <h2>Card issued to: <?=$name?></h2>
                <p>
                    This card enables the banning of a member of the Discord community The Coding Den.
                    Please sign this card, cut it out and send it to support@obliv1on.com. <br><br>
                    Disclaimer: The banning of the subject will be scheduled after recieving this card. Estimated time for issuing the ban: Soon™
                </p>
            </div>
            <div id="card-bottom">
                <p>
                    <strike>Victim's</strike> Recipient's Signature: ____________________________
                </p>
            </div>
        </div>
    </body>
</html>