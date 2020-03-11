<?php while ( $linha = mysqli_fetch_assoc($executaSelect) ) { ?>
  <tr>
    <?php for ($i = 1 ; $i <= 4 ; $i++) { ?>
      <td><?php echo $linha["nome"]; ?></td>
   <?php } ?>
  </tr>
<?php } ?>
