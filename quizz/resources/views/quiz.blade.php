@extends('masterfront')
 @section('title', 'Laravel Questionaire')
 @section('content')


 <div class="container main quiz">

 <div class="row"><div class="col-md-12 text-center">
     <div class="timer">00:00</div>
</div></div>

 <div class="row"><div class="col-md-12">

    <div class="quizquestions">
    @foreach($quiz as $q)
        <div class="qItem" cor="{{ $q->correct }}">
        <div class="question"><h3>{{ $q->question }}</h3></div>
        <div class="answers">
            <div class="answ"><span>1.</span> {{ $q->answera }}</div>
            <div class="answ"><span>2.</span> {{ $q->answerb }}</div>
            <div class="answ"><span>3.</span> {{ $q->answerc }}</div>
            <div class="answ"><span>4.</span> {{ $q->answerd }}</div>
        </div>
        </div>
    @endforeach

    </div>

    <div class="row"><div class="col-md-12 text-center">
        <div class="btn bFinish">Finish</div>
    </div></div>

</div>
 </div>
 </div>
 @endsection

