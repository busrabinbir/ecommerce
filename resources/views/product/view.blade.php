@extends('layout.master')
@section('content')

    <div class="container" id="content">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    @foreach($product['data'] as $item)
                        @if($item['id'] == $prod_id)
                            <div class="col-md-5 mb-4 mb-md-0">
                                <div class="view zoom z-depth-2 rounded">
                                    <img class="img-fluid w-100" src="{{$item['image']}}" alt="Sample">
                                    <a href="#">
                                        <div class="mask waves-effect waves-light"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <h3><strong>{{$item['name']}}</strong></h3>
                                @foreach($item['categories'] as $category)
                                <p class="mb-2 text-muted text-uppercase">
                                    <a href="/category/{{$category['id']}}" style="color:dimgray; font-weight:bold">{{$category['name']}}</a>{{--category name and url--}}
                                </p>
                                @endforeach
                                <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                                <p style="font-weight:bold; color:#1b1e21; font-size: 17px">Price {{$item['price']}}</p>
                                <p class="pt-1">{{$item['description']}}</p>
                                <div class="table-responsive">
                                    <table class="table table-sm table-borderless mb-0">
                                        <tbody>
                                        <tr>
                                            <th class="pl-0 w-25" scope="row"><strong>Discount </strong></th>
                                            <td>{{$item['discount_amount']}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <button type="button" class="btn btn-primary">
                                    Buy now
                                </button>
                                <button type="button" class="btn btn-light"><i
                                        class="fas fa-shopping-cart pr-2"></i>Add to cart
                                </button>
                            </div>
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

@endsection('content)
