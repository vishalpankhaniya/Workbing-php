<?php
include 'lock.php';

if(isset($_SESSION['uid']))
	$user_id = $_SESSION['uid'];
else
	$user_id=1;

include 'config.php';
include 'header.php';

$SqlUpdateWorker="";
$SqlUpdateWork="";
if(isset($_POST['btnWorkDone'])){
	$currentWorkId = $_POST['currentWorkId'];
	$worker_id = $_POST['workerId'];
	$SqlUpdateWork=mysqli_query($conn,"UPDATE `tbl_work_order` SET `status`=1 WHERE `ord_id`='$currentWorkId'");
	$SqlUpdateWorker=mysqli_query($conn,"UPDATE `worker` SET `work_status`=0 WHERE `wid`='$worker_id'");
}
?>
<div class="container">
	<?php
	if($SqlUpdateWorker && $SqlUpdateWork){ ?>
		<div class="row">
	    	<div class="col-12">
	    		<div class="alert alert-success">Work status changed</div>
		    </div>
		</div>
	<?php } ?>
	

	<div class="row">
    <div class="col-12">
      <div class="card mt-3 tab-card">
        <div class="card-header tab-card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item active">
                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Current Work</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Completed Work</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
          	<div class="row">
          		<div class="col-md-12">
		          	<table class="table table-stripped">
		          		<thead>
		          			<tr>
		          				<th>Worker</th>
		          				<th>Problem</th>
		          				<th>Date</th>
		          				<th>Action</th>
		          			</tr>
		          		</thead>
		          		<tbody>
		            <?php 
		            $sql_q_current = "SELECT * FROM tbl_work_order WHERE user_id='$user_id' AND status=0";
		            $query_current = mysqli_query($conn,$sql_q_current);
		            if(mysqli_num_rows($query_current)>0){
		            	while($current_data = mysqli_fetch_object($query_current)){ 
		            		$wid = $current_data->worker_id;
		            		$sql_worker = mysqli_query($conn,"SELECT fname,lname FROM worker WHERE wid='$wid'");
		            		$data_worker = mysqli_fetch_object($sql_worker);
		            		$worker_name = $data_worker->fname." ".$data_worker->lname;
		            		?>
		            		<tr>
		            			<td><?=$worker_name?></td>
		            			<td><?=$current_data->problem_stmt?></td>
		            			<td><?=date("d/m/Y",strtotime($current_data->date))?></td>
		            			<td>
		            				<form action="" method="post">
		            					<input type="hidden" name="currentWorkId" value="<?=$current_data->ord_id?>">
		            					<input type="hidden" name="workerId" value="<?=$wid?>">
		            					<button type="submit" name="btnWorkDone" class="btn btn-success workBtn"><i class='fa fa-check'></i>   Work done</button>
		            				</form>
		            				
		            			</td>
		            		</tr>
		            	<?php }
		            }else{
		            	echo "<tr><td colspan='4'><div class='alert alert-info'>No Data Found...</div></td></tr>";
		            }
		            ?>
						</tbody>
		            </table>
	            </div>
          	</div>
          </div>
          <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
            <div class="row">
          		<div class="col-md-12">
		          	<table class="table table-stripped">
		          		<thead>
		          			<tr>
		          				<th>Worker</th>
		          				<th>Problem</th>
		          				<th>Date</th>
		          				
		          			</tr>
		          		</thead>
		          		<tbody>
		            <?php 
		            $sql_q_current = "SELECT * FROM tbl_work_order WHERE user_id='$user_id' AND status=1";
		            $query_current = mysqli_query($conn,$sql_q_current);
		            if(mysqli_num_rows($query_current)>0){
		            	while($current_data = mysqli_fetch_object($query_current)){ 
		            		$wid = $current_data->worker_id;
		            		$sql_worker = mysqli_query($conn,"SELECT fname,lname FROM worker WHERE wid='$wid'");
		            		$data_worker = mysqli_fetch_object($sql_worker);
		            		$worker_name = $data_worker->fname." ".$data_worker->lname;
		            		?>
		            		<tr>
		            			<td><?=$worker_name?></td>
		            			<td><?=$current_data->problem_stmt?></td>
		            			<td><?=date("d/m/Y",strtotime($current_data->date))?></td>
		            		</tr>
		            	<?php }
		            }else{
		            	echo "<tr><td colspan='3'><div class='alert alert-info'>No Data Found...</div></td></tr>";
		            }
		            ?>
						</tbody>
		            </table>
	            </div>
          	</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>
<script type="text/javascript">
	$(".workBtn").click(function(){
		var conf = confirm("Are you sure work is completed");
		if(conf){
			return true;
		}else{
			return false;
		}
	});
</script>