@extends('layouts.masters')

@section('main')

      <!-- CAROUSEL SECTION -->
   <section id="carousel">
        <!-- <div class="carousel-container"> -->
         <div class="row">
             <div class="col-lg-12">
                      <!-- CAROUSEL SECTION START -->
                  <div id="carousel-images" class="carousel slide" data-ride="carousel">
                      <!-- indicators below image -->
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-images" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-images" data-slide-to="1"></li>
                          <li data-target="#carousel-images" data-slide-to="2"></li>
                          <li data-target="#carousel-images" data-slide-to="3"></li>
                          <li data-target="#carousel-images" data-slide-to="4"></li>
                          <li data-target="#carousel-images" data-slide-to="5"></li>
                          <li data-target="#carousel-images" data-slide-to="6"></li>
                      </ol>
                      <!-- indicators end -->
                      <!-- slides wrapper start -->
                      <div class="carousel-inner" >
                          <div class="carousel-item active">
                             <img src="img/BoulevardPalace.jpg" alt="" class="d-block w-100">
                             <div class="carousel-caption">
                                 <h3>Boulevard Palace Hotel</h3>
                                 <p>
                                    A destination full of wonders. <br>
                                    Where elegence meets African Luxary.
                                 </p>
                             </div>
                          </div>
                          <div class="carousel-item ">
                              <img src="img/Elizebath Village.jpg" alt="" class="d-block w-100">
                              <div class="carousel-caption">
                                 <h3>Elizebath Village</h3>
                                 <p>A Place Away from The City</p>
                              </div>
                          </div>
                          <div class="carousel-item">
                             <img src="img/maxresdefault.jpg" alt="" class="d-block w-100">
                             <div class="carousel-caption">
                                 <h3>Libassa Ecolodge</h3>
                                 <p>Beach and Lagoon Resort in a Natural  <br>
                                 Tropical Palm Tree Forest close to Naturel</p>
                             </div>
                         </div>
                         <div class="carousel-item">
                             <img src="img/RoyalGrand.jpg" alt="" class="d-block w-100">
                             <div class="carousel-caption">
                                 <h3>Ecobank Ghana Head Office</h3>
                                 <p>The International Bank</p>
                             </div>
                         </div>
                         <div class="carousel-item">
                             <img src="img/Farmington.jpg" alt="" class="d-block w-100">
                             <div class="carousel-caption">
                                 <h3>The Farmington Hotel</h3>
                                 <p>The Ambassador Hotel</p>
                             </div>
                         </div>
                         <div class="carousel-item">
                             <img src="img/LiberianHerritage.jpg" alt="" class="d-block w-100">
                             <div class="carousel-caption">
                                 <h3>Liberian Herritage</h3>
                                 <p>
                                    Culturial Performance <br>
                                    By Liberians culture trupes.
                                 </p>
                             </div>
                          </div>
                         <div class="carousel-item">
                             <img src="img/Monrovia Liberia Waterside.jpg" alt="" class="d-block w-100">
                             <div class="carousel-caption">
                                 <h3>WaterSide Market</h3>
                                 <p>Where You Can Find Asocited Items</p>
                             </div>
                         </div>
                      </div>
                      <!-- slides wrapper end -->
                      <!-- controls start -->
                      <a href="#carousel-images" class="carousel-control-prev" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a href="#carousel-images" class="carousel-control-next" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                  </div>
             </div>
         </div>
        <!-- </div> -->
    </section>
    <!-- CAROUSEL END -->

   <!-- PRODUCTS START -->
    <section id="products-category">
        <div class="row">
            <div class="col">
                <div class="container">
                    <h3 class="h3 text-center my-2">Products</h3><hr>
                </div>
            </div>
            <div class="searchbar">
              <input class="search_input" type="text" name="" placeholder="Search...">
              <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </section>
    <section id="product-list-home">
            <div class="row mb-5">
                <div class="container">
                    <div class="card-deck">
                      @foreach($products as $product)
                        <div class="col-3">
                            <div class="card">
                                <img src="/storage/{{$product->images()->first()->path}}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5>{{$product->title}}</h5>
                                    <p>{{$product->product_price}}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('product.details', $product->id)}}" class="btn btn-info" data-target="#product-id-one">View Details</a>
                                </div>
                            </div>
                            
                        </div>
                      @endforeach
                    </div>
                </div>
         </div>
    </section>

@endsection