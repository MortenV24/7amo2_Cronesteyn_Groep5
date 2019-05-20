<form class="col-md-8" method="POST" action="/ContentParkvereniging">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="formGroupExampleInput">title</label>
        <input type="text" class="form-control" name="title"id="formGroupExampleInput" placeholder="title">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Type content</label>
        <select class="form-control" name="type" id="exampleFormControlSelect1">
            <option value="Parkvereniging">Parkvereniging</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">text</label>
        <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>