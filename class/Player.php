<?php 
//TODO: Position as a class?
enum MoveDirection: string {
    case UP = "Up";
    case DOWN = "Down";
    case LEFT = "Left";
    case RIGHT = "Right";
}

abstract class Player {
    protected string $nickname;
    protected int $pos_x;
    protected int $pos_y;

    public function __construct(string $nickname) {
        $this->nickname = $nickname;
        $this->pos_x = 0;
        $this->pos_y = 0;
    }

    public function walk(MoveDirection $direction): void {
        $this->move($direction,1);
    }

    protected function move(MoveDirection $direction, int $step): void {
        if($direction === MoveDirection::UP && ($this->pos_y + $step) <= 9) $this->pos_y += $step;
        else if($direction === MoveDirection::DOWN && ($this->pos_y - $step) > 0) $this->pos_y -= $step;
        else if($direction === MoveDirection::RIGHT && ($this->pos_x + $step) <= 9) $this->pos_x += $step;
        else if($direction === MoveDirection::LEFT && ($this->pos_x - $step) > 0) $this->pos_x -= $step;
        else {
            echo "Can't move on ".$direction->value." direction!".PHP_EOL;
            return;
        }
        echo $this->nickname." now its in X: ".$this->pos_x." and Y: ".$this->pos_y.PHP_EOL;
    }

    public function getX(): int {
        return $this->pos_x;
    }
    
    public function getY(): int {
        return $this->pos_y;
    }
}

?>