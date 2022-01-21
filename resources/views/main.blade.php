@extends('layouts.main')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm">
            <aside>
                <form action="/main" >
                    <div class="form=group">
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="brand" class="form-control">Бренд</label>
                        <ul class="list-group">
                            @foreach ($brands as $brand)
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="{{$brand->id}}" name="brands[]">
                                {{$brand->brand}}
                            </li>
                            @endforeach
                        </ul>
                        <div class="filters row">
                            <div>
                                <button type="submit" class="btn btn-primary">Фильтр</button>
                            </div>
                        </div>
                </form>
            </aside>
        </div>
    </div>
    <div class="row">
        @foreach ($cars as $car)
        <div class="col-md-6 col-xl-3" >
        <div class="card mb-3">
                <img src="{{$car->image}}" class="card-img-top" alt="n">
                <div class="card-body">
                    <h5 class="card-title">{{$car->brand}}</h5>
                    <p class="card-text">{{$car->price}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection