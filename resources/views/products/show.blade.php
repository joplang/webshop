@extends('layouts.app')

@section('content')
<div class="container-fluid ">
    <div class="row justify-content-center p-5">
            <div class="card">
                <div class="card-header">
                        <h4>{{ $product->album_title }}</h4>
                        <div class="card-title"> 
                        <a href="/artists/{{ $product->artist->id }}">{{ $product->artist->name }}  </a> </div> 
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-text">
                                <p> {{ $product->track_list }} </p>
                                <p> {{ $product->description }} </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="https://picsum.photos/250/250
                            " class="img-fluid rounded-end" alt="...">
                        </div>
                    </div>

                </div>
                    <div class="card-footer"> 
                        <div class="row">
                            <div class="col-6">€{{ $product->price }}</div>
                            <div class="col-6">
                                <input type="number" id="quantity" value="{{ $quantity }}">
                                <button class="btn btn-dark" id="add-one" type="button" p_id="{{ $product->id }}">Bestel!</button>
                                <a class="btn btn-dark" href="/cart" role="button">Naar Checkout!</a>
                            </div>
                        </div>
                    </div>
            </div>

    </div>
    <div class="row justify-content-center p-5">
      <div class="card text-center">
         <div class="card-header"><b>Reviews voor dit album</b></div>
            @foreach ($product->reviews as $review)
            <div class="card-body">
                <div class="card-title">{{ $review->score }}/5☆</div>
                    <div class="card-text">{{ $review->description }} </div>
            </div>
            @endforeach
        </div>
</div>

@endsection

@push('scripts')

    <script>
        //add one product quantity to cart
        $(document).on('click', '#add-one', function(event) {
            let product_id = $(this).attr('p_id')
            let quantity = $('#quantity').val()
            axios({
                method: 'POST',
                url: '{{ route("add-one-tocart") }}',
                
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
        
        
    </script>

@endpush