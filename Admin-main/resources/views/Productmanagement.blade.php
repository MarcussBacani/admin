<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <title>Products</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .dashboard {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 190px;
            background-color: #000000;
            color: #fff;
            padding: 20px;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .header {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 9px;
        }

        .menu-item {
            padding: 10px;
            margin-bottom: 7px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
        }

        .menu-item a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
        }

        .menu-item:hover {
            background-color: #555;
        }

        .main-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 1500px;
            margin: 0 auto;
        }

        .box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ffffff;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f200;
            text-align: center;
        }

        .edit-button {
            background-color: #a2d823;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .delete-button {
            background-color: #ff6347;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="dashboard">
    <div class="sidebar">
        <div class="header">Cyber Cartel</div>
        <div class="menu-item">
            <a href="{{ url('/dashboards') }}">Dashboard</a>
        </div>
        <div class="menu-item">
            <a href="{{ url('/customers') }}">Customers</a>
        </div>
        <div class="menu-item">
            <a href="{{ url('/agegroups') }}">Age Group  </a>
        </div>
        <div class="menu-item">
            <a href="{{ url('/productmanagements') }}">Product Management</a>
        </div>
    </div>
    <div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" onClick="add()" href="javascript:void(0)"> Add product</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class ="container">
    <div class = "card-body">
        <table class ="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>photo</th>
                    <th>price</th>
                    <th>details</th>
                    <th>category</th>
                </tr>
            </thead>
        </table>
    </div>
    </div>
</div>
<!-- boostrap product model -->
<div class="modal fade" id="product-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" id="ProductForm" name="ProductForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" maxlength="50" required="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Photo</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="photo" name="photo" placeholder="Enter Photo" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Detail</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="Enter Detail" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Category</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category" required="">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10"><br/>
                        <button type="submit" class="btn btn-primary" id="btn-save">Save changes</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!-- end bootstrap model -->

<script type="text/javascript">
$(document).ready( function () {
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

function add(){
    $('#ProductForm').trigger("reset");
    $('#ProductModal').html("Add Product");
    $('#product-modal').modal('show');
    $('#id').val('');
}   

$('#ProductForm').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type:'POST',
        url: "{{ url('store')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
            console.log(data);
            $("#product-modal").modal('hide');
            var oTable = $('#ajax-crud-datatable').dataTable();
            oTable.fnDraw(false);
            $("#btn-save").html('Submit');
            $("#btn-save"). attr("disabled", false);
        },
        error: function(data){
            console.log(data);
        }
    });
});
</script>
</body>
</html>
