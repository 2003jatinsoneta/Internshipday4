<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    </head>
<body>
<h1><marquee>Hi its me jatin</marquee> 
<h1>
<?php
session_start();
if(isset($_SESSION['user'])){
?>
<h1>this is logged in to page</h1>
<form method="get"  action="index.php">
<label for="name" class="form-label">Name</label><br>
    <input type="text"   name="username" id="username" required>
</form>   
<button type="button" id="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">logout</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure you want to logout?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" onclick="window.location.replace('login.html')">Confirm</button>
      </div>
    </div>
  </div>
</div>

<?php
}
else
{
    ?>
    <h1>this is  not the logged in page </h1>
    <?php
}
?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



<script>
    jQuery(document).ready(function(){

jQuery("#submit").on('click',function()
{
    var inputtagvalue = jQuery('#username').val();
    console.log(inputtagvalue);
    jQuery('.modal-body').html(inputtagvalue);
});    }
);
</script>

</body>
</html>