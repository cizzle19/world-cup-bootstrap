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
            <li><a href="bracket.php">Bracket</a></li>
            <li class="dropdown active">
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

      <div class="container bracket">
<center>
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


</center>
</div>
  </div>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        var teams = [];
        var locations = [];
        var spots = [];
        var names =[];

        teams = localStorage.getItem('bracketList');
        locations = localStorage.getItem('listClass');
        names = localStorage.getItem('idName');

        var key = JSON.parse(names);
        //alert(key);
        var keyLength = key.length;

        var loc = JSON.parse(locations);
        var loclength = loc.length;
        var recover = JSON.parse(teams);
        var teamlength = recover.length;
        //var spotsAssign = JSON.parse(spots);
        //var spotsLength = spotsAssign.length;

        console.log(teamlength);
        $(".tournamentBracket p").each(function(){
          spots.push($(this).attr('class'));
        });

        console.log(recover);
        console.log(loc);
        console.log(spots);
        
        for(var i=0;i<teamlength;i++){
         $(".tournamentBracket p").each(function(){
            if($(this).attr('class') === spots[i]){
              $(this).append(recover[i]);
            }
         });
        }

        var newItem = document.createElement("li");
        newItem.innerHTML = key;
        //alert(bracketName);
        $(".nav-justified>.dropdown .dropdown-menu").append(newItem);
        $(".nav-justified>.dropdown .dropdown-menu li").each(function(){
          $(this).addClass("list-group-item");
        });


    });
  </script>
</body>
</html>