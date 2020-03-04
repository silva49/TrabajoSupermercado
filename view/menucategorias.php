<?php require_once 'header.php'; ?>



        <h1>Menú categorias</h1>
        <br>
        <form name="form1" method="POST" action="index.php?accion=guardarcategoria">
            <p>Nombre categoria: <input type="tex" name="txtnombre"></p>
            <p><input type="submit" name="btnguardarcategoria" value="Guardar Categoria"></p>
                
        </form>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consulta as $dato):?>                
                <tr>
                    <td><?php echo $dato ['id'];?></td>
                    <td><?php echo $dato ['nombre'];?></td>
                    <td><a href="./?accion=modificar&id=<?php echo $dato['id'];?>">Modificar</a></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

        <br>
        <br>
        <br>
        <a href="./">Volver</a>




 <?php require_once 'footer.php'; ?>
