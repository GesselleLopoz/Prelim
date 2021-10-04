<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $service->product_name }}</p>
</div>

<!-- Repair Service Warranty Field -->
<div class="col-sm-12">
    {!! Form::label('repair_service_warranty', 'Repair Service Warranty:') !!}
    <p>{{ $service->repair_service_warranty }}</p>
</div>

<!-- Warranty Code Field -->
<div class="col-sm-12">
    {!! Form::label('warranty_code', 'Warranty Code:') !!}
    <p>{{ $service->warranty_code }}</p>
</div>

