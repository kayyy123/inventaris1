    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>
        <link rel="stylesheet" href="/assets\css/login.css">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    </head>

    <body>
        <div class="container"> 
            <form action="{{ url('login/proses') }}" method="POST">
                @csrf
                <div class="title">
                    <h3>PT. INVENTARIS GELORA GEMILANG</h3><br>
                </div>
                <div class="logo">

                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <i class="email"></i>
                    <input autofocus type="text" class="form-control
                            @error('email')  
                                is-invalid
                            @enderror
                    " name="email" placeholder="Masukan Email" maxlength="32" cellspacing="5px">
                </div>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <div class="input-box">
                    <label for="password">Password</label>
                    <i class="password"></i>
                    <input autofocus type="password" class="form-control
                            @error('password') 
                                is-invalid 
                            @enderror
                    " name="password" placeholder="Masukan Password" maxlength="16">
                </div>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

                <button type="submit">LOGIN</button>
            </form>
        </div>
    </body>

    </html>