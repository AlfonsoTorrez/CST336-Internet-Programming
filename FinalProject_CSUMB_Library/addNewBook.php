<?php
    include 'inc/header.php'; 
?>
<h1><u>Adding a new book</u></h1>
<form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Book Name" id="name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Genre" id="genre">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Author" id="author">
    </div>
  </div>
</form>
<button type="button" class="btn btn-success" onclick="location.href='adminCSUMB.php'">Go Back</button>
<button type="button" class="btn btn-success" onclick="addBookCSUMBLB(document.getElementById('name').value,document.getElementById('genre').value,document.getElementById('author').value)">Enter</button>
<?php
    include 'inc/footer.php'; 
?>