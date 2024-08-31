@extends('admin.layouts.main')
@section('pageTitle', 'Loan Applications')
@section('content')
  <div class="content-wrapper">
    <h1 class="text-4xl text-center">All Applications</h1>
    <div class="text-right">
      <a href="{{ route('admin.loan.create') }}" class="border shadow rounded bg-blue-700 text-white px-4 py-2">Create</a>
    </div>
    <table class="table" id="table1">
      <thead class="bg-slate-500 text-white">

        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Cell</th>
          <th>Loan Amount</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($items as $row)
          <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->first_name }}</td>
            <td>{{ $row->last_name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->cell }}</td>
            <td>{{ $row->loan_amount }}</td>
            <td>{{ ucwords($row->status) }}</td>
            <td>

              <form method="post" class="flex gap-2 removeForm" action="{{ route('admin.loan.destroy', $row->id) }}">
                @csrf
                @method('delete')
                <a href="{{ route('admin.loan.edit', $row->id) }}">Edit</a>
                <button class="button">Delete</button>
              </form>

            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

@section('footer-js1')
  <script>
    $(document).ready(function() {
      $('.removeForm').on('click', function(e) {
        if (!confirm('Are you sure want to delete this item?')) {
          e.preventDefault();
        }
      })
    });
    window.onload = () => {
      let table = new DataTable('#table1', {
        order: [
          [0, 'desc']
        ],
      });
    }
  </script>
@endsection
