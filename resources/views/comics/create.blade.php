@extends('template.base')
@section('pageTitle', 'Create New Comic')
@section('contentMain')
<div class="container">
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('comics.store')}}">
                @csrf
                <div class="mb-3 pt-5">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" >
                </div>

                <div class="mb-3">
                    <label for="description">Description:</label>
                    <textarea class="form-control" placeholder="Description" id="description" name="description"></textarea>
                  </div>

                <div class="mb-3">
                      <label for="thumb" class="form-label">Image:</label>
                      <input type="text" class="form-control" id="thumb" name="thumb" >
                </div>

                <div class="mb-3">
                      <label for="price" class="form-label">Price:</label>
                      <input type="number" class="form-control" id="price" name="price" >
                </div>

                <div class="mb-3">
                      <label for="series" class="form-label">Series:</label>
                      <input type="text" class="form-control" id="series" name="series" >
                </div>

                <div class="mb-3">
                      <label for="sale_date" class="form-label">Sale Date:</label>
                      <input type="date" class="form-control" id="sale_date" name="sale_date" >
                </div>

                <div class="mb-3">
                      <label for="type" class="form-label">Type:</label>
                      <input type="text" class="form-control" id="type" name="type" >
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
