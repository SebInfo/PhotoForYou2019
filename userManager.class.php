<?php
class UserManager
{
	private $_db;

	public function __construct($db)
	{
		$this->setDB($db);
	}

	public function add(User $user)
	{
		$q = $this->_db->prepare('INSERT INTO users(nom,prenom,type,mail,mdp,credit) VALUES(:nom, :prenom, :type, :mail, :mdp, :credit)');
		$q->bindValue(':nom', $user->getNom());
		$q->bindValue(':prenom', $user->getPrenom());
		$q->bindValue(':type', $user->getType());
		$q->bindValue(':mail', $user->getMail());
		$q->bindValue(':mdp', $user->getMdp());
		$q->bindValue(':credit', 0);

		$q->execute();
	}

	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
}
?>