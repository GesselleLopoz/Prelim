<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $sale->product_name }}</p>
</div>

<!-- Branch Name Field -->
<div class="col-sm-12">
    {!! Form::label('branch_name', 'Branch Name:') !!}
    <p>{{ $sale->branch_name }}</p>
</div>

<!-- Date Sold Field -->
<div class="col-sm-12">
    {!! Form::label('date_sold', 'Date Sold:') !!}
    <p>{{ $sale->date_sold }}</p>
</div>

<!-- Discount Field -->
<div class="col-sm-12">
    {!! Form::label('discount', 'Discount:') !!}
    <p>{{ $sale->discount }}</p>
</div>

<!-- Customer Field -->
<div class="col-sm-12">
    {!! Form::label('customer', 'Customer:') !!}
    <p>{{ $sale->customer }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $sale->address }}</p>
</div>

<!-- Email Address Field -->
<div class="col-sm-12">
    {!! Form::label('email_address', 'Email Address:') !!}
    <p>{{ $sale->email_address }}</p>
</div>

<!-- Contact Number Field -->
<div class="col-sm-12">
    {!! Form::label('contact_number', 'Contact Number:') !!}
    <p>{{ $sale->contact_number }}</p>
</div>

