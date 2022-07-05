<!DOCTYPE  html>
<html>
<head>
<meta  charset="utf-8"  />
</head>
<body  onLoad="document.fo.login.focus()">
<h1>Authentification</h1>
<div  class="erreur"></div>
<form  name="form"  method="post"  action="./controllers/verifie_connection.php">
    <input  type="text"  name="iden"  placeholder="identifiant"  /><br  />
    <input  type="password"  name="password"  placeholder="mot de passe"  /><br  />
    <input  type="submit"  name="button"  value="S'authentifier"  />
    <input  type="submit"  name="button"  value="Se déconnecter"  />
</form>
</body>
</html>