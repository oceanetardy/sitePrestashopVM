<?php
/* Smarty version 3.1.43, created on 2022-12-17 15:03:22
  from '/var/www/html/sitePrestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639dcc2a856d11_67257101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64f2447d224dce27f2a06a6d597c222686dafbc6' => 
    array (
      0 => '/var/www/html/sitePrestashop/themes/classic/templates/page.tpl',
      1 => 1671225809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639dcc2a856d11_67257101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_717801943639dcc2a84c729_30659783', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_118916155639dcc2a84d410_17526993 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_693517877639dcc2a84ced5_52783491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118916155639dcc2a84d410_17526993', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1925647988639dcc2a854e21_92804424 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_590902296639dcc2a8553c9_60139527 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2031433870639dcc2a854845_39841214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1925647988639dcc2a854e21_92804424', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_590902296639dcc2a8553c9_60139527', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1521982167639dcc2a855fa4_20609033 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_212516673639dcc2a855c11_87713008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1521982167639dcc2a855fa4_20609033', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_717801943639dcc2a84c729_30659783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_717801943639dcc2a84c729_30659783',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_693517877639dcc2a84ced5_52783491',
  ),
  'page_title' => 
  array (
    0 => 'Block_118916155639dcc2a84d410_17526993',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2031433870639dcc2a854845_39841214',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1925647988639dcc2a854e21_92804424',
  ),
  'page_content' => 
  array (
    0 => 'Block_590902296639dcc2a8553c9_60139527',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_212516673639dcc2a855c11_87713008',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1521982167639dcc2a855fa4_20609033',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_693517877639dcc2a84ced5_52783491', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2031433870639dcc2a854845_39841214', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212516673639dcc2a855c11_87713008', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
