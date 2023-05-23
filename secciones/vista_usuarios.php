<?php include('../templates/cabecera.php')?>
<?php include('../secciones/usuarios.php')?>

<div class="row">
                        
    <div class="col-12">
    <br/>
         <div class="row">

            <div class="col-5">

                <form action ="" method="post">

                    <div class="card">
                        <div class="card-header">
                            Usuarios
                        </div>
                        <div class="card-body">
                            <div class="mb-3 d-none">
                                    <label for="" class="form-label">ID</label>
                                    <input type="text"
                                    class="form-control" 
                                    name="id" 
                                    id="id" 
                                    value="<?php echo $id;?>"
                                    aria-describedby="helpId" placeholder="ID">
                                
                            </div>
                            <div class="mb-3">
                                    <label for="nombre_curso" class="form-label">Usuario</label>
                                    <input type="text"
                                    class="form-control" 
                                    name="username" 
                                    id="username"
                                    value="<?php echo $username;?>" 
                                    aria-describedby="helpId" placeholder="nombre del usuario">

                            </div>
                            <div class="mb-3">
                                    <label for="nombre_curso" class="form-label">Contraseña</label>
                                    <input type="password"
                                    class="form-control" 
                                    name="password" 
                                    id="password"
                                    value="<?php echo $password;?>" 
                                    aria-describedby="helpId" placeholder="contraseña">

                            </div>

                            <div class="btn-group" role="group" aria-label="Button group name">
                                <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                                <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
                                <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borar</button>
                            </div>
                        </div>
                    
                    </div>
                </form>

            </div>

<div class="col-7">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Password</th>
                        <th scope="col">Seleccionar</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($listausuarios as $usuario) {?>
                    <tr>
                        <td> <?php  echo $usuario['id'];?> </td>
                        <td> <?php  echo $usuario['username'];?> </td>
                        <td>*********</td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" id="" value="<?php  echo $usuario['id'];?>"/>
                                <input type="submit" value="Seleccionar" name="accion" class="btn btn-info">
                            </form>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>


</div>
</div>
</div>

<?php include('../templates/pie.php')?>