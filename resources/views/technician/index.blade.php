@extends('layouts.app')
@section('content')
    <main class="py-4 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Technician</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('technician.create') }}"> Create New Technician</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Hire Date</th>

                    <th width="280px">Action</th>
                </tr>
                @foreach ($technicians as $tech)
                    <tr>
                        <td>{{ $tech->id }}
                        <td>{{ $tech->begin_date }}</td>
                        <td>
                            <form action="{{ route('technician.destroy', $tech->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('technician.show', $tech->id) }}">Show</a>
                                @can('technician-edit')
                                    <a class="btn btn-primary" href="{{ route('technician.edit', $tech->id) }}">Edit</a>
                                @endcan
                                @csrf
                                @method('DELETE')
                                @can('technician-delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
@endsection
