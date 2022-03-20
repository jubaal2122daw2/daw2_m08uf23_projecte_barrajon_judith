<HTML>
<HEAD>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<TITLE>Us LDAP</TITLE>
</HEAD>
<body>
	<p>VEURE INFORMACIÓ USUARI</p>
	<form action="./ver_datos.php" method="POST">
		<label for="id">Indica el id d'usuari(uid):</label><br> 
		<input type="text" name="id"><br> <br> 
		<label for="fname">Indica la unitat organitzativa</label><br> 
		<select name="tipusUser">
    		<option value="ou=administradors">Administradors</option>
    		<option value="ou=desenvolupadors">Desenvolupadors</option>
    		<option value="ou=usuaris">Usuaris</option>
		</select> 
		<input type="submit" value="Envia" />
	</form>
	<br>
	<br>

	<p>AFEGIR USUARI</p>
	<form action="./afegir_usuari.php" method="POST">
		<label for="id">Indica el id d'usuari(uid):</label><br> <input
			type="text" name="id"><br> <br> <label for="fname">Indica la unitat
			organitzativa</label><br> <select>
			<option value="ou=administradors">Administradors</option>
			<option value="ou=desenvolupadors">Desenvolupadors</option>
			<option value="ou=usuaris">Usuaris</option>
		</select> <input type="submit" value="Envia" />
	</form>
	<br>
	<br>

	<p>ESBORRAR USUARI</p>
	<form action="./esborrar_usuari.php" method="POST">
		<label for="id">Indica el id d'usuari(uid):</label><br> <input
			type="text" name="id"><br> <br> <label for="fname">Indica la unitat
			organitzativa</label><br> <select>
			<option value="ou=administradors">Administradors</option>
			<option value="ou=desenvolupadors">Desenvolupadors</option>
			<option value="ou=usuaris">Usuaris</option>
		</select> <input type="submit" value="Envia" />
	</form>
	
	<p>MODIFICAR ATRIBUT USUARI</p>
	<form action="./modificar_atribut.php" method="POST">
		<label for="id">Indica el id d'usuari(uid):</label><br> <input
			type="text" name="id"><br> <br> <label for="fname">Indica la unitat
			organitzativa</label><br> <select>
			<option value="ou=administradors">Administradors</option>
			<option value="ou=desenvolupadors">Desenvolupadors</option>
			<option value="ou=usuaris">Usuaris</option>
		</select> <input type="submit" value="Envia" />
	</form>
</body>
</HTML>