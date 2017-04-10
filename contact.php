<?php
    if ($_POST) {
      $name = $_POST["naam"];
      $subject = $_POST["onderwerp"];
      $email = $_POST["email"];
      $message = $_POST["message"];
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Portfolio van Camren++</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php require_once('_parts/_header.php'); ?>

    <div class="row">
    <div class="col-12 col-m-9">
      <div class="container">

        <div class="pagecontent">
          <h3>Contact</h3>

          <p>
            Vul het formulier in om contact op te nemen.<br />
            Alle velden zijn verplicht in te vullen!
          </p>

          <p>
            <form action="#" method="POST">
              <input type="text" name="naam" class="c-field" placeholder="Wat is uw naam?"><br /><br />

              <input type="text" name="onderwerp" class="c-field" placeholder="Vul een onderwerp in..."><br /><br />

              <input type="text" name="email" class="c-field" placeholder="Wat is uw e-mailadres?"><br /><br />

              <textarea class="c-area" name="bericht" placeholder="Wat is uw vraag/bericht?"></textarea><br /><br />

              <input type="submit" class="c-button" value="Verzenden">

            </form>
          </p>


        </div>

      </div>
    </div>


    </div>

    <?php require_once('_parts/_footer.php'); ?>
  </body>
</html>
