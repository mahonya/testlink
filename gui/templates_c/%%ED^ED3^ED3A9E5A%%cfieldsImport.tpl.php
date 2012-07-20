<?php /* Smarty version 2.6.26, created on 2012-07-13 19:34:38
         compiled from cfields/cfieldsImport.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang_get', 'cfields/cfieldsImport.tpl', 9, false),array('function', 'config_load', 'cfields/cfieldsImport.tpl', 15, false),array('function', 'html_options', 'cfields/cfieldsImport.tpl', 75, false),array('modifier', 'basename', 'cfields/cfieldsImport.tpl', 14, false),array('modifier', 'replace', 'cfields/cfieldsImport.tpl', 14, false),array('modifier', 'escape', 'cfields/cfieldsImport.tpl', 23, false),)), $this); ?>

<?php echo lang_get_smarty(array('var' => 'labels','s' => 'file_type,view_file_format_doc,local_file,warning,warning_empty_filename,
             max_size_cvs_file1,max_size_cvs_file2,btn_upload_file,
             btn_goback,not_imported,imported,btn_cancel,title_imp_tc_data'), $this);?>


<?php $this->assign('cfg_section', ((is_array($_tmp=((is_array($_tmp='cfields/cfieldsImport.tpl')) ? $this->_run_mod_handler('basename', true, $_tmp) : basename($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ".tpl", "") : smarty_modifier_replace($_tmp, ".tpl", ""))); ?>
<?php echo smarty_function_config_load(array('file' => "input_dimensions.conf",'section' => $this->_tpl_vars['cfg_section']), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_head.tpl", 'smarty_include_vars' => array('openHead' => 'yes','jsValidate' => 'yes')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_del_onclick.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
'; ?>

// BUGID 3943: Escape all messages (string)
var alert_box_title = "<?php echo ((is_array($_tmp=$this->_tpl_vars['labels']['warning'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
";
var warning_empty_filename = "<?php echo ((is_array($_tmp=$this->_tpl_vars['labels']['warning_empty_filename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
";
<?php echo '
function validateForm(f)
{
  if (isWhitespace(f.targetFilename.value)) 
  {
      alert_message(alert_box_title,warning_empty_filename);
      selectField(f, \'targetFilename\');
      return false;
  }
  return true;
}
</script>
'; ?>

</head>


<body>

<h1 class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['gui']->page_title)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</h1>

<div class="workBack">
<?php if ($this->_tpl_vars['gui']->file_check['show_results']): ?>
	  <?php if ($this->_tpl_vars['gui']->file_check['import_msg']['ok'] != ''): ?>
	      <?php echo $this->_tpl_vars['labels']['imported']; ?>
<br>
	      <?php $_from = $this->_tpl_vars['gui']->file_check['import_msg']['ok']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
	      	<b><?php echo ((is_array($_tmp=$this->_tpl_vars['result'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b><br />
	      <?php endforeach; endif; unset($_from); ?>
	  <?php endif; ?> 
	  <br>
	  <?php if ($this->_tpl_vars['gui']->file_check['import_msg']['ko'] != ''): ?>
	      <?php echo $this->_tpl_vars['labels']['not_imported']; ?>
<br>
	      <?php $_from = $this->_tpl_vars['gui']->file_check['import_msg']['ko']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
	      	<b><?php echo ((is_array($_tmp=$this->_tpl_vars['result'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</b><br />
	      <?php endforeach; endif; unset($_from); ?>
	  <?php endif; ?> 
	  <form method="post" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
">
	      <br>
	  		<input type="button" name="goback" value="<?php echo $this->_tpl_vars['labels']['btn_goback']; ?>
"
    		                     <?php if ($this->_tpl_vars['gui']->goback_url != ''): ?>  onclick="location='<?php echo $this->_tpl_vars['gui']->goback_url; ?>
'"
    		                     <?php else: ?>  onclick="javascript:history.back();" <?php endif; ?> />
	  </form>
    
<?php else: ?>
    <form method="post" enctype="multipart/form-data" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
"
          onSubmit="javascript:return validateForm(this);">
    
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
    	    <td><input type="file" name="targetFilename" value=""
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
    		<input type="hidden" name="doAction" id="doAction" value="doImport" />
    		    		<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['gui']->importLimitKB; ?>
" /> 
    		<input type="submit" name="UploadFile" value="<?php echo $this->_tpl_vars['labels']['btn_upload_file']; ?>
" />
    		<input type="button" name="cancel" value="<?php echo $this->_tpl_vars['labels']['btn_cancel']; ?>
"
    		                     <?php if ($this->_tpl_vars['gui']->goback_url != ''): ?>  onclick="location='<?php echo $this->_tpl_vars['gui']->goback_url; ?>
'"
    		                     <?php else: ?>  onclick="javascript:history.back();" <?php endif; ?> />
    	</div>
    </form> 
<?php endif; ?>


<?php if ($this->_tpl_vars['gui']->file_check['status_ok'] == 0): ?>
    <script>
    alert_message(alert_box_title,"<?php echo ((is_array($_tmp=$this->_tpl_vars['gui']->file_check['msg'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
");
    </script>
<?php endif; ?>  


</div>

</body>
</html>