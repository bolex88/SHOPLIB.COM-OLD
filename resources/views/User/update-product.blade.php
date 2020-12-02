@extends('layouts.masters')

@section('main')
      <!-- SELLER VIEW BEGINS HERE -->
      <section id="product-edit-section">
        <div class="container">
            <div class="row mt-2">
              <div class="col">
                <h4 class="text-center">Update Product</h4>
              </div>
            </div>

            <div class="container">
                    <div class="col-md-6">
                            <form action="{{route('product.update', $id)}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <div class="form-group row mt-4">
                                    <label for="product-name" class="col-sm-4 col-form-label">Product Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="title" value="{{$product->title}}">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="product-description" class="col-sm-4 col-form-label">Description:</label>
                                    <div class="col-sm-8">
                                        <textarea name="product_description" id="" cols="30" rows="5" class="form-control">{{$product->product_description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="product-price" class="col-sm-4 col-form-label">Prices:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="product_price" value="{{$product->product_price}}">
                                    </div>
                                </div>
                                 <div class="form-group row mt-4">
                                    <label for="product-price" class="col-sm-4 col-form-label">Address:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="address" value="{{$product->address}}">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="telno" class="col-sm-4 col-form-label">Telephone No:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="telephone" value="{{Auth::user()->telephone}}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Product<span>
                                    <i class="far fa-hand-point-right"></i>
                                    </span>
                                </button>
                            </form>
                        </div>
                                    
            </div>
        </div>   

                    </div>
                </div>   
          
        </div>
      </section>
      <br />
      <!-- SELLER VIEW ENDS HERE -->
@endsection