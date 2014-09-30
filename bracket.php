<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/jquery.bracket.min.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<style type="text/css">
table {
  border-collapse: collapse;
  border: none;
  font: small arial, helvetica, sans-serif;
}
td {
  vertical-align: middle;
  width: 10em;
  margin: 0;
  padding: 0;
}

td p {
  border-bottom: solid 1px black;
  margin: 0;
  padding: 5px 5px 2px 5px;

}  
.list-group{
	cursor: cell;
}
</style>
	
  </head>
  <body>
 <p><p>
<div class="container">
	<br>
	<center>
	<img src="images/worldCupLogo2.jpg" class="img-responsive" alt="Responsive Image 1">
	</center>
	<br>
    <div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<ul class="nav nav-pills nav-justified">
					<li><a href="index.html">Home</a></li>
					<li class="active"><a href="bracket.php">Bracket</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Player's Brackets
						<span class="caret"></span>
						</a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><a href="#"> Martin C </a></li>
				</ul>
					</li>
				</ul>
				</div>
			</div>
		</div>
	
	<!--GROUPS 1-4-->
	<div class="row initial">
			<div class="col-md-3">
				<h3 class="text-center A">Group A</h3>
				<ul class="list-group A">
						<li class="list-group-item groupA">Brazil</li>
						<li class="list-group-item groupA">Croatia</li>
						<li class="list-group-item groupA">Mexico</li>
						<li class="list-group-item groupA">Cameroon</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3 class="text-center B">Group B</h3>
				<ul class="list-group B">
						<li class="list-group-item groupB">Spain</li>
						<li class="list-group-item groupB">Netherlands</li>
						<li class="list-group-item groupB">Chile</li>
						<li class="list-group-item groupB">Australia</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3 class="text-center C">Group C</h3>
				<ul class="list-group C">
						<li class="list-group-item groupC">Colombia</li>
						<li class="list-group-item groupC">Greece</li>
						<li class="list-group-item groupC">Cote d'Ivoire</li>
						<li class="list-group-item groupC">Japan</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3 class="text-center D">Group D</h3>
				<ul class="list-group D">
						<li class="list-group-item groupD">Uruguay</li>
						<li class="list-group-item groupD">Costa Rica</li>
						<li class="list-group-item groupD">England</li>
						<li class="list-group-item groupD">Italy</li>
				</ul>
			</div>
	</div>
	
	<!--GROUPS 1-4 ADVANCEMENT-->
	
	<div class="row initial">
		<div class="col-md-3">
			<h3 class="text-center text-success">Group A Selections</h3>
			<table class="table table-border table-hover text-center">
				<tr>
					<td>
					<span class="label label-default">Seed 1</span>
					</td>
					<td>
						<span class="glyphicon glyphicon-resize-horizontal switch"></span>
					</td>
					<td>
					<span class="label label-default">Seed 2</span>
					</td>
				</tr>
				<tr>
					<td class="groupATable1">
					</td>
					<td>
					</td>
					<td class="groupATable2">
					</td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
			<h3 class="text-center text-success">Group B Selections</h3>
			<table class="table table-border table-hover text-center">
				<tr>
					<td>
					<span class="label label-default">Seed 1</span>
					</td>
					<td>
						<span class="glyphicon glyphicon-resize-horizontal switch"></span>
					</td>
					<td>
					<span class="label label-default">Seed 2</span>
					</td>
				</tr>
				<tr>
					<td class="groupBTable1">
					</td>
					<td>
					</td>
					<td class="groupBTable2">
					</td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
			<h3 class="text-center text-success">Group C Selections</h3>
			<table class="table table-border table-hover text-center">
				<tr>
				<td>
					<span class="label label-default">Seed 1</span>
				</td>
				<td>
					<span class="glyphicon glyphicon-resize-horizontal switch"></span>
				</td>
				<td>
					<span class="label label-default">Seed 2</span>
				</td>
				</tr>
				<tr>
					<td class="groupCTable1">
					</td>
					<td>
					</td>
					<td class="groupCTable2">
					</td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
			<h3 class="text-center text-success">Group D Selections</h3>
			<table class="table table-border table-hover text-center">
				<tr>
				<td>
					<span class="label label-default">Seed 1</span>
				</td>
				<td>
					<span class="glyphicon glyphicon-resize-horizontal switch"></span>
				</td>
				<td>
					<span class="label label-default">Seed 2</span>
				</td>
				</tr>
				<tr>
					<td class="groupDTable1">
					</td>
					<td>
					</td>
					<td class="groupDTable2">
					</td>
				</tr>
			</table>
		</div>
	</div>
	
	<!--***END GROUPS 1-4 ADVANCEMENT-->
	

	
	<!--GROUPS 4-8-->
	<div class="row initial">
			
			<div class="col-md-3">
				<h3 class="text-center E">Group E</h3>
				<ul class="list-group E">
						<li class="list-group-item groupE">Switzerland</li>
						<li class="list-group-item groupE">Ecuador</li>
						<li class="list-group-item groupE">France</li>
						<li class="list-group-item groupE">Honduras</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3 class="text-center F">Group F</h3>
				<ul class="list-group F">
						<li class="list-group-item groupF">Argentina</li>
						<li class="list-group-item groupF">Bosnia-Herzegovina</li>
						<li class="list-group-item groupF">Iran</li>
						<li class="list-group-item groupF">Nigeria</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3 class="text-center G">Group G</h3>
				<ul class="list-group G">
						<li class="list-group-item groupG">Germany</li>
						<li class="list-group-item groupG">Portugal</li>
						<li class="list-group-item groupG">Ghana</li>
						<li class="list-group-item groupG">USA</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3 class="text-center H">Group H</h3>
				<ul class="list-group H">
						<li class="list-group-item groupH">Belgium</li>
						<li class="list-group-item groupH">Algeria</li>
						<li class="list-group-item groupH">Russia</li>
						<li class="list-group-item groupH">Korea Republic</li>
				</ul>
			</div>
	</div>
	
	<!--GROUPS 5-8 ADVANCEMENT-->
	
	<div class="row initial">
		<div class="col-md-3">
			<h3 class="text-center text-success">Group E Selections</h3>
			<table class="table table-border table-hover text-center">
				<tr>
				<td>
					<span class="label label-default">Seed 1</span>
				</td>
				<td>
					<span class="glyphicon glyphicon-resize-horizontal switch"></span>
				</td>
				<td>
					<span class="label label-default">Seed 2</span>
				</td>
				</tr>
				<tr>
					<td class="groupETable1">
					</td>
					<td>
					</td>
					<td class="groupETable2">
					</td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
			<h3 class="text-center text-success">Group F Selections</h3>
			<table class="table table-border table-hover text-center">
				<tr>
				<td>
					<span class="label label-default">Seed 1</span>
				</td>
				<td>
					<span class="glyphicon glyphicon-resize-horizontal switch"></span>
				</td>
				<td>
					<span class="label label-default">Seed 2</span>
				</td>
				</tr>
				<tr>
					<td class="groupFTable1">
					</td>
					<td>
					</td>
					<td class="groupFTable2">
					</td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
			<h3 class="text-center text-success">Group G Selections</h3>
			<table class="table table-border table-hover text-center">
				<tr>
				<td>
					<span class="label label-default">Seed 1</span>
				</td>
				<td>
					<span class="glyphicon glyphicon-resize-horizontal switch"></span>
				</td>
				<td>
					<span class="label label-default">Seed 2</span>
				</td>
				</tr>
				<tr>
					<td class="groupGTable1">
					</td>
					<td>
					</td>
					<td class="groupGTable2">
					</td>
				</tr>
			</table>
		</div>
		<div class="col-md-3">
			<h3 class="text-center text-success">Group H Selections</h3>
			<table class="table table-border table-hover text-center">
				<tr>
				<td>
					<span class="label label-default">Seed 1</span>
				</td>
				<td>
					<span class="glyphicon glyphicon-resize-horizontal switch"></span>
				</td>
				<td>
					<span class="label label-default">Seed 2</span>
				</td>
				</tr>
				<tr>
					<td class="groupHTable1">
					</td>
					<td>
					</td>
					<td class="groupHTable2">
					</td>
				</tr>
			</table>
		</div>
	</div>
	<br>
		<center>
		<button type="button" class="btn btn-success btn-lg next initial" disabled="disabled">
			<span class="glyphicon glyphicon-ok"></span> Next
		</button>
			
		<button type="reset" class="btn btn-danger btn-lg reset initial">
			<span class="glyphicon glyphicon-remove"></span> Reset
		</button>
		</center>
		
	</div>
	
	<!--***END GROUPS 5-8 ADVANCEMENT-->
	
	<!--**BEGIN TEST BRACKET-->
	
