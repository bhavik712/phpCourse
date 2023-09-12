<?php
  $name="Bhavik";


  $age = 20;

  if($age >= 18){
    $message = "You Can vote";
  }else{
    $message = "You can't vote";
  }

  $students = [
    "Bhavik",
    "Rohit",
    "Kishan"
  ];

  $players = [
    'Rohit',
    'Kishan',
    'Kohli'
  ];

  $playerDetails = [
    [
        'name' => 'Rohit',
        'hand' => 'Right',
        'bestScore' => 264,
        'city' => 'Mumbai',
        'age' => 36
    ],
    [
        'name' => 'Kishan',
        'hand' => 'Left',
        'bestScore' => 210,
        'city'=> 'Ranchi',
        'age' => 24

    ],
    [
        'name' => 'Kohli',
        'hand' => 'Right',
        'bestScore' => 183,
        'city'=> 'Delhi',
        'age' => 34

    ],

  ];

  function useFilter($data, $key, $value ){
    $filteredData = [];

    foreach ($data as $record){
        if($record[$key] === $value){
            $filteredData[] = $record;
        };
    };
    return $filteredData;
  };

  function genericFilter($data, $fn){
    $filteredData = [];

    foreach($data as $record){
        if($fn($record)){
            $filteredData[]= $record;
        };
    };

    return $filteredData;
  }

  function showData($data){
    foreach ($data as $record){
        echo $record['name'] . " is " . $record['hand'] . " handed batsman from ". $record['city'] . " . His best score is ". $record['bestScore'] . ". He is " .$record['age'] ." years old.\n";
        echo "<br/>";
    }
  }

  $rightybatters = useFilter($playerDetails, 'hand', 'Right');
  $ranchiPlayers = useFilter($playerDetails, 'city', 'Ranchi');
  $doubleHundredPlayers = genericFilter($playerDetails, function($player){
    return $player['bestScore'] >= 200;
  });

  $youngPlayers = array_filter($playerDetails, function($player){
    return $player['age'] <= 25;
  });
  
  require "index.view.php";
?>


  
