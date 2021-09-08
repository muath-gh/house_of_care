   <!-- PRODUCT-->
   <div class="col-lg-4 col-sm-6">
    <div class="product text-center">
      <div class="mb-3 position-relative">
        <div class="badge text-white badge-"></div><a class="d-block" href="{{url("/product-detail/$product->id")}}"><img class="img-fluid w-50" src="{{$product->product_front_image}}" alt="..."></a>
        <div class="product-overlay">
          <ul class="mb-0 list-inline">
            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
      
            @livewire("add-to-cart",['product'=>$product])
     
            <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
          </ul>
        </div>
      </div>
      <h6> <a class="reset-anchor" href="{{url("/product-detail/$product->id")}}">{{$product->product_name}}</a></h6>
      <p class="small text-muted">{{$product->product_price}} JOD</p>
    </div>
  </div>