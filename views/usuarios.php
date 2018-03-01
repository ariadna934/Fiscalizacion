<table>

    <thead>
    <tr>
        <td>ID</td>
        <td>USER</td>
        <td>PASSWORD</td>
        <td>TIPO</td>
        <td>NOMBRE</td>
        <td>APELLIDO</td>
        <td>DNI</td>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach ($datos as $fila => $atributos) { 
    ?>
    <tr>
        <td><?php echo $atributos[0]; ?></td>    
        <td><?php echo $atributos[1]; ?></td>
        <td><?php echo $atributos[2]; ?></td>
        <td><?php echo $atributos[3]; ?></td>
        <td><?php echo $atributos[4]; ?></td>
        <td><?php echo $atributos[5]; ?></td>
        <td><?php echo $atributos[6]; ?></td>
    </tr>  

    <?php
        }
    ?>
    </tbody>

</table>