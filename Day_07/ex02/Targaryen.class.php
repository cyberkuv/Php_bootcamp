<?php
  class Targaryen {
    public function resistsFire() {
      return false;
    }
    public function getBurned() {
      return(!$this->resistsFire() ? "burns alive" : "emerges naked but unharmed");
    }
  }
  // return (!$this->resistsFire()? "burns alive" : "emerges naked but unharmed");
?>
