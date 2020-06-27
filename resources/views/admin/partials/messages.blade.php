@extends('admin.layouts.master')

@section('title')
    Ziņas
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 my-5">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Inbox</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Search Mail">
                                    <div class="input-group-append">
                                        <div class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-controls">
                                <!-- Check all button -->
                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                                <div class="float-right">
                                    1-50/200
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.float-right -->
                            </div>
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <tbody>

                                    @foreach($messages as $message)
                                        <tr>
                                            <td>
                                                    <div class="icheck">
                                                        <input type="checkbox" id="check" name="{{ $message->id }}[]">
                                                        <label for="check"></label>
                                                    </div>


                                            </td>
                                            <td class="mailbox-name"><a href="{{ route('admin.read.mail', $message->id) }}">{{ $message->name }}</a></td>
                                            <td class="mailbox-subject"><b> {{ $message->subject }}</b>
                                            </td>
                                            <td class="mailbox-date">{{ $message->created_at }}</td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer p-0">
                            <div class="mailbox-controls">
                                <!-- Check all button -->
                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                                <div class="float-right">
                                    1-50/200
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.float-right -->
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
