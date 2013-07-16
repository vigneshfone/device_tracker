<div class="devices form">
<?php echo $this->Form->create('Device'); ?>
	<fieldset>
		<legend><?php echo __('Edit Device'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('device_type_id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('device_name');
		echo $this->Form->input('serial_number');
		echo $this->Form->input('imei_number');
		echo $this->Form->input('location_id');
		echo $this->Form->input('comment');
		echo $this->Form->input('purchase _date');
		echo $this->Form->input('warranty_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Device.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Device.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Devices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Device Types'), array('controller' => 'device_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device Type'), array('controller' => 'device_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
