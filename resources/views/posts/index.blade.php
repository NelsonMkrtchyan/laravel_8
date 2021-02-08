

@extends("layouts.app")

@section('content')

        <div>
          <div class="d-flex justify-content-center">
            <div class="p-2">Posts Page</div>
          </div>
        </div>

       <div class="container">

          @if ($posts->count())

              @foreach ($posts as $post)

                <div class="row align-items-center" style=" background-color: rgb(255, 255, 204);  border: 1px solid black; margin: 15px 0">

                  <div class="col-2">
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
                  <div class="col-4">
                    <div>
                      Title:
                      <p class="text-info bg-dark">{{ $post->title }}</p>
                    </div>
                  </div>
                  <div class="col-12">
                    <div>
                      Description is:
                      <p class="text-light bg-dark">{{ $post->description }}</p>
                    </div>
                  </div>
                </div>

              @endforeach
          @else
              <p>There are no posts</p>
          @endif
      </div>
@endsection
