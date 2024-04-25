<?php 

class Archer extends Player {
    private string $bow;
    private int $arrows_qty;

    public function __construct(string $nickname, string $bow, int $arrows_qty) {
        parent::_construct($nickname);
        $this->bow = $bow;
        $this->arrows_qty = $arrows_qty;
    }

    public function shoot(): void {
        if ($this->arrows_qty > 0) {
            echo "I shoot an arrow!".PHP_EOL;
            --$this->arrow_qty;
        }
        else echo "Can't shoot! No arrows!".PHP_EOL;
    }
}

?>