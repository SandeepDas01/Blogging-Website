<?php	if ( ! defined('ABSPATH')) exit('No direct script access allowed');
model('commonDb');
model('dataHandling');
//session_start();
$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : '' ;
 $header='common/header';
 
switch($action)
{
 
 	 
	case 'main':
        view($header,'master/main');
	break;
	
	case 'about':
	  view($header,'master/about');
	break;

	case 'abstractview':
	    view($header,'master/abstractview');
	break;
	
	case 'accessibility':
	    view($header,'master/accessibility');
	break;
	
    case 'archives':
	   view($header,'master/archives');
	break;

	
    case 'cookies':
        view($header,'master/cookies');
	break;
	
	case 'policy':
	   view($header,'master/policy');
	break;
	
	case 'submitarticle':
	   view($header,'master/submitarticle');
	break;
	
	case 'terms':
	   view($header,'master/terms');
	break;
	
	
    
 	case 'contact':
        view($header,'master/contact');
	break;
	
	
		case 'contactDB':
			contactDB();
			
			
             $_REQUEST['ContactQueryDone']="Done";
			view($header,'master/contact');
		break;
		
		case 'submitarticleDB':
			  submitarticleDB();
			  
			$_REQUEST['SubmitArticleDone']="Done";
			view($header,'master/submitarticle');
		break;
		
		
		
		case 'blogSearch':
		view($header,'master/searchblog');
		break;
		
		
	default:
 		view($header,'master/main');
	break;


}
?>
