
    @csrf
    <div class="card-body">
        <div class="form-group bmd-form-group">
            <label for="email" class="bmd-label-floating">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
        </div>
        <div class="form-group bmd-form-group">
            <label for="name" class="bmd-label-floating">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
        </div>
    </div>
    <div class="card-footer justify-content-center">
        <button type="submit" class="btn btn-fill btn-rose">Submit<div class="ripple-container"></div></button>
    </div>

