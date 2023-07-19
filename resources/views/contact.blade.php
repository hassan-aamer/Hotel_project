@extends('app')
@section('title')
HOTEL X
@endsection
@section('body')
<section class="imag">
    <a href="#">
        <img src="images/contact.jpg" alt="" style="width: 100%; height: 70vh;">
    </a>
</section>
<section>
    <center class="abouth1">
        <h1>
            CONTACT
        </h1>
    </center>
</section>

<section>
    <div class="element-wrapper">
        <form class="formc" method="POST" action="/add">
            @csrf
            <h2>Register now</h2>
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email </label>
                <input type="text" class="form-control" placeholder="Email address" name="email" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone</label>
                <input type="text" class="form-control" placeholder="Enter Your Phone" name="phone" required>
            </div>
            <button type="submit" class="btn btn-primary" >Submit</button>
        </form>
    </div>
</section>




@endsection
