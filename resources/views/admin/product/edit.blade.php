@extends('admin.layouts.include')
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Edit Product</h3>

                </div>
                <form action="{{route('product.update',$product->id)}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text"  value="{{$product->title}}" name="title" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select  name="category_id"  id="category" class="form-control category" required>
                                        <option value="">Chose Category</option>
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}" {{ ( $cat->id == $product->category_id) ? 'selected' : '' }}>{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Sub Category</label>
                                    <select  name="subcategory_id"  class="form-control maincategory" required>
                                        <option value="">Chose SubCategory</option>
                                        @foreach($subcategories as $cat)
                                            <option value="{{$cat->id}}" {{ ( $cat->id == $product->subcategory_id) ? 'selected' : '' }}>{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">SKU</label>
                                    <input type="number" name="sku" readonly value="{{$product->sku}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image 1</label>
                                    <input type="file" name="img1"   class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <img src="{{asset($product->img1)}}" style="width:50%;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image 2</label>
                                    <input type="file" name="img2"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img src="{{asset($product->img2)}}" style="width:50%;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image 3</label>
                                    <input type="file" name="img3"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img src="{{asset($product->img3)}}" style="width:50%;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="">Selling Method</label>
                                    <select    name="selling_method" id="method"  class="form-control method" required>
                                        <option value="">Select  Selling Method</option>
                                        <option value="1" {{ ( 1 == $product->method) ? 'selected' : '' }}>Fixed Price Offer</option>
                                        <option value="2" {{ ( 2 == $product->method) ? 'selected' : '' }}>Discount Offer</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""> Price</label>
                                    <input type="number" value="{{$product->price}}" min="0" name="price" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Quantity</label>
                                    <input type="number" value="{{$product->quantity}}"  min="0" name="quantity" required class="form-control">
                                </div>
                            </div>

                        </div>
                        @if($product->method==2)
                        <div class="row" id="sub" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Discount</label>
                                    <input type="number" min="0" value="{{$product->discount}}"  name="discount"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Start Date</label>
                                    <input type="date" name="s_date" value="{{$product->s_date}}"   class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">End Date</label>
                                    <input type="datetime-local" value="{{$product->e_date}}"  name="e_date"  class="form-control">
                                </div>
                            </div>
                        </div>
                            @elseif($product->method==1)
                            <div class="row" id="sub" style="display: none" >
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Discount</label>
                                        <input type="number" min="0" value="{{$product->discount}}"  name="discount"  class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Start Date</label>
                                        <input type="date" name="s_date" value="{{$product->s_date}}"   class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">End Date</label>
                                        <input type="datetime-local" value="{{$product->e_date}}"  name="e_date"  class="form-control">
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" name="description" id="summernote" cols="30" rows="10" required>{{$product->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                <!-- /.card -->

                <!-- /.container-fluid -->
    </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('#category').on('change', function () {
            $('.maincategory').html('<option value="">Select One SubCategory</option>');

            $.ajax({
                type: 'POST',
                url: '{{route('fetchmaincategory')}}',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: this.value,
                },
                success: function (response) {
                    console.log(response);
                    $.each(response, function(i, item) {
                        $('.maincategory').append('<option value="'+item.id+'">'+item.name+'</option>');
                    });

                }
            });
        });
        $('#method').on('change', function () {
            if(this.value==1){
                $("#sub").hide();
            }else{
                $("#sub").show();
            }

        });
    </script>
@endsection

