@extends('layouts.app')
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
                <div class="card">
            
            </div>
        </div>
    

        
    </div>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    console.log('hello');
    var pizzaprice = 0;
    var pizza_size_price = 0;
    var pizza_toppings_price = 0;
    
    $("#pizza").change(function(){
        pizza_name = $('option:selected',this).text();
        pizza_price =  $('option:selected',this).attr('pizza_price');
        $('#total_price').val(pizza_price);
        console.log(pizza_price);

        $("#pizza_size").removeAttr('disabled');
        if($('#pizza').find(":selected").attr('pizza_price') == undefined){
            $("#pizza_size").attr('disabled','disabled');
            $("#pizza_toppings").attr('disabled','disabled');
            $("#pizza_size").val('');
            $("#pizza_toppings").val('');
            $("#total_price").val('');

        }
    });

    $("#pizza_size").change(function(){
        $("#pizza_toppings").removeAttr('disabled');
        pizza_size = $('option:selected',this).text();
        pizza_price = parseFloat($('#pizza').find(":selected").attr('pizza_price')).toFixed(2);
        pizza_size_price =  parseFloat($('option:selected',this).attr('pizza_size_price')).toFixed(2);
        
        $('#total_price').val((parseFloat(pizza_price) + parseFloat(pizza_size_price)). toFixed(2));
        // console.log(parseFloat(pizza_price). toFixed(2));
        // console.log(parseFloat(pizza_size_price). toFixed(2));

        
        if($('#pizza_size').find(":selected").attr('pizza_size_price') == undefined){
            $("#pizza_toppings").attr('disabled','disabled');
            $("#pizza_size").val('');
            $("#pizza_toppings").val('');
            $("#total_price").val('');
        }
    });  

    $("#pizza_toppings").change(function(){   
        pizza_toppings = $('option:selected',this).text();
        pizza_price = parseFloat($('#pizza').find(":selected").attr('pizza_price')).toFixed(2);
        pizza_size_price =  parseFloat($('#pizza_size').find(":selected").attr('pizza_size_price')).toFixed(2);
        pizza_toppings_price =  parseFloat($('option:selected',this).attr('pizza_toppings_price')).toFixed(2);
        $('#total_price').val((parseFloat(pizza_price) + parseFloat(pizza_size_price) + parseFloat(pizza_toppings_price)).toFixed(2));
        // console.log(( parseFloat(pizza_price+pizza_size_price+pizza_toppings_price).toFixed(2) ));
        if($('#pizza_toppings').find(":selected").attr('pizza_toppings_price') == undefined){
            $("#pizza_toppings").val('');
            $('#total_price').val((parseFloat(pizza_price) + parseFloat(pizza_size_price)).toFixed(2));
        }

        console.log(parseFloat(pizza_price). toFixed(2));
        console.log(parseFloat(pizza_size_price). toFixed(2));
        console.log(parseFloat(pizza_toppings_price). toFixed(2));

    });
</script>
@endsection  