<!DOCTYPE html>
<html>

<head>
    <title>Form Register</title>
    <link href="{{url('css/regis.css')}}" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#E6E6FA">
<h2>@lang('regis.header')</h2>
    <form name="" action="" method="post">
        <h2>@lang('regis.title')</h2>

        <label for="" id="">@lang('regis.biodata.first_name') :</label>
        <input type="text" name="" id=""><br />

        <label for="=" id="">@lang('regis.biodata.last_name') :</label>
        <input type="text" name="" id="="><br />

        <label for="" id="">@lang('regis.biodata.address') :</label>
        <input type="text" name="" id=""><br />

        <label for="" id="">@lang('regis.biodata.phone_number') :</label>
        <input type="text" name="" id=""><br />

        <label for="" id="">@lang('regis.biodata.password') :</label>
        <input type="password" name="" id=""><br />

        <button type="submit" value="Submit" id="button">@lang('regis.button')</button>
       

    </form>

</body>

</html>