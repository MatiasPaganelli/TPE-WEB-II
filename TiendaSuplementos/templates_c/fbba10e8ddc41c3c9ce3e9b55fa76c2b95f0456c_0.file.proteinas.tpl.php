<?php
/* Smarty version 3.1.30, created on 2017-11-09 17:27:27
  from "C:\xampp\htdocs\AdminController\TiendaSuplementos\templates\Visit\proteinas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0481efb24f60_34230556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbba10e8ddc41c3c9ce3e9b55fa76c2b95f0456c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AdminController\\TiendaSuplementos\\templates\\Visit\\proteinas.tpl',
      1 => 1510184496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0481efb24f60_34230556 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_image')) require_once 'C:\\xampp\\htdocs\\AdminController\\TiendaSuplementos\\libs\\plugins\\function.html_image.php';
?>
<h1>Proteinas:</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
if ($_smarty_tpl->tpl_vars['producto']->value['id_categoria'] == 1) {?>
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
      <?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['producto']->value['images'])),$_smarty_tpl);?>

      <div class="caption">
        <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 </h3>
        <p><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</p>
        <p>Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value['id_categoria'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</p>
        <p>Precio:<?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</p>
        <p>Peso: <?php echo $_smarty_tpl->tpl_vars['producto']->value['peso'];?>
</p>
      </div>
    </div>
  </div>
  <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<?php }
}
