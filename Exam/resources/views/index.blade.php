<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Midterm Exam</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

<body>

    <div class="container text-center con">
        <div class="row">
            <div class="col-md-4 m-auto">
                <form action="calculate" method="POST">
                    @csrf
                    <div class="card">
                            <div class="card-body m-auto">
                                <h1 class="text-center">Midterm Exam</h1>
                                <h5>Simple Calculator</h5>
                                <br>
                                    <fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-9">
                                                <select name="formula" class="form-control form" id="formID">
                                                    <option>Select Formula</option>
                                                    <option value="perimeter">Perimeter of Rectangle</option>
                                                    <option value="volume">Volume of Cuboid</option>
                                                    <option value="area">Area of a square</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="hidden" id="idNum">
                                        <fieldset>
                                            <div class="form-group row txt" id="fst">
                                                <div class="col-md-9">
                                                    <input type="number" name="firstnumber" class="form-control" placeholder="Enter Number">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="form-group row txt" id="snd">
                                                <div class="col-md-9">
                                                    <input type="number" name="secondnumber" class="form-control" placeholder="Enter Number">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="form-group row txt"  id="trd">
                                                <div class="col-md-9">
                                                    <input type="number" name="thirdnumber" class="form-control" placeholder="Enter Number">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            <input type="submit" name="btn" class="btn btn-danger btn-lg font-weight-bold" value="Enter">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<div class="row answer">
    <div class="col-md-3 m-auto">
    @if(session('message'))
        <div class="alert alert-warning">
            <h1 class="text-center"> {{session ('message')}}</h1>
        </div>
    @endif 
    </div>
</div>

<script>
  $('.form').change(function(){
        var responseNum = $(this).val();
        if(responseNum == "perimeter"){
            $('#idNum').removeClass("hidden");
            $('#idNum').addClass("show");
            document.getElementById("snd").style.display = "block";
            $('#trd').removeClass("show");
            $('#trd').addClass("hidden");

        }else if (responseNum == "volume"){
            $('#idNum').removeClass("hidden");
            $('#idNum').addClass("show");
            document.getElementById("snd").style.display = "block";
            $('#trd').removeClass("hidden");
            $('#trd').addClass("show");


        }else if (responseNum == "area"){
            $('#idNum').removeClass("hidden");
            $('#idNum').addClass("show");
            document.getElementById("snd").style.display = "none";
            $('#trd').removeClass("show");
            $('#trd').addClass("hidden");
            
        }else{
            $('#idNum').removeClass("show");
            $('#idNum').addClass("hidden");
        }
        console.log(responseNum);
    });
</script>

</body>
</html>
