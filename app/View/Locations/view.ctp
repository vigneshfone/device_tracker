<div class="locations view">
<h2><?php  echo __('Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($location['Location']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($location['Location']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Location'), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Location'), array('action' => 'delete', $location['Location']['id']), null, __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Devices'); ?></h3>
	<?php if (!empty($location['Device'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Device Type Id'); ?></th>
		<th><?php echo __('Employee Id'); ?></th>
		<th><?php echo __('Device Name'); ?></th>
		<th><?php echo __('Serial Number'); ?></th>
		<th><?php echo __('Imei Number'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Purchase  Date'); ?></th>
		<th><?php echo __('Warranty Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Device'] as $device): ?>
		<tr>
			<td><?php echo $device['id']; ?></td>
			<td><?php echo $device['device_type_id']; ?></td>
			<td><?php echo $device['employee_id']; ?></td>
			<td><?php echo $device['device_name']; ?></td>
			<td><?php echo $device['serial_number']; ?></td>
			<td><?php echo $device['imei_number']; ?></td>
			<td><?php echo $device['location_id']; ?></td>
			<td><?php echo $device['comment']; ?></td>
			<td><?php echo $device['purchase _date']; ?></td>
			<td><?php echo $device['warranty_date']; ?></td>
			<td><?php echo $device['created']; ?></td>
			<td><?php echo $device['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'devices', 'action' => 'view', $device['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'devices', 'action' => 'edit', $device['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'devices', 'action' => 'delete', $device['id']), null, __('Are you sure you want to delete # %s?', $device['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
