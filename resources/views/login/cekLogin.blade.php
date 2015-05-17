<html xmlns="http://www.w3.org/1999/html">
<head>

</head>
<body>
    <div id ="check"></div>
    <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
    <script type="text/javascript">
        // console.log("ASDFAS")
        $.ajax({
            type: 'get',
            url: 'http://e-gov-bandung.tk/dukcapil/api/public/check/authenticated',
            success: function(data) {
                console.log(data)
                if (data != 'false') { //redirect ke home page kalian, tp kalian juga harus login sendiri juga
                    var url = "{{url()}}/home?id="+data;
                    window.location.href = url;
                } else { //redirect ke alamat login kalian
                    var url = "http://e-gov-bandung.tk/portal/public/login"
                    window.location.href = url
                }
            },
            error: function(data) {
                console.log(data)
                alert('error. cors mungkin?');
            }
        });
    </script>
</body>
</html>