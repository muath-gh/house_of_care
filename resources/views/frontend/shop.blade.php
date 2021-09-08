@extends('layout.app')
@inject('helper','App\Helper\FrontEndHelper')
@section('content')
<section class="py-5 bg-light">
    <div class="container">
      <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
        <div class="col-lg-6">
          <h1 class="mb-0">منتجات بيت العناية للأغذية الصحية</h1>
        </div>
        <div class="col-lg-6 text-lg-right">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container p-0">
      <div class="row">
        <!-- SHOP SIDEBAR-->
        {{-- <div class="col-lg-3 order-2 order-lg-1">
          <h5 class="text-uppercase mb-4">Categories</h5>
          <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Fashion &amp; Acc</strong></div>
          <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
            <li class="mb-2"><a class="reset-anchor" href="#">Women's T-Shirts</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Men's T-Shirts</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Dresses</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Novelty socks</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Women's sunglasses</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Men's sunglasses</a></li>
          </ul>
          <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Health &amp; Beauty</strong></div>
          <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
            <li class="mb-2"><a class="reset-anchor" href="#">Shavers</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">bags</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Cosmetic</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Nail Art</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Skin Masks &amp; Peels</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Korean cosmetics</a></li>
          </ul>
          <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Electronics</strong></div>
          <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal mb-5">
            <li class="mb-2"><a class="reset-anchor" href="#">Electronics</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">USB Flash drives</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Headphones</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Portable speakers</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Cell Phone bluetooth headsets</a></li>
            <li class="mb-2"><a class="reset-anchor" href="#">Keyboards</a></li>
          </ul>
          <h6 class="text-uppercase mb-4">Price range</h6>
          <div class="price-range pt-4 mb-5">
            <div id="range"></div>
            <div class="row pt-2">
              <div class="col-6"><strong class="small font-weight-bold text-uppercase">From</strong></div>
              <div class="col-6 text-right"><strong class="small font-weight-bold text-uppercase">To</strong></div>
            </div>
          </div>
          <h6 class="text-uppercase mb-3">Show only</h6>
          <div class="custom-control custom-checkbox mb-1">
            <input class="custom-control-input" id="customCheck1" type="checkbox">
            <label class="custom-control-label text-small" for="customCheck1">Returns Accepted</label>
          </div>
          <div class="custom-control custom-checkbox mb-1">
            <input class="custom-control-input" id="customCheck2" type="checkbox">
            <label class="custom-control-label text-small" for="customCheck2">Returns Accepted</label>
          </div>
          <div class="custom-control custom-checkbox mb-1">
            <input class="custom-control-input" id="customCheck3" type="checkbox">
            <label class="custom-control-label text-small" for="customCheck3">Completed Items</label>
          </div>
          <div class="custom-control custom-checkbox mb-1">
            <input class="custom-control-input" id="customCheck4" type="checkbox">
            <label class="custom-control-label text-small" for="customCheck4">Sold Items</label>
          </div>
          <div class="custom-control custom-checkbox mb-1">
            <input class="custom-control-input" id="customCheck5" type="checkbox">
            <label class="custom-control-label text-small" for="customCheck5">Deals &amp; Savings</label>
          </div>
          <div class="custom-control custom-checkbox mb-4">
            <input class="custom-control-input" id="customCheck6" type="checkbox">
            <label class="custom-control-label text-small" for="customCheck6">Authorized Seller</label>
          </div>
          <h6 class="text-uppercase mb-3">Buying format</h6>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" id="customRadio1" type="radio" name="customRadio">
            <label class="custom-control-label text-small" for="customRadio1">All Listings</label>
          </div>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" id="customRadio2" type="radio" name="customRadio">
            <label class="custom-control-label text-small" for="customRadio2">Best Offer</label>
          </div>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" id="customRadio3" type="radio" name="customRadio">
            <label class="custom-control-label text-small" for="customRadio3">Auction</label>
          </div>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" id="customRadio4" type="radio" name="customRadio">
            <label class="custom-control-label text-small" for="customRadio4">Buy It Now</label>
          </div>
        </div> --}}
        <!-- SHOP LISTING-->
        <div class="col-lg-12 order-1 order-lg-2 mb-5 mb-lg-0">
          <div class="row mb-3 align-items-center">
          
            <div class="col-lg-12">
              <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">

                <li class="list-inline-item">
                  <select class="selectpicker ml-auto" name="sorting" data-width="200" data-style="bs-select-form-control" data-title="Default sorting">
                    <option value="default">Default sorting</option>
                    <option value="popularity">Popularity</option>
                    <option value="low-high">Price: Low to High</option>
                    <option value="high-low">Price: High to Low</option>
                  </select>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
         

@foreach($products as $product)
@include('frontend.partials.product',$product)
@endforeach



           
        
          </div>
          <!-- PAGINATION-->
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center justify-content-lg-end">
              @for($i = 1,$j=1; $i <= $total ; $i+=6,$j++)
              <li class="page-item @if(app('request')->input('page') == $j) active @endif"><a class="page-link" href="{{url("/shop/$type?page=$j")}}">{{($j)}}</a></li>
        
              @endfor
                
              
        
         
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <script>
    $(function(){
      var page = "{{app('request')->input('page')}}";
      if(page == ""){
       $('.pagination li').first().addClass('active')
      }
    })
  </script>
@endsection