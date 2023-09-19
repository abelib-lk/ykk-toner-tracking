<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM persons where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}
}
?>
<div class="container-fluid">
	<form action="" id="manage-person">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id :'' ?>">
		<div class="row form-group">
			<div class="col-md-4">
				<label for="" class="control-label">Special Name</label>
				<input type="text" class="form-control" name="lastname"  value="<?php echo isset($lastname) ? $lastname :'' ?>" required>
			</div>
			<div class="col-md-4">
				<label for="" class="control-label">Company Name</label>
				<input type="text" class="form-control" name="firstname"  value="<?php echo isset($firstname) ? $firstname :'' ?>" required>
			</div>
			<div class="col-md-4">
				<label for="" class="control-label">Model Name</label>
				<input type="text" class="form-control" name="middlename"  value="<?php echo isset($middlename) ? $middlename :'' ?>" required>
			</div>
		</div>
		<hr>
			
			<div class="row form-group">
				<div class="col-md-4">
					<label for="" class="control-label">Summery of Toner Info</label>
					<textarea name="address" id="address" class="form-control" cols="30" rows="2" required=""><?php echo isset($address) ? $address :'' ?></textarea>
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Page Yeilds</label>
					<textarea name="street" id="street" class="form-control" cols="30" rows="2" required=""><?php echo isset($street) ? $street :'' ?></textarea>
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Purchased Date</label>
					<textarea name="baranggay" id="baranggay" class="form-control" cols="30" rows="2" required=""><?php echo isset($baranggay) ? $baranggay :'' ?></textarea>
				</div>
			</div>
		<hr>

			<div class="row form-group">
				<div class="col-md-4">
					<label for="" class="control-label">Supplier Info</label>
					<textarea name="city" id="city" class="form-control" cols="30" rows="2" required=""><?php echo isset($city) ? $city :'' ?></textarea>
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">contact Person</label>
					<textarea name="state" id="state" class="form-control" cols="30" rows="2" required=""><?php echo isset($state) ? $state :'' ?></textarea>
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Contact No</label>
					<textarea name="zip_code" id="zip_code" class="form-control" cols="30" rows="2" required=""><?php echo isset($zip_code) ? $zip_code :'' ?></textarea>
				</div>
			</div>
		</>
	</form>
</div>
<script>
	$('#manage-person').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_person',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					$('#msg').html("<div class='alert alert-danger'>Name already exist.</div>")
					end_load()

				}
			}
		})
	})
</script>