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
        if($this->checkMoveUp($direction,$step)) $this->pos_y += $step;
        else if($this->checkMoveDown($direction,$step)) $this->pos_y -= $step;
        else if($this->checkMoveRight($direction,$step)) $this->pos_x += $step;
        else if($this->checkMoveLeft($direction,$step)) $this->pos_x -= $step;
        else {
            echo "Can't move on ".$direction->value." direction!".PHP_EOL;
            return;
        }
        echo $this->nickname." now its in X: ".$this->pos_x." and Y: ".$this->pos_y.PHP_EOL;
    }

    private function checkMoveUp(MoveDirection $direction, int $step): bool {
        return $direction === MoveDirection::UP && ($this->pos_y + $step) <= 9;
    }
    private function checkMoveDown(MoveDirection $direction, int $step): bool {
        return $direction === MoveDirection::DOWN && ($this->pos_y - $step) > 0;
    }
    private function checkMoveRight(MoveDirection $direction,int $step): bool {
        return $direction === MoveDirection::RIGHT && ($this->pos_x + $step) <= 9;
    }
    private function checkMoveLeft(MoveDirection $direction,int $step): bool {
        return $direction === MoveDirection::LEFT && ($this->pos_x - $step) > 0;
    }

    public function getX(): int {
        return $this->pos_x;
    }
    
    public function getY(): int {
        return $this->pos_y;
    }
}

?>