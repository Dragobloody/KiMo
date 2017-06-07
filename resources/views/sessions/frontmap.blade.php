@extends('layouts.mastermap')

@section('content')


    <div class="container">

        <div id="map" style= "height: 500px;
                             width: 90%;
                              margin: 0 auto;">


        </div>
    </div>

    <script>
        $(document).ready(function(){

            function update_kids_location(view = '')
            {
                $.ajax({
                    url:"updateKidsLocation.php",
                    method:"POST",
                    data:{view:view,
                        userID:{{ \Illuminate\Support\Facades\Auth::user()->id }} },
                    dataType:"json"

                });
            }


           setInterval(function(){
                update_kids_location();
            }, 500);

        });


    </script>

@endsection