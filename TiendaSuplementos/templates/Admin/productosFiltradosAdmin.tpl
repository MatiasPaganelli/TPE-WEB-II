{include file="headerAdmin.tpl"}
    {foreach from=$productos item=producto}
    {if $producto['nombre_categoria'] == $categoriaFiltrada}
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="thumbnail">
          {html_image file = "{$producto['images']}"}
          <div class="caption">
            <h3>{$producto['nombre']} </h3>
            <p>{$producto['descripcion']}</p>
            <p>Precio:{$producto['precio']}</p>
            <p>Peso: {$producto['peso']}</p>
            <a href="borrarProducto/{$producto['id']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
          </div>
        </div>
      </div>
      {/if}
      {/foreach}
      {include file="footer.tpl"}