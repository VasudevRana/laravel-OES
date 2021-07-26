<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<section id="hero">
<div class="container mt-3">


<div id="deadline" class="alert alert-warning"></div>


      <form action="{{ route('submitExam') }}" method="post">
        {{csrf_field()}}

        <input type="hidden" value="{{$category}}" name="category"/>

        @foreach($questions as $question)
        <fieldset class="mt-3" id="{{$question->qid}}">
                <h4>Question :- {{ $question->qns }}</h4>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="{{$question->qid}}" value="1" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                   {{$question->opt1}}
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="{{$question->qid}}" value="2" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    {{$question->opt2}}
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="{{$question->qid}}" value="3" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    {{$question->opt3}}
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="{{$question->qid}}" value="4" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                   {{$question->opt4}}
                </label>
                </div>
        </fieldset>
        @endforeach


        <button id="submitExam"  class="btn btn-primary mt-3" type="submit">finish exam</button>

      

      </form>     

</div>

</section><!-- End Hero -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script>
    var duration = {{$duration}} * 60;
  var time=duration;
  var deadline = document.getElementById('deadline');
  var category = {{$category}};

setInterval(function(){
   var counter=time--,min=(counter/60)>>0,sec=(counter-min*60)+'';
 deadline.textContent='Exam closes in '+min+':'+(sec.length>1?'':'0')+sec
  //time!=0||(time=duration);

  if(counter==0){
    //submit exam automatically
    
    document.getElementById('submitExam').click();

  }
</script>
</body>
</html>

