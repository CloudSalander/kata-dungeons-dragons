<?php 
class Warrior extends Player {
    private string $sword;

    public function __construct(string $nickname, string $sword) {
        parent::__construct($nickname);
        $this->sword = $sword;
    }

    public function attack(): void {
        echo $this->nickname." attacked with ".$this->sword.PHP_EOL;
    }

    public function run(MoveDirection $direction): void {
        if($direction === MoveDirection::UP && $this->pos_y < 8) $this->pos_y += 2;
        else if($direction === MoveDirection::DOWN && $this->pos_y > 1) $this->pos_y -= 2;
        else if($direction === MoveDirection::RIGHT && $this->pos_x < 8) $this->pos_x += 2;
        else if($direction === MoveDirection::LEFT && $this->pos_x > 1) $this->pos_x -= 2;
        else echo "Can't move on ".$direction->value." direction!".PHP_EOL;
    }
}

?>