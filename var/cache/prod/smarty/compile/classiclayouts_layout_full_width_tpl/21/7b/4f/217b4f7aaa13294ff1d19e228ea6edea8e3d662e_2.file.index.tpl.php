<?php
/* Smarty version 3.1.43, created on 2022-12-17 15:03:22
  from '/var/www/html/sitePrestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639dcc2a845f80_27866316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '217b4f7aaa13294ff1d19e228ea6edea8e3d662e' => 
    array (
      0 => '/var/www/html/sitePrestashop/themes/classic/templates/index.tpl',
      1 => 1671225809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639dcc2a845f80_27866316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1931280730639dcc2a83ece6_52079292', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_424238831639dcc2a841769_57582555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1032264771639dcc2a843d11_25136335 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1359045893639dcc2a843424_22072749 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1032264771639dcc2a843d11_25136335', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1931280730639dcc2a83ece6_52079292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1931280730639dcc2a83ece6_52079292',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_424238831639dcc2a841769_57582555',
  ),
  'page_content' => 
  array (
    0 => 'Block_1359045893639dcc2a843424_22072749',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1032264771639dcc2a843d11_25136335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_424238831639dcc2a841769_57582555', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1359045893639dcc2a843424_22072749', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
