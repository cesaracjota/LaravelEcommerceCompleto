<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Agregar Nuevo Cupon
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.coupons')}}" class="btn btn-success pull-right">Todo los Cupones</a>
                            </div>
                        </div>
                    </div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <form class="form-horizontal" wire:submit.prevent="storeCoupon">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Codigo de Cupon</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Codigo de Cupon" class="form-control input-md" wire:model="code"/>
                                        @error('code') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Tipo de Cupon</label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="type">
                                            <option value="">Seleccionar</option>
                                            <option value="fijo">Fijo</option>
                                            <option value="por_ciento">Por Ciento</option>
                                        </select>
                                        @error('type') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Cupon Value</label>
                                    <div class="col-md-4" wire:ignore>
                                        <input type="text" placeholder="Cupon Value" class="form-control input-md" wire:model="value"/>
                                        @error('value') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Cart Value</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Cart Value" class="form-control input-md" wire:model="cart_value"/>
                                        @error('cart_value') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Expiry Date</label>
                                    <div class="col-md-4">
                                        <input type="text" id="expiry-date" placeholder="Expiry Date" class="form-control input-md" wire:model="expiry_date"/>
                                        @error('expiry_date') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-warning">Crear</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@push('scripts')
    <script>
        $(function(){
            $('#expiry-date').datetimepicker({
                format: 'Y-MM-DD'
            })
            .on('dp.change',function(ev){
                var data = $('#expiry-date').val();
                @this.set('expiry_date',data);
            });
        });
    </script>
@endpush