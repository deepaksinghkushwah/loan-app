@if ($errors->any())
  <ul class="bg-yellow-200 text-red-700 text-white px-5 py-3 rounded shadow-lg mb-4">
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
