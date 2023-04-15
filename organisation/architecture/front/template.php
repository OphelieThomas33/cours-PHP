<html>
  <head>
    <title>Organisation</title>
    </head>
  <body>
  <h1>
    <?php
        echo WELCOME_TEXT.' '.$name.'!';
    ?>
  </h1>
  <div>
<?php
        echo SPORT_TEXT.' :';
    ?>
    <ul>
      <?php
        foreach ($sports as $sport) {
              echo '<li>'.$sport.'</li>';
            }
      ?>
    </ul>
  </div>
  </body>
</html>