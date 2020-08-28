<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="user-profile-1" class="user-profile row">
	<div class="col-xs-12 col-sm-3 center">
		<div>
			<span class="profile-picture">
				<img
					id="avatar"
					class="editable img-responsive editable-click editable-empty"
					alt="Alex's Avatar"
					src="<?php echo base_url();?>assets/avatars/profile-pic.jpg"
				></img>
			</span>
			
			<div class="space-4"></div>
			
			<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
				<div class="inline position-relative">
					<a
						href="#"
						class="user-title-label dropdown-toggle"
						data-toggle="dropdown"
					>	
						<i class="ace-icon fa fa-circle light-green"></i>
						&nbsp;
	
						<span class="white">
							<?php echo $data['employee_name']; ?>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-sm-9">
		<div class="profile-user-info profile-user-info-striped">
			<div class="profile-info-row">
				<div class="profile-info-name">Name</div>

				<div class="profile-info-value">
					<span><?php echo $data['employee_name']; ?></span>
				</div>
			</div>

			<div class="profile-info-row">
				<div class="profile-info-name">Salary</div>

				<div class="profile-info-value">
					<span><?php echo $data['employee_salary']; ?></span>
				</div>
			</div>

			<div class="profile-info-row">
				<div class="profile-info-name">Age</div>
				<div class="profile-info-value">
					<span><?php echo $data['employee_age']; ?></span>
				</div>
			</div>
		</div>
		
		<div class="hr hr2 hr-double"></div>
	</div>
</div>
