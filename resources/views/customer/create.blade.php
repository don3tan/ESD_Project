@extends('layouts.app')

@section('content')
<div class='col-1'></div>
<div class='col-10'>
    <div class='row'>
    <h1 class='display-4 mb-5'>Check out our latest products!</h1>
    </div>
    <form action='/customer/billing' method='post'>
        {{ csrf_field() }} 
        <div class='row'>
        @php($counter=1)
            @foreach ($inventory as $item)
                <div class='col-4 mt-2'>
                    <div class="card text-center h-100">
                        <h6 class="card-header center"><strong>{{$item->name}}</strong></h6>
                        <h6 class="card-title center mt-1">S${{$item->price}}</h6>
                        <p class="small">{{$item->description}}</p>
                        <div class='row'>
                            <div class="col-4"></div>
                            <div class='col-4 form-group text-center'>
                                <input type="text" name="{{str_replace(" ","",$item->name)}}" class="form-control text-center" placeholder="Qty">
                            </div>
                        </div>
                    </div>
                </div>
                @if($counter == 3)
                </div>
                <div class='row'>
                    @php($counter=0)
                @else
                    @php($counter++)
                @endif
            @endforeach
            {{-- <input type="hidden" name="abc" value={{$inventory}}> --}}
        </div>
        &nbsp
        <input class="btn btn-primary btn-lg btn-block mt-5" type="submit" value="Place Order">
    </form>
</div>
<div class='col-1'></div>
    
@endsection