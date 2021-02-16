@extends('layout.v_template')
@section('title', 'Edit Hadiah')

@section('content')

    <div class="card">

        <form action="{{ url('hadiah/'.$id) }}" method="POST">
            {{-- @method('PUT') --}}
            @csrf
            <div class="card-body">
                
                <input type="hidden" name="id" value="{{$id}}">

                <div class="form-group row">
                    <label for="desc_hadiah" class="col-sm-2">Description</label>
                    <div class="col-sm-10">
                        <textarea name="desc_hadiah" class="form-control" id="desc_hadiah" cols="10" rows="5" placeholder="Enter your description" autocomplete="off">{{htmlspecialchars($hadiah->desc_hadiah)}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="min_point" class="col-sm-2">Min. Point</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="min_point" id="min_point" placeholder="Minimal 1 point" min="1" value="{{$hadiah->min_point}}">
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-footer">
                <a href="/hadiah" class="btn btn-default btn-sm">Back</a>
                <input type="submit" class="btn btn-success btn-sm" value="Edit data">
            </div>
        </form>
    </div>

@endsection