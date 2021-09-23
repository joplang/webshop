@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Winkelmand') }}</div>

                    <div class="products-container">
                        @foreach ($products as $key => $product)
                            <div class="product-detail">
                                <div class="dingetje">
                                    {{ $product->album_title }}
                                    {{ $product->description }}
                                    <br>
                                    €{{ $product->price }}
                                </div>
                                <input id="p_{{ $product->id }}" type="text" value="{{ isset($cart[$product->id]) ? $cart[$product->id] : '' }}">
                                <button p_id="{{ $product->id }}">Voeg toe</button>
                            <div>
                        @endforeach
                    </div>

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
        $(document).on('click', '.product-detail button', function(event) {
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
                    $('.products-container').append('<div class="winkelmand">' + response.data.product.first_name + '</div>')
                }
            }).catch(function(error) {
            })
        })
        
        
    </script>


@endpush