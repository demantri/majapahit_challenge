@extends('layout.v_template')
@section('title', 'Add Hadiah')

@section('content')

    <div class="card">

        <form action="/hadiah/save" method="POST">
            @csrf
            <div class="card-body">
                
                <div class="form-group row">
                    <label for="desc_hadiah" class="col-sm-2">Description</label>
                    <div class="col-sm-10">
                        <textarea name="desc_hadiah" class="form-control" id="desc_hadiah" cols="10" rows="5" placeholder="Enter your description" autocomplete="off"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="min_point" class="col-sm-2">Min. Point</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="min_point" id="min_point" placeholder="Minimal 0 point" min="0">
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Save data">
            </div>
        </form>
    </div>

@endsection