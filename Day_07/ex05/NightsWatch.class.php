<?php
  class NightsWatch implements IFighter {
      private $soldat = array();
      public function recruit($x) {
        $this->soldat[] = $x;
      }
      function fight() {
        foreach ($this->soldat as $x) {
          if (method_exists(get_class($x), 'fight'))
            $x->fight();
          }
      }
  }
?>
