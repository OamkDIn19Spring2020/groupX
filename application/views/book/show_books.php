<h2>Books</h2>
<a href="<?php echo site_url('book/add_book'); ?>">Add a new Book</a>
<table border="1">
  <thead>
    <tr>
      <th>id</th> <th>Book name</th> <th>Author</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($books as $row) {
    echo '<tr>';
    echo '<td>'.$row['id_book'].'</td><td>'.$row['name'].'</td><td>'.$row['author'].'</td>';
    echo '</tr>';
    }
    ?>
  </tbody>
</table>
