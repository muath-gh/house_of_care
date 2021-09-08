@extends('layout.admin')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products</h1>

    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <table id="productsDataTable">
                    <thead>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                Product Name
                            </td>
                            <td>
                                Product Type
                            </td>
                            <td>
                                Product Price
                            </td>
                            <td>
                                Product Front Image
                            </td>
                            <td>
                                Product Back Image
                            </td>
                            <td>
                                Actions
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_type }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td><img style="width:100px;height:auto" src="{{ $product->product_front_image }}" /></td>
                                <td><img style="width:100px;height:auto" src="{{ $product->product_back_image }}" /></td>
                                <td><i data-id="{{ $product->id }}" class="fas fa-edit edit pointer"></i> | <i
                                        data-id="{{ $product->id }}" class="fa fa-trash delete pointer"
                                        aria-hidden="true"></i></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#productsDataTable').DataTable();

            $(document).on('click', '.edit', function(e) {
                var id = $(this).data('id');
                location.href = "/admin/products/" + id + "/edit";
            })

            $(document).on('click', '.delete', function(e) {
               
                if (confirm("Do you want to delete this record")) {
                        var id = $(this).data('id');
                        $.ajax({
                            url: "/admin/products/" + id,
                            method :"delete",
                           data:{ _token: "{{ csrf_token() }}"},
                            dataType:"json",
                            success:function(response){
                                location.reload();
                            }
                        })
                    }

            })
        });
    </script>
@endsection
