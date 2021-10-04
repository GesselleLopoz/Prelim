<div class="table-responsive">
    <table class="table" id="sales-table">
        <thead>
            <tr>
                <th>Product Name</th>
        <th>Branch Name</th>
        <th>Date Sold</th>
        <th>Discount</th>
        <th>Customer</th>
        <th>Address</th>
        <th>Email Address</th>
        <th>Contact Number</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sales as $sale)
            <tr>
                <td>{{ $sale->product_name }}</td>
            <td>{{ $sale->branch_name }}</td>
            <td>{{ $sale->date_sold }}</td>
            <td>{{ $sale->discount }}</td>
            <td>{{ $sale->customer }}</td>
            <td>{{ $sale->address }}</td>
            <td>{{ $sale->email_address }}</td>
            <td>{{ $sale->contact_number }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['sales.destroy', $sale->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sales.show', [$sale->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sales.edit', [$sale->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
