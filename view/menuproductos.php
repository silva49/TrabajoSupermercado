<?php require_once 'header.php'; ?>



        <h1>Menú productos</h1>
        <br>
        <form name="form1" method="POST" action="index.php?accion=guardarproducto">
            <p> categoria:
                <select name="selcategorias">
                    <option value="">Selecione...</option>
                    <?php foreach($consultacategorias as $datos):?>
                    <option value="<?php echo $datos['id'];?>"><?php echo $datos['nombre'];?></option>
                    <?php endforeach;?>
                </select>
           </p>
            <p>Nombre producto: <input type="tex" name="txtnombre"></p>
            <p>Precio: <input type="tex" name="txtprecio"></p>
            <p><input type="submit" name="btnguardarproducto" value="Guardar Producto"></p>
                
        </form>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Categoria</th>
                    <th>Nombre Producto</th>
                    <th>Precio</th>
                    <th>modificar</th>
                    <th>eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($consultaproductos as $dato):?>                
                <tr>
                    <td><?php echo $dato['id'];?></td>
                    <td><?php echo $dato['categoria'];?></td>
                    <td><?php echo $dato['nombre'];?></td>
                    <td><?php echo $dato['precio'];?></td>

                    <td><a href="./?accion=modificarproducto&id=<?php echo $dato['id'];?>">Modificar</a></td>
                    <td><a href="./?accion=eliminarproductos&id=<?php echo $dato['id'];?>">eliminar</a></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    
        <br>
        <br>
        <br>
        <a href="./">Volver</a>




 <?php require_once 'footer.php'; ?>
