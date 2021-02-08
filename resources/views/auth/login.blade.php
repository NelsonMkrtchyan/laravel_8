

@extends("layouts.app")

@section('content')

       <div class="container bg-light my-3 p-3">
          <div class="row justify-content-center">
            <div class="col-10">

              <div class="row justify-content-center">
                <div class="col-6">
                  <div class="d-flex justify-content-center">
                    <div class="p-2">Login Page</div>
                  </div>
                </div>
              </div>

              <div class="container bg-white mb-6 p-3" >
                <div class="row justify-content-center">
                  <div class="col-4">

                    @if(session('status'))

                      {{ session('status') }}

                    @endif

                    <form action="{{ route('login') }}" method= 'post'>
                      @csrf


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

                    {{--   <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                        Remember me
                        </label>
                      </div>
 --}}
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

@endsection
