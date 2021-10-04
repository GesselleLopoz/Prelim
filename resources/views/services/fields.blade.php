<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_name', 'Product Name:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Repair Service Warranty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('repair_service_warranty', 'Repair Service Warranty:') !!}
    {!! Form::text('repair_service_warranty', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Warranty Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('warranty_code', 'Warranty Code:') !!}
    {!! Form::text('warranty_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>