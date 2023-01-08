<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";
//include "filterString.php";

/* Search sample data for $name or $year or $state from form. */
function search($name, $year, $state,$any) {
    global $pms; 

	if(empty($any)){

		$results = array();

		// Filter $pms by $name
		if (!empty($name)) {
			$name = htmlspecialchars($name);
			$results = array();
			foreach ($pms as $pm) {
				if (stripos($pm['name'], $name) !== FALSE) {
					$results[] = $pm;
				}
			}
			//$pms = $results;
		}
	
		// Filter $pms by $year
		if (!empty($year)) {
			$year = htmlspecialchars($year);
			$results = array();
			foreach ($pms as $pm) {
				if (strpos($pm['from'], $year) !== FALSE || strpos($pm['to'], $year) !== FALSE) {
					$results[] = $pm;
				}
			}
			//$pms = $results;
		}
	
		// Filter $pms by $state
		if (!empty($state)) {
			$state = htmlspecialchars($state);
			$results = array();
			foreach ($pms as $pm) {
				if (stripos($pm['state'], $state) !== FALSE) {
					$results[] = $pm;
				}
			}
			//$pms = $results;
		}

		$pms = $results;

	} else {

		$any = htmlspecialchars($any);
		$results = array();

		foreach ($pms as $pm) {

			// Search state row
			if (stripos($pm['state'], $any) !== FALSE) {
				$results[] = $pm;
			}

			// Search name row
			if (stripos($pm['name'], $any) !== FALSE) {
				$results[] = $pm;
			}

			// Search year row
			if (strpos($pm['from'], $any) !== FALSE || strpos($pm['to'], $any) !== FALSE) {
				$results[] = $pm;
			}

			// Search duration row
			if (strpos($pm['duration'], $any) !== FALSE ) {
				$results[] = $pm;
			}
		}
		$pms = $results;
	}
    

    return $pms;
}
?>
