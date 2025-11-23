@extends('components.master');
@section('contents')
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>Product Stock</h4>
                    <a href="#" class="btn btn-primary">New Product</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>P001</td>
                                <td>Iphone</td>
                                <td>product_1.jpg</td>
                                <td>1000$</td>
                                <td>01</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary mr-md-1 ">Edit</a>
                                     <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
