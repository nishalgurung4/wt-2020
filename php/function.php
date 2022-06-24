<?php 

function isEligibleToVote($age)
{
	if ($age > 18) {
		return true;
	}
	return false;
}

if (isEligibleToVote(20)) {
	echo "Eligible";
} else {
	echo "Not Eligible";
}