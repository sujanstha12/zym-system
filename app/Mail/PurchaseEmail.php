<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PurchaseEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $customer, $ourproduct;

    public function __construct($customer, $ourproduct)
    {
        $this->customer = $customer;
        $this->ourproduct = $ourproduct;
    }

   public function build()
   {
     return $this->view('mail')->with([
        'name' => $this->customer->name,
        'product_name' => $this->ourproduct->title,
        'product_rate' => $this->ourproduct->rate,
        // 'product_quantity' => $this->ourproduct->sale->purchased_quantity,
     ]);
   }
}
