@extends('layout.master')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Upload File Database User (CSV)</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('database-users.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">File</label>
                            <input class="form-control" type="file" id="formFile" name="file" readonly>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                            <button type="submit" class="btn btn-primary">Upload File</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header mb-3">
            <h5>Database User</h5>
            @if ($message = Session::get('success'))
                <div class="alert alert-success mt-2">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger mt-2">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="position-absolute top-20 end-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Import CSV
                </button>
            </div>
        </div>
        <div class="card-body">
            <table id="datatables" class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Phone</th>
                        <th>Domicile</th>
                        <th>Inputed Date</th>
                        <th>Last Campaign</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                        <tr>
                            <td>{{ $u->respondent_name }}</td>
                            <td>{{ $u->phone }}</td>
                            <td>{{ $u->district }}</td>
                            <td>{{ substr($u->created_at, 0, 10) }}</td>
                            <td>ON PROG</td>
                            <td>
                                <form action="{{ route('database-users.destroy', $u->id) }}" method="POST">
                                    <a href="{{ route('database-users.show', $u->id) }}" class="btn btn-info"><i
                                            class="fa-regular fa-eye"></i></a>
                                    <a href="{{ route('database-users.updateStatus', $u->id) }}" class="btn btn-danger"><i
                                            class="fa-solid fa-ban"></i></a>
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i
                                            class="fa-regular fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable();
        });
    </script>
@endsection
