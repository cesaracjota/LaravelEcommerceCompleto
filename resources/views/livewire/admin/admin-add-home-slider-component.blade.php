<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Agregar nuevo Slider
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">Sliders</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="addSlide">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Titulo</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Titulo" class="form-control input-md" wire:model="title"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Subtitulo</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="subtitulo" class="form-control input-md" wire:model="subtitle"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Precio</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="precio" class="form-control input-md" wire:model="price"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Link</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Titulo" class="form-control input-md" wire:model="link"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Imagen</label>
                                <div class="col-md-4">
                                    <input type="file" placeholder="Titulo" class="input-file" wire:model="image"/>
                                    @if($image)
                                        <img src="{{$image->temporaryUrl()}}" style="width:120px;" />
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Estado</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="status">
                                        <option value="0">Inactivo</option>
                                        <option value="1">Activo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-warning">Agregar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
