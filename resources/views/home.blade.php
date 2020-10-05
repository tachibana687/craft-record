@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 p-2">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('自分の新着作品、記事') }}
                </div>
            </div>
        </div>

        <div class="col-md-8 p-2">
            <div class="card">
                <div class="card-header">{{ __('最近の人気作品') }}</div>

                <div class="card-body">
                    {{ __('ココに作品') }}
                </div>
            </div>
        </div>

        <div class="col-md-8 p-2">
            <div class="card">
                <div class="card-header">{{ __('最近の人気記事') }}</div>

                <div class="card-body">
                    {{ __('ココに記事') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
