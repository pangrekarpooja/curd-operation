<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <style>
    body{
      background:pink;
    }
    table{
      background-color:white;
    }


    </style>

</head>
<body>
  <div class="container">
    <div class="alert alert-secondary text-center">
      <h2>Employee Management System</h2>
    </div>
    <!-- Button to Open the Modal -->
<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#myModal">
  create Employee
</button>
<!-- add employee form -->
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Employee</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action="" method="post" id="frm">
        <div class="form-group">
          <input type="hidden" name="sid" id="vid">
          <label for="">Enter Name</label>
          <input type="text" name="txtName" id="name" class="form-control">
        </div>

        <div class="form-group">
          <label for="">Enter Eid </label>
          <input type="text" name="txtEid" id="email" class="form-control">
        </div>

        <div class="form-group">
          <label for="">Enter Password</label>
          <input type="text" name="txtPass" id="pass" class="form-control">
        </div>
      
      
        <div class="form-group">
          <label for="">Company Name</label>
          <input type="text" name="txtCmpName" id="cnm" class="form-control">
        </div>

        <div class="form-group">
         <button type="button" id="btnAddEmployee" class="btn btn-primary">Add Employee</button>
         <button type="button" id="btnEditEmployee" class="btn btn-primary">Edit Employee</button>
        </div>

       </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
   <!-- Mannage employee -->
   <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Emailid</th>
        <th>Password</th>
        <th>Company Name</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
   
      
    </tbody>
  </table>
  </div>



  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="crud.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  
</body>
</html>