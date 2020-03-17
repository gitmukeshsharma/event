<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>Bootstrap Snippet for Datatable </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    
    
    <!-- Bootstrap core CSS -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >  -->
</head>
<body> 
<div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h2>Event</h2>
                <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
<div class="container">
<div class="row">    
<div class="col-md-4 order-md-1">
                <h4 class="mb-3">Add Invitees</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <!-- <label for="mobile">Mobile</label> -->
                        <!-- <div class="input-group"> -->
                            <input type="text" class="form-control" id="username" placeholder="Mobile" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Mobile Number required
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="mb-3">
                        <!-- <label for="email">Email </label> -->
                        <input type="email" class="form-control" id="email" placeholder="email@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                    <div class="mb-3">
                        <!-- <label for="company">Company</label> -->
                        <input type="text" class="form-control" id="address" placeholder="company" required>
                        <div class="invalid-feedback">
                            Please provide your company name
                        </div>
                    </div>
                    <div class="mb-3">
                        <!-- <label for="company">Company</label> -->
                        <select class="form-control" id="invitee_type" placeholder="invitee type" required>
                            <option>Client</option>
                            <option>Vendor</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
                    </hr>
                </form>
            </div>
         
 
<!-- ///////////////////////// --> 
	
    <div class="col-md-8">
      <h4>Bootstrap Snipp for Datatable</h4>
      <div class="table-responsive">
        <table id="mytable" class="table table-bordred table-striped">
          <thead>
            <th><input type="checkbox" id="checkall" /></th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td>Mukesh</td>
              <td>Irshad</td>
              <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
              <td>isometric.mohsin@gmail.com</td>
              <td>+923335586757</td>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
              <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr> 
            <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td>Mukesh</td>
              <td>Irshad</td>
              <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
              <td>isometric.mohsin@gmail.com</td>
              <td>+923335586757</td>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
              <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr> 
            <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td>Mukesh</td>
              <td>Irshad</td>
              <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
              <td>isometric.mohsin@gmail.com</td>
              <td>+923335586757</td>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
              <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr> 
            <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td>Mukesh</td>
              <td>Irshad</td>
              <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
              <td>isometric.mohsin@gmail.com</td>
              <td>+923335586757</td>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
              <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr> 
            <tr>
              <td><input type="checkbox" class="checkthis" /></td>
              <td>Mukesh</td>
              <td>Irshad</td>
              <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
              <td>isometric.mohsin@gmail.com</td>
              <td>+923335586757</td>
              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
              <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
            </tr> 
          </tbody>
        </table>
        <div class="clearfix"></div>
        <ul class="pagination pull-right">
          <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
        </ul>
      </div>
    </div>
	</div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
          <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
          <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
        </div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
    </div>
  </div>  
</div>	

<footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2018 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
   
</body>
</html>
