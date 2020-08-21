<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Learn PHP CodeIgniter Framework with AJAX and Bootstrap</title>

    <link
      href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>"
      rel="stylesheet"
    />
    <link 
      href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="container">
    <h1>Learn PHP CodeIgniter Framework with AJAX and Bootstrap</h1>
    <h3>Book Store</h3>
    
    <br />

    <button
      class="btn btn-success"
      onclick="add_book()"
    >
      <i class="glyphicon glyphicon-plus"></i> Add Book
    </button>
    
    <br />
    <br />
    
    <table
      id="table_id"
      class="table table-striped table-bordered"
      cellspacing="0"
      width="100%"
    >
      <thead>
        <tr>
          <th>Book ID</th>
          <th>Book ISBN</th>
          <th>Book Title</th>
          <th>Book Author</th>
          <th>Book Category</th>
          <th style="width:125px;">
            <p>Action</p>
          </th>
        </tr>
      </thead>
      <tbody>
        
        <?php foreach($books as $book){?>
          <tr>
            <td><?php echo $book->book_id;?></td>
            <td><?php echo $book->book_isbn;?></td>
            <td><?php echo $book->book_title;?></td>
            <td><?php echo $book->book_author;?></td>
            <td><?php echo $book->book_category;?></td>
            <td>
              <button
                class="btn btn-warning"
                onclick="edit_book(<?php echo $book->book_id;?>)"
              >
                <i class="glyphicon glyphicon-pencil"></i>
              </button>
              
              <button
                class="btn btn-danger"
                onclick="delete_book(<?php echo $book->book_id;?>)"
              >
                <i class="glyphicon glyphicon-remove"></i>
              </button>
            </td>
          </tr>
          <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <th>Book ID</th>
            <th>Book ISBN</th>
            <th>Book Title</th>
            <th>Book Author</th>
            <th>Book Category</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    
    <script src="<?php echo base_url('assets/jquery/jquery-3.1.0.min.js')?>"></script>
    
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
    <script>
      $(document).ready( function () { $('#table_id').DataTable(); } );

      var save_method;
      var table;
      
      function add_book()
      {
        save_method = 'add';
        $('#form')[0].reset();
        $('#modal_form').modal('show');
        $('.modal-title').text('Add Person');
      }
      function edit_book(id)
      {
        save_method = 'update';
        $('#form')[0].reset();

        $.ajax({
          url : "<?php echo site_url('index.php/book/ajax_edit/')?>/" + id,
          type: "GET",
          dataType: "JSON",
          success: function(data)
          {
            $('[name="book_id"]').val(data.book_id);
            $('[name="book_isbn"]').val(data.book_isbn);
            $('[name="book_title"]').val(data.book_title);
            $('[name="book_author"]').val(data.book_author);
            $('[name="book_category"]').val(data.book_category);
            $('#modal_form').modal('show');
            $('.modal-title').text('Edit Book');
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
            alert('Error get data from ajax');
          }
        });
      }
      function save()
      {
        var url;

        if(save_method == 'add')
        {
          url = "<?php echo site_url('index.php/book/book_add')?>";
        }
        else
        {
          url = "<?php echo site_url('index.php/book/book_update')?>";
        }

        $.ajax({
          url : url,
          type: "POST",
          data: $('#form').serialize(),
          dataType: "JSON",
          success: function(data)
          {
            $('#modal_form').modal('hide');
            location.reload();
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
            alert('Error adding / update data');
          }
        });
      }
      function delete_book(id)
      {
        if(confirm('Are you sure delete this data?'))
        {
          $.ajax({
            url : "<?php echo site_url('index.php/book/book_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
              location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
              alert('Error deleting data');
            }
          });
        }
      }
    </script>
    
    <div class="modal fade" id="modal_form" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>

            <h3 class="modal-title">Book Form</h3>
          </div>

          <div class="modal-body form">
            <form action="#" id="form" class="form-horizontal">
              <input type="hidden" value="" name="book_id"/>
              <div class="form-body">
                <div class="form-group">
                  <label class="control-label col-md-3">Book ISBN</label>
                  <div class="col-md-9">
                    <input
                      name="book_isbn"
                      placeholder="Book ISBN"
                      class="form-control"
                      type="text"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Book Title</label>
                  <div class="col-md-9">
                    <input
                      name="book_title"
                      placeholder="Book_title"
                      class="form-control"
                      type="text"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Book Author</label>
                  <div class="col-md-9">
                    
                    <input
                      name="book_author"
                      placeholder="Book Author"
                      class="form-control"
                      type="text"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Book Category</label>
                  <div class="col-md-9">
                    
                    <input
                      name="book_category"
                      placeholder="Book Category"
                      class="form-control"
                      type="text"
                    />
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              id="btnSave"
              onclick="save()"
              class="btn btn-primary"
            >Save</button>
            
            <button
              type="button"
              class="btn btn-danger"
              data-dismiss="modal"
            >Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
