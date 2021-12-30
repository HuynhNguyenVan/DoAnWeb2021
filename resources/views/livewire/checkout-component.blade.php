<main id="main" class="main-site">
    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Checkout</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <form wire:submit.prevent="placeCheckout">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-address-billing">
                            <h3 class="box-title">Billing Address</h3>
                            <div class="billing-address">
                                <p class="row-in-form">
                                    <label for="name">Name<span>*</span>:</label>
                                    <input type="text" wire:model="name" readonly>
                                </p>
                                <p class="row-in-form">
                                    <label for="email">Email<span>*</span>:</label>
                                    <input type="email" wire:model="email" readonly>
                                </p>
                                <p class="row-in-form">
                                    <label for="phone">Phone number<span>*</span></label>
                                    <input type="number" wire:model="mobile">
                                </p>
                                <p class="row-in-form">
                                    <label for="add">Line1<span>*</span>:</label>
                                    <input type="text" wire:model="line1">
                                </p>
                                <p class="row-in-form">
                                    <label for="add">Line2:</label>
                                    <input type="text" wire:model="line2">
                                </p>
                                <p class="row-in-form">
                                    <label for="add">City<span>*</span>:</label>
                                    <input type="text" wire:model="city">
                                </p>
                                <p class="row-in-form">
                                    <label for="add">Province<span>*</span>:</label>
                                    <input type="text" wire:model="province">
                                </p>
                                <p class="row-in-form">
                                    <label for="country">Country<span>*</span></label>
                                    <input type="text" wire:model="country">
                                </p>
                                <p class="row-in-form">
                                    <label for="zip-code">Postcode / ZIP<span>*</span>:</label>
                                    <input type="number" wire:model="zipcode">
                                </p>
        
                                {{-- <p class="row-in-form fill-wife">
                                    <label class="checkbox-field">
                                        <input name="different-add" id="different-add" value="forever" type="checkbox">
                                        <span>Ship to a different address?</span>
                                    </label>
                                </p> --}}
                            </div>
                        </div>
                        <div class="summary summary-checkout">
                            <div class="summary-item payment-method">
                                <h4 class="title-box">Payment Method</h4>
                                <p class="summary-info"><span class="title">Check / Money order</span></p>
                                <p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
                                <div class="choose-payment-methods">
                                    <label class="payment-method">
                                        <input name="payment-method" id="payment-method-bank" value="cod" type="radio">
                                        <span>Cash On Delivery</span>
                                        <span class="payment-desc">Order now pay on Delivery</span>
                                    </label>
                                    <label class="payment-method">
                                        <input name="payment-method" id="payment-method-visa" value="card" type="radio">
                                        <span>Debit / Credit Card</span>
                                        <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
                                    </label>
                                    <label class="payment-method">
                                        <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                                        <span>Paypal</span>
                                        <span class="payment-desc">You can pay with your credit</span>
                                        <span class="payment-desc">card if you don't have a paypal account</span>
                                    </label>
                                </div>
                                @if (Session::has('checkout'))
                                    <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">$ {{ Session::get('checkout')['total'] }}</span></p>
                                @endif
                                <button type="submit" class="btn btn-medium">Place Order Now</button>
                            </div>
                            <div class="summary-item shipping-method">
                                <h4 class="title-box f-title">Shipping method</h4>
                                <p class="summary-info"><span class="title">Flat Rate</span></p>
                                <p class="summary-info"><span class="title">Fixed $0</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>