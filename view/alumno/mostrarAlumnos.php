<table>
    <?php while ($alumno = $resultado->fetch_object()): ?>
        <tr><td><?= $alumno->id ?></td>
            <td><?= $alumno->email ?></td>
        </tr>

    <?php endwhile; ?>  
</table>

