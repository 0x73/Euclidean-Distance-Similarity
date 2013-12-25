from math import sqrt

def sim_euclidan_distance(prefs, person1, person2):
	si={}
	for items in prefs[person1]:
		if items in prefs[person2]:
			si[items]=1

	if len(si)==0: return 0

	sum_of_squares=sum([ pow( prefs[person1][items]-prefs[person2][items], 2)
	for items in prefs[person1] if items in prefs[person2] ])

	print sum_of_squares;

	return 1/(1+sqrt(sum_of_squares))


critics={
	'Sedat': {
		"The Matrix": 5,
		"The Godfather": 5,
		"Se7en": 3,
		"Babel": 2,
		"Troy": 4,
		"Legends of the Fall": 1,
		"The Thing": 2,
		"Leon": 3
	},
	'Kim': {
		"The Matrix": 5,
		"The Godfather": 5,
		"Se7en": 3,
		"Babel": 2,
		"Troy": 4,
		"Legends of the Fall": 1,
		"The Thing": 1,
		"Leon": 2
	},
	'Jodie': {
		"The Matrix": 2,
		"The Godfather": 3,
		"Se7en": 5,
		"Babel": 4,
		"Troy": 2,
		"Legends of the Fall": 5,
		"The Thing": 1,
		"Leon": 5
	},
	'John': {
		"The Matrix": 4,
		"The Godfather": 5,
		"Se7en": 4,
		"Babel": 1,
		"Troy": 4,
		"Legends of the Fall": 1,
		"The Thing": 5,
		"Leon": 2
	},
	'Neval': {
		"The Matrix": 3,
		"The Godfather": 5,
		"Se7en": 5,
		"Babel": 1,
		"Troy": 1,
		"Legends of the Fall": 5,
		"The Thing": 1,
		"Leon": 5
	}
}

def sim_for_person(prefs, person):
	for person2 in prefs:
		sim=sim_euclidan_distance(prefs, person, person2);
		print person+" & "+person2
		print sim

sim_for_person(critics, 'Sedat')
