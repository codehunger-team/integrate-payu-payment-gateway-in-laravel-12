<form action="{{ route('payu.initiate') }}" method="POST">
    @csrf
    <input type="text" name="firstname" placeholder="First Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <input type="text" name="productinfo" placeholder="Product Info" required>
    <input type="number" name="amount" placeholder="Amount" required>
    <button type="submit">Pay Now</button>
</form>
