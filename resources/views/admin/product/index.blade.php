@extends('admin.layouts.include')
@section('content')
    <!-- Main content -->
    <?php $user = Auth::user();?>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product</h3>
                            <a href="{{route('product.create')}}" style="margin-left: 30px;" class="btn btn-primary btn-sm float-right">Add New
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Category Name</th>
                                    <th>SubCategory Name</th>
                                    <th>Created User</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->title}}</td>
                                        <td>{{$row->categories->name}}</td>
                                        <td>{{$row->subcategories->name}}</td>
                                        <td>{{$row->user->name}}</td>
                                        <td>
                                            <img style="width:60px; border-radius:20px; " src="{{asset($row->img1)}}"
                                                 alt="">
                                        </td>
                                        <td>
                                            @if($row->status==0)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-warning">DActive</span>
                                            @endif
                                        </td>
                                        <td><a href="{{route('product.edit' , $row->id)}}" data-toggle="modal"
                                               data-target="#exampleModal{{$row->id}}" class="btn btn-sm btn-primary"
                                               data-toggle="tooltip" title="edit">
                                                <i class="fa fa-pen"></i> Edit
                                            </a>
                                            <a href="{{route('product.destroy' ,$row->id)}}" id="delete"
                                               class="btn btn-sm btn-danger" data-toggle="tooltip" title="edit">
                                                <i class="fa fa-times"></i> Delete
                                            </a>

                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
