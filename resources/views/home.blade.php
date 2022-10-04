@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                @can('isAdmin')
i am admin
               
              @endcan
              @can('isUser')
i am user
               
              @endcan
              @can('isEditor')
i am editor
               
              @endcan
              <h3>Post</h3>
              <a href="{{ route('post.index') }}" class="btn btn-sm btn-success">Posts</a>         </div>
        </div>
    </div>
</div>
@endsection
