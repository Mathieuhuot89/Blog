<?php



class Encounter
{
    const RESULT_WINNER = 1;
    const RESULT_LOSER = -1;
    const RESULT_DRAW = 0;
    const RESULT_POSSIBILITIES = [self::RESULT_WINNER, self::RESULT_LOSER, self::RESULT_DRAW];

    
    static public function probabilityAgainst(Player $playerOne, Player $playerTwo): float
    {
        return 1/(1+(10 ** (($playerTwo->level - $playerOne->level)/400)));
    }

   static public function setNewLevel(Player $playerOne, Player $playerTwo, int $playerOneResult): void
    {
        if (!in_array($playerOneResult, self::RESULT_POSSIBILITIES)) {
            trigger_error(sprintf('Invalid result. Expected %s',implode(' or ', self::RESULT_POSSIBILITIES)));
        }

        $playerOne->level += round(32 * ($playerOneResult - self::probabilityAgainst($playerOne, $playerTwo)));
    }
}

class Player
{
    public int $level;

    public function __construct(private string $name)
    {
        
    }

    public function __toString()
    {
        return "nom du joueur:" . $this->name;
    }

}
$name = "greg";
$greg = new Player($name);
$jade = new Player("jade");
var_dump($greg);
echo "<br/>";

$greg->level = 400;
$jade->level = 800;

$encounter = new Encounter;

echo sprintf(
    'Greg à %.2f%% chance de gagner face a Jade',
    Encounter::probabilityAgainst($greg, $jade) * 100
) . PHP_EOL;

// Imaginons que greg l'emporte tout de même.
Encounter::setNewLevel($greg, $jade, Encounter::RESULT_WINNER);
Encounter::setNewLevel($jade, $greg, Encounter::RESULT_LOSER);

echo sprintf(
    'les niveaux des joueurs ont évolués vers %s pour Greg et %s pour Jade',
    $greg->level,
    $jade->level
);

exit(0);