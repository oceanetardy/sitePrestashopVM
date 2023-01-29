<?php
/* Smarty version 3.1.43, created on 2022-12-17 15:03:22
  from '/var/www/html/sitePrestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639dcc2a8aad02_08969369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42acf535ff58b8ddd8c813bba1adf4cfe2a3c6fd' => 
    array (
      0 => '/var/www/html/sitePrestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1671225809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639dcc2a8aad02_08969369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/sitePrestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/42/ac/f5/42acf535ff58b8ddd8c813bba1adf4cfe2a3c6fd_2.file.helpers.tpl.php',
    'uid' => '42acf535ff58b8ddd8c813bba1adf4cfe2a3c6fd',
    'call_name' => 'smarty_template_function_renderLogo_1478439319639dcc2a89a3a1_61492306',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1478439319639dcc2a89a3a1_61492306 */
if (!function_exists('smarty_template_function_renderLogo_1478439319639dcc2a89a3a1_61492306')) {
function smarty_template_function_renderLogo_1478439319639dcc2a89a3a1_61492306(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1478439319639dcc2a89a3a1_61492306 */
}
