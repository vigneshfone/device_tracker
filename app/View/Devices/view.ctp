<div class="devices view">
<h2><?php  echo __('Device'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($device['Device']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Device Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($device['DeviceType']['name'], array('controller' => 'device_types', 'action' => 'view', $device['DeviceType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo $this->Html->link($device['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $device['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Device Name'); ?></dt>
		<dd>
			<?php echo h($device['Device']['device_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial Number'); ?></dt>
		<dd>
			<?php echo h($device['Device']['serial_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imei Number'); ?></dt>
		<dd>
			<?php echo h($device['Device']['imei_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($device['Location']['name'], array('controller' => 'locations', 'action' => 'view', $device['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($device['Device']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase  Date'); ?></dt>
		<dd>
			<?php echo h($device['Device']['purchase _date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Warranty Date'); ?></dt>
		<dd>
			<?php echo h($device['Device']['warranty_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($device['Device']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($device['Device']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Device'), array('action' => 'edit', $device['Device']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Device'), array('action' => 'delete', $device['Device']['id']), null, __('Are you sure you want to delete # %s?', $device['Device']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Device Types'), array('controller' => 'device_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device Type'), array('controller' => 'device_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
