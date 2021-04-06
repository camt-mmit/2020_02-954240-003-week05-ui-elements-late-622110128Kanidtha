@extends('layouts.main')

@section('title', 'Area Form')

@section('content')
<div class="center">
    <form action="{{ route('area-result') }}" method="post">
        @csrf
        <label ><a class = "text" >Type</a> <a class = "color">::</a> <input type="radio" name="type" value="Rectangular"/>Rectangular</label>
                        <input class=".font" type="radio" name="type" value="Triangle"/>Triangle</label>
        <br />
        <label >Width <a class = "color ">::</a> <input class ="aarea" type="number" name="width"/></label>
        <br />
        <label >Height <a class = "color ">::</a> <input class ="aarea" type="number" name="height"/></label>
        <br />
        <button type="submit">Submit</button>
    </form>
</div>
@endsection
