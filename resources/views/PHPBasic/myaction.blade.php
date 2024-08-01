@extends('layouts.master')
@section('content')
<form action="{{ route('myaction.action') }}" method="post" enctype= "multipart/form-data">
    @csrf
    <label for="">Student Name</label>
    <input type="text" name="txt-name" id="">
    <label for="">Photo</label>
    <input type="file" name="txt-file" id="">
    <input type="submit" value="Post" name="txt-post">
</form>
@endsection