<?php	if ( ! defined('ABSPATH')) exit('No direct script access allowed');

	
	function ajaxActions()
	{
	
		$act = $_REQUEST['act'];
		
		switch($act)
		{
		 
			 
			 case 'showHideSlider':
			 	showHideSlider();
			 break;
			 case 'deleteSlider':
			 	deleteSlider();
			 break;

			 case 'showHideMcetegory':
                   showHideMcetegory();
			 break;
			 case 'deleteMcetegory':
			 	deleteMcetegory();
			 break;
			case 'getMemberDetailsById':
				getMemberDetailsById();
			break;
			case 'deleteTeamMember':
				deleteTeamMember();
			break;
			case 'deleteQuery':
				deleteQuery();
			break;
			
			case 'deletesubscribers':
				deletesubscribers();
			break;
	 		case 'getPageDetails':
				getPageDetails();
			break;
 			 
			// Gallery
			case 'showHideGallery':
				showHideGallery();
			break;
			case 'deleteGallery':
				deleteGallery();
			break;
			case 'getGalleryDetailsById':
				getGalleryDetailsById();
			break;
			case 'showHideImage':
				showHideImage();
			break;
			case 'deleteImage':
				deleteImage();
			break;
			//End Gallery
			
			 case 'deleteAptQuery':
             deleteAptQuery();
              break;
		 
			
		 
	 // Team Master
	  		case 'getTeamDetails':
				getTeamDetails();
			break;
			case 'deleteTeam':
				deleteTeam();
			break;
	 
	 // End Team Master
		
		 
			
	  // Our Services
			case 'getServiceDetails':
				getOurServicesDetails();
			break;
			case 'deleteOurServices':
				deleteOurServices();
			break;
			
     //End Our Services
	 
	 
			 
			case 'getMetaTagDetailsById':
				getMetaTagDetailsById();
			break;
			
	  
		
		// Start Blog 
			case 'getPostDetailsById':
				getPostDetailsById();
			break;
			case 'showHidePost':
				showHidePost();
			break;
			case 'deletePost':
				deletePost();
			break;
		 	case 'isPopularPost':
				isPopularPost();
			break;
		// End Blog	 
			 
		//Testimonials
			case 'showHideTestimonials':
				showHideTestimonials();
			break;
			case 'deleteTestimonials':
				deleteTestimonials();
			break;
			case 'getTestimonialsDetailsById':
				getTestimonialsDetailsById();
			break;
			
			//End Testimonials	 
			 
			 
			 /* Trainer Master*/
			
			case 'showHideTrainer':
				showHideTrainer();
			break;
			
			case 'viewTrainerDetails':
				viewTrainerDetails();
			break;
			case 'deleteTrainer':
				deleteTrainer();
			break;
			
		// End Trainer	
			 
			 
		 case 'showHideComments':
		 	showHideComments();
		 break;
		 case 'deleteComments':
		 	deleteComments();
		 break;
			 
		/* End Ad Master */
		
			case 'getLogoByID':
				getLogoByID();
			break;
		}
}


function getLogoByID()
{
	$result=getLogoByIDDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.=' <form action="#" method="post" onSubmit="return checkValidationU();" name="PostFormu" id="PostFormu" enctype="multipart/form-data">
                <input type="hidden" name="action" value="updateLogo">
				<input type="hidden" name="lId" value="'.$resultRow['lId'].'">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Logo</th>
                    <td width="70%"><input type="file" name="image" id="image" class="form-control"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th width="20%">Title</th>
                    <td width="70%"><input type="text" name="title" id="title" class="form-control" value="'.$resultRow['title'].'"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th width="20%"></th>
                    <td width="70%"><img src="'.$resultRow['imagePath'].'"/></td>
                    <td width="5%"><input type="hidden" name="oldImagePath" value="'.$resultRow['imagePath'].'"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Update" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}



function getPagesDetailsById()
{
	$result=getPagesDetailsByIdDB();
	$i=1;
	$list='<form enctype="multipart/form-data" method="post" name="updatePage" id="updatePage" onsubmit="return checkAllFields()" action="">
                ';
	
	while($resultRow = fetchArray($result))
	{
		$list.='<input type="hidden" value="updatePage" name="action" />
				<input type="hidden" value="'.$resultRow['pId'].'" name="id" />
                <table  class="table-form" width="100%">
				<tr>
                    
                    <td width="15%">Page Title</td>
                    <td width="85%"><input type="text"  class="form-control requiredInput" id="pTitle" name="pTitle" value="'.$resultRow['pageTitle'].'" /></td>
                    
                  </tr>
                  <tr>
                     <td width="15%">Page Description</td>
                    <td width="85%"><textarea  class="form-control" id="desc" name="desc" >'.$resultRow['pageContent'].'</textarea></td>
                    
                  </tr>
                  <tr>
                     
                     <td colspan="2"><input type="submit" class="btn green" value="Update" />
                      <input type="reset" class="btn green" value="Reset" /></td>
                    
                  </tr>';	
	}
	$list.='</table>
           </form>';
	echo $list;
}




// Start HIW

function deleteTeam()
{
	deleteHIWDB();
	$result=getAllHIWListDB();
	$list='';
	$i=1;
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td>'.$resultRow['hName'].'</td>
						<td><img src="'.$resultRow['hImage'].'" style="width:250px;height:120px;" /></td>
					 	<td> 
						<button type="button" onclick="updateTeam('.$resultRow['hId'].')" class="btn green-meadow">Edit</button>
						<button type="button" onclick="deleteTeam('.$resultRow['hId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
	echo $list;
}

function getTeamDetails()
{
	$result=getTeamDetailsDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
	  $list.='<form action="" method="post" onSubmit="return checkValidationU();" name="cHIWFormU" id="cHIWFormU" enctype="multipart/form-data">
                <input type="hidden" name="action" value="updateTeam">
				<input type="hidden" name="hId" value="'.$resultRow['hId'].'">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Name</th>
                    <td width="70%"><input type="text" value="'.$resultRow['hName'].'" name="name" id="nameU" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				   <tr>
                    <th width="20%">Post</th>
                    <td width="70%"><input type="text" value="'.$resultRow['hpost'].'" name="tpost" id="tpostU" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                   <tr>
                    <th width="20%"> Description</th>
                    <td width="70%"><textarea name="desc" id="titleU" class="form-control">'.$resultRow['hDesc'].'</textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th width="20%">Image</th>
                    <td width="70%"><input type="file" name="image" id="imageU" class="form-control"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				  <tr>
                    <th width="20%"></th>
                    <td width="70%"><img src="'.$resultRow['hImage'].'">
						<input type="hidden" value="'.$resultRow['hImage'].'" name="oldImagePath">
					</td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				  <tr>
                    <th width="20%">Facebook</th>
                    <td width="70%"><input type="text" value="'.$resultRow['facebook'].'" name="facebook" id="nameU" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				  <tr>
                    <th width="20%">Instagram</th>
                    <td width="70%"><input type="text" value="'.$resultRow['instagram'].'" name="instagram" id="nameU" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				  <tr>
                    <th width="20%">Twitter</th>
                    <td width="70%"><input type="text" value="'.$resultRow['twitter'].'" name="twitter" id="nameU" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Update" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}


// End HIW
 
 // Trainer Start

function viewTrainerDetails()
{
	$result=viewTrainerDetailsDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
					<tr>
						<th colspan="5">Submited Article</th>
				 	</tr>
					<tr >
						<td style="width:20%;"><b>Frist Name:<b></td>
						<td>'.$resultRow['fristname'].'</td>
						<td></td>
						<td style="width:20%;"><b>Midle Name:</b></td>
						<td>'.$resultRow['middlename'].'</td>
					</tr>
					 <tr >
						<td style="width:20%;"><b>Last Name:</b></td>
						<td>'.$resultRow['lastname'].'</td>
						<td></td>
						<td style="width:20%;"><b>Email:</b></td>
						<td>'.$resultRow['email'].'</td>
					</tr>
					 <tr>
						<td style="width:20%;"><b>Contact NO.</b></td>
						<td>'.$resultRow['number'].'</td>
						<td></td>
						<td style="width:20%;"><b>Authors:</b></td>
						<td>'.$resultRow['authors'].'</td>
					</tr>
					
					 <tr>
						
						<td style="width:20%;"><b>Title:</b></td>
						<td>'.$resultRow['title'].'</td>
						<td></td>
						<td style="width:20%;"><b>File:</b> </td>
						<td colspan="3"><a href="'.BASEURL.'assets\uploads\hiw/'.$resultRow['file'].'"   style="" target="_blank" >View File </a></td>
					</tr>
					
					
					 <tr>
					    <td style="width:20%;"><b>Abctract:</b></td>
						<td>'.$resultRow['abstract'].'</td>
						<td></td>
						
					</tr>
					<tr>
						<td> </td>
						<td colspan="3"><input type="button" class="btn" value="Back" onclick="viewTrainer()"></td>
					 	<td></td>
					</tr>
				 </table>';
	}
	echo $list;
}


function printTrainerListDB()
{
	$result=getAllTrainerListDB();
	$i=1;
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<tr>
					<td>'.$i++.'</td>
					<td>'.$resultRow['fristname'].'</td>
					<td><a href="'.BASEURL.'assets\uploads\hiw/'.$resultRow['file'].'"   style="" target="_blank" >View File </a></td></td>
					<td>';
					if($resultRow['status']=="1")
					{
						$list.='<img src="assets/images/active.png" onclick="showHideTrainer('.$resultRow["Id"].',0)" />';
					}
					else
					{
						$list.='<img src="assets/images/deactive.png" onclick="showHideTrainer('.$resultRow["Id"].',1)" />';
					}
			$list.='</td>
					<td>
					 	<img src="assets/images/doc_view.png" onclick="viewTrainerDetails('.$resultRow['Id'].')" />
					</td>
					<td>
						<img src="assets/images/remove.png"  onclick="deleteTrainer('.$resultRow['Id'].')"/>
					</td>
				</tr>';
	}
	echo $list;
}

function deleteTrainer()
{
	deleteTrainerDB();
	printTrainerListDB();
}

function showHideTrainer()
{
	showHideTrainerDB();
	printTrainerListDB();
}


// End Trainer

 
// Start Blog
 
 
function printPost($result)
{ 
	$list='';
	$i=1;
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td>'.$resultRow['title'].'</td>
						 
						<td>';	
							if($resultRow['status']==1)
							 {
									$list.='<button onclick="showHidePost('.$resultRow["bId"].',0)" type="button" class="btn btn-info">Active</button>';
							 }
							 else
							 {
									$list.='<button onclick="showHidePost('.$resultRow["bId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
							 }
							
						$list.='</td>
					 	<td>';	
							if($resultRow['isPopular']==1)
							 {
									$list.='<img title="Popular" src="assets/images/active.png" onclick="isPopular('.$resultRow["bId"].',0)" type="button"> ';
							 }
							 else
							 {
									$list.='<img title="Not Popular" src="assets/images/deactive.png" onclick="isPopular('.$resultRow["bId"].',1)" type="button"> ';
							 }
							
						$list.='</td>
					 	<td> 
						<button type="button" onclick="updatePost('.$resultRow['bId'].')" class="btn green-meadow">View/Edit</button>
						</td>
						<td>
						<button type="button" onclick="deletePost('.$resultRow['bId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
			echo $list;
}

function deletePost()
{
	deletePostDB();
	$result=getAllPostListDB();
	printPost($result);
}
function showHidePost()
{
	showHidePostDB();
	$result=getAllPostListDB();
	printPost($result);
}
function isPopularPost()
{
	isPopularPostDB();
	$result=getAllPostListDB();
	printPost($result);
}
function getPostDetailsById()
{
	$result=getPostDetailsByIdDB();
	
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<form action="#" method="post" onSubmit="return checkAllFieldsUpdateU();" name="PostFormU" id="PostFormU" enctype="multipart/form-data">
                <input type="hidden" name="action" value="updateBlogPost">
			 	<input type="hidden" name="bId" value="'.$resultRow['bId'].'">
                <table  class="table-form">
				
				  
				
			      <tr>
                    <th width="20%">Title</th>
                    <td width="70%"><input type="text" name="title" id="titleU" value="'.$resultRow['title'].'" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                   <tr>
                    <th>Description</th>
                    <td><textarea class="form-control" name="description" id="descriptionU" >'.$resultRow['description'].'</textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				 <tr>
                    <th> Description</th>
                    <td><textarea class="form-control" name="sdescription" id="sdescriptionU" >'.$resultRow['sDescription'].'</textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>

                  
				   ';
				 
					if(!empty($resultRow['trainerId']))
					{
						$list.='<tr>
								<th> </th>
								<td>
								<img src="'.BASEURLFORSITE.$resultRow['imagePath'].'" style="width:235px;height:130px;">
								<input type="hidden" name="oldImagePath" value="'.$resultRow['imagePath'].'">';
					}
					else
					{
						$list.='<tr>
								<th>Image</th>
								<td><input type="file" name="image" id="image" class="form-control"></td>
								<td width="5%">&nbsp;</td>
							  </tr>
							  <tr>
								<th> </th>
								<td><img src="'.$resultRow['imagePath'].'" style="width:235px;height:130px;">
								<input type="hidden" name="oldImagePath" value="'.$resultRow['imagePath'].'">';
					}
						
					$list.='</td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Update" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}

// End Blog 


// Meta Tag Master
function getMetaTagDetailsById()
{
	$result=getMetaTagDetailsByIdDB();
	$list='<form action="" method="post" id="metaForm" name="metaForm" enctype="multipart/form-data"  onsubmit="return checkAllFieldsUpdate()">
			
	<table class="table">';
	while($resultRow = fetchArray($result))
	{
	 	$list.='<tr>
					<th width="10%">Page Name</th>
					<td width="60%">'.$resultRow['pageName'].'</td>  
					<td width="10%"><input type="hidden" name="action" value="updateMetatag"> </td>
					<td width="20%"><input type="hidden" name="pageId" value="'.$resultRow['pageId'].'"> </td>
				</tr>
				<tr>
					<th>pageTitle:</th>
					<td><input type="text" value="'.$resultRow['pageTitle'].'" name="pageTitle" id="pageTitle" class="form-control requiredInput" ></td>
					<td width="10%"></td>
					<td width="20%"></td>
				</tr>
				<tr>
					 <th>metaContent:</th>
					<td><textarea class="form-control requiredInput" name="metaContent" id="metaContent">'.$resultRow['metaContent'].'</textarea></td>
					<td width="10%"></td>
					<td width="20%"></td>
				</tr>
				<tr>
					 <th>metaKeyword:</th>
					<td><textarea class="form-control requiredInput" name="metaKeyword" id="metaKeyword">'.$resultRow['metaKeyword'].'</textarea></td>
					<td width="10%"></td>
					<td width="20%"></td>
				</tr>
				<tr>
				 	<th>metaDescription:</th>
					<td><textarea class="form-control requiredInput" name="metaDescription" id="metaDescription" >'.$resultRow['metaDescription'].'</textarea></td>
				 	<td width="10%"></td>
					<td width="20%"></td>
				</tr>
			 	 <tr>
					<th> </th>
					<td> <input type="submit" name="add_banner" value="Update" class="btn green" >
					  <input type="button" class="btn green" onclick="viewMetaTag()" value="Cancel"> </td>
					<td> </td>
					<th> </th>
				</tr>';
	}
	$list.='</table></form>';
	echo $list;
}
 

 

 
// Start Testimonials

function getTestimonialsDetailsById()
{
	$result=getTestimonialsDetailsByIdDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<form action="#" method="post" onSubmit="return checkValidationU();" name="testmonialsFormU" id="testmonialsFormU" enctype="multipart/form-data">
					<input type="hidden" name="action" value="updateTestimonials">
					<input type="hidden" name="tId" value="'.$resultRow['tId'].'">
					<table  class="table-form">
					   <tr>
						<th>Name</th>
						<td><input type="text" name="name" value="'.$resultRow['name'].'" id="name1" class="form-control"></td>
						<td width="5%">&nbsp;</td>
					  </tr>
					   <tr>
						<th>Message</th>
						<td><textarea name="message" id="message1" class="form-control">'.$resultRow['message'].'</textarea></td>
						<td width="5%">&nbsp;</td>
					  </tr>
					  
				 	  <tr>
						<td></td>
						<td><input type="submit" name="add_banner" value="Update" class="btn green" ></td>
						<td width="5%">&nbsp;</td>
					  </tr>
					</table>
				  </form>';
	}
	echo $list;
}

function printTestimonials($result)
{
		$i=1;
		$list='';
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
					 	<td>'.$resultRow['name'].'</td>
						<td>';
							if($resultRow['status']==1)
							{
								$list.='<button onclick="showHide('.$resultRow["tId"].',0)" type="button" class="btn btn-info">Active</button>';
						 	}
						 	else
						 	{
								$list.='<button onclick="showHide('.$resultRow["tId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
						 	}
						
						$list.='</td>
						<td> 
						<button type="button" onclick="updateMessage('.$resultRow['tId'].')" class="btn green-meadow">View/Edit</button>
						<button type="button" onclick="deleteMessage('.$resultRow['tId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		echo $list;
                 
}

function deleteTestimonials()
{
	deleteTestimonialsDB();
	$result=getAllTestimonialsListDB();
	printTestimonials($result);
}

function showHideTestimonials()
{
	showHideTestimonialsDB();
	$result=getAllTestimonialsListDB();
	printTestimonials($result);
}

// End Testimonials
// Gallery
function getGalleryDetailsById()
{
	$result=getGalleryDetailsByIdDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<form enctype="multipart/form-data" method="post" name="GalleryForm1" id="GalleryForm1" onsubmit="return checkAllFieldsUpdate()" action="">
                <input type="hidden" value="updateGalleryImage" name="action" />
				<input type="hidden" value="'.$resultRow['gId'].'" name="gId" />
              <table   class="table-form" width="100%">
                  
                 
                   <tr>
                    <td width="14%"></td>
                    <td width="17%">Caption</td>
                    <td width="31%"><input type="text" value="'.$resultRow['gCaption'].'"  class="form-control" id="caption" name="caption" /></td>
                    <td width="38%"></td>
                  </tr>
				   <tr>
                    <td width="14%"></td>
                    <td width="17%">Image</td>
                    <td width="31%"><input type="file"  class="form-control" id="image" name="image" /></td>
                    <td width="38%"></td>
                  </tr>
				  <tr>
                    <td width="14%"></td>
                    <td width="17%"> </td>
                    <td width="31%">
						<img src="'.$resultRow['gImagePath'].'" style="width:230px;height:150px;"/>
						<input type="hidden" name="oldImage" value="'.$resultRow['gImagePath'].'">
					</td>
                    <td width="38%"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn green" value="Submit" />
                      <input type="button" onclick="viewGallery()" class="btn green" value="Cancle" /></td>
                    <td></td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}
function deleteGallery()
{
	deleteGalleryDB();
	$result=getAllGalleryListDB();
	$i=1;
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<tr>
					 <td>'.$i++.'</td>
							<td><img src="'.$resultRow['gImagePath'].'" style="width:255px;height:120px;"></td>
							<td>'.$resultRow['gCaption'].'</td>
							<td>';
							if($resultRow['gStatus']=="1")
							 {
									$list.='<button onclick="showHideGallery('.$resultRow["gId"].',0)" type="button" class="btn btn-info">Active</button>';
							 }
							 else
							 {
									$list.='<button onclick="showHideGallery('.$resultRow["gId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
							 }
							$list.='
							</td>
							 
							<td><button type="button" onclick="updateGallery('.$resultRow['gId'].')" class="btn green-meadow">Edit</button>
							  </td>
						  	<td>
							<button type="button" onclick="deleteGallery('.$resultRow['gId'].')" class="btn btn-warning">Delete</button>
							 </td>
					 	</tr>';
	}
	echo $list;
}
function showHideImage()
{
	showHideImageDB();
	$result=getAllImagesListDB();
	printImageData($result);
}
function deleteImage()
{
	deleteImageDB();
	$result=getAllImagesListDB();
	printImageData($result);
}
function printImageData($result)
{
	$i=1;
	$list='';
			while($resultRow = fetchArray($result))
			{
				$list.='<tr>
							<td>'.$i++.'</td>
							<td><img src="'.$resultRow['imImageMaster'].'" style="width:180px;height:80px;"></td>
							<td><input type="text" readonly="readonly" value="'.BASEURL.$resultRow['imImageMaster'].'"  class="form-control"></td>
						 	 <td>
							<button type="button" onclick="deleteImage('.$resultRow['imId'].')" class="btn btn-warning">Delete</button>
							 </td>
					 	</tr>';
			}
			echo $list;
}


function showHideGallery()
{
	showHideGalleryDB();
	$result=getAllGalleryListDB();
	$i=1;
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.='<tr>
							<td>'.$i++.'</td>
							<td><img src="'.$resultRow['gImagePath'].'" style="width:255px;height:120px;"></td>
							<td>'.$resultRow['gCaption'].'</td>
							<td>';
							if($resultRow['gStatus']=="1")
							 {
									$list.='<button onclick="showHideGallery('.$resultRow["gId"].',0)" type="button" class="btn btn-info">Active</button>';
							 }
							 else
							 {
									$list.='<button onclick="showHideGallery('.$resultRow["gId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
							 }
							$list.='
							</td>
							 
							<td><button type="button" onclick="updateGallery('.$resultRow['gId'].')" class="btn green-meadow">Edit</button>
							  </td>
						  	<td>
							<button type="button" onclick="deleteGallery('.$resultRow['gId'].')" class="btn btn-warning">Delete</button>
							 </td>
					 	</tr>';
	}
	echo $list;
}
// End Gallery


// Start Our service

function deleteOurServices()
{
	deleteOurServicesDB();
	$result=getAllServicesNameListDB();
	$list='';
	$i=1;
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
										<td>'.$i++.'</td>
										<td>'.$resultRow['sName'].'</td>
										<td>'.$resultRow['sImage'].'</td>
										<td>'.$resultRow['desc'].'</td>
										<td> 
										<button type="button" onclick="updateServices('.$resultRow['sId'].')" class="btn green-meadow">Edit</button>
										<button type="button" onclick="deleteServices('.$resultRow['sId'].')" class="btn btn-warning">Delete</button> </td>
									</tr>';
		}
	echo $list;
}

function getOurServicesDetails()
{
	$result=getOurServicesDetailsDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
	  $list.='<form action="" method="post" onSubmit="return checkValidationU();" name="cServicesFormU" id="cServicesFormU" enctype="multipart/form-data">
                <input type="hidden" name="action" value="updateOurServices">
				<input type="hidden" name="sId" value="'.$resultRow['sId'].'">
                <table  class="table-form">
                  <tr>
                    <th width="20%">Menu Name</th>
                    <td width="70%"><input type="text" value="'.$resultRow['sName'].'" name="name" id="nameU" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  
                   <tr>
                    <th width="20%"> Price</th>
                    <td width="70%"><input type="text" name="mPrice" value="'.$resultRow['mPrice'].'" id="imageU" class="form-control"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <th width="20%">Description</th>
                    <td width="70%"><textarea name="desc" id="titleU" class="form-control">'.$resultRow['desc'].'</textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				  
				   <tr>
                    <th width="20%">Add Menu Image</th>
                    <td width="70%"><label class="control-label">Menu Image <span style="color:#FF0000;"> (Width:300px , Height:100px)</span></label>
                    	<input type="file" name="sImage" id="image" value="'.$resultRow['sImage'].'" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				  <tr>
                    <th width="20%"></th>
                    <td width="70%">
						<input type="hidden" value="'.$resultRow['sImage'].'" name="image">
					</td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				   <tr>
                   
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Update Menu" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}

// End Our Service


//Services
function printServicesName($result)
{
		$i=1;
		$list='';
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
						<td>'.$i++.'</td>
						<td><input type="text" class="form-control" value="'.$resultRow['sName'].'" id="sName_'.$resultRow['sId'].'"></td>
					 	<td> 
						<button type="button" onclick="updateServices('.$resultRow['sId'].')" class="btn green-meadow">Edit</button>
						<button type="button" onclick="deleteServices('.$resultRow['sId'].')" class="btn btn-warning">Delete</button> </td>
                  	</tr>';
		}
		echo $list;
}

function deleteServicesName()
{
	deleteServicesNameDB();
	$result=getAllServicesNameListDB();
	printServicesName($result);
}

 

// End Services

function getPageDetails()
{
	$result=getPageDetailsDB();
	$list='';
	while($resultRow = fetchArray($result))
	{
		$list.=' <form enctype="multipart/form-data" method="post" name="PageDataFormUpdate" id="PageDataFormUpdate" onsubmit="return checkAllFieldsUpdate()" action="">
              <input type="hidden" value="updateNewPage" name="action" />
			  <input type="hidden" value="'.$resultRow['pageId'].'" name="pageId" />
                <table   class="table">
                  <tr>
                    <td width="6%"></td>
                    <td width="14%">Page Name</td>
                    <td width="76%"><input type="text" class="form-control requiredInput" id="pageNameU" value="'.$resultRow['pageName'].'" name="pageName" /></td>
                    <td width="4%"></td>
                  </tr>
                 <tr>
                    <td width="6%"></td>
                    <td width="14%">Page Content</td>
                    <td width="76%"><textarea class="textBox requiredInput" id="pageContent1U" name="pageContent1">'.$resultRow['pageData'].'</textarea></td>
                    <td width="4%"></td>
                  </tr>
                 <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn green" value="Update" />
                      <input type="button" class="btn green" value="Cancle" onclick="viewPageData()" /></td>
                    <td></td>
                  </tr>
                </table>
              </form>';
	}
	echo $list;
}

function deleteQuery()
{
	deleteQueryDB();
	$result=getAllContactQueryListDB();
	$list='';
	$i=1;
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
                    <td>'.$i++.'</td>
                    <td>'.$resultRow['name'].'</td>
					<td>'.$resultRow['email'].'</td>
					<td>'.$resultRow['phone'].'</td>
					<td>'.$resultRow['phone'].'</td>
					<td><textarea>'.$resultRow['massege'].'</textarea></td>
				     <td> <button type="button" onclick="deleteQuery('.$resultRow['id'].')" class="btn btn-warning">Delete</button> </td>
                  </tr>';
		}
	echo $list;	
		
}

function deletesubscribers()
{
	deletesubscribersDB();
	$result=getAllsubscribersListDB();
	$list='';
	$i=1;
		while($resultRow = fetchArray($result))
		{
			$list.='<tr role="row" class="filter">
                    <td>'.$i++.'</td>
                    <td>'.$resultRow['name'].'</td>
					<td>'.$resultRow['email'].'</td>
				     <td> <button type="button" onclick="deletesubscribers('.$resultRow['id'].')" class="btn btn-warning">Delete</button> </td>
                  </tr>';
		}
	echo $list;	
		
}

function printSliderData($result)
{
	$list='';
	$i=1;
	while($resultRow = fetchArray($result))
	{
			$list.='<tr role="row" class="filter">
                    <td>'.$i++.'</td>
                    <td><img src="'.$resultRow['imagePath'].'" width="235" height="120"/></td>
                    <td> <button type="button" onclick="deleteSlider('.$resultRow['sId'].')" class="btn btn-warning">Delete</button>';
                     if($resultRow['status']==1) 
					 { 
					 	$list.='<button onclick="showHide('.$resultRow["sId"].',0)" type="button" class="btn btn-info">Active</button>';
					 }
					 else
					 {
						 $list.='<button onclick="showHide('.$resultRow["sId"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
					 }
                   $list.='</td>
                  </tr>';
	}
	echo $list;
}
function deleteSlider()
{
	deleteSliderDB();
	$result=getAllSliderImagesDB();
	printSliderData($result);
}
function showHideSlider()
{
	showHideSliderDB();
	$result=getAllSliderImagesDB();
	printSliderData($result);
} 



function printMcategoryData($result)
{
	$list='';
	$i=1;
	while($resultRow = fetchArray($result))
	{
			$list.='<tr role="row" class="filter">
                    <td>'.$i++.'</td>
                    <td width="235" height="120">'.$resultRow['menucategory'].'</td>
                    <td> <button type="button" onclick="deleteMcetegory('.$resultRow['mid'].')" class="btn btn-warning">Delete</button>';
                     if($resultRow['status']==1) 
					 { 
					 	$list.='<button onclick="showHide('.$resultRow["mid"].',0)" type="button" class="btn btn-info">Active</button>';
					 }
					 else
					 {
						 $list.='<button onclick="showHide('.$resultRow["mid"].',1)" type="button" class="btn btn-danger">Deactivate</button>';
					 }
                   $list.='</td>
                  </tr>';
	}
	echo $list;
}

function deleteMcetegory()
{
	deleteMcategoryDB();
	$result=getAllMcategoryDB();
	printMcategoryData($result);
}
function showHideMcetegory()
{
	showHideMcategoryDB();
	$result=getAllMcategoryDB();
	printMcategoryData($result);
} 
?>

