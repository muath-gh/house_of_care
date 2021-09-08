@extends('layout.app')
@section('content')
<section class="py-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-6">
          <!-- PRODUCT SLIDER-->
          <div class="row m-sm-0">
            <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0">
              <div class="owl-thumbs d-flex flex-row flex-sm-column" data-slider-id="1">
                <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0"><img  data-target="front"  class="w-100 pointer thumb-product-image" src="{{$product->product_front_image}}" alt="..."></div>
                <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0"><img  data-target="back" class="w-100 pointer thumb-product-image" src="{{$product->product_back_image}}" alt="..."></div>


              </div>
            </div>
            <div class="col-sm-10 order-1 order-sm-2">
              <div>
                <a id="front" class="product-image active" href="{{$product->product_front_image}}" data-lightbox="product" title="Product item 1">
                  <img class="img-fluid" src="{{$product->product_front_image}}" alt="..."></a>
                  <a id="back" class="product-image" href="{{$product->product_back_image}}" data-lightbox="product" title="Product item 2">
                  <img class="img-fluid" src="{{$product->product_back_image}}" alt="...">
                </a>
</div>
            </div>
          </div>
        </div>
        <!-- PRODUCT DETAILS-->
        <div class="col-lg-6">
          <ul class="list-inline mb-2">
            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
            <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
          </ul>
          <h1>{{$product->product_name}}</h1>
          <p class="text-muted lead">{{$product->product_price}} JOD</p>
          <p class="text-small mb-4">{{$product->product_desc}}</p>
       @livewire("add-to-cart-with-quantity",['product'=>$product])
        
        </div>
      </div>
      <!-- DETAILS TABS-->
      <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
        <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">وصف</a></li>
      </ul>
      <div class="tab-content mb-5" id="myTabContent">
        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
          <div class="p-4 p-lg-5 bg-white">
            <h4>وصف للمنتج </h4>
            <p class="text-muted text-small mb-0">{{$product->product_desc}}</p>
          </div>
        </div>
        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
          <div class="p-4 p-lg-5 bg-white">
            <div class="row">
              <div class="col-lg-8">
                <div class="media mb-3"><img class="rounded-circle" src="img/customer-1.png" alt="" width="50">
                  <div class="media-body ml-3">
                    <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                    <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                    <ul class="list-inline mb-1 text-xs">
                      <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                    </ul>
                    <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="media"><img class="rounded-circle" src="img/customer-2.png" alt="" width="50">
                  <div class="media-body ml-3">
                    <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                    <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                    <ul class="list-inline mb-1 text-xs">
                      <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                    </ul>
                    <p class="text-small mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      </div>
    </div>
  </section>

  <script>
$(function(){

  $(document).on('click','.thumb-product-image',function(e){
    e.preventDefault();
    var target = $(this).data('target');
    $('.product-image').removeClass('active');
    $("#"+target).addClass("active");
  })
})

  </script>
@endsection