@extends('layouts.user-layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Purchases</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Projects</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Purchases</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects" id="proj">
                        <thead>
                            <tr>
                                <th>User Email</th>
                                <th>User Name</th>
                                <th>Package Name</th>
                                <th>Amount</th>
                                <th>Gym Name</th>
                                @role('cityManager')
                                <th>City Name</th>
                                <th class="text-center">Actions </th>

                            </tr>
                        </thead>
                        <tbody>
                            
                            {{-- @foreach ($boughtPackages as $boughtPackage)
                                <tr id="did{{ $package->id }}">
                                    <td>{{ $package->id }}</td>
                                    <td>{{ $package->name }} </td>
                                    <td>{{ ($package->price) / 100 }} $ </td>
                                    <td>{{ $package->sessions_number }}</td>
                                    <td>{{$package->user? $package->user->name: "Not found"}}</td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('trainingPackeges.show_training_package', $package['id']) }}">

                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-warning btn-sm text-white"
                                            href="{{ route('trainingPackeges.editPackege', $package['id']) }}">
                                            <i class="fas fa-pencil-alt"></i></a>
                                            <a href = "{{ route('PaymentPackage.stripe') }}" class="btn btn-info btn-sm" >Buy </a>

                                        <a href="javascript:void(0)" onclick="deletePackage({{ $package->id }})"
                                            class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>


                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
    </div>
    <!-- /.content-wrapper -->
    <script>
        function deletePackage(id) {
            if (confirm("Do you want to delete this record?")) {
                $.ajax({
                    url: '/trainingPackeges/' + id,
                    type: 'DELETE',
                    data: {
                        _token: $("input[name=_token]").val()
                    },
                    success: function(response) {
                        $("#did" + id).remove();
                    }
                });
            }
        }
    </script>
@endsection
