<?php /* Smarty version 2.6.26, created on 2012-07-13 19:38:09
         compiled from inc_tree_control.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang_get', 'inc_tree_control.tpl', 12, false),)), $this); ?>

<?php echo lang_get_smarty(array('var' => 'labels','s' => 'expand_tree, collapse_tree'), $this);?>


<div class="x-panel-body exec_additional_info" style="padding:3px; padding-left: 9px;border:1px solid #99BBE8;">

<input type="button"
       value="<?php echo $this->_tpl_vars['labels']['expand_tree']; ?>
" 
       id="expand_tree" 
       name="expand_tree"
       onclick="tree.expandAll();"
       style="font-size: 90%;" />

<input type="button"
       value="<?php echo $this->_tpl_vars['labels']['collapse_tree']; ?>
"
       id="collapse_tree"
       name="collapse_tree"
       onclick="tree.collapseAll();"
       style="font-size: 90%;" />

</div>