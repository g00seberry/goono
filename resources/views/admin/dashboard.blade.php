@extends('admin.layout.app')

@section('title','GooNoo dashboard')

@section('content')
    <main
        id="dashboard"
        class="dashboard"
    >

        <x-dashboard-sidebar>
{{--            @include('admin.components.navigation.navigation')--}}
        </x-dashboard-sidebar>

        <section
            id="dashboard_content"
            class="dashboard__content"
        >

        </section>
    </main>
@endsection
