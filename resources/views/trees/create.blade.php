<form method="POST" action="/tree">
    @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <button type="submit">Submit</button>
</form>