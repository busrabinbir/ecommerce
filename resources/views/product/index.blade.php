@extends('layout.master')
@section('content')

    <!-- Page Content -->
    <div class="container" id="content">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    @foreach($catToProds['data'] as $catToProd)
                        @if($catToProd['category_id'] == $cat_id)
                            @foreach($products['data'] as $item)
                                    @if($catToProd['product_id'] == $item['id'])
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="card h-100">
                                                <a href="/product/{{$item['id']}}"><img class="card-img-top"
                                                                                        src="{{$item['image']}}" alt=""></a>
                                                <div class="card-body">
                                                    <h4 class="card-title">
                                                        <a href="/product/{{$item['id']}}">{{$item['name']}}</a>
                                                    </h4>
                                                    <h5>{{$item['price']}}</h5>
                                                </div>
                                                <div class="card-footer">
                                                    <small class="text-warning">&#9733; &#9733; &#9733; &#9733;
                                                        &#9734;</small>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                            @endforeach
                        @endif
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



