
<?php 

if(!isset( $_GET['page'])) {$page = 'default';} else {$page = $_GET['page'];}		
		
	switch($page) {

		case 'under-construction';

			include_once 'under-construction.php';

		break;	

		case 'adf';

			$_SESSION['admin'] = 'true';
			
			header('Location: /');
			
		break;	
			
		case 'default';

			include_once 'landing-page.php';			

		break;	

	}			

?>