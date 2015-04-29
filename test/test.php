<html>
    <head>
        <title>
            test
        </title>
    </head>
    <style>
        body{
            background: #32ff19;
        }
        .tab_class_1   {
            border: 1px solid black;
            border-color: red;
            width: 50%;


        }
        .tab_class_1 th{
            border: 1px solid black;
        }
        .tab_class_1 td{
            border: 1px solid blue;
        }

        .tab_class_2   {
            border: 1px solid black;
            border-color: red;
            width: 50%;

        }
        .tab_class_2 th{
            border: 1px solid black;
        }
        .tab_class_2 td{
            border: 1px solid blue;
        }

        .tsb_class_1{

        }
        #tab_1{
            border-color: blue;
        }

    </style>

    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js?ver=1.4.2'></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".btn1").click(function(){
                //alert('test');
                console.log('test 1 ');
                var $test = 1 ;
                $(".tab_class_2").fadeOut()
            });
            $(".btn2").click(function(){
                $(".tab_class_2").fadeIn();
                //alert('test');
            });
        });
    </script>
    <body>

    <table class="tab_class_1">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
        </tr>
        <tr>
            <td>Peter</td>
            <td>Griffin</td>
        </tr>
        <tr>
            <td>Lois</td>
            <td>Griffin</td>
        </tr>
    </table>



    <table id="tab_1" class="tab_class_2">
        <tr >
            <th>Firstname</th>
            <th>Lastname</th>
        </tr>
        <tr>
            <td>Peter</td>
            <td>Griffin</td>
        </tr>
        <tr>
            <td>Lois</td>
            <td>Griffin</td>
        </tr>
    </table>

    <button class="btn1">Fade out</button>
    <button class="btn2">Fade in</button>

    <div>

    </div>

    </body>
</html>
