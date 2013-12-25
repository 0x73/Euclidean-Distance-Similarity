<?php
$critics = array(
	'Sedat' => array(
		"The Matrix" => 5,
		"The Godfather" => 5,
		"Se7en" => 3,
		"Babel" => 2,
		"Troy" => 4,
		"Legends of the Fall" => 1,
		"The Thing" => 2,
		"Leon" => 3
		),
	'Kim' => array(
		"The Matrix" => 5,
		"The Godfather" => 5,
		"Se7en" => 3,
		"Babel" => 2,
		"Troy" => 4,
		"Legends of the Fall" => 1,
		"The Thing" => 1,
		"Leon" => 2
		),
	'Jodie' => array(
		"The Matrix" => 2,
		"The Godfather" => 3,
		"Se7en" => 5,
		"Babel" => 4,
		"Troy" => 2,
		"Legends of the Fall" => 5,
		"The Thing" => 1,
		"Leon" => 5
	),
	'John' => array(
		"The Matrix" => 4,
		"The Godfather" => 5,
		"Se7en" => 4,
		"Babel" => 1,
		"Troy" => 4,
		"Legends of the Fall" => 1,
		"The Thing" => 5,
		"Leon" => 2
	),
	'John' => array(
		"The Matrix" => 4,
		"The Godfather" => 5,
		"Se7en" => 4,
		"Babel" => 1,
		"Troy" => 4,
		"Legends of the Fall" => 1,
		"The Thing" => 5,
		"Leon" => 2
	),
	'Neval' => array(
		"The Matrix" => 3,
		"The Godfather" => 5,
		"Se7en" => 5,
		"Babel" => 1,
		"Troy" => 1,
		"Legends of the Fall" => 5,
		"The Thing" => 1,
		"Leon" => 5
	)
	);

	function sim_euclidan_distance($prefs, $person_1, $person_2){
		$si = array();
		$pows = 0;
		foreach($prefs[$person_1] as $item => $value){
			if(@array_key_exists($item, $prefs[$person_2])){
				$si[$item] = 1;
				$pows += pow($prefs[$person_1][$item] - $prefs[$person_2][$item], 2);
			}
		}
		
		if(count($si) < 1){
			return 0;
		}
				
		return 1/(1+sqrt($pows));
	}
	
function sim_for_person(array $prefs, $person){
	foreach($prefs as $person2 => $value){
		if($person2 != $person){
			$sim = sim_euclidan_distance($prefs, $person, $person2);
			echo $person." & ".$person2."\n";
			echo $sim."<br/>";	
		}
		
	}
}

sim_for_person($critics, 'Sedat');
