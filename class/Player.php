<?php 
//TODO: Enum por movements?
//TODO: Position as a class?
enum MoveDirection: string {
    case UP = "Up";
    case DOWN = "Down";
    case LEFT = "Left";
    case RIGHT = "Right";
}

abstract class Player {
    private string $nickname;
    private int $pos_x;
    private int $pos_y;

    public function __construct(string $nickname) {
        $this->nickname = $nickname;
        $this->pos_x = 0;
        $this->pos_y = 0;
    }

    public function move(MoveDirection $direction): void {
        if($direction === MoveDirection::UP && $this->pos_y < 9) ++$this->pos_y;
        else if($direction === MoveDirection::DOWN && $this->pos_y > 0) --$this->pos_y;
        else if($direction === MoveDirection::RIGHT && $this->pos_x < 9) ++$this->pos_x;
        else if($direction === MoveDirection::LEFT && $this->pos_x > 0) --$this->pos_x;
        else echo "Can't move on ".$direction->value." direction!".PHP_EOL;
    }

    public function getX(): int {
        return $this->pos_x;
    }
    
    public function getY(): int {
        return $this->pos_y;
    }
}

?>