<?php

namespace Tests\Unit;

use App\Models\PaymentModel1;
use PHPUnit\Framework\TestCase;

class BillingServiceTest1 extends TestCase
{
    public function testPaymentStatus()
    {
        $payment = PaymentModel1::create([
            'user_id' => 1,
            'amount' => 20.00,
            'payment_status' => 'completed'
        ]);

        $this->assertEquals('completed', $payment->payment_status);
    }
}