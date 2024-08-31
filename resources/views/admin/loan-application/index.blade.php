@extends('admin.layouts.main')
@section('pageTitle', 'Loan Applications')
@section('content')
  <div class="content-wrapper">
    <h1 class="text-4xl text-center">All Applications</h1>
    <table class="table" id="table1">
      <thead class="bg-slate-500 text-white">
        <tr>
        <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Cell</th>
          <th>Loan Amount</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($items as $row)
          <tr>
          <td>{{$row->id}}</td>
            <td>{{ $row->first_name }}</td>
            <td>{{ $row->last_name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->cell }}</td>
            <td>{{ $row->loan_amount }}</td>
            <td>

              <form class="flex gap-2" action="{{ route('admin.loan.destroy', $row->id) }}">
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
    window.onload = () => {
      let table = new DataTable('#table1');
    }
  </script>
@endsection
