<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'cell', 'email', 'address', 'loan_amount', 'loan_purpose', 'loan_tenure', 'reason_for_loan', 'loan_type', 'status'];
}
