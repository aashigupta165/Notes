@extends('main')

@section('title', '| Create New Notes')

@section('stylesheets')

        {!! Html::style('css/parsley.css') !!}
        <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
        <script>
                tinymce.init({
                    selector: 'textarea',
                    plugins: 'link code',
                    menubar: false
                });
        </script>

@endsection

@section('content')

        <div class="row">
                <div class="col-md-8 col-md-offset-2">

        <h1>Create New Notes</h1>
        <hr>
        {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
           {{ Form::label('title', 'Title:') }}
           {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

        {{ Form::label('body', "Post Body:") }}
        {{ Form::textarea('body', null, array('class' => 'form-control')) }}

        {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}

        {!! Form::close() !!}
                </div>
        </div>
@endsection

@section('scripts')

        {!! Html::script('js/parsley.min.js') !!}

@endsection