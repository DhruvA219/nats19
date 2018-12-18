<?php
echo "hello world";
echo "<br>";

if(isset($_GET['code'])){
	
	echo "Access Code: " . $_GET['code'];
	echo "<br>";

	$post = [
    'grant_type' => 'authorization_code',
    'client_id' => 'c02ad8e3446378078c5cbb73874bac335f08d9cc36f57c74fd11f9aa6df23a7e',
    'client_secret' =>'0f1efea224774c1d461d49f1d25f02af1ab0a5ec523e851ad5f1ae86a96ab74a',
    'code' => $_GET['code'],
    'redirect_uri' => 'https://akashrupela.com/poc/'
	];

	$ch = curl_init('https://www.worldcubeassociation.org/oauth/token');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

	// execute!
	$response = curl_exec($ch);

	// close the connection, release resources used
	curl_close($ch);

	$jsonObj = json_decode($response);
	$key = "access_token";


    $accessToken = $jsonObj->$key;

    echo "<br>";
    echo "Access Token: " . $accessToken;
    echo "<br>";
    echo "<br>";

    $accessToken = "Authorization: Bearer " . $accessToken; 

    $ch2 = curl_init('https://www.worldcubeassociation.org/api/v0/me');
	curl_setopt($ch2,CURLOPT_HTTPHEADER,array($accessToken));
	//curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);

	$content = curl_exec($ch2);
	echo $content;

	echo "<br> <br>";
	echo $accessToken;


}

?>

 <?php
    if(!isset($_GET['code']))
    {
         echo "<button id='myButton'>Login via wca</button>";
    }
?>


<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "https://www.worldcubeassociation.org/oauth/authorize?client_id=c02ad8e3446378078c5cbb73874bac335f08d9cc36f57c74fd11f9aa6df23a7e&redirect_uri=https%3A%2F%2Fakashrupela.com%2Fpoc%2F&response_type=code&scope=public+dob+email";
    };
</script>


