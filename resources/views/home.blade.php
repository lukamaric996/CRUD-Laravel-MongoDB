@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class='table table-stripped'>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Content</th>
                                <th>Created At</th>
                                <th>Action</th>                            
                                </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($posts as $post)
                            <tr>
                                
                                <td>{{ $post->title}}</td>
                                <td>{{ $post->user->name}}</td>
                                <td>{{ $post->content}}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                    <a href = "{{ route('post.form',$post->_id) }}" class = 'btn btn-warning btn-sm'>Update</a>
                                    <a href = "{{ route('post.delete', $post->_id) }}" onclick="return confirm('Are you sure you want to delete this post?')" class = 'btn btn-danger btn-sm'>Delete</a>
                                </td>
                            </tr>
                            
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
