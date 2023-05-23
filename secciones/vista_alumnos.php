<?php include('../templates/cabecera.php')?>
<?php include('../secciones/alumnos.php')?>


<div class="row">
    <div class="col-5">
    <br/>
        <form action ="" method="post">

            <div class="card">
                <div class="card-header">
                    Alumnos
                </div>

                <div class="card-body">
                        <div class="mb-3 d-none">
                                <label for="id" class="form-label">ID</label>
                                <input type="text"
                                class="form-control" 
                                name="id" 
                                id="id" 
                                aria-describedby="helpId" placeholder="ID">  
                        </div>  
                

                        <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text"
                                class="form-control" 
                                name="nombre" 
                                id="nombre" 
                                aria-describedby="helpId" placeholder="Nombre del Alumno">
                        </div>

                        <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text"
                                class="form-control" 
                                name="apellidos" 
                                id="apellidos" 
                                aria-describedby="helpId" placeholder="Apellidos del alumno">
                                
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Curso del Alumno:</label>
                            <select multiple class="form-select form-select-lg" name="cursos[]" id="listaCursos">
                                <option selected>Seleccciona una opcion</option>

                                <?php foreach($cursos as $curso){?>
                                <option value="<?php echo $curso['id'];?> "> <?php echo $curso['id']; ?> - <?php echo $curso['nombre_curso']; ?> </option>
                                
                                <?php }?>

                            </select>
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
    <br/>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($alumnos as $alumno): ?>
                    <tr class="">
                        <td> <?php echo $alumno['id']; ?></td>

                        <td> 
                            <?php echo $alumno['nombre'];?> <?php echo $alumno['apellidos']; ?> 
                        <br/>
                            <?php foreach($alumno['cursos'] as $curso){ ?>
                                - <a href="#"> <?php echo $curso['nombre_curso']; ?> </a> <br/>
                            <?php } ?>
                        </td>

                        <td> Seleccionar </td>
                    </tr>
                    <?php endforeach; ?>
                   
                </tbody>
            </table>
        </div>
        
</div>
</div>





<?php include('../templates/pie.php')?>