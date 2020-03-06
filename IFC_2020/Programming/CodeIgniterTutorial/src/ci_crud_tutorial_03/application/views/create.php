<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo validation_errors(); ?>
<?php echo form_open('home/create/', "class='form-horizontal'"); ?>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Employee Name </label>
	<div class="col-sm-9">
		<input type="text" id="form-field-1" placeholder="Employee Name" name="employee_name" class="col-xs-10 col-sm-5" value="<?php echo set_value('employee_name'); ?>">
	</div>
</div>
<div class="col-sm-9">
	<input type="number" id="form-field-2" placeholder="Age" class="col-xs-10 col-sm-5" name="employee_age" value="<?php echo set_value('employee_age'); ?>">
</div>
</div>
<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Employee Salary </label>
	<div class="col-sm-9">
		<input type="number" id="form-field-3" placeholder="Employee Salary" class="col-xs-10 col-sm-5" name="employee_salary" value="<?php echo set_value('employee_salary'); ?>">
	</div>
</div>
<div class="space-4"></div>
<div class="clearfix form-actions">
	<div class="col-md-offset-3 col-md-9">
		<button class="btn btn-info" type="submit">
			<i class="ace-icon fa fa-check bigger-110"></i>
			Submit
		</button>
		&nbsp; &nbsp; &nbsp;
		<button class="btn" type="reset">
			<i class="ace-icon fa fa-undo bigger-110"></i>
			Reset
		</button>
	</div>
</div>
</form>
