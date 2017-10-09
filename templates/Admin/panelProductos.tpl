<article class="container-fluid" >
  <section>
    {include file="Admin/productos.tpl"}
  </section>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>Agregar Producto</h1>
      <div class="alert alert-danger" role="alert">Aca va el error</div>
      <form  id="agregarProd" data-id="agregarProducto" method="post">
        <div class="form-group">
          <label for="talle">Talle Disponible</label>
          <input type="text" class="form-control" id="talle" name="talle"  value="" placeholder="Talle Disponible">
        </div>
        <div class="form-group">
          <label for="categoria">Categoria</label>
          <input type="text" class="form-control" id="categoria" name="categoria"  value="" placeholder="Categoria del delantal">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <input type="text" name="descripcion" value=""placeholder="Descripcion del delantal">
        </div>
        <div class="form-group">
          <label for="url">Ruta imagen</label>
          <input type="text" name="imagen" value="">
        </div>
        <button type="submit" class="btn btn-default">Crear</button>
      </form>
    </div>
  </div>
</article>