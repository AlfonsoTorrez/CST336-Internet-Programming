<?php
    include 'inc/header.php';
?>
     <script>
    //     userLibrary(); 
     </script>
  <style>
    #admin{
      display: none; 
    }
  </style>
      <div class="modal fade" id="loginInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form method="post">
                <div class="modal-header">
                  <h5 class="modal-title">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" id="email" name="email" class="form-control" placeholder="Email"/>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input type="password" id="password" name="password" class="form-control"placeholder="Password"/>
                  </div>
                  <div id="invalidLogin"></div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" id="login" name="login" value="login" onclick="checkUser(document.getElementById('email').value,document.getElementById('password').value)">Login</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div>
</div>
<h1><u>Welcome To Your Library</u></h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Book ID</th>
      <th scope="col">Book Name</th>
      <th scope="col">Genre</th>
      <th scope="col">Author</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
<?php
    include 'inc/footer.php';
?>