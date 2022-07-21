@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 mt-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Orders</h2>
            </div>
            <div class="input-group mb-3">
                <i class="fa fa-search"></i>
                <form class="input-group" action="{{ URL::to('orders/find') }}" method="POST">
                        <input type="text" id="search" name="search" class="form-control rounded" autocomplete="off" placeholder="Search..."> 
                </form>
            </div>
            <div id="result" class="panel panel-default" style="display:none">
                <ul class="list-group" id="memList">
                 
                </ul>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>random</td>
                        <td>data</td>
                        <td>placeholder</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

