<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style>

            .bingo button {
                display: inline-block;
                width: 16%;
                height: 6em;
                margin: 4px 12px;
            }
        </style>

    </head>
    <body>



    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Impeachment Bingo</h1>
            </div>

            <div class="col-12 text-center">
                <h2>Card ONE</h2>
            </div>


            <div class="col-12 bingo">

                @for ($x = 0; $x < 24; $x++)
                    <button class="btn btn-outline-dark">{{ $terms[0][$x] }}</button>

                    @if ($x == 11)
                        <button class="btn btn-success">FREE</button>
                    @endif

                @endfor

            </div>

            <div class="col-12 text-center">
                <h2>Card TWO</h2>
            </div>


            <div class="col-12 bingo">

                @for ($x = 0; $x < 24; $x++)
                    <button class="btn btn-outline-dark">{{ $terms[1][$x] }}</button>

                    @if ($x == 11)
                        <button class="btn btn-success">FREE</button>
                    @endif

                @endfor

            </div>


        </div>

    </div>



    </body>
</html>
