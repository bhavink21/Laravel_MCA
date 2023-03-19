<html>
    <style>
        .danger-class{
            color:red;
            font-size:15px;
        }
        .is-invalid-custom{
            border: red solid 1px;
        }
        </style>
<body>
    {{ $user }}
    <form method='post' action="{{ url('insert-user') }}">
        @csrf

        Name:- <input name='name' type="text" class="@error('name') is-invalid-custom @enderror" value="{{ $user->name }}">
        @error('name')
            <div class="danger-class">{{ $message }}</div>
        @enderror
        <br>

        email:- <input name='email'  type="text" class="@error('email') is-invalid-custom @enderror" value="{{ $user->email }}">
        @error('email')
            <div class="danger-class">{{ $message }}</div>
        @enderror
        <br>
        password:- <input name='password'  type="password" class="@error('password') is-invalid-custom @enderror" value="">
        @error('password')
            <div class="danger-class">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="submit">
    </form>
    {{-- @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach --}}
    {{-- {{ $errors->all() }} --}}
</body>
</html>
