@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    @section('messages')
        @if(Session::has('message'))
            <div class="container-fluid spark-screen">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-solid box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Успешно выполнено :)</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div><!-- /.box-tools -->
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="content__messeges">
                                    {{Session::get('message')}}
                                </div>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div>
            </div>
        @endif
    @show
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Статьи</h3>
                    </div>
                    <div class="box-body">
                        @section('content')
                            @include($page)
                        @show
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">

                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection
