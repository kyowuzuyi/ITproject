<!doctype html>
<?php session_start(); ?>

<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>団体情報を登録</title>
</head>
<body>
<h1>団体情報を登録</h1>
    <form action="group.php" method="post">
    	組織名：<input type="text" name="name"><br>
        TEL：<input type="text" name="tel"><br>
        <input type="submit" name="button" value="登録する" />
    </form>
    
    
    <!-- Small modal -->
    
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal01">メンバーメール設定</button>

	<div id="myModal01" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<form>
                	メールアドレス:<input type="text" name="id"><br>
	 	  		    <button type="button" class="btn btn-primary" data-dismiss="modal">次のメール</button>
     		   		<button type="button" class="btn btn-default" data-dismiss="modal">完了</button>                    
                </form>
		    </div>
		</div>
	</div>
    
</body>
</html>
