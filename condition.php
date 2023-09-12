<?php
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
    // manual filtering
    // function rightyPlayers($playerDetails){
    //     $rightybatters = [];

    //     foreach ($playerDetails as $playerStats){
    //         if($playerStats['hand'] === 'Right'){
    //             $rightybatters[] = $playerStats;
    //         };


    //     }

    //     return $rightybatters;


    // }
    // foreach (rightyPlayers($playerDetails) as $record):
    //     if ($record['hand'] === 'Right'):
    //         echo $record['name']. "'s Best Score is " . $record['bestScore']. ".";
    //     endif;
    // endforeach;

    //generic filtering 

    function useFilter($data, $key, $value ){
        $filteredData = [];

        foreach ($data as $record){
            if($record[$key] === $value){
                $filteredData[] = $record;
            };
        };
        return $filteredData;
    };

    function showData($data){
        foreach ($data as $record){
            echo $record['name'] . " is " . $record['hand'] . " handed batsman from ". $record['city'] . " his best score is ". $record['bestScore'] . ".\n";
        }
    }

    echo "Righty players Data\n";
    $rightybatters = useFilter($playerDetails, 'hand', 'Right');
    $ranchiPlayers = useFilter($playerDetails, 'city', 'Ranchi');
    showData($rightybatters);
    echo "Players from Ranchi\n";
    
    showData($ranchiPlayers);

    //more generic way 

    function genericFilter($data, $fn){
        $filteredData = [];

        foreach($data as $record){
            if($fn($record)){
                $filteredData[]= $record;
            };
        };

        return $filteredData;
    }

    

    $doubleHundredPlayers = genericFilter($playerDetails, function($player){
        return $player['bestScore'] >= 200;
    });
    echo "who has double hundred\n";
    showData($doubleHundredPlayers);

    //built-in function for filter
    
    $youngPlayers = array_filter($playerDetails, function($player){
        return $player['age'] <= 25;
    });
    echo "age < 25\n";
    showData($youngPlayers);
?>