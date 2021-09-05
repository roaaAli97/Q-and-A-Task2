<form action="/answer/{{$id}}" method="Post">
    @csrf
    <label for="answer-field">Enter the answer</label><br>
    <textarea name="answer" id="answer-field" cols="30" rows="10"></textarea><br>
    <button type="sumbit">Sumbit</button>
</form>