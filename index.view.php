<!DOCTYPE html>
<html>
  <head>
    <title>Demo</title>
  </head>
  <body>
    <h1>
        <?php echo "hello ". $name; ?>
    </h1>
    <h2>
        <?php echo "My name is $name"; ?>
    </h2>

    <h1>Hello World</h1>
    <h2>
      <?php
        echo $message
      ?>
      <!-- <?= $message ?> -->
    </h2>
    <ul>
      <?php
        foreach($students as $student){
          echo "<li>{$student}</li>";
          // echo "<li>" . $student . "</li>";
        }
      ?>
    </ul>
    <h2>
        <?php
            echo $students[1];
        ?>
    </h2>
    <ul>
      <?php
        foreach($players as $player){
          echo "<li>{$player}</li>";
          // echo "<li>" . $student . "</li>";
        }
      ?>
    </ul>

    <h2>
        <?php
            echo "Righty players:- \n";
            echo "<br/>";
            showData($rightybatters);
        ?>
    </h2>
    <h2>
        <?php
            echo "Players from Ranchi:- \n";
            echo "<br/>";
            showData($ranchiPlayers);
        ?>
    </h2>
    <h2>
        <?php
            echo "who has double hundred:- \n";
            echo "<br/>";
            showData($doubleHundredPlayers);
        ?>
    </h2>
    <h2>
        <?php
            echo "age less than 25\n";
            echo "<br/>";
            showData($youngPlayers);
        ?>
    </h2>


      
    
  </body>
</html>