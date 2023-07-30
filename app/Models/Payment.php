<?php

namespace App\Models;

use Carbon\Carbon;
use Stripe\StripeClient;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    protected $table = 'payment';
    protected $primaryKey = 'paymentID';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
    protected $guarded = [];
    protected $dates = ['paymentDate','paymentTime'];
    use HasFactory;

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->paymentDate = Carbon::today(); // Set the current date
            $model->paymentTime = Carbon::now();   // Set the current time
        });
    }

    public static function charge(Request $request)
    {
        // Set your Stripe API secret key
        $stripe = new StripeClient('sk_test_51MyuYjCPnzqW9CmuNp90YVL6v95rlwnZfetnKKuImnOninXo8A5senMuyInHzlaDKGtqUB7evxu9iJ93jWh97R8o00UHPLkyVR');

        try {

            $token = $stripe->tokens->create([
                'card' => [
                    'number' => $request->input('card-number'),
                    'exp_month' => $request->input('mm'),
                    'exp_year' => $request->input('yy'),
                    'cvc' => $request->input('cvc'),
                ],
            ]);
            
            $tokenId = $token->id;

            $detail = $stripe->charges->create([
                'amount' => 5000,
                'currency' => 'myr',
                'source' => $tokenId,
                'description' => 'Name : , Feb, Package : ', ## FOLLOW SESSION
            ]);

            $payment = new self();

            $payment -> paymentID = $detail -> id;
            $payment -> paymentStatus = $detail -> status;
            $payment -> paymentPrice = $detail -> amount_captured;
            $payment -> paymentAmount = $detail -> amount_captured;
            $payment -> subscribeID = 'sub3'; // CHANGE ######
            $payment -> packageID = 'pkg3'; // CHANGE WITH SESSION ######

            $payment -> save();

            return $detail;
              
        } catch (\Exception $e) {
            // Handle any errors that occurred during the charge process
            return ['error' => $e->getMessage()];
        }
    }

}
