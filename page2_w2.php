<!DOCTYPE html>
<html>
<head>
	<title>quiz app</title>
	<style type="text/css">
	.quiz{
			width: 700px;
			margin-left:400px;
			padding: 15px;
			border: 2px solid grey;
			border-radius: 10px;
        }
		.qus{
			text-align: left;
			margin-left: 130px;
			background-color: #00CCFF;
			color: white;
			width: 500px;
			border-radius: 2px;
		}
		.key{
			text-align: center;
			font-size: 1.1em;
			border-radius: 2px;
			background-color: #CCCCFF;
			width: 200px;
		}
		.chs{
			margin-left: 170px;
		}
		.next{
			font-size: 1em;
			height: 30px;
			width: 60px;
			background-color: lightyellow;
			 box-shadow: 2px 2px grey;
			 border-radius: 5px;
		}
		.pre{
			font-size: 1em;
			margin-left: 640px;
			background-color: lightyellow;
			color: white;
			box-shadow: 2px 2px grey;
			border-radius: 5px;
		}
		.pre a{
			text-decoration: none;
		}
		.submit{
			margin-bottom: 80px;
			font-size: 1em;
			color: black;
			background-color: lightyellow;
			 color: white;
			 box-shadow: 2px 2px grey;
			 text-decoration: none;
			 border-radius: 5px;
		}
		.submit a{
			text-decoration: none;
		}
  
	</style>
	<h1 align="center">Quiz</h1>
	
</head>
<body>
	<form class="quiz" action="page2.php" method ="_POST">
			<h3 class="qus" >25. 5 con dê và 3 con chó. Hỏi có bao nhiêu cái chân? </h3>
<div>
<input class="chs" type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
<label class="key" for="question-1-answers-A">A) 24 </label>
</div>
<div>
<input class="chs" type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
<label class="key" for="question-1-answers-B">B) 18</label>
</div>
<div>
<input class="chs" type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
<label class="key" for="question-1-answers-C">C) 20</label>
</div>
<div>
<input class="chs" type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
<label class="key" for="question-1-answers-D">D) 22</label>
</div>
</li>
	<h3 class="qus" >26. 1 + 1 = ? </h3>
<div>
<input class="chs" type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
<label class="key" for="question-1-answers-A">A) 2 </label>
</div>
<div>
<input class="chs" type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
<label class="key" for="question-1-answers-B">B) 1</label>
</div>
<div>
<input class="chs" type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
<label class="key" for="question-1-answers-C">C) 3</label>
</div>
<div>
<input class="chs" type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
<label class="key" for="question-1-answers-D">D) 4</label>
</div>
</li>
	
</form>
<button class="pre"><a href="page1_w2.php">Previous Page</a></button>
<button class="submit"><a href="page3_w2.php">Submit</a></button>
	</form>
</body>
</html>