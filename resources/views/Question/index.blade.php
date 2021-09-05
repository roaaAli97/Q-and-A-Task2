<html>
<head>
    <link href="{{asset('css/style.css')}}" rel="stylesheet"></link>
</head>
<body>
 @foreach($questions as $question)
   <div class="container">
      <p>Username:  {{$question->Username}}<p>
      <p> {{$question->Question}}<p>
      <a href="create/{{$question->id}}" class="btn">Answer the question</a>
      <a href="delete/question/{{$question->id}}" class="btn">Delete the question</a>
   </div>
 @endforeach
</body>
</html>

