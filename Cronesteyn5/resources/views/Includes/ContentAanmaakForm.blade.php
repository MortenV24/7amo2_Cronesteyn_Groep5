<form class="col-md-8" method="POST" action="/ContenParkvereniging">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="formGroupExampleInput">title</label>
        <input type="text" class="form-control" name="title"id="formGroupExampleInput" placeholder="title">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">text</label>
        <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>