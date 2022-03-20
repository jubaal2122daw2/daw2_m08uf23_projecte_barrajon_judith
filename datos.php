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
		UID:<input type="text" name="uid" required><br>
		UO:
		<select name="tipusUser">
			<option value="ou=administradors">Administradors</option>
			<option value="ou=desenvolupadors">Desenvolupadors</option>
			<option value="ou=usuaris">Usuaris</option>
		</select><br>
		uidNumber:<input type="text" name="uidNumber" required><br>
		gidNumber:<input type="text" name="gidNumber" placeholder="us=3000, dev=2500, admin=2000"required><br>
		Directori Personal:<input type="text" name="directori" required placeholder="/home/usr2/"><br>
		Shell:<input type="text" name="shell" required readonly value="/bin/bash"><br>
		cn:<input type="text" name="cn" placeholder="nom i cognom" required><br>
		sn:<input type="text" name="sn" placeholder="cognom" required><br>
		givenName:<input type="text" name="nom" placeholder="nom" required><br>
		PostalAddress:<input type="text" name="address" required><br>
		mobile:<input type="text" name="mobile" required><br>
		telephoneNumber:<input type="text" name="tel" required><br>
		title:<input type="text" name="titol" required><br>
		description:<input type="text" name="desc" placeholder="el mateix que titol" required><br><br>
		<input type="submit" value="Envia" />
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