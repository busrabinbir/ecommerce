@extends('layout.master')
@section('content')

    <div class="container" id="content">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    @foreach($product['data'] as $item)
                        @if($item['id'] == $prod_id)
                            <div class="col-lg-6 col-md-8 mb-6">
                                <h4 class="card-title">{{$item['name']}}</h4>
                                <div class="card h-100">
                                    <img class="card-img-top" src="{{$item['image']}}" alt="">
                                    <div class="card-body">
                                        <div class="row">
                                            <h5>Price: {{$item['price']}}</h5>
                                            <h5>Discount: {{$item['discount_amount']}}</h5>
                                        </div>
                                        <p class="card-text">{{$item['description']}}</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733;
                                            &#9734;</small>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-lg-9 -->
        </div>

@endsection('content)
