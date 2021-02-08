

@extends("layouts.app")

@section('content')

       <div class="container bg-light my-3 p-3">
          <div class="row justify-content-center">
            <div class="col-10">

              <div class="row justify-content-center">
                <div class="col-6">
                  <div class="d-flex justify-content-center">
                    <div class="p-2">Register Page</div>
                  </div>
                </div>
              </div>

              <div class="container bg-white mb-6 p-3" >
                <div class="row justify-content-center">
                  <div class="col-4">
                    <form action="{{ route('register') }}" method= 'post'>
                      @csrf

                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ old('name') }}" placeholder="Enter your name">

                        @error("name")
                          <div>
                            {{ $message }}
                          </div>
                        @enderror

                      </div>

                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter email">

                        @error("email")
                          <div>
                            {{ $message }}
                          </div>
                        @enderror

                      </div>

                      <div class="form-group">
                        <label for="password">
                        Password
                        </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">

                        @error("password")
                          <div>
                            {{ $message }}
                          </div>
                        @enderror

                      </div>
                      <div class="form-group">
                        <label for="password_confirmation">
                        Password Confirmation
                        </label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="password_confirmation">

                        @error("password_confirmation")
                          <div>
                            {{ $message }}
                          </div>
                        @enderror

                      </div>

                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                        Remember me
                        </label>
                      </div>

                      <button type="submit" class="btn btn-primary">
                        Submit
                      </button>

                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
      </div>


         {{--  @if ($posts->count())

              @foreach ($posts as $post)

                <div class="row align-items-center" style=" background-color: rgb(255, 255, 204);  border: 1px solid black; margin: 15px 0">
                  <div class="col-1">
                    <div>
                      Id is:
                      <p class="text-light bg-dark">{{ $post->id }}</p>
                    </div>
                  </div>
                   <div class="col-4">
                    <div>
                      User name is:
                      <p class="text-info bg-dark">{{ $post->user->name }}</p>
                    </div>
                  </div>
                  <div class="col-2">
                    <div>
                      User Id is:
                      <p class="text-warning bg-dark ">{{ $post->user_id }}</p>
                    </div>
                  </div>
                  <div class="col-3">
                    <div>
                      Title:
                      <p class="text-info bg-dark">{{ $post->title }}</p>
                    </div>
                  </div>
                  <div class="col-10">
                    <div>
                      Description is:
                      <p class="text-light bg-dark">{{ $post->description }}</p>
                    </div>
                  </div>

                </div>

              @endforeach
          @else
              <p>There are no posts</p>
          @endif --}}


@endsection
