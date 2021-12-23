@extends('layouts.app')
@section('content')

<section class="section data-tables">
    <div class="container jumbotron">

      <div class="col-8 mx-auto">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">First name</label>
                        <input type="text" name="first_name" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Last name</label>
                        <input type="text" name="last_name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" placeholder="@" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">age</label>
                        <input type="number" name="age" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="">Booking date</label>
                    <input type="date" name="booking_date" class="form-control">
                </div>
                <div class="col-3">
                    <label for="">Flight number</label>
                    <select name="flight_id" id="" class="form-control">
                        <option value="1">Flight 123</option>
                        <option value="1">Flight adw2</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="">Flight class</label>
                    <select name="flight_class" id="" class="form-control">
                        <option value="1">Business class</option>
                        <option value="1">Commercial class</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="">Amount to pay</label>
                    <input type="number" placeholder="$" name="amount_to_pay" class="form-control">
                </div>
            </div>
            <div class="row pt-1">
                <div class="col-12">
                    <label for="">Notes</label>
                    <div class="form-group">
                        <textarea name="others" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
      </div>

        <pre>
            Customer columns
            - Id
            - First Name
            - Last Name
            - Email
            - Age
            - Booking date
            - Amount to pay
            - Others
            - Flight
            - Created at
            - Updated at
        
        Flight columns
            - ID
            - Flight number
            - Type 
            - Class
            - Destination
            - Date
            - Created at
            - Updated at


            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('age');
            $table->string('booking_date');
            $table->integer('amount_to_pay');
            $table->string('others');
            $table->integer('flight_id');
            $table->integer('flight_class');
            $table->timestamps();

        </pre>
        
    </div>
</section>






@endsection