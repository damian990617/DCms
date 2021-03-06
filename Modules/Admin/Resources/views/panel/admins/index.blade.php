@extends('admin::layouts.default')
@section('admin::main')
    <div class="page-content__top"></div>
    <div class="page-content__container">
        <div class="container-fluid">
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title card-columns">
                        <div class="card-description">
                            <h2 class="card-label">Admin list</h2>
                            <p class="text-muted">Administration list</p>
                        </div>
                        <div class="card-buttons">
                            <a href="{{ admin_route('admins.create') }}" class="btn">Add new</a>
                        </div>
                    </div>
                </div>
                <div class="card-body no-p-lr">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    @include('admin::panel.partials.filter-list')
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card card-table-data">
                                    <div class="card-header">
                                        @include('admin::panel.partials.model-search')
                                    </div>
                                    <div class="card-body">
                                        @if($data['items']->total())
                                            @foreach($data['items'] as $item)
                                                <div class="item-block card">
                                                    <div class="card-header">
                                                        <span class="title">#{{$item->id}}: {{ $item->email }}</span>
                                                    </div>
                                                    <div class="card-body">
                                                        @if($item->updated_at)
                                                            <span>@lang('admin::main.updated_at') {{$item->updated_at}}</span>
                                                        @endif
                                                        <div class="badges">
                                                            @if($item->active)
                                                                <span
                                                                    class="badge badge-success">@lang('admin::main.badges.active')</span>
                                                            @else
                                                                <span
                                                                    class="badge badge-danger">@lang('admin::main.badges.inactive')</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @include('admin::panel.partials.crud-operations')
                                                </div>
                                            @endforeach
                                        @else
                                            <p class="title">@lang('admin::main.not_found')</p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
