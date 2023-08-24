<h1 class="text-center">CLIENTES</h1>
<div class="row justify-content-center mb-5">
    <form class="col-lg-8 border bg-light p-3" id="formularioCliente">
        <input type="hidden" name="cliente_id" id="cliente_id">
        <div class="row mb-3">
                <div class="col">
                    <label for="cliente_nombre">Nombre del cliente</label>
                    <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="cliente_nit">NIT</label>
                    <input type="number" name="cliente_nit" id="cliente_nit" class="form-control">
                </div>
            </div>           
            <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioCliente" id="btnGuardar" data-saludo= "hola" data-saludo2="hola2" class="btn btn-primary w-100">Guardar</button>
            </div>
            <div class="col">
                <button type="button" id="btnModificar" class="btn btn-warning w-100">Modificar</button>
            </div>
            <div class="col">
                <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar</button>
            </div>
            <div class="col">
                <button type="button" id="btnCancelar" class="btn btn-danger w-100">Cancelar</button>
            </div>
        </div>
    </form>
</div>
<h1>Datatable de productos</h1>
<div class="row justify-content-center">
    <div class="col table-responsive">
        <table id="tablaClientes" class="table table-bordered table-hover">
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/clientes/index.js') ?>"></script>