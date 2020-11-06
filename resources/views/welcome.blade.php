<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 5.8 PayPal Integration Tutorial - ItSolutionStuff.com</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .content {
                margin-top: 100px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h3>paypal payment</h3>
        <form action="{{ url('charge') }}" method="post">
            <input type="text" name="amount" />
            {{ csrf_field() }}
            <input type="submit" name="submit" value="Pay Now">
        </form>
        <hr>
        <h3>moyasar payment</h3>
        <form accept-charset="UTF-8" action="https://api.moyasar.com/v1/payments.html" method="POST">
            <input type="hidden" name="callback_url" value="https://www.google.com" /> <!-- what will appear on the page after successful payment -->
            <input type="hidden" name="publishable_api_key" value="YOUR_API_KEY" />
            <input type="hidden" name="amount" value="100" /> <!-- you can make this type="number" and let the user enter the amount -->
            <input type="hidden" name="source[type]" value="creditcard" />
            <input type="hidden" name="description" value="Order id 1234 by guest" />
            <label>name</label>
            <input type="text" name="source[name]" /> <!-- Any string -->
            <label>number</label>
            <input type="text" name="source[number]" /> <!-- 4242424242424242 -->
            <label>month</label>
            <input type="text" name="source[month]" /> <!-- Between 1 and 12 -->
            <label>year</label>
            <input type="text" name="source[year]" /> <!-- More than 2022 -->
            <label>cvc</label>
            <input type="text" name="source[cvc]" /> <!-- Any 3 numbers -->
                        
            <button type="submit">Purchase</button>
        </form>
            
    </body>
</html>