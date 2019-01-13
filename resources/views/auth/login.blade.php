<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        window.localStorage.setItem('user@jushub:data', "{{Auth::user()}}");
        $.ajax({
            method:'POST',
            headers:{
                'X-CSRF-Token':'{{csrf_token()}}' 
            },
            url:'/login',
            data:{
                email:'{{$email}}',
                password:'{{$password}}'
            },
            success:res=>{
                location.replace('/cli');
            }
        })
    </script>
</body>
</html>