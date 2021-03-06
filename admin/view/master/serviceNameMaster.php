
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">Abstract View</h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewServices()"><span class="btn blue dropdown-toggle">View All Abstract View</span></a> </li>
      <li class="btn-group"> <a onclick="addNewServices()"><span class="btn blue dropdown-toggle">Add New </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewServicesDiv">
              <?php 
				$sql= "select * from services";
				$result=query($sql);
	 	      ?>
              <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="10%"> S.No. </th>
                    <th width="15%">Abstractview Name </th>
                    <th width="10%"> DPI </th>
					 <th width="20%">Cite </th>
                    <th width="15%">Update / Delete </th>
                  </tr>
                </thead>
                <tbody id="innerContent">
                  <?php 
								$i=1;
					         $list='';
						while($resultRow = fetchArray($result))
						{
							$list.='<tr role="row" class="filter">
										<td>'.$i++.'</td>
										<td>'.$resultRow['sName'].'</td>
										<td>'.$resultRow['sImage'].'</td>
										<td>'.$resultRow['Author'].'</td>
										<td> 
										<button type="button" onclick="updateServices('.$resultRow['sId'].')" class="btn green-meadow">Edit</button>
										<button type="button" onclick="deleteServices('.$resultRow['sId'].')" class="btn btn-warning">Delete</button> </td>
									</tr>';
						}
						if($i==1)
						{
							$list.='<tr>
									<td colspan="7"><b>
									  <center>
										No Menu Found!
									  </center>
									  </b></td>
								  </tr>';
						}
					echo $list;
				  ?>
                </tbody>
              </table>
            </div>
            <div id="addNewServicesDiv" style="display:none">
              <form action="" method="post" onSubmit="return checkValidation();" name="servicesForm" id="servicesForm" enctype="multipart/form-data">
                <input type="hidden" name="action" value="addAbstractDB">
                <table  class="table-form">
				   <td>
				    <td width="70%">
				   <select name="menucategory"id="position" class="form-control requiredInput">
                        <option value="0">Select</option>
                        <?php
							$sql='select * from menucategory where status=1';
							$result=query($sql);
							$list='';
							while($resultRow = fetchArray($result))
							{
								$list.='<option value="'.$resultRow['mid'].'">'.$resultRow['menucategory'].'</option>';
							}
							echo $list;
						?>
                      </select>
					  
					  </td>
				
                <tr>
                    <th width="20%">Title Name</th>
                    <td width="70%"><input type="text" name="title" id="name" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <th width="20%">Author</th>
                    <td width="70%"><input type="text" name="author" id="image" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				  <tr>
                    <th width="20%">DOI</th>
                    <td width="70%"><input type="text" name="doi" id="image" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				  <tr>
                    <th width="20%">Cite</th>
                    <td width="70%"><input type="text" name="cite" id="image" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                   <tr>
                    <th width="20%">ABSTRACT</th>
                    <td width="70%"><textarea class="form-control" name="abstract" id="sdescription" > </textarea></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
				 
                   <tr>
                    <th width="20%">Add Abstract View File</th>
                    <td width="70%"><label class="control-label">Note: <span style="color:#FF0000;"> (Abstract File Size not more then 10MB)</span></label>
                    	<input type="file" name="image" id="image" class="form-control requiredInput"></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" name="add_banner" value="Add Abstract" class="btn green" ></td>
                    <td width="5%">&nbsp;</td>
                  </tr>
                </table>
              </form>
            </div>
            <div id="updateDiv"> </div>
          </div>
        </div>
        <!-- End: life time stats -->
      </div>
    </div>
    <!-- END PAGE CONTENT-->
  </div>
</div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include "view/common/footer.php"; ?>
<link type="text/css" href="assets/css/jquery.toastmessage.css" rel="stylesheet"/>
<script src="assets/js/jquery.toastmessage.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/validator.js"></script>
<script language="javascript" type="text/javascript">


function deleteServices(Id)
{
	var temp=confirm("Are You Confirm to delete this Abstract View!");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id,
			  type: 'POST',
			  data: 'act=deleteOurServices',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Abstract View  Deleted Successfully!',
						position : 'top-right',
						stayTime: 4000,
						type     : 'success'
					 });
				  document.getElementById("innerContent").innerHTML=data;
			  },
			 error: function(e)
			 {
			 }
		});
	}
}

function updateServices(id)
{
 	$.ajax({
		  url: '?action=ajaxAction&id='+id,
			  type: 'POST',
			  data: 'act=getServiceDetails',
			  success: function(data)
			  {
				document.getElementById("viewServicesDiv").style.display="none";
				document.getElementById("updateDiv").style.display="block";
	 			document.getElementById("addNewServicesDiv").style.display="none";
				
				 
			  	document.getElementById("updateDiv").innerHTML=data;
		 	  },
			 error: function(e)
			 {
			 }
		});
}
 

function addNewServices()
{
	document.getElementById("viewServicesDiv").style.display="none";
	document.getElementById("updateDiv").style.display="none";
 	document.getElementById("addNewServicesDiv").style.display="block";
	 
}
function viewServices()
{
	window.location.href="?action=serviceNameMaster";
}
 
function checkValidation()
{
	var t = checkRequiredFields('servicesForm');
	if(t==true)
	{
		return true;
	}
	else
		return false;
}

</script>
</body></html>