

@extends("layouts.app")

@section('content')
       <div>
          <div class="d-flex justify-content-center">
            <div class="p-2">Add New Post</div>
          </div>
        </div>


        <div class="container bg-white mb-6 p-3" >
                <div class="row justify-content-center">
                  <div class="col-4">

                    <form action="/posts" method= 'post'>

                      @csrf

                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Enter a title">

                        @error("title")
                          <div>
                            {{ $message }}
                          </div>
                        @enderror

                      </div>

                       <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" placeholder="Enter a description">

                        @error("description")
                          <div>
                            {{ $message }}
                          </div>
                        @enderror

                      </div>

                     {{--   <div class="form-group">
                         <input type="checkbox" name="public" checked="checked" value="{{old('public')}}" />
 						 <label for="public"> Publicity</label><br>

                        @error("public")
                          <div>
                            {{ $message }}
                          </div>
                        @enderror

                      </div> --}}

                      <button type="submit" class="btn btn-primary">
                        Add post
                      </button>

                    </form>
                  </div>
                </div>
              </div>
@endsection
