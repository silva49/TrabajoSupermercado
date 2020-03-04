<?php require_once 'header.php'; ?>
            
        
           <body>
            <?php foreach($consulta as $datos): ?>
        <h1>Modificar información</h1>
        <br>
        <form name="form1" method="post" action="index.php?accion=guardarcambiosproducto">
            <p>Id: <input type="text" name="txtid" value="<?php echo $_REQUEST['id']; ?>" readonly></p>
            <p>Nombre: <input type="text" name="txtnombre" value="<?php echo $datos['nombre']; ?>"></p>
            <p><input type="submit" name="btnguardarcambios" value="Guardar Cambios"></p>
        </form>
        <?php endforeach; ?>
            </body>
        
        <?php require_once 'footer.php'; ?>
        