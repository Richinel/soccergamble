<?php
	class UCLStatistics {
		private $baseURL = "http://www.ergast.com/api/f1";

		public function getRecentData {
			$latestMatches = $this->baseURL .= 'current/last/results.json';
		}
	}

?>