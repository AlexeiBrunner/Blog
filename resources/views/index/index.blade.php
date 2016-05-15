@extends('welcome')

@section('content')

    {{--<div class="col-lg-6">--}}
        {{--<h4>Subheading</h4>--}}
        {{--<p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>--}}

        {{--<h4>Subheading</h4>--}}
        {{--<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>--}}

        {{--<h4>Subheading</h4>--}}
        {{--<p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>--}}
    {{--</div>--}}

    {{--<div class="col-lg-6">--}}
        {{--<h4>Subheading</h4>--}}
        {{--<p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>--}}

        {{--<h4>Subheading</h4>--}}
        {{--<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>--}}

        {{--<h4>Subheading</h4>--}}
        {{--<p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>--}}
    {{--</div>--}}

    <table class="simple-little-table" cellspacing='0'>

        <tr><td>id</td><td>country</td><td>city</td><td>streetName</td><td>name</td><td>pets</td></tr>
@foreach($city as $c)
        <tr><td>{{$c->id}}</td><td>{{ $c->country }}</td><td>{{$c->city}}</td><td>{{$c->streetName}}</td><td>{{$c->name}}</td><td><img src="{{$c->path}}"></td></tr>
@endforeach
    </table>

@endsection