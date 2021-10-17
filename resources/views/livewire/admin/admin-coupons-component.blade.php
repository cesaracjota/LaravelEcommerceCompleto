<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .table>thead>tr>th{
            font-weight: bold;
            font-size: 11px;
        }
        .table > tbody > tr > td{
            font-size: 10px;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Todo los Cupones
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addcoupons')}}" class="btn btn-success pull-right">Add <i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Codigo de Cupon</th>
                                    <th>Typo de Cupon</th>
                                    <th>Valor de Cupon</th>
                                    <th>Cart Value</th>
                                    <th>Expiry Date</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                    <tr>
                                        <td>{{$coupon->id}}</td>
                                        <td>{{$coupon->code}}</td>
                                        <td>{{$coupon->type}}</td>
                                        @if($coupon->type == 'fijo')
                                            <td>${{$coupon->value}}</td>
                                        @else
                                            <td>{{$coupon->value}} %</td>
                                        @endif
                                        <td>${{$coupon->cart_value}}</td>
                                        <td>{{$coupon->expiry_date}}</td>
                                        <td>
                                            <a href="{{route('admin.editcoupons',['coupon_id'=>$coupon->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Estas seguro que quiere eliminar esta cupon?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCoupon({{$coupon->id}})" style="margin-left:10px;"><i class="fa fa-trash fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>