<?php

class UnitarioTest extends PHPUnit_Framework_TestCase{
	
	
	// Get votes
	public function testGetVotes(){
		$id_vote = 1;
		$string = file_get_contents('localhost/egc/src/get_votes.php?votation_id='+$id_vote);
		fwrite(STDERR, print_r($string,TRUE));
	}
	// Vote
	public function testVote(){
		
	}	
}

?>