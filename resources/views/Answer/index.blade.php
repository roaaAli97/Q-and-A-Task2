<html>
    <head>
        <link href="{{asset('css/style.css')}}" rel="stylesheet"> </link>
    </head>

    <body>
         @foreach($answers as $answer)
         
           <div class="container">
               <p name="paragraph">Answer:{{$answer->answer}}</p>
               <a href="/delete/{{$answer->id}}" class="btn">Delete</a>>
              </div>
              
         @endforeach
    </body>
</html>