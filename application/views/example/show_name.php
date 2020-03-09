<h1>show_name</h1>
<?php
echo 'The name from the model is '.$aname;
?>
<h2>Students</h2>
<table border="1">
  <thead>
    <tr>
      <th>Firstname</th> <th>Lastname</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($students as $row) {
      echo '<tr>';
      echo '<td>'.$row['fn'].'</td><td>'.$row['ln'].'</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
