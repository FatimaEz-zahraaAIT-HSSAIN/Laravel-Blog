@extends('layout')


@section('links')
<link rel="stylesheet" href="css/form.css">
@endsection

@section('content')
<center>
    <form action="{{route('create.post')}}" method="POST"  class="form">
        @csrf
        <p class="title">Create Article </p>
        <div class="flex">
            
        </div>  
                
        <label>
            <input required="" placeholder="" name="title" type="text" class="input">
            <span>Title</span>
        </label> 
            
        <label>
            <input required="" placeholder="" name="slug" type="text" class="input">
            <span>Slug</span>
        </label>
        <label>
            <input required="" placeholder="" name="content" type="text" class="input">
            <span>Content</span>
        </label>
        <button type="submit" class="submit">submit</button>

        
    </form>
</center>

@endsection