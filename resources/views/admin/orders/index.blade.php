@extends('admin.layouts.layout')
@section('title','Orders')


@section('content')

    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Orders</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Dashboard</a></li>
                                {{--                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admins</a></li>--}}
                                <li class="breadcrumb-item active">Orders</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-end d-none d-sm-block">
                            <a href="{{route('export')}}" class="btn btn-success">Export Excel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="container-fluid">
            <div class="page-content-wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                @include('admin.layouts.status')

                                <div class="table-responsive text-center">
                                    <table id="datatable-buttons"
                                           class="table table-striped table-bordered dt-responsive nowrap"
                                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            {{--                                            <th>#</th>--}}
                                            <th>Order No</th>
                                            <th>Amount</th>
                                            <th>Description</th>
                                            <th>Transfer type</th>
                                            <th>Notes</th>
                                            <th>Created At</th>
                                            <th>Details</th>
                                            <th>Operations</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($orders as $index => $order)
                                            <tr>
                                                {{--                                                <td>{{$orders->firstItem()+$loop->index}}</td>--}}
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->amount}}</td>
                                                <td>{{$order->description}}</td>
                                                <td>{{$order->type}}</td>
                                                <td>{{$order->notes}}</td>
                                                <td>{{$order->created_at->format('Y/m/d h:i A')}} </td>

                                                <td>
                                                    @include('admin.orders.details')
                                                </td>

                                                <td>
                                                    <button data-url="{{route('admin.orders.destroy',$order->id)}}"
                                                            data-name="{{ $order->id }}"
                                                            class="btn btn-danger rounded-3 btn-sm ml-2 delete"
                                                            title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <ul class="pagination  justify-content-end">
                                    {{ $orders->links() }}
                                </ul>

                            </div>
                        </div>
                    </div>


                    {{--                    <div class="row">--}}
                    {{--                        <div class="col-12 text-center">{!! $orders->links() !!}</div>--}}
                    {{--                    </div>--}}
                </div>

            </div>


        </div> <!-- container-fluid -->
    </div>

@endsection
