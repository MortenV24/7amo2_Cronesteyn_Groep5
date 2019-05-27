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
            <option value="home">Home</option>
            <option value="vogelwerkgroep">vogelwerkgroep</option>
            <option value="foto">Foto</option>
            <option value="newsItem">News Item</option>
            <option>5</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">text</label>
        <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <input type="file" id="foto" name="foto" accept="image/png, image/jpeg">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>