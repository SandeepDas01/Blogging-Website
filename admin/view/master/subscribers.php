
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">View Subscribers</h3>
      </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
      <li class="btn-group"> <a onclick="viewSliderImages()"><span class="btn blue dropdown-toggle">View All </span></a> </li>
      <li> <a href="javascript:void(0);"></a> </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet">
          <div class="portlet-body">
            <div class="table-container"  id="viewSliderDiv">
              <?php 
				$sql= "select * from newsletter order by id desc";
				$result=query($sql);
	 			?>
             <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                <thead>
                  <tr role="row" class="heading">
                    <th width="10%"> S.No. </th>
                    <th width="15%"> Name </th>
                    <th width="15%">Email Id</th>
                    <th width="15%"> Delete </th>
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
                    <td>'.$resultRow['name'].'</td>
					<td>'.$resultRow['email'].'</td>
				     <td> <button type="button" onclick="deletesubscribers('.$resultRow['id'].')" class="btn btn-warning">Delete</button> </td>
                  </tr>';
		}
		if($i==1)
		{
			$list.='<tr>
                    <td colspan="7"><b>
                      <center>
                        No Query Found!
                      </center>
                      </b></td>
                  </tr>';
		}
		
		echo $list;
		
		 ?>
                </tbody>
              </table>
            </div>
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
function deletesubscribers(Id)
{
	var temp=confirm("Are You Confirm to delete this Query");
	if(temp)
	{
	$.ajax({
		  url: '?action=ajaxAction&id='+Id,
			  type: 'POST',
			  data: 'act=deletesubscribers',
			  success: function(data)
			  {
				   $().toastmessage('showToast',
					{
						text     : 'Subscribers Deleted Successfully!',
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

function viewSliderImages()
{
	window.location.href="?action=main";
}
 

</script>
</body></html>