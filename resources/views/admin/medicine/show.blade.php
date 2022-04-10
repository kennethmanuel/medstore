<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Generic Name</th>
            <th>Form</th>
            <th>Restriction Formula</th>
            <th>Description</th>
            <th>Faskes TK 1</th>
            <th>Faskes TK 2</th>
            <th>Faskes TK 3</th>
            <th>Category</th>
        </tr>
    </thead>
    <tbody>
            <td>{{ $medicine['id'] }}</td>
            <td>{{ $medicine['generic_name'] }}</td>
            <td>{{ $medicine['form'] }}</td>
            <td>{{ $medicine['restriction_formula'] }}</td>
            <td>{{ $medicine['description'] }}</td>
            <td>{{ $medicine['faskes1'] }}</td>
            <td>{{ $medicine['faskes2'] }}</td>
            <td>{{ $medicine['faskes3'] }}</td>
            <td>{{ $medicine['category']['name'] }}</td>
        </tr>
    </tbody>
</table>
