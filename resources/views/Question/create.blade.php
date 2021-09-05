<head>
  <link href="{{asset('css/style.css')}}" rel="stylesheet"></link>
</head>

<form class="container" action="\questions" method="Post">
    @csrf
<label for="name">Enter your name</label><br>
<input id="name"  name="username" type="text"><br>
<label for="question">Enter your question</label><br>
<textarea name="question-field" id="question" cols="30" rows="10"></textarea><br>
<button type="submit">Sumbit your question</button>

</form>
