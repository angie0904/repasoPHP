<body>
   <table border="1">
        <th>
            <td>Nombre</td> <td>apellidos</td><td>dirrección</td><td>Telefono</td>
        </th>
        <?php
        foreach($lista as $key=>$atrib){
            echo "<tr><td></td></td></tdt><td>".$atrib['nom']."</td><td>".$atrib['ape']."</td><td>".$atrib['dir']."</td><td>".$atrib['tlf']."</td>
            <td>
            <form action='index.php?action=modFormCli' method='post'><input type='text' name='id' value=$key hidden><input type='submit' value='Modificar'></form>
            </td></tr>";
        }
        
        ?>
    </table>
</body>