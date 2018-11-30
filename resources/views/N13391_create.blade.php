@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Employee</h1>
            <hr>
            <form action="{{ route('N13391_nofa.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
				<div class="form-group">
                    <label for="username">UserName :</label>
                    <input type="username" class="form-control" id="username" name="username">
                </div>
				<div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
				<div class="form-group">
                    <label for="companyEmail">Company Email:</label>
                    <input type="email" class="form-control" id="companyEmail" name="companyEmail">
                </div>
				
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection