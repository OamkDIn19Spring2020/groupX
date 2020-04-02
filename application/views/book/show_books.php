<h2>Books</h2>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
   Add a New Book
 </button>

<table class="table">
  <thead>
    <tr>
      <th>id</th> <th>Book name</th> <th>Author</th> <th>Edit</th> <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($books as $row) {
    echo '<tr>';
    echo '<td>'.$row['id_book'].'</td><td>'.$row['name'].'</td><td>'.$row['author'].'</td>';
    echo '<td><button type="button" id="editBtn" class="btn btn-primary myBtn" data-toggle="modal" data-target="#editModal" data-id_book="'.$row['id_book'].'" data-name="'.$row['name'].'" data-author="'.$row['author'].'">
        Edit
      </button></td>';
    echo '<td><button type="button" id="deleteBtn" class="btn btn-danger myBtn" data-toggle="modal" data-target="#deleteModal" data-id_book="'.$row['id_book'].'" data-name="'.$row['name'].'" data-author="'.$row['author'].'">
        Delete
      </button></td>';
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
      <!-- editModal -->
            <div class="modal fade" id="editModal" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Edit a Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form class="" action="<?php echo site_url('book/edit_book'); ?>" method="post">
                        <div class="form-group">
                          <input type="hidden" id="edit_id_book" name="id_book" value="" >
                          <label for="edit_book_name">Book Name</label> <br>
                          <input type="text" id="edit_book_name" name="name" value=""> <br>

                          <label for="edit_author">Author</label> <br>
                          <input type="text" id="edit_author" name="author" value=""> <br>
                        </div>
                        <input type="submit" class="btn btn-primary" name="" value="Update">
                      </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- deleteModal -->
                  <div class="modal fade" id="deleteModal" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Delete a Book</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form class="" action="<?php echo site_url('book/delete_book'); ?>" method="post">
                              <div class="form-group">
                                <input type="hidden" id="delete_id_book" name="id_book" value="" >
                                Do you really want to delete this book?
                                <label for="delete_book_name">Book Name</label> <br>
                                <input type="text" id="delete_book_name" name="name" value="" disabled> <br>

                                <label for="delete_author">Author</label> <br>
                                <input type="text" id="delete_author" name="author" value="" disabled> <br>
                              </div>
                              <input type="submit" class="btn btn-danger " name="" value="Delete">
                            </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
            <script>
              $(document).on( "click", '#editBtn',function(e) {
                  console.log("Update modal open");
                  var id_book = $(this).data('id_book');
                  var name = $(this).data('name');
                  var author=$(this).data('author');
                  console.log('id_book = '+id_book);

                  $("#edit_id_book").val(id_book);
                  $("#edit_book_name").val(name);
                  $("#edit_author").val(author);
              });

              $(document).on( "click", '#deleteBtn',function(e) {
                  console.log("delete modal open");
                  var id_book = $(this).data('id_book');
                  var name = $(this).data('name');
                  var author=$(this).data('author');
                  console.log('id_book = '+id_book);

                  $("#delete_id_book").val(id_book);
                  $("#delete_book_name").val(name);
                  $("#delete_author").val(author);
              });
              </script>
