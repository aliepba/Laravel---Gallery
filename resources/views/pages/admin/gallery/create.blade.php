@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Gallery</h1>
        </div>
        <div class="section-body">
          <h2 class="section-title">Input New Gallery</h2>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card">
                  <div class="card-header">
                        <a href="{{route('gallery.index')}}" class="btn btn-warning"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
                  </div>

                  <div class="card-body">
                      <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="categories_id" required class="form-control">
                                <option value="">Select Category</option>
                                @foreach ($categories as $item)
                                    <option value="{{$item->id}}">
                                        {{$item->category}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <select name="locations_id" required class="form-control">
                                <option value="">Select Location</option>
                                @foreach ($locations as $items)
                                    <option value="{{$items->id}}">
                                        {{$items->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                          <div class="form-group">
                              <label for="image">Image</label>
                              <input type="file" class="form-control" name="image" />
                          </div>

                         <div class="form-group">
                             <label for="description">Description</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>            

                        <div class="form-group">
                      <label class="d-block">Most Rated</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="most" id="exampleRadios1" value="1">
                        <label class="form-check-label" for="exampleRadios1">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="most" id="exampleRadios2" value="0" checked>
                        <label class="form-check-label" for="exampleRadios2">
                          No
                        </label>
                      </div>
                    </div>
                        <button type="submit" class="btn btn-success btn-md">Save</button>
                      </form>
                  </div>
            </div>
          </div>
        </div>
    </section>
  </div>    
@endsection 