<?php



namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductViewNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $product;

    public function __construct($product)
    {
        $this->product = $product;
    }

    public function build()
    {
        return $this->subject('Product View Notification')
            ->view('emails.product_view')
            ->with(['product' => $this->product]);
    }
}
