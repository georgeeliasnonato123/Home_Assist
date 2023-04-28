<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Home Assist</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body {
            background-image: url("https://thumbs.dreamstime.com/b/conceito-de-servi%C3%A7o-limpeza-uma-senhora-est%C3%A1-segurando-um-balde-produtos-em-fundo-desfocado-175848682.jpg");
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.3);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-size: 18px;
            font-weight: bold;
        }
        input[type="email"],
        input[type="password"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
            box-shadow: inset 0px 1px 3px rgba(0,0,0,0.1);
        }
        button[type="submit"] {
            background-color: #4180AB;
            color: #FFFFFF;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #367299;
        }
        a {
            display: block;
            text-align: center;
            color: #4180AB;
            margin-top: 20px;
            font-size: 16px;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ url('/login') }}" method="POST">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width:100%; height:auto; transform:scale(0.6)">
            <h4 class='text-center'>Bem-vindo ao Home Assist</h4>
            <br>
            {{ csrf_field() }}

            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Entrar</button>
            <a href="{{ route('user.create.form') }}">Não tenho uma conta</a>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @elseif(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

        </form>   
    </div>
</body>


</html>
