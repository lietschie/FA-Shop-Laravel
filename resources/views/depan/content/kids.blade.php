@extends('depan.partials.layout')
@section('content')
  <div id="content">
    <div class="product-list-category-slider">

    <div class="container">
      <h1>Kids Collection</h1>
      <br>
    <div class="row">
      @foreach ($kids as $kid)
      <div class="col-md-3">
        <div class="item">
          <div class="item-product">
            <div class="item-product-thumb">
              <a href="{{route('depan.mens.show',['id'=>$kid->id])}}"><img src="{{ asset('uploads/products')}}/{{$kid->foto}}" alt="" /></a>
            </div>
            <div class="item-product-info">
              <h3 class="title-product"><a href="{{route('depan.mens.show',['id'=>$kid->id])}}">{{ $kid->name }} - {{ $kid->getKategori() }}</a></h3>
              <div class="info-product-price">
                <span>${{ $kid->price }}</span>
                <a href="{{route('cart.edit',['id'=>$kid->id]) }}" class="btn btn-success btn-sm pull-right">Add To Cart</a>
              </div>
            </div>
          </div>
        </div>
        <br><br>
      </div>
      @endforeach
    </div>
    <div class="row">
      <div class="col-md-2 col-md-offset-5">
        {{ $kids->links() }}
      </div>
    </div>
    </div>
    <br><br>
  </div>
@endsection
