<x-guest-layout>
  <form action="{{ route('loan.application.store') }}" method="post">
    @csrf
    <h1 class="text-5xl font-bold text-center pb-10 ">Application for Loan</h1>
    @include('common.form-errors')
    <table class="table-fixed w-full border-spacing-10">
      <tr>
        <td>First Name</td>
        <td><input type="text" class="text-black w-full" name="first_name" id=""></td>
        <td>Last Name</td>
        <td><input type="text" class="text-black w-full" name="last_name" id=""></td>
      </tr>
      <tr>
        <td>Cell</td>
        <td><input type="text" class="text-black w-full" name="cell" id=""></td>
        <td>Email</td>
        <td><input type="email" class="text-black w-full" name="email" id=""></td>
      </tr>

      <tr>
        <td>Address</td>
        <td>
          <textarea class="text-black w-full" rows="5" name="address" id=""></textarea>
        </td>
        <td>Loan Amount</td>
        <td><input type="number" min="1" step="1" class="w-full text-black" name="loan_amount" id=""></td>
      </tr>
      <tr>
        <td>Loan Purpose</td>
        <td><input type="text" class="w-full text-black" name="loan_purpose" id=""></td>
        <td>Loan Tenure</td>
        <td><input type="number" min="1" step="1" class="w-full text-black" name="loan_tenure" id="">(years)</td>
      </tr>
      <tr>
        <td>Reason for loan</td>
        <td>
          <textarea rows="5" name="reason_for_loan" class="w-full text-black" id=""></textarea>
        </td>
        <td>Loan Type</td>
        <td>
          <select name="loan_type" id="" class="text-black w-full h-10">
            <option value="personal"selected>Personal</option>
            <option value="home">Home</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="4" class="text-right">
          <button type="submit" class="border shadow rounded px-4 py-2 bg-white text-black">Apply </button>
        </td>
      </tr>
    </table>
  </form>
</x-guest-layout>
