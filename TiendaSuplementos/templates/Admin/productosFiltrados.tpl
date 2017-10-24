{include file="headerAdmin.tpl"}
<h1>Ganadores:</h1>
<div class="container col-md-4 col-sm-6 col-lg-4">
<form action="filtrar" method="POST">
  <select name="filtrarCategoria" class="form-control filter">
    <option value="" selected disabled hidden>Categorias</option>
    {foreach from=$categorias item=categoria}
    <option value="{$categoria['id']}">{$categoria['nombre']}</option>
    {/foreach}
  </select>
 <button class="btn btn-lg btn-primary btn-block dofilter" type="submit">Filtrar</button>
</form>
</div>
{foreach from=$productos item=producto}
{if $categoria['nombre'] == $categoriaFiltrada}
<div class="row">
  <div class="col-sm-6 col-md-6 col-lg-6">
    <div class="thumbnail">
      {html_image file = "{$producto['images']}"}
      <div class="caption">
        <h3>{$producto['nombre']} </h3>
        <p>{$producto['descripcion']}</p>
        <p>Categoria: {$categoria['nombre']}</p>
        <p>{$producto['nombre']}</p>
        <p>Precio:{$producto['precio']}</p>
        <p>Peso: {$producto['peso']}</p>
        <a href="borrarProducto/{$producto['id']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
      </div>
    </div>
  </div>
  {/if}
  {/foreach}
  {/foreach}
  {include file="footer.tpl"}
