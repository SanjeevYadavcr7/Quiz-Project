

// To prevent direct URL access.

<?php
	if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:cover2.html');
    exit;
}
?>

// To prevent student going to previous question.

<body onLoad="if(history.length>0)history.go(+1);">