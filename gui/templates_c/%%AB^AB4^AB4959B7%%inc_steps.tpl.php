<?php /* Smarty version 2.6.26, created on 2012-07-13 19:45:21
         compiled from testcases/inc_steps.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang_get', 'testcases/inc_steps.tpl', 20, false),array('modifier', 'escape', 'testcases/inc_steps.tpl', 69, false),)), $this); ?>
<?php echo lang_get_smarty(array('var' => 'inc_steps_labels','s' => "show_hide_reorder, step_number, step_actions,expected_results, 
             execution_type_short_descr,delete_step,insert_step"), $this);?>

<?php echo lang_get_smarty(array('s' => 'warning_delete_step','var' => 'warning_msg'), $this);?>

<?php echo lang_get_smarty(array('s' => 'delete','var' => 'del_msgbox_title'), $this);?>


<?php if ($this->_tpl_vars['layout'] == 'horizontal'): ?>
	<tr>
		<th width="25px"><nobr>
		<?php if ($this->_tpl_vars['edit_enabled'] && $this->_tpl_vars['steps'] != ''): ?>
			<img class="clickable" src="<?php echo $this->_tpl_vars['tlImages']['reorder']; ?>
" align="left"
			     title="<?php echo $this->_tpl_vars['inc_steps_labels']['show_hide_reorder']; ?>
"
			     onclick="showHideByClass('span','order_info');">
		<?php endif; ?>
			<?php echo $this->_tpl_vars['inc_steps_labels']['step_number']; ?>

		</nobr></th>
		<th><?php echo $this->_tpl_vars['inc_steps_labels']['step_actions']; ?>
</th>
		<th><?php echo $this->_tpl_vars['inc_steps_labels']['expected_results']; ?>
</th>
		<?php if ($this->_tpl_vars['session'] ['testprojectOptions']->automationEnabled): ?>
		<th width="25"><?php echo $this->_tpl_vars['inc_steps_labels']['execution_type_short_descr']; ?>
</th>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['edit_enabled']): ?>
		<th>&nbsp;</th>
		<th>&nbsp;</th>
		<?php endif; ?>
	</tr>
		<?php $_from = $this->_tpl_vars['steps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['step_info']):
?>
	<tr id="step_row_<?php echo $this->_tpl_vars['step_info']['step_number']; ?>
">
		<td style="text-align:left;">
			<span class="order_info" style='display:none'>
			<input type="text" name="step_set[<?php echo $this->_tpl_vars['step_info']['id']; ?>
]" id="step_set_<?php echo $this->_tpl_vars['step_info']['id']; ?>
"
				value="<?php echo $this->_tpl_vars['step_info']['step_number']; ?>
"
				size="<?php echo $this->_config[0]['vars']['STEP_NUMBER_SIZE']; ?>
"
				maxlength="<?php echo $this->_config[0]['vars']['STEP_NUMBER_MAXLEN']; ?>
">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "error_icon.tpl", 'smarty_include_vars' => array('field' => 'step_number')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</span><?php echo $this->_tpl_vars['step_info']['step_number']; ?>

		</td>
		<td <?php if ($this->_tpl_vars['edit_enabled']): ?> style="cursor:pointer;" onclick="launchEditStep(<?php echo $this->_tpl_vars['step_info']['id']; ?>
)" <?php endif; ?>><?php echo $this->_tpl_vars['step_info']['actions']; ?>
</td>
		<td <?php if ($this->_tpl_vars['edit_enabled']): ?> style="cursor:pointer;" onclick="launchEditStep(<?php echo $this->_tpl_vars['step_info']['id']; ?>
)" <?php endif; ?>><?php echo $this->_tpl_vars['step_info']['expected_results']; ?>
</td>
		<?php if ($this->_tpl_vars['session'] ['testprojectOptions']->automationEnabled): ?>
		<td <?php if ($this->_tpl_vars['edit_enabled']): ?> style="cursor:pointer;" onclick="launchEditStep(<?php echo $this->_tpl_vars['step_info']['id']; ?>
)" <?php endif; ?>><?php echo $this->_tpl_vars['gui']->execution_types[$this->_tpl_vars['step_info']['execution_type']]; ?>
</td>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['edit_enabled']): ?>
		<td class="clickable_icon">
			<img style="border:none;cursor: pointer;"
			     title="<?php echo $this->_tpl_vars['inc_steps_labels']['delete_step']; ?>
"
			     alt="<?php echo $this->_tpl_vars['inc_steps_labels']['delete_step']; ?>
"
			     onclick="delete_confirmation(<?php echo $this->_tpl_vars['step_info']['id']; ?>
,'<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['step_info']['step_number'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
',
					                               '<?php echo $this->_tpl_vars['del_msgbox_title']; ?>
','<?php echo $this->_tpl_vars['warning_msg']; ?>
');"
			     src="<?php echo $this->_tpl_vars['tlImages']['delete']; ?>
"/>
		</td>
		
		<td class="clickable_icon">
			<img style="border:none;cursor: pointer;"  title="<?php echo $this->_tpl_vars['inc_steps_labels']['insert_step']; ?>
"    
					 alt="<?php echo $this->_tpl_vars['inc_steps_labels']['insert_step']; ?>
"
			     onclick="launchInsertStep(<?php echo $this->_tpl_vars['step_info']['id']; ?>
);"    src="<?php echo $this->_tpl_vars['tlImages']['insert_step']; ?>
"/>
		</td>
		
		<?php endif; ?>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
		<?php if ($this->_tpl_vars['edit_enabled']): ?>
	<tr><td>
		<img class="clickable" src="<?php echo $this->_tpl_vars['tlImages']['reorder']; ?>
" align="left" title="<?php echo $this->_tpl_vars['inc_steps_labels']['show_hide_reorder']; ?>
"
		onclick="showHideByClass('span','order_info');"></td>
		<td><?php echo $this->_tpl_vars['inc_steps_labels']['show_hide_reorder']; ?>
</td>
	</tr>
	<?php endif; ?>
	<?php $_from = $this->_tpl_vars['steps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['step_info']):
?>
	<tr>
		<th width="25px"><nobr><?php echo $this->_tpl_vars['inc_steps_labels']['step_number']; ?>

		<span class="order_info" style='display:none'>
		<input type="text" name="step_set[<?php echo $this->_tpl_vars['step_info']['id']; ?>
]" id="step_set_<?php echo $this->_tpl_vars['step_info']['id']; ?>
"
		       value="<?php echo $this->_tpl_vars['step_info']['step_number']; ?>
"
		       size="<?php echo $this->_config[0]['vars']['STEP_NUMBER_SIZE']; ?>
"
		       maxlength="<?php echo $this->_config[0]['vars']['STEP_NUMBER_MAXLEN']; ?>
">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "error_icon.tpl", 'smarty_include_vars' => array('field' => 'step_number')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</span><?php echo $this->_tpl_vars['step_info']['step_number']; ?>
</nobr></th>
		<th><?php echo $this->_tpl_vars['inc_steps_labels']['step_actions']; ?>
</th>
		<?php if ($this->_tpl_vars['session'] ['testprojectOptions']->automationEnabled): ?>
		<th><?php echo $this->_tpl_vars['inc_steps_labels']['execution_type_short_descr']; ?>
:
		    <?php echo $this->_tpl_vars['gui']->execution_types[$this->_tpl_vars['step_info']['execution_type']]; ?>
</th>
		<?php else: ?>
		<th>&nbsp;</th>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['edit_enabled']): ?>
		<th>&nbsp;</th>
		<?php endif; ?>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="2" <?php if ($this->_tpl_vars['edit_enabled']): ?> style="cursor:pointer;"
		    onclick="launchEditStep(<?php echo $this->_tpl_vars['step_info']['id']; ?>
)"<?php endif; ?>
		    style="padding: 0.5em"><?php echo $this->_tpl_vars['step_info']['actions']; ?>
</td>
		<?php if ($this->_tpl_vars['edit_enabled']): ?>
		<td class="clickable_icon">
			<img style="border:none;cursor: pointer;"
			     title="<?php echo $this->_tpl_vars['inc_steps_labels']['delete_step']; ?>
"
			     alt="<?php echo $this->_tpl_vars['inc_steps_labels']['delete_step']; ?>
"
			     onclick="delete_confirmation(<?php echo $this->_tpl_vars['step_info']['id']; ?>
,
			             '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['step_info']['step_number'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
',
			             '<?php echo $this->_tpl_vars['del_msgbox_title']; ?>
','<?php echo $this->_tpl_vars['warning_msg']; ?>
');"
			     src="<?php echo $this->_tpl_vars['tlImages']['delete']; ?>
"/>
						<img style="border:none;cursor: pointer;"  title="<?php echo $this->_tpl_vars['inc_steps_labels']['insert_step']; ?>
"    
					 alt="<?php echo $this->_tpl_vars['inc_steps_labels']['insert_step']; ?>
"
			     onclick="launchInsertStep(<?php echo $this->_tpl_vars['step_info']['id']; ?>
);" src="<?php echo $this->_tpl_vars['tlImages']['insert_step']; ?>
"/>

		</td>
		<?php endif; ?>
	</tr>
	<tr>
		<th style="background: transparent; border: none"></th>
		<th colspan="2"><?php echo $this->_tpl_vars['inc_steps_labels']['expected_results']; ?>
</th>
	</tr>
	<tr <?php if ($this->_tpl_vars['edit_enabled']): ?> style="cursor:pointer;"
	    onclick="launchEditStep(<?php echo $this->_tpl_vars['step_info']['id']; ?>
)"<?php endif; ?>>
	    <td>&nbsp;</td>
		<td colspan="2" style="padding: 0.5em 0.5em 2em 0.5em"><?php echo $this->_tpl_vars['step_info']['expected_results']; ?>
</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>