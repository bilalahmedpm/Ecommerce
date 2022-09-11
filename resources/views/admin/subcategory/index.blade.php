@extends('admin.layouts.include')
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">SubCategory</h3>
                            <button class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                    data-target="#exampleModal">Add New
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Created User</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subcategory as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name ?? ''}}</td>
                                        <td>{{$row->categories->name ?? ''}}</td>
                                        <td>
                                            @if($row->status==0)
                                                <span class="badge badge-success">Approved</span>
                                            @else
                                                <span class="badge badge-warning">Pending</span>
                                            @endif
                                        </td>
                                        <td>{{$row->user->name}}</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#exampleModal{{$row->id}}" id="edit"
                                               class="btn btn-sm btn-primary" data-toggle="tooltip" title="edit">
                                                <i class="fa fa-pen"></i> Edit
                                            </a>

                                            <a href="{{route('subcategory.edit',$row->id)}}" id="delete"
                                               class="btn btn-sm btn-danger" title="edit">
                                                <i class="fa fa-times"></i> Delete
                                            </a>
                                            @if($row->status==1 && Auth::user()->role==1)
                                                <a href="{{route('subcategory.edit',$row->id)}}" id="delete" class="btn btn-sm btn-success"  title="edit">
                                                    <i class="fa fa-trash"></i> Approve
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('subcategory.update',$row->id)}}"
                                                          method="post" enctype="multipart/form-data"
                                                          data-parsley-validate>
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="title"><b>Category</b><span
                                                                        class="text-danger">*</span></label>
                                                                <select name="category_id" class="form-control select2">
                                                                    <option>Select Category</option>
                                                                    @foreach($category as $row1)
                                                                        <option
                                                                            value="{{$row1->id}}" {{ ( $row1->id == $row->category_id) ? 'selected' : '' }}>{{$row1->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="title"><b>Title</b><span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" value="{{$row->name}}" name="name"
                                                                       placeholder="Category Title"
                                                                       class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 pull-right">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary btn-block">
                                                                    Update
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                        </div>

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
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New SubCategory</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('subcategory.store')}}" method="post" enctype="multipart/form-data"
                          data-parsley-validate>
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Category</b><span class="text-danger">*</span></label>
                                <select name="category_id" class="form-control select2">
                                    <option>Select Category</option>
                                    @foreach($category as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Title</b><span class="text-danger">*</span></label>
                                <input type="text" name="name" placeholder="Category Title" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12 pull-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </div></div>

@endsection
