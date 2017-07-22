<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' href='style.css'/>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>
	</head>

	<body>
		<div class='container-fluid'>
			<div class="form-group">
				
				<!-- Mortgage Goal -->
				<div class="row">
					<div class="col-md-2">
						<label>Mortgage goal</label>
						<select class="form-control">
							<option>Goal</option>
							</select>
						</div>
				</div>

				<!-- Reason -->
				<div class="row">
					<div class="col-md-3">
						<label>Reason</label>
						<select class="form-control">
							<option>Reason</option>
						</select>
					</div>
				</div>

				<!-- Down payment -->
				<div class="row">
					<div class="col-md-2">
						<label>Est. Down payment</label>
						<input type="money" class="form-control" value="Down Payment"></input>
					</div>

					<div class="col-md-1">
						<label>Credit Score</label>
						<input type="number" class="form-control" maxlength="3" min="300" max="850"></input>
					</div>
				</div>

				<!-- monthly rate -->
				<div class="row">
					<div class="col-md-2">
						<label>Monthly interest Payment</label>						
						<input type="percent" class="form-control" value="Down Payment"></input>
					</div>
					<div class="col-md-3">
						<label>Have you served Military</label><br/>
						<input type="radio"><label>Yes</label></input>
						<input type="radio"><label>No</label></input>
					</div>
				</div>				

				<!-- Price of Home -->
				<div class="row">
					<div class="col-md-2">
						<label>Price of home</label>
						<input type="percent" class="form-control" value="Price of home"></input>
					</div>
					<div class="col-md-1">
						<label>State</label>
						<select class="form-control">
							<option>State</option>
						</select>
					</div>
				</div>

				<!-- Loan Type -->
				<div class="row">
					<div class="col-md-3">
						<label>Loan Type</label>
						<select class="form-control">
							<option>Type</option>
						</select>
					</div>
				</div>
				
			</div>			
		</div>

		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
	</body>
</html>