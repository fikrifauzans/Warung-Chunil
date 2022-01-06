<table >
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Category</th>
            <th>Kuantitas</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th >Keuntungan/pcs</th>
            <th>Total Harga Beli</th>
            <th>Total Harga Jual</th>
            <th>Margin</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sotProducts as $sotProduct)
            <tr>
                <th >{{ $loop->iteration }}</th>
                <td>{{ $sotProduct->name }}</td>
                <td>{{ $sotProduct->category }}</td>
                <td>{{ $sotProduct->qty }}</td>
                <td>{{ $sotProduct->purchase_price }}</td>
                <td>{{ $sotProduct->selling_price }}</td>
                <td >{{ $sotProduct->profit }}</td>
                <td>{{ $sotProduct->totalpurchaseprice }}</td>
                <td>{{ $sotProduct->totalsellingprice }}</td>
                <td>{{ $sotProduct->margin }}</td>

            </tr>
        @endforeach
    </tbody>
</table>
