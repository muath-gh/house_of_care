@extends('layout.admin')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>

    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    <p>Updated Failed</p>
                </div>
            @endif

            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>Updated Successfully</p>
                </div>
            @endif
            <div class="card shadow mb-4">
                {!! Form::open(['url' => url("admin/products/$product->id"), 'method' => 'put', 'files' => true]) !!}
                <div class="row">
                    <div class="col-md-4">
                        {!! Form::label('product_name', __('Product Name')) !!}
                        {!! Form::text('product_name', $product->product_name, ['class' => 'form-control', 'placeholder' => 'Product Name']) !!}
                        {!! $errors->first('product_name', '<p class="error">:message</p>') !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('product_type', __('Product Type')) !!}
                        {!! Form::select('product_type', ['keto' => 'Keto', 'lowcarb' => 'Low Carb'], null, ['class' => 'form-control select2', 'name' => 'product_type[]', 'multiple' => true]) !!}
                        {!! $errors->first('product_type', '<p class="error">:message</p>') !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('product_price', __('Product Price')) !!}
                        {!! Form::number('product_price', $product->product_price, ['class' => 'form-control', 'placeholder' => 'Product Price']) !!}
                        {!! $errors->first('product_price', '<p class="error">:message</p>') !!}
                    </div>

                </div>
                <br />
                <div class="row">
                    <div class="col-md-4">
                        {!! Form::label('product_front_image', __('Front Image')) !!}
                        <div class="form-group">
                            <input name="product_front_image" type="file" class="file-upload" />
                            {!! $errors->first('product_front_image', '<p class="error">:message</p>') !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('product_back_image', __('Back Image')) !!}
                        <div class="form-group">
                            <input name="product_back_image" type="file" class="file-upload" />
                            {!! $errors->first('product_back_image', '<p class="error">:message</p>') !!}
                        </div>
                    </div>

                    <div class="col-md-4">
                        {!! Form::label('product_desc', __('Product Description')) !!}
                        {!! Form::textarea('product_desc', $product->product_desc, ['class' => 'form-control', 'placeholder' => 'Product Description']) !!}
                        {!! $errors->first('product_desc', '<p class="error">:message</p>') !!}
                    </div>
                </div>
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
            var productTypes = "{{ $product->product_type }}"
            $('.select2').val(productTypes.split(",")).change();
        });
    </script>
@endsection
