require 'mathn'

$critics = {
	'Sedat' => {
		"The Matrix" => 5,
		"The Godfather" => 5,
		"Se7en" => 3,
		"Babel" => 2,
		"Troy" => 4,
		"Legends of the Fall" => 1,
		"The Thing" => 2,
		"Leon" => 3
		},
	'Kim' => {
		"The Matrix" => 5,
		"The Godfather" => 5,
		"Se7en" => 3,
		"Babel" => 2,
		"Troy" => 4,
		"Legends of the Fall" => 1,
		"The Thing" => 1,
		"Leon" => 2
		},
	'Jodie' => {
		"The Matrix" => 2,
		"The Godfather" => 3,
		"Se7en" => 5,
		"Babel" => 4,
		"Troy" => 2,
		"Legends of the Fall" => 5,
		"The Thing" => 1,
		"Leon" => 5
	},
	'John' => {
		"The Matrix" => 4,
		"The Godfather" => 5,
		"Se7en" => 4,
		"Babel" => 1,
		"Troy" => 4,
		"Legends of the Fall" => 1,
		"The Thing" => 5,
		"Leon" => 2
	},
	'John' => {
		"The Matrix" => 4,
		"The Godfather" => 5,
		"Se7en" => 4,
		"Babel" => 1,
		"Troy" => 4,
		"Legends of the Fall" => 1,
		"The Thing" => 5,
		"Leon" => 2
	},
	'Neval' => {
		"The Matrix" => 3,
		"The Godfather" => 5,
		"Se7en" => 5,
		"Babel" => 1,
		"Troy" => 1,
		"Legends of the Fall" => 5,
		"The Thing" => 1,
		"Leon" => 5
	}
	}


def sim_euclidan_distance(prefs, person_1, person_2)
	$si = {}
	$pows = 0
	prefs[person_1].each do |i,k|
		if prefs[person_2].has_key?(i)
			$si[i] = 1
			$pows += (prefs[person_1][i] - prefs[person_2][i]) ** 2
		end
	end

	

	if $si.length < 1
		return 0
	end

	return 1/(1+Math.sqrt($pows))

end


def sim_for_person(prefs, person)
	prefs.each do |person_2,value|
		if person_2 != person
			$sim = sim_euclidan_distance(prefs,person,person_2)
			puts "#{person} & #{person_2} #{$sim} \n"
		end
	end
end

sim_for_person($critics,"Sedat")

