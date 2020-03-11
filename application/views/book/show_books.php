<h2>Books</h2>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
   Add a New Book
 </button>

<table class="table">
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
<!-- addModal -->
      <div class="modal fade" id="addModal" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add a Book</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="" action="<?php echo site_url('book/insert_book'); ?>" method="post">
                  <div class="form-group">
                    <label for="book_name">Book Name</label> <br>
                    <input type="text" id="book_name" name="name" value=""> <br>

                    <label for="author">Author</label> <br>
                    <input type="text" id="author" name="author" value=""> <br>
                  </div>
                  <input type="submit" class="btn btn-primary" name="" value="Add">
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
