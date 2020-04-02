<h2>Add a new book</h2>
<form class="" action="<?php echo site_url('book/insert_book'); ?>" method="post">
  <label for="name">Book Name</label> <br>
  <input type="text" id="name" name="name" value=""> <br>

  <label for="author">Author</label> <br>
  <input type="text" id="author" name="author" value=""> <br>
  <br>
  <input type="submit" name="" value="Add">

</form>