<div class="container bracket">
<center>
<input type="text" id="bracketKey" required="true" max="100" placeholder="Bracket Name"/>
<br>
<br>
<table summary="Tournament Bracket" class="tournamentBracket">
 <tr>
     <th>Round of 16</th>
     <th>Quarterfinals</th>
     <th>Semifinals</th>
     <th>Finals</th>
     <th>Champion</th>
 </tr>
 <tr>
  <td><p class="A1"></p></td>
  <td rowspan="2"><p class="quarter1"></p></td>
  <td rowspan="4"><p class="semi1"></p></td>
  <td rowspan="8"><p class="final1"></p></td>
  <td rowspan="16"><p class="champion"></p></td>
 </tr>
 <tr>
  <td><p class="B2"></p></td>
 </tr>
 <tr>
  <td><p class="C1"></p></td>
  <td rowspan="2"><p class="quarter2"></p></td>
 </tr>
 <tr>
  <td><p class="D2"></p></td>
 </tr>
 <tr>
  <td><p class="E1"></p></td>
  <td rowspan="2"><p class="quarter3"></p></td>
  <td rowspan="4"><p class="semi2"></p></td>
 </tr>
 <tr>
  <td><p class="F2"></p></td>
 </tr>
 <tr>
  <td><p class="G1"></p></td>
  <td rowspan="2"><p class="quarter4"></p></td>
 </tr>
 <tr>
  <td><p class="H2"></p></td>
 </tr>
 <tr>
  <td><p class="D1"></p></td>
  <td rowspan="2"><p class="quarter5"></p></td>
  <td rowspan="4"><p class="semi3"></p></td>
  <td rowspan="8"><p class="final2"></p></td>
 </tr>
 <tr>
  <td><p class="C2"></p></td>
 </tr>
 <tr>
  <td><p class="B1"></p></td>
  <td rowspan="2"><p class="quarter6"></p></td>
 </tr>
 <tr>
  <td><p class="A2"></p></td>
 </tr>
 <tr>
  <td><p class="F1"></p></td>
  <td rowspan="2"><p class="quarter7"></p></td>
  <td rowspan="4"><p class="semi4"></p></td>
 </tr>
 <tr>
  <td><p class="E2"></p></td>
 </tr>
 <tr>
  <td><p class="H1"></p></td>
  <td rowspan="2"><p class="quarter8"></p></td>
 </tr>
 <tr>
  <td><p class="G2"></p></td>
 </tr>
