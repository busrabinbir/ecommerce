@extends('layout.master')
@section('content')

    <!-- Page Content -->
    <div class="container" id="content">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row" id="products">
                    @foreach($products['data'] as $product)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top" src="{{$product['image']}}" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="/product/{{$product['id']}}">{{$product['name']}}</a>
                                    </h4>
                                    <h5>{{$product['price']}}</h5>
                                </div>
                                <div class="card-footer">
                                    <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-lg-9 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

@endsection('content')
