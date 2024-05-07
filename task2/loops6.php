<?php

class AsciiFigure
{
    public function drawFigure($rows): void
    {
        $baseSize = 4 * ($rows - 1) * 2;
        $startSlashPerSide = $baseSize / 2;
        $upperLine = str_repeat("/", $startSlashPerSide) . str_repeat("\\", $startSlashPerSide) . PHP_EOL;
        $startAmountStars = 8;

        echo $upperLine;

        for ($i = 1; $i < $rows; $i++) {
            $starAmount = $startAmountStars * $i;
            $slashPerSide = ($baseSize - $starAmount) / 2;

            echo str_repeat("/", $slashPerSide) . str_repeat('*', $starAmount) . str_repeat("\\", $slashPerSide) . PHP_EOL;
        }
    }
}

$asciiFigure = new AsciiFigure();
$asciiFigure->drawFigure(7);