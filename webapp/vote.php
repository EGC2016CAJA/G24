<?

try{

	header("Content-Type:application/json");
	
	$data = json_decode(file_get_contents('php://input'),true);
	$vote = $data["vote"];
	$votation_id = intval($data["votation_id"]);
	
	$servername = "127.7.219.2";
	$username = "adminlg4UZhi";
	$password = "FvNTkqswPP5i";
	$dbname = "php";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($votation_id === 0 || $conn->connect_error) {
		throw new Exception;
	} 
	
	$sql = "INSERT INTO Votes(vote, votation_id) VALUES ('$vote', '$votation_id')";
	$result = $conn->query($sql);
	echo json_encode(array("msg"=>"1"));
	$conn->close();
	
}catch(Exception $e){
	echo json_encode(array("msg"=>0));
}
die();

?>

