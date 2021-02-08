

@extends("layouts.app")

@section('content')
       <div>
          <div class="d-flex justify-content-center">
            <div class="p-2">Update Existing Post</div>
          </div>
        </div>





        <div class="container bg-white mb-6 p-3" >
                <div class="row justify-content-center">
                  <div class="col-4">


                  	{!! Form::model($post, ['route' => ['posts.update', [$post->id]],
                  	'method'=> 'put']) !!}

	              		<div class="form-group">
	              			{!! Form::label('title', 'Title') !!}

	              			{!! Form::text('title', null, ['id'=>'title','class' => 'form-control']) !!}
	                 	</div>

	                 	<div class="form-group">
	                 		{!! Form::label('description', 'Description') !!}

	                 		{!! Form::text('description', null, ['id'=>'description','class' => 'form-control']) !!}

                      	</div>


                      	{!!  Form::submit('Update post',['class' => 'btn btn-primary']); !!}

					{!! Form::close() !!}

                  </div>
                </div>
              </div>
@endsection
