<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_name', 'Product Name:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Warranty Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('warranty_code', 'Warranty Code:') !!}
    {!! Form::text('warranty_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Start Of Sale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_of_sale', 'Start Of Sale:') !!}
    {!! Form::text('start_of_sale', null, ['class' => 'form-control','id'=>'start_of_sale']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#start_of_sale').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- End Of Sale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_of_sale', 'End Of Sale:') !!}
    {!! Form::text('end_of_sale', null, ['class' => 'form-control','id'=>'end_of_sale']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#end_of_sale').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush