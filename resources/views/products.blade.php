@extends('Layout.master')

@section('content')
    <div>
        <form action-url="{{ route('category-store') }}" method="POST" id="categoryStoreForm">
            @csrf
            @method('post')
            <span id="showError"></span>
            <input type="text" required name="product_name" placeholder="Prodcut Name"><br>
            <input type="text" name="sku" placeholder="SKU"><br>
            <input type="text" name="price" placeholder="Price"><br>
            <textarea name="description" placeholder="Descriptions"></textarea><br>
            <select name="status"><br>
                <option value="">select Status</option>
                <option value="1">Active</option>
                <option value="0">De-active</option>
            </select><br>
            <select name="status"><br>
                <option value="">categories</option>
                @foreach ($categories as $item)
                    <option value="{{ $item }}">{{ $item }}</option>
                @endforeach
            </select><br>
            <button id="btnSigIn" onclick="saveCategory()" type="button">Save</button>
        </form>
    </div>

    <script type="text/javascript">
        function saveCategory() {
            $('#showError').text('');
            var formData = $('#categoryStoreForm').serialize();
            console.log(formData);
            var url = $('#categoryStoreForm').attr('action-url');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                success: function(resolv) {
                    if (resolv === 'success') {
                        window.location.href = '/dashboard';
                    }
                },
                error: function(error) {
                    $('#showError').text('Invaide Email and paassword');
                }

            })
        }
    </script>
@endsection
