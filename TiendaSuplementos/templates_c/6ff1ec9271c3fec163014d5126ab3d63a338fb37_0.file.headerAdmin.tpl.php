<?php
/* Smarty version 3.1.30, created on 2017-11-07 00:35:53
  from "C:\xampp\htdocs\AdminController\TiendaSuplementos\templates\headerAdmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a00f1d95f4db0_03092182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ff1ec9271c3fec163014d5126ab3d63a338fb37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AdminController\\TiendaSuplementos\\templates\\headerAdmin.tpl',
      1 => 1510011346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a00f1d95f4db0_03092182 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
  <meta charset="utf-8">
  <title><?php ob_start();
echo $_smarty_tpl->tpl_vars['titulo']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container col-md-4 col-sm-6 col-lg-4">
  <form action="filtrar" method="POST">
    <select name="filtrar" class="form-control filter">
      <option value="" selected disabled hidden>Categorias</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>
   <button class="btn btn-lg btn-primary btn-block dofilter" type="submit">Filtrar</button>
  </form>
</div>
  <div class="container">
<?php }
}
