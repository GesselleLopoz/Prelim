<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $product->product_name }}</p>
</div>

<!-- Branch Name Field -->
<div class="col-sm-12">
    {!! Form::label('branch_name', 'Branch Name:') !!}
    <p>{{ $product->branch_name }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Comment Field -->
<div class="col-sm-12">
    {!! Form::label('comment', 'Comment:') !!}
    <p>{{ $product->comment }}</p>
</div>

