@extends('layouts.app')

@section('content')
<chat-component :current-user="{{ auth() -> id() }}"></chat-component>
@endsection
