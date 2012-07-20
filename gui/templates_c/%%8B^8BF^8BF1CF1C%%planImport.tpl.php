<?php /* Smarty version 2.6.26, created on 2012-07-13 19:41:07
         compiled from plan/planImport.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang_get', 'plan/planImport.tpl', 9, false),array('function', 'config_load', 'plan/planImport.tpl', 16, false),array('function', 'html_options', 'plan/planImport.tpl', 35, false),array('modifier', 'basename', 'plan/planImport.tpl', 15, false),array('modifier', 'replace', 'plan/planImport.tpl', 15, false),array('modifier', 'escape', 'plan/planImport.tpl', 23, false),)), $this); ?>

<?php echo lang_get_smarty(array('var' => 'labels','s' => 'file_type,view_file_format_doc,local_file,
             max_size_cvs_file1,max_size_cvs_file2,btn_upload_file,
             duplicate_criteria,action_for_duplicates,
             action_on_duplicated_name,warning,btn_cancel,title_imp_tc_data'), $this);?>


<?php $this->assign('cfg_section', ((is_array($_tmp=((is_array($_tmp='plan/planImport.tpl')) ? $this->_run_mod_handler('basename', true, $_tmp) : basename($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ".tpl", "") : smarty_modifier_replace($_tmp, ".tpl", ""))); ?>
<?php echo smarty_function_config_load(array('file' => "input_dimensions.conf",'section' => $this->_tpl_vars['cfg_section']), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_head.tpl", 'smarty_include_vars' => array('openHead' => 'yes')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_del_onclick.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</head>
<body>

<h1 class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['gui']->main_descr)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h1>

<div class="workBack">
<h1 class="title"><?php echo $this->_tpl_vars['gui']->import_title; ?>
</h1>

<?php if ($this->_tpl_vars['gui']->resultMap == null): ?>
<form method="post" enctype="multipart/form-data" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
">

  <table>
  <tr>
  <td> <?php echo $this->_tpl_vars['labels']['file_type']; ?>
 </td>
  <td> <select name="importType">
         <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['gui']->importTypes), $this);?>

	     </select>
	<a href=<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo @PARTIAL_URL_TL_FILE_FORMATS_DOCUMENT; ?>
><?php echo $this->_tpl_vars['labels']['view_file_format_doc']; ?>
</a>
	</td>
	</tr>
	<tr><td><?php echo $this->_tpl_vars['labels']['local_file']; ?>
 </td>
	    <td><input type="file" name="uploadedFile" 
	                           size="<?php echo $this->_config[0]['vars']['FILENAME_SIZE']; ?>
" maxlength="<?php echo $this->_config[0]['vars']['FILENAME_MAXLEN']; ?>
"/></td>
	</tr>

	</table>
	<p><?php echo $this->_tpl_vars['labels']['max_size_cvs_file1']; ?>
 <?php echo $this->_tpl_vars['gui']->importLimitKB; ?>
 <?php echo $this->_tpl_vars['labels']['max_size_cvs_file2']; ?>
</p>
	<div class="groupBtn">
				<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['gui']->importLimitBytes; ?>
" /> 
		<input type="hidden" name="tplan_id" value="<?php echo $this->_tpl_vars['gui']->tplan_id; ?>
" />

		<input type="submit" name="uploadFile" value="<?php echo $this->_tpl_vars['labels']['btn_upload_file']; ?>
" />
		<input type="button" name="cancel" value="<?php echo $this->_tpl_vars['labels']['btn_cancel']; ?>
"  onclick="javascript:history.back();" />
	</div>
</form>
<?php else: ?>
	<?php $_from = $this->_tpl_vars['gui']->resultMap; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
		<b><?php echo ((is_array($_tmp=$this->_tpl_vars['result'][0])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b> : <?php echo ((is_array($_tmp=$this->_tpl_vars['result'][1])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br />
	<?php endforeach; endif; unset($_from); ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_refreshTree.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['gui']->import_done): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_refreshTree.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['gui']->file_check['status_ok'] == 0): ?>
  <script type="text/javascript">
//  BUGID 3943: Escape all messages (string)
  alert_message("<?php echo $this->_tpl_vars['labels']['warning']; ?>
","<?php echo ((is_array($_tmp=$this->_tpl_vars['gui']->file_check['msg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
");
  // alert("<?php echo $this->_tpl_vars['gui']->file_check['msg']; ?>
");
  </script>
<?php endif; ?>  
</div>

</body>
</html>