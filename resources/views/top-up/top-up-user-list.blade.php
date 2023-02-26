@extends('layouts.app')
@section('title', 'Top TopUp')

@push('css')
@endpush

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Top Top Up List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Top TopUp</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Top 10 Top Up User</h3>

                                <div class="card-tools">
                                    <form method="GET" action="{{ route('user.search') }}">
                                        <div class="input-group input-group-sm" style="width: 150px;">



                                            <input type="text" name="search" value="{{ $search ?? old('search') }}" class="form-control float-right"
                                                placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>



                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Count</th>
                                            <th>Created At</th>
                                            {{-- <th>Reason</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($topTopUpUsers as $topTopUpUser)
                                            <tr>
                                                <td>{{ $topTopUpUser->id ?? 'Not Found' }}</td>
                                                <td>{{ $topTopUpUser->user->name ?? 'Not Found' }}</td>
                                                <td>{{ $topTopUpUser->user->email ?? 'Not Found' }}</td>
                                                <td>{{ $topTopUpUser->count ?? 'Not Found' }}</td>

                                                {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                                <td>{{ $topTopUpUser->created_at->format('Y m d') ?? 'Not Found' }} </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center"><strong class="" style="font-size: 18px;" >No Data Found</strong></td>
                                            </tr>
                                        @endforelse


                                        {{-- <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        </tr>


                                        <tr>
                                            <td>219</td>
                                            <td>Alexander Pierce</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-warning">Pending</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        </tr> --}}

                                    </tbody>

                                </table>
                                <div class="ml-3 mt-3">
                                    {{ $topTopUpUsers->links() }}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>


            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {});
    </script>
@endpush
