<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	@import 
url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap');
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
        size: "50";
	}

	#button{

		padding: 10px;
		width: 100px;
    	height: 45px;
		color: #FAF5E4;
		background-color: #4E944F;
		border-radius: 15px;
		border: none;
		font-family: 'Poppins';
		left: 32%;
		position:relative;
		top : 0px;
		font-weight: 650;
	}

	#box{

		background-color: #DAB88B;
		margin: auto;
		width: 300px;
		padding: 20px;
        top: 197px;
        left: 50%;
        transform: translate(0, 15%);
        border-radius: 20px;
		height: 300px;
	}

    nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
    background-color: #DAB88B;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
    padding: 0px 5%;
}

nav ul {
    display: flex;
}

nav ul li a {
    margin: 30px;
    font-family: 'Poppins';
    color: white;
    font-size: 18px;
    font-weight: 700;
}

.logo {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 60px;
    text-decoration: none;
    color: #4E944F;
}
    body {
    background-color: #FDF6EC;
    margin: 0px;
    padding: 0px;
    }
	.hire-btn {
    border: none;
    background: #4E944F;
    border-radius: 15px;
    font-weight: 700;
    width: 100px;
    height: 45px;
position: relative;
color:#FAF5E4;
top: 0px;
left: 32%;
}
p{
    color: #4E944F;
}

	</style>

    <nav>
            <!--logo-->
            <a href="index.php" class="logo">Prediksi Kelahiran</a>
            <!--menu-->
        </nav>

	<div id="box">
		
		<form method="POST">
			<div style="font-family: 'Poppins';font-size: 30px;margin: 10px;color: #4E944F; left : 7%; position:relative;">Masukkan Data</div>
            
			<input id="text" type="text" name="name" placeholder="Masukkan Nama " required/><br><br>
			<input id="text" type="text" name="hpht" placeholder="Masukkan HPHT(YYYY-MM-DD)" required/><br><br>

			<input id="button" type="submit" name= "submit" value="Cek"><br><br>
            
			<p>Tafsiran tanggal kelahiran bayi adalah tanggal <?php $row = $this->model->fetch($data);
            echo "<p>$row[3]<p>"?>
            </p>
	</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){ 
    $main = new c_prediksi();
    $main->delete(1);
    $main->Inserth();
    
    }
    ?>
