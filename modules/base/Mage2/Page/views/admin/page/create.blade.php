@extends('layouts.admin-bootstrap')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="main-title-wrap">
                    <span class="title">
                        Create Page
                    </span>
                </div>
                {!! Form::open(['method' => 'post','action' => route('admin.page.store')]) !!}
                    @include('admin.page._fields')
                    {!! Form::submit('Create Page') !!}                    
                {!! Form::close() !!}
            </div>
        </div>
@endsection