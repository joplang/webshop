@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
        

                    <div class="card-header">Winkelmand is 
                        {{-- &euro; <span id="total-cost">{{ $total_cost['total'] }}</span> --}}
                    </div>

                        @foreach ($products as $key => $product)
                            <div class="product-detail">
                                <div class="shopcart">
                                    {{ $product->album_title }}
                                    {{ $product->description }}
                                    <br>
                                    €{{ $product->price }}
                                </div>

                                <input id="p_{{ $product->id }}" type="text" value="{{ isset($cart[$product->id]) ? $cart[$product->id] : '' }}">

                                <button class="add" p_id="{{ $product->id }}">Voeg toe</button>
                                <button class="remove" p_id="{{ $product->id }}">Verwijder product</button>

                            <div>
                        @endforeach

                    <div class="cart">
                        <ul class="cart-items"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script>
        //add product quantity to cart
        $(document).on('click', '.add', function(event) {
            let product_id = $(this).attr('p_id')
            let quantity = $('#p_' + product_id).val()
            axios({
                method: 'POST',
                url: '{{ route("add-tocart") }}',
                
                data: {
                    product_id: product_id,
                    quantity: quantity,
                }
            }).then(function(response) {
                if (response.data.success) {
                    $('#cartcounter').html(response.data.num_products)
                    $('#total-cost').html(response.data.total_cost.total)
                }
            }).catch(function(error) {
            })
        })

        //remove product from cart
        $(document).on('click', '.remove', function(event) {
            let product_id = $(this).attr('p_id')
            let quantity = $('#p_' + product_id).val()

            axios({
                method: 'POST',
                url: '{{ route("remove-fromcart") }}',
                
                data: {
                    product_id: product_id,
                    quantity: quantity,
                }
            }).then(function(response) {
                if (response.data.success) {
                    $('#p_' + product_id).val('')
                    $('#cartcounter').html(response.data.num_products)
                    $('#total-cost').html(response.data.total_cost.total)
                }
            }).catch(function(error) {
            })
        })

        //show total cost price
        
        
    </script>

@endpush