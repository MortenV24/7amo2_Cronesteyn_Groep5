@extends('Layouts/mainLayout')

@section('title', 'Contact')
@section('content')

    <div class="container col-md-8">
        <div class="row">
            <form class="col-md-8" method="POST" action="/contact">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="formGroupExampleInput">naam</label>
                    <input type="text" class="form-control" name="naam" id="formGroupExampleInput" placeholder="naam">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">text</label>
                    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection