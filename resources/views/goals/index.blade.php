@extends('layouts.app')

@section('content')
    <div class="container h-100">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @include('modals.add-goal')

        <div class="d-flex mb-3">
            <a href="#" class="link-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#addGoalModal">
                <div class="d-flex align-items-center">
                    <span class="fs-5 fw-bold">+</span>&nbsp;目標の追加
                </div>
            </a>
        </div>
    </div>
@endsection
