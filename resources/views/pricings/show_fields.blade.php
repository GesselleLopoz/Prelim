<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $pricing->product_name }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $pricing->price }}</p>
</div>

<!-- Warranty Code Field -->
<div class="col-sm-12">
    {!! Form::label('warranty_code', 'Warranty Code:') !!}
    <p>{{ $pricing->warranty_code }}</p>
</div>

<!-- Start Of Sale Field -->
<div class="col-sm-12">
    {!! Form::label('start_of_sale', 'Start Of Sale:') !!}
    <p>{{ $pricing->start_of_sale }}</p>
</div>

<!-- End Of Sale Field -->
<div class="col-sm-12">
    {!! Form::label('end_of_sale', 'End Of Sale:') !!}
    <p>{{ $pricing->end_of_sale }}</p>
</div>

