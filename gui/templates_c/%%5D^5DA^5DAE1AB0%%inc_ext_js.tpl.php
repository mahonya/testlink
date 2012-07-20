<?php /* Smarty version 2.6.26, created on 2012-07-13 19:27:25
         compiled from inc_ext_js.tpl */ ?>


<?php $this->assign('ext_lang', 'en'); ?>
<?php if ($_SESSION['locale'] == 'cs_CZ'): ?>
  <?php $this->assign('ext_lang', 'cs'); ?>
<?php elseif ($_SESSION['locale'] == 'de_DE'): ?>
  <?php $this->assign('ext_lang', 'de'); ?>
<?php elseif ($_SESSION['locale'] == 'en_GB'): ?>
  <?php $this->assign('ext_lang', 'en_GB'); ?>
<?php elseif ($_SESSION['locale'] == 'en_US'): ?>
  <?php $this->assign('ext_lang', 'en'); ?>
<?php elseif ($_SESSION['locale'] == 'es_AR'): ?>
  <?php $this->assign('ext_lang', 'es'); ?>
<?php elseif ($_SESSION['locale'] == 'es_ES'): ?>
  <?php $this->assign('ext_lang', 'es'); ?>
<?php elseif ($_SESSION['locale'] == 'fi_FI'): ?>
  <?php $this->assign('ext_lang', 'fi'); ?>
<?php elseif ($_SESSION['locale'] == 'fr_FR'): ?>
  <?php $this->assign('ext_lang', 'fr'); ?>
<?php elseif ($_SESSION['locale'] == 'id_ID'): ?>
  <?php $this->assign('ext_lang', 'id'); ?>
<?php elseif ($_SESSION['locale'] == 'it_IT'): ?>
  <?php $this->assign('ext_lang', 'it'); ?>
<?php elseif ($_SESSION['locale'] == 'ja_JP'): ?>
  <?php $this->assign('ext_lang', 'ja'); ?>
<?php elseif ($_SESSION['locale'] == 'ko_KR'): ?>
  <?php $this->assign('ext_lang', 'ko'); ?>
<?php elseif ($_SESSION['locale'] == 'nl_NL'): ?>
  <?php $this->assign('ext_lang', 'nl'); ?>
<?php elseif ($_SESSION['locale'] == 'pl_PL'): ?>
  <?php $this->assign('ext_lang', 'pl'); ?>
<?php elseif ($_SESSION['locale'] == 'pt_BR'): ?>
  <?php $this->assign('ext_lang', 'pt_BR'); ?>
<?php elseif ($_SESSION['locale'] == 'ru_RU'): ?>
  <?php $this->assign('ext_lang', 'ru'); ?>
<?php elseif ($_SESSION['locale'] == 'zh_CN'): ?>
  <?php $this->assign('ext_lang', 'zh_CN'); ?>
<?php endif; ?>


<?php if (guard_header_smarty ( __FILE__ )): ?>

  <?php $this->assign(($this->_tpl_vars['css_only']), ($this->_tpl_vars['css_only'])."|default:0"); ?>
  <?php $this->assign('ext_location', @TL_EXTJS_RELATIVE_PATH); ?>
  <?php if (isset ( $this->_tpl_vars['bResetEXTCss'] ) && $this->_tpl_vars['bResetEXTCss']): ?>
  	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/css/reset-min.css" />
  <?php endif; ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/css/ext-all.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/gridfilters/css/GridFilters.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/gridfilters/css/RangeMenu.css" />
  
  <?php if ($this->_tpl_vars['css_only'] == 0): ?>
            <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/adapter/ext/ext-base.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ext-all.js" language="javascript"></script>
      
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/Reorderer.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/ToolbarReorderer.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/ToolbarDroppable.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/Exporter-all.js" language="javascript"></script>
      
            <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/gridfilters/menu/RangeMenu.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/gridfilters/menu/ListMenu.js" language="javascript"></script>
      
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/gridfilters/GridFilters.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/gridfilters/filter/Filter.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/gridfilters/filter/StringFilter.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/gridfilters/filter/DateFilter.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/gridfilters/filter/ListFilter.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/gridfilters/filter/NumericFilter.js" language="javascript"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/gridfilters/filter/BooleanFilter.js" language="javascript"></script>
      
      
            <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/src/locale/ext-lang-<?php echo $this->_tpl_vars['ext_lang']; ?>
.js" language="javascript"></script>
  
            <script type="text/javascript" src="<?php echo $this->_tpl_vars['basehref']; ?>
<?php echo $this->_tpl_vars['ext_location']; ?>
/ux/TableGrid.js" language="javascript"></script>
  <?php endif; ?>

<?php endif; ?>