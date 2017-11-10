<?php
/* Smarty version 3.1.30, created on 2017-11-09 17:38:49
  from "C:\xampp\htdocs\AdminController\TiendaSuplementos\templates\indexAjax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a048499b8a7f5_46914892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c4687b594fd9b61fdd45445e369bf443f2c47f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\AdminController\\TiendaSuplementos\\templates\\indexAjax.tpl',
      1 => 1510245528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerVisit.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a048499b8a7f5_46914892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerVisit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<nav class="navbar navbar-inverse navegador col-md-6">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="index" href="#"> index</a></li>
        <li><a class="proteinas" href="#"> productos</a></li>
        <li><a class="Productos" href="#"> productos</a></li>
        <li><a class="Productos" href="#"> productos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="login" href="login">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<h1>Lista de productos:</h1>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
