@extends('Layout.master')

@section('content')
    <div>
        <form action-url="{{ route('user-sigin-submit') }}" method="POST" id="signInForm">
            @csrf
            @method('post')
            <span id="showError"></span>
            <input type="email" required name="email" placeholder="Enter email">
            <input type="password" required name="password" id="" placeholder="Password">
            <button id="btnSigIn" onclick="signin()" type="button">Sign In</button>
        </form>
    </div>

    <script type="text/javascript">
        function signin() {
            $('#showError').text('');
            var formData = $('#signInForm').serialize();
            console.log(formData);
            var url = $('#signInForm').attr('action-url');
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
