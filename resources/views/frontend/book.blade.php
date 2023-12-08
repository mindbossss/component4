@extends('frontend.pages.main')
@section('main')
       <center><h1>Welcome to Lab Test Hub</h1></center>

       <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-1">
                    <div class="form-conatainer-register">
                        <div class="form-btn-register">
                            <span>Upload Your Prescription</span>
                        </div>
                        <!-- resources/views/prescription/form.blade.php -->

                        <form action="/prescription-form" method="post">
                         @csrf
                           <label for="name">Name:</label>
                           <input type="text" name="name" required>

                            <label for="email">Email:</label>
                            <input type="email" name="email" required>

                            <label for="phone">Phone:</label>
                            <input type="text" name="phone" required>

                            <label for="prescription_image">Prescription Image:</label>
                            <input type="file" name="prescription_image" accept="image/*" required>

                             <button type="submit">Submit</button>
                         </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
