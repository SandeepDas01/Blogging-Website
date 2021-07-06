
<?php  if ( ! defined('ABSPATH')) exit('No direct script access allowed');
 /*
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
*/
 
model('commonDb');
model('dataHandling');
 
$header ='common/header';

if(isset($_SESSION['fitnessSession']))
{
	switch($action)
	{
		//Logo Master
		
		case 'updateLogo':
			updateLogoDB();
			view($header,'master/logoMaster');	
		break;
		case 'logoMaster':
			view($header,'master/logoMaster');	
		break;
	
		case 'pageMaster':
			view($header,'master/pageMaster');
		break;
		case 'updatePage':
			updatePageDB();
			view($header,'master/pageMaster');
		break;
		
		// ENd Page
		
 
		
		case 'home':
		 	view($header,'master/main');	
		break;
  		case 'sliderMaster':
			view($header,'master/sliderMaster');	
		break;
		case 'addNewSliderImage':
			addNewSliderImageDB();
			view($header,'master/sliderMaster');	
		break;
		
		 case 'metaTagMaster':
			view($header,'master/metatag');
		break;
		case 'updateMetatag':
			updateMetatagDB();
			$_REQUEST['metatagupdateDone']="Done";
			view($header,'master/metatag');
		break;
		
		case 'addNewMenucategory':
			addNewMenucategoryDB();
			view($header,'master/menucetegory');	
		break;
		


		case 'menucetegory':
		 	view($header,'master/menucetegory');
		break;
		
		
	 //	Blog 
		case 'blogMaster':
			view($header,'master/blogMaster');
		break;
		
		
		 
	//End	
	
	 
	  // 
   
	
	
	// Team
	
		case 'hiwMaster':
			view($header,'master/hiwMaster');
		break;
		
		case 'addNewTeam':
			addNewTeamDB();
			view($header,'master/hiwMaster');
		break;
		case 'updateTeam':
			updateTeamDB();
			view($header,'master/hiwMaster');
		break;
	
	// End How It Work
	
	
		
		
	// End beforeAfter
		
	 // Our services
		
		case 'serviceNameMaster':
			view($header,'master/serviceNameMaster');
		break;
		case 'addNewServices':
			addNewServicesDB();
			view($header,'master/serviceNameMaster');
		break;
		
		
		case 'updateOurServices':
			updateOurServicesDB();
			view($header,'master/serviceNameMaster');
		break;
 	 //	End quickLinks
		
	 //Abstract
          case 'abstractviewmaster':
			
			view($header,'master/abstractviewmaster');
		break;
		
     	 case 'addAbstractDB':
			addAbstractDB();
		
			view($header,'master/abstractviewmaster');
		break;
	
	//End Abstract
		
	// Testimonials Master
	
		case 'testimonialsMaster':
			view($header,'master/testimonialsMaster');
		break;
		case 'addNewTestimonials':
			addNewTestimonialsDB();
			view($header,'master/testimonialsMaster');
		break;
		case 'updateTestimonials':
			updateTestimonialsDB();
			view($header,'master/testimonialsMaster');
	 	break;
		
	// ***********************   End Testimonials  *******************/	
		
		case 'contactQuery':
			view($header,'master/contactQuery');
		break;
		
		case 'subscribers':
			view($header,'master/subscribers');
		break;
 	 

			
	 
	
	// Gallery 
	
		case 'galleryMaster':
			view($header,'master/galleryMaster');	
		break;
		case 'updateGalleryImage':
			updateGalleryImageDB();
			$_REQUEST['galleryUpdateDone']="done";
			view($header,'master/galleryMaster');	
		break;
		case 'addNewGallery':
			addNewGalleryDB();
			$_REQUEST['galleryImagesUploadedDone']="Done";
			view($header,'master/galleryMaster');	
		break;
		case 'otherImages':
			view($header,'master/otherImages');
		break;
		
		case 'addNewImage':
			addNewImageDB();
			view($header,'master/otherImages');
		break;
		
	//End Gallery
	
	// Start Article submit
	
	   case 'trainerMaster':
			view($header,'master/trainerMaster');
		break;
		
    // End Article Submit		
	 
		 
		case 'changePassword':
			 view($header,'master/changePassword');
		break;
		case 'updateAdminPassword':
			updateAdminPasswordDB();
			$_REQUEST['passwordChangedDone']="done";
			view($header,'master/changePassword');
		break;
		
		 
		case 'contactUsQuery':
			view($header,'master/contactUsQuery');	
		break;
 		
	 
	 	case 'updateUserDetails':
			updateUserDetailsDB();
			view($header,'master/myProfile');
		break;
	 	case 'updatePassword':
			$flag=updatePasswordDB();
		 	if($flag=="1")
			{
				$_REQUEST['updatePasswordDone']="done";
				
			}
			else 
			{
				$_REQUEST['IncorrectPassword']="fail";
			}
		 view($header,'master/myProfile');
		break;
	 
		case'ajaxAction':
			ajaxActions();
		break;
		case 'logout':
			logoutDB();
		 	view1('master/login');
		break;
		case 'myProfile':
			view($header,'master/myProfile');	
		break;
		
	 	default:
			view($header,'master/main');	
		break;
  	}
}
else if(isset($_REQUEST['action'])=='loginCheck')
{
	switch($action)
	{
		case 'loginCheck':
			$flag=loginCheckDB();
			if($flag==1)
			{
				view($header,'master/main');	
			}
			else
			{
				view1('master/login');
			}
		break;
		case 'forgetPasswordMailSend':
			$flag=forgetPasswordMailSendDB();
			if($flag==1)
			{
				$_REQUEST['checkEmail']="done";
				view1('master/login');
			}
			else
			{
				$_REQUEST['incorrectEmailId']="done";
				view1('master/forgetPassword');
			}
		break;
		case 'forgetPassword':
			view1('master/forgetPassword');
		break;
		default:
			view1('master/login');
		break;
	}
	
}
else
{
	view1('master/login');
}
?>