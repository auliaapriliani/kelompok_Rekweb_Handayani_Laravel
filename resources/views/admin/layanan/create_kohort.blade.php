@extends('layouts.app')

@section('content')
    <p class="title-page">Kohort Ibu Hamil</p>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.users.store']]) !!}


        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="control-label">NIK *</label>
                        <select name="nik" class="form-control select2" id="">
                            <option value="">Pilih</option>
                        </select>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Usia Kehamilan </label>
                        <select name="usia_kehamilan" class="form-control" id="">
                            <option value="">Pilih</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Trimester Ke  </label>
                        <select name="trimester_ke" class="form-control" id="">
                            <option value="">Pilih</option>
                        </select>
                    </div>
                </div>

                <br><br>
                <div class="col-md-12">

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <p class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Pemeriksaan Ibu</a>
                                </p>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Anamnesis </label>
                                            <input type="text" class="form-control" name="anamnesis">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Berat Badan  </label>
                                            <div class="input-group date">
                                                <input type="text" class="form-control pull-right">
                                                <div class="input-group-addon">
                                                    Kg
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Tinggi Badan  </label>
                                            <div class="input-group date">
                                                <input type="text" class="form-control pull-right">
                                                <div class="input-group-addon">
                                                    cm
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">TD  </label>
                                            <div class="input-group date">
                                                <input type="text" class="form-control pull-right">
                                                <div class="input-group-addon">
                                                    mmHg
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">TFU  </label>
                                            <div class="input-group date">
                                                <input type="text" class="form-control pull-right">
                                                <div class="input-group-addon">
                                                    cm
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">LILA  </label>
                                            <div class="input-group date">
                                                <input type="text" class="form-control pull-right">
                                                <div class="input-group-addon">
                                                    cm
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Status Gizi  </label>
                                            <select name="" class="form-control" id="">
                                                <option value="">Pilih</option>
                                                <option value="N"> Normal </option>
                                                <option value="KN">Kurang Normal</option>
                                                <option value="TN">Tidak Normal</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Refleks Patella  </label>
                                            <div class="input-group date">
                                                <input type="text" class="form-control pull-right">
                                                <div class="input-group-addon">
                                                    -/+
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>


            <button class="btn btn-primary pull-right " type="submit"> <i class="fa fa-save"></i> Simpan </button>
            {{--{!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-primary']) !!}--}}

        </div>

    {!! Form::close() !!}


@stop

