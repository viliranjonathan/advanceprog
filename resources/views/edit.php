<h1>User Edit Page</h1>
<p>This is the edit page with id {{ $id }}</p>

<div class="row">
    <div class="col-6">
        <form action="{{ url('users') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fullname" name="fullname" />
            </div>
            <div class="form-group">
                <buttom class="btn btn-primary">Submit</buttom>
            </div>
        </form>
    </div>
</div>