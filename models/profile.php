<?php
	class Profile {
		public $p_firstname;
		public $p_lastname;
		public $p_username;
		public $p_email;
		public $p_credits;
		public $p_rights;
		public $p_rank;

		public function setProfileData($firstname, $lastname, $username, $email, $credits, $rights) {
			$this->p_firstname 	= $firstname;
			$this->p_lastname 	= $lastname;
			$this->p_username	= $username;
			$this->p_email		= $email;
			$this->p_credits 	= $credits;
			$this->p_rights 	= $rights;
		}

		public function getFirstname() {
			return $this->p_firstname;
		}

		public function getLastname() {
			return $this->p_lastname;
		}

		public function getUsername() {
			return $this->p_username;
		}

		public function getMail() {
			return $this->p_email;
		}

		public function getCredits() {
			return $this->p_credits;
		}

		public function getRank() {
			switch($this->p_level) {
				case 1: $this->p_rank = "Player"; break;
				case 2: $this->p_rank = "Game Moderator"; break;
				case 3: $this->p_rank = "Administrator"; break;
			}
			return $this->p_rank;
		}
	}
?>