@extends('layouts.masters')
    
@section('main')

      <!-- PRODUCTS VIEW BEGINS HERE -->
      <section id="product-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card my-5">
                        <div class="column">
                            <img src="/storage/{{$product->images()->first()->path}}" alt="" class="card-img-top">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="pt-5">{{$product->title}}</h4>
                    <table class="table table-hover my-5">
                        <tbody>
                            <tr>
                                <td><p>Description:</p></td>
                                <td><span class="description-text">
                                    {{$product->product_description}}
                                </span></td>
                            </tr>
                            <tr>
                                <td><p>Price:</p></td>
                                <td><span class="description-text">
                                    {{$product->product_price}} </span>
                                </td>
                            </tr>
                            <tr> 
                                <td><p>Uploaded By:</p></td>
                                <td><span class="description-text">
                                    {{$user->firstname}} {{$user->lastname}} 
                                </span>
                                </td>
                            </tr>
                            <tr> 
                                <td><p>Address:</p></td>
                                <td><span class="description-text">
                                    {{$product->address}} </span>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Telephone No:</p></td>
                                <td><span class="description-text">
                                    {{$user->telephone}} </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('products')}}" class="btn btn-primary"> <span><i class="fas fa-chevron-circle-left"></i></span> Back to Homepage</a>     
                </div>
                
            </div>
        </div>
      </section>
      <!-- PRODUCTS VIEW ENDS HERE -->
<br />

@endsection