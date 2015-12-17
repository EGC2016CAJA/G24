<?php

class UnitarioTest extends PHPUnit_Framework_TestCase{
	
	
	// Get votes
	public function testGetVotes(){
		$id_vote = 1;
		$url = 'http://localhost/egc/src/get_votes.php?votation_id=' . $id_vote;
		$string = file_get_contents($url);
		fwrite(STDERR, print_r($string,TRUE));
		
	}
	
	// Vote
	public function testVote(){	
		$jsondata['vote'] = 'VotoPruebaTest';
		$jsondata['votation_id'] = "3";
		$url = 'http://localhost/egc/src/vote.php';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsondata));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$response = curl_exec($ch);
		curl_close($ch);
		echo $response;
		
		$this->assertEquals($response,'{"msg":"1"}');
		
	}	
}

?>