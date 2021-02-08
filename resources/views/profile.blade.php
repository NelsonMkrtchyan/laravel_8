@extends('layouts.app')

@section('content')
       <div>
          <div class="d-flex justify-content-center">
            <div class="p-2">Profile Page</div>
          </div>
        </div>

        <div>
          <div class="d-flex justify-content-center pt-3">
            <div class="p-2">User name is : {{ auth()->user()->name }}</div>
          </div>
        </div>

        <div>
          <div class="d-flex justify-content-center pt-3">
            <div class="p-2">User email is : {{ auth()->user()->email }}</div>
          </div>
        </div>

         <div>
          <div class="d-flex justify-content-center pt-3 pb-3">
              <p class="m-0 pt-2">Press button to add a post ---></p>
              <div class="col-2">
                 <a href="/posts/create"><button class="btn btn-success"> Add Post</button> </a>
              </div>
          </div>
        </div>


        <div class="container">

          @if ($posts->count())
auth()->user()->name }}<
              @foreach ($posts as $post)

                <div class="row align-items-center" style=" background-color: rgb(255, 255, 204);  border: 1px solid black; margin: 15px 0">


                  <div class="col-10">
                    <div class="row">

                      <div class="col-2">
                        <div>
                          Id is:
                          <p class="text-light bg-dark">{{ $post->id }}</p>
                        </div>
                      </div>

                       <div class="col-4">
                        <div>
                          User name is:
                          <p class="text-info bg-dark">{{ auth()->user()->name }}</p>
                        </div>
                      </div>

                      <div class="col-2">
                        <div>
                          User Id:
                          <p class="text-warning bg-dark ">{{ $post->user_id }}</p>
                        </div>
                      </div>
                      <div class="col-4">
                        <div>
                          Title:
                          <p class="text-info bg-dark">{{ $post->title }}</p>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-2">

                    <div class="row justify-content-center">

                      <div>
                        <a href="/posts/{{$post->id}}/edit"><button class="btn btn-warning"> Edit Post</button> </a>
                      </div>

                    </div>

                  </div>



                  <div class="col-10">
                    <div>
                      Description is:
                      <p class="text-light bg-dark">{{ $post->description }}</p>
                    </div>
                  </div>


                  <div class="col-2">

                    <div class="row justify-content-center">

                      <div>
                        {!! Form::model($post,['route' => ['posts.destroy', [$post->id]],'method' => 'delete']) !!}
                          {!!  Form::submit('Delete Post',['class' => 'btn btn-danger']); !!}
                        {!! Form::close() !!}
                      </div>

                    </div>

                  </div>





                </div>

              @endforeach
          @else
              <p>There are no posts</p>
          @endif
      </div>


@endsection
