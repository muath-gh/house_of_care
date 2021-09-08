@extends('layout.app')
@section('content')
<section class="py-5 bg-light">
    <div class="container">
      <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
        <div class="col-lg-6">
          <h1 class="h2 text-uppercase mb-0">إنهاء الطلب</h1>
        </div>
        <div class="col-lg-6 text-lg-right">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="cart.html">Cart</a></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <!-- BILLING ADDRESS-->
    <h2 class="h5 text-uppercase mb-4">معلومات العنوان</h2>
    <div class="row">
      <div class="col-lg-8">
        <form action="{{route('store-order')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-lg-6 form-group">
              <label class="text-small text-uppercase" for="firstName">الاسم الاول</label>
              <input class="form-control form-control-lg" name="first_name" id="firstName" type="text" placeholder="أدخل الاسم الاول">
              {!! $errors->first('first_name', '<p class="error">:message</p>') !!}

            </div>
            <div class="col-lg-6 form-group">
              <label class="text-small text-uppercase" for="lastName">الاسم الاخير</label>
              <input class="form-control form-control-lg" name="last_name" id="lastName" type="text" placeholder="أدخل الاسم الاخير">
              {!! $errors->first('first_name', '<p class="error">:message</p>') !!}

            </div>
            
            <div class="col-lg-6 form-group mt-4">
              <label class="text-small text-uppercase" for="phone">رقم الهاتف</label>
              <input class="form-control form-control-lg" name="phone" id="phone" type="tel" placeholder="أدخل رقم الهاتف">
              {!! $errors->first('phone', '<p class="error">:message</p>') !!}

            </div>
            
           
            <div class="col-lg-6 form-group mt-4">
              <label class="text-small text-uppercase" for="address">العنوان</label>
              <input class="form-control form-control-lg" name="address" id="address" type="text" placeholder="أدخل اسم المنطقة او اسم الشارع">
              {!! $errors->first('address', '<p class="error">:message</p>') !!}

            </div>
     
            <div class="col-lg-12 form-group mt-5">
              <button class="btn btn-dark" type="submit">تأكيد الطلب</button>
            </div>
          </div>
        </form>
      </div>
      <!-- ORDER SUMMARY-->
      <div class="col-lg-4">
        <div class="card border-0 rounded-0 p-lg-4 bg-light">
          <div class="card-body">
            <h5 class="text-uppercase mb-4">طلبك</h5>
           
            <table style="width: 100%">
              <tr>
                <td style="width:50%"><span>المنتج</span></td>
                <td style="width:25%"><span>الكمية</span></td>
                <td style="width:25%"><span>السعر</span></td>
              </tr>
              <tbody>
                @foreach ($products as $product )
                  <tr>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['quantity']}}</td>
                    <td>{{$product['price'] * $product['quantity']}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection