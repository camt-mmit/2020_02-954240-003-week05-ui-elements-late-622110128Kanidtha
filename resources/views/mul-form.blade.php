@extends('layouts.main')

@section('title', 'Multiplication Table Form')

@section('content')
    <div class="center"> 
        <form action="{{ route('mul-result') }}" method="post">
           @csrf
             <label>N <a class = "color ">::</a>  <select name="n" class="aarea">
                        <option value="2">2</option> 
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
             </label>
            </br></br>
             <button type="submit">Submit</button>
        </form>
    </div>
<br>
@endsection