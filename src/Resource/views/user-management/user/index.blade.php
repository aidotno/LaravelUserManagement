@extends('user-management.master')

@section('header')
    @parent

@endsection

@section('breadcrumb')
    @include('mekaeils-package.layouts.breadcrumb',[
        'pageTitle' => 'Users',
        'lists' => [
            [
                'link'  => '#',
                'name'  => 'User Management',
            ],
            [
                'link'  => '#',
                'name'  => 'Users',
            ]
        ]
    ])
@endsection

@section('content')
    <p>Users</p>
@endsection


@section('footer')
    @parent
    
@endsection