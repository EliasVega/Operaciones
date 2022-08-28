@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'LiquidaOP') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Add company</h3>
            </div>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::open(array('url'=>'tenant', 'method'=>'POST', 'autocomplete'=>'off'))!!}
            {!!Form::token()!!}
                <div class="box-body row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="name" class="form-control-label">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <!--
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="domain">Domain</label>
                            <input type="text" name="domain" value="{{ old('domain') }}" class="form-control" placeholder="Domain" required>
                        </div>
                    </div>-->

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
                            <a href="{{url('tenant')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