</table>

<br>
<br>

<button type="button" class="btn btn-success btn-lg save" disabled="disabled">
  <span class="glyphicon glyphicon-save"></span> Save
</button>
<button type="button" class="btn btn-danger btn-lg reset">
  <span class="glyphicon glyphicon-remove"></span> Reset
</button>

</center>
</div>
	
	
	
	<!--**END TEST BRACKET-->
	


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
	<script>
		$(document).ready(function(){
			$(".bracket").hide();
		});
	</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
	var seed1Count=[];
	var seed2Count=[];
	var countA=0;
	var countB=0;
	var countC=0;
	var countD=0;
	var countE=0;
	var countF=0;
	var countG=0;
	var countH=0;
	var total=0;
		$(".groupA").click(function(){
			countA++;
			if(countA<=2)
			{
			$(this).appendTo($(".groupATable1"));
			}
			if(countA==2){
			$(this).appendTo($(".groupATable2"));
			$(".A").slideUp("slow",function(){
			});
			}
			totalCount();
		});
		$(".groupB").click(function(){
			countB++;
			if(countB<=2)
			{
			$(this).appendTo($(".groupBTable1"));
			}
			if(countB==2){
			$(this).appendTo($(".groupBTable2"));
			$(".B").slideUp("slow",function(){
			});
			}
			totalCount();
		});
		$(".groupC").click(function(){
			countC++;
			if(countC<=2)
			{
			$(this).appendTo($(".groupCTable1"));
			}
			if(countC==2){
			$(this).appendTo($(".groupCTable2"));
			$(".C").slideUp("slow",function(){
			});
			}
			totalCount();
		});
		$(".groupD").click(function(){
			countD++;
			if(countD<=2)
			{
			$(this).appendTo($(".groupDTable1"));
			}
			if(countD==2){
			$(this).appendTo($(".groupDTable2"));
			$(".D").slideUp("slow",function(){
			});
			}
			totalCount();
		});
		$(".groupE").click(function(){
			countE++;
			if(countE<=2)
			{
			$(this).appendTo($(".groupETable1"));
			}
			if(countE==2){
			$(this).appendTo($(".groupETable2"));
			$(".E").slideUp("slow",function(){
			});
			}
			totalCount();
		});
		$(".groupF").click(function(){
			countF++;
			if(countF<=2)
			{
			$(this).appendTo($(".groupFTable1"));
			}
			if(countF==2){
			$(this).appendTo($(".groupFTable2"));
			$(".F").slideUp("slow",function(){
			});
			}
			totalCount();
		});
		$(".groupG").click(function(){
			countG++;
			if(countG<=2)
			{
			$(this).appendTo($(".groupGTable1"));
			}
			if(countG==2){
			$(this).appendTo($(".groupGTable2"));
			$(".G").slideUp("slow",function(){
			});
			}
			totalCount();
		});
		$(".groupH").click(function(){
			countH++;
			if(countH==1)
			{
			$(this).appendTo($(".groupHTable1"));
			}
			if(countH==2){
			$(this).appendTo($(".groupHTable2"));
			$(".H").slideUp("slow",function(){
			});	
			}
			totalCount();
		});
	
		//starting other functions
		function totalCount(){
			total=countA+countB+countC+countD+countE+countF+countG+countH;
			if(total==16){
				$(".next").removeAttr('disabled');
				makeSeed1();
				makeSeed2();
			}
		}
		function makeSeed1(){
			$(".table").each(function(){
				var $tds = $(this).find('td');
				var $currText=$tds.eq(0).text();
				seed1Count.push($currText);
			});
		}
		function makeSeed2(){
			$(".table").each(function(){
				var $tds = $(this).find('td');
				var $currText=$tds.eq(1).text();
				seed2Count.push($currText);
			});
		}
		function transferSeeds(){
			$(".groupATable1").appendTo($(".A1"));
			$(".groupATable2").appendTo($(".A2"));
			$(".groupBTable1").appendTo($(".B1"));
			$(".groupBTable2").appendTo($(".B2"));
			$(".groupCTable1").appendTo($(".C1"));
			$(".groupCTable2").appendTo($(".C2"));
			$(".groupDTable1").appendTo($(".D1"));
			$(".groupDTable2").appendTo($(".D2"));
			$(".groupETable1").appendTo($(".E1"));
			$(".groupETable2").appendTo($(".E2"));
			$(".groupFTable1").appendTo($(".F1"));
			$(".groupFTable2").appendTo($(".F2"));
			$(".groupGTable1").appendTo($(".G1"));
			$(".groupGTable2").appendTo($(".G2"));
			$(".groupHTable1").appendTo($(".H1"));
			$(".groupHTable2").appendTo($(".H2"));
		}
		function checkSave(){
			if($(".champion").length > 0){
				$(".save").removeAttr('disabled');
			}
		}
		//**DEBUGGING ARRAYS OF SEEDS 1 AND 2**
		/*
		function printSeed1(){
			for(var i=0;i<seed1Count.length;i++){
				console.log(seed1Count[i]);
			}
		}
		function printSeed2(){
			for(var i=0;i<seed2Count.length;i++){
				console.log(seed2Count[i]);
			}
		}
		*/
		
		$(".next").click(function(){
			transferSeeds();
			$(".initial").slideUp();
			$(".bracket").slideDown();
		});
		
		$(".reset").click(function(){
			window.location.reload();
		});

		var bracketList=[];
		var listClass=[];
		$(".save").click(function(){
			$(".tournamentBracket li").each(function(){
				bracketList.push($(this).text());
				listClass.push($(this).attr('class'));
			});
			localStorage.setItem("bracketList",JSON.stringify(bracketList));
			localStorage.setItem("listClass",JSON.stringify(listClass));
			console.log(bracketList);
			console.log(listClass);
			var bracketName = $("#bracketKey").val();
			localStorage.setItem("idName",JSON.stringify(bracketName));
			var newItem = document.createElement("li");
				newItem.innerHTML = bracketName;
			//alert(bracketName);
			$(".nav-justified>.dropdown .dropdown-menu").append(newItem);
			//$(".container ul").listview("refresh");
			window.location.href='complete.php';
		});
			
		//functions for round of 16 to quarterfinals
		
		var team1=0;
		var team2=0;
		var team3=0;
		var team4=0;
		var team5=0;
		var team6=0;
		var team7=0;
		var team8=0;
		var team9=0;
		var team10=0;
		var team11=0;
		var team12=0;
		var team13=0;
		var team14=0;
		var team15=0;
		var team16=0;
		//ADVANCEMENT OF A1 and B2
		$(".A1").click(function(){
			team1++;
			$(this).clone().appendTo($(".quarter1")).end();
			$(this).unbind('click');
			$(".B2").unbind('click');
		});
		
		$(".B2").click(function(){
			team2++;
			$(this).clone().appendTo($(".quarter1")).end();
			$(this).unbind('click');
			$(".A1").unbind('click');
		});	
		
		$(".quarter1").click(function(){
			$(this).clone().appendTo($(".semi1")).end();
			$(this).unbind('click');
			$(".quarter2").unbind('click');
		});	
		
		$(".semi1").click(function(){
			$(this).clone().appendTo($(".final1")).end();
			$(this).unbind('click');
			$(".semi2").unbind('click');
		});	
		
		$(".final1").click(function(){
			$(this).clone().appendTo($(".champion")).end();
			$(this).unbind('click');
			$(".final2").unbind('click');
			checkSave();
		});	
		
		//ADVANCEMENT OF C1 and D2
		$(".C1").click(function(){
			team3++;
			$(this).clone().appendTo($(".quarter2")).end();
			$(this).unbind('click');
			$(".D2").unbind('click');
		});
		$(".D2").click(function(){
			team4++;
			$(this).clone().appendTo($(".quarter2")).end();
			$(this).unbind('click');
			$(".C1").unbind('click');
		});
		
		$(".quarter2").click(function(){
			$(this).clone().appendTo($(".semi1")).end();
			$(this).unbind('click');
			$(".quarter1").unbind('click');
		});
		
		//ADVANCEMENT OF E1 and F2
		$(".E1").click(function(){
			team5++;
			$(this).clone().appendTo($(".quarter3")).end();
			$(this).unbind('click');
			$(".F2").unbind('click');
		});
		
		$(".F2").click(function(){
			team6++;
			$(this).clone().appendTo($(".quarter3")).end();
			$(this).unbind('click');
			$(".E1").unbind('click');
		});
		
		$(".quarter3").click(function(){
			$(this).clone().appendTo($(".semi2")).end();
			$(this).unbind('click');
			$(".quarter4").unbind('click');
		});
		
		$(".semi2").click(function(){
			$(this).clone().appendTo($(".final1")).end();
			$(this).unbind('click');
			$(".semi1").unbind('click');
		});
		
		//ADVANCEMENT OF G1 and H2
		$(".G1").click(function(){
			team7++;
			$(this).clone().appendTo($(".quarter4")).end();
			$(this).unbind('click');
			$(".H2").unbind('click');
		});
		
		$(".H2").click(function(){
			team8++;
			$(this).clone().appendTo($(".quarter4")).end();
			$(this).unbind('click');
			$(".G1").unbind('click');
		});
		
		$(".quarter4").click(function(){
			$(this).clone().appendTo($(".semi2")).end();
			$(this).unbind('click');
			$(".quarter3").unbind('click');
		});
		//ADVANCEMENT OF D1 and C2
		$(".D1").click(function(){
			team9++;
			$(this).clone().appendTo($(".quarter5")).end();
			$(this).unbind('click');
			$(".C2").unbind('click');
		});
		
		$(".C2").click(function(){
			team10++;
			$(this).clone().appendTo($(".quarter5")).end();
			$(this).unbind('click');
			$(".D1").unbind('click');
		});
		
		$(".quarter5").click(function(){
			$(this).clone().appendTo($(".semi3")).end();
			$(this).unbind('click');
			$(".quarter6").unbind('click');
		});
		
		$(".semi3").click(function(){
			$(this).clone().appendTo($(".final2")).end();
			$(this).unbind('click');
			$(".semi4").unbind('click');
		});
		
		//ADVANCEMENT OF B1 and A2
		$(".B1").click(function(){
			team11++;
			$(this).clone().appendTo($(".quarter6")).end();
			$(this).unbind('click');
			$(".A2").unbind('click');
		});
		
		$(".A2").click(function(){
			team12++;
			$(this).clone().appendTo($(".quarter6")).end();
			$(this).unbind('click');
			$(".B1").unbind('click');
		});
		
		$(".quarter6").click(function(){
			$(this).clone().appendTo($(".semi3")).end();
			$(this).unbind('click');
			$(".quarter5").unbind('click');
		});
		
		//ADVANCEMENT of F1 and E2
		$(".F1").click(function(){
			team13++;
			$(this).clone().appendTo($(".quarter7")).end();
			$(this).unbind('click');
			$(".E2").unbind('click');
		});
		
		$(".E2").click(function(){
			team14++;
			$(this).clone().appendTo($(".quarter7")).end();
			$(this).unbind('click');
			$(".F1").unbind('click');
		});
		
		$(".quarter7").click(function(){
			$(this).clone().appendTo($(".semi4")).end();
			$(this).unbind('click');
			$(".quarter8").unbind('click');
		});
		
		$(".semi4").click(function(){
			$(this).clone().appendTo($(".final2")).end();
			$(this).unbind('click');
			$(".semi3").unbind('click');
		});
		$(".final2").click(function(){
			$(this).clone().appendTo($(".champion")).end();
			$(this).unbind('click');
			$(".final1").unbind('click');
			checkSave();
		});	
		
		//ADVANCEMENT of H1 and G2
		$(".H1").click(function(){
			team15++;
			$(this).clone().appendTo($(".quarter8")).end();
			$(this).unbind('click');
			$(".G2").unbind('click');
		});
		
		$(".G2").click(function(){
			team16++;
			$(this).clone().appendTo($(".quarter8")).end();
			$(this).unbind('click');
			$(".H1").unbind('click');
		});
		
		$(".quarter8").click(function(){
			$(this).clone().appendTo($(".semi4")).end();
			$(this).unbind('click');
			$(".quarter7").unbind('click');
		});
	</script>
	
	
	 </body>
</html>
 