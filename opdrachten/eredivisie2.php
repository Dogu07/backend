<?php
function html_table($info = array())
{
    $rows = array();
    foreach ($info as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }
    return "<table  style=\"border:#d3d3d3\" cellspacing=\"3\" cellpadding=\"3\" border=\"1\" align=\"left\" class='hci-table'>" . implode('', $rows) . "</table>";
}
$info = array(
    array(
        'Plaats' => "Plaats",
        'Clubnaam : ' => "Clubnaam",
        'stad : ' => "Stad",
        'gespeeld : ' => "Gespeeld",
        'gewonnen : ' => "Gewonnen",
        'gelijk : ' => "Gelijk",
        'verloren : ' => "Verloren",
        'punten : ' => "Punten",
        'doelsaldo ' => "Doelsaldo"),
    array(
        'Plaats' => "1",
        'Clubnaam : ' => "PSV",
        'stad : ' => "Eindhoven",
        'gespeeld : ' => 24,
        'gewonnen : ' => 20,
        'gelijk : ' => 2,
        'verloren : ' => 2,
        'punten : ' => 62,
        'doelsaldo ' => 37),

    array(
        'Plaats' => "2",
        'Clubnaam : ' => "Ajax",
        'stad : ' => "Amsterdam",
        'gespeeld : ' => 24,
        'gewonnen : ' => 18,
        'gelijk : ' => 3,
        'verloren : ' => 3,
        'punten : ' => 57,
        'doelsaldo ' => 45),
    array(
        'Plaats' => "3",
        'Clubnaam : ' => "AZ",
        'stad : ' => "Alkmaar",
        'gespeeld : ' => 24,
        'gewonnen : ' => 15,
        'gelijk : ' => 5,
        'verloren : ' => 4,
        'punten : ' => 50,
        'doelsaldo ' => 23),
    array(
        'Plaats' => "4",
        'Clubnaam : ' => "Feyenoord",
        'stad : ' => "Rotterdam",
        'gespeeld : ' => 24,
        'gewonnen : ' => 12,
        'gelijk : ' => 6,
        'verloren : ' => 6,
        'punten : ' => 42,
        'doelsaldo ' => 22),
    array(
        'Plaats' => "5",
        'Clubnaam : ' => "Utrecht",
        'stad : ' => "Utrecht",
        'gespeeld : ' => 24,
        'gewonnen : ' => 11,
        'gelijk : ' => 8,
        'verloren : ' => 5,
        'punten : ' => 41,
        'doelsaldo ' => 4),
    array(
        'Plaats' => "6",
        'Clubnaam : ' => "Pec",
        'stad : ' => "Zwolle",
        'gespeeld : ' => 24,
        'gewonnen : ' => 11,
        'gelijk : ' => 6,
        'verloren : ' => 7,
        'punten : ' => 39,
        'doelsaldo ' => 0),
    array(
        'Plaats' => "7",
        'Clubnaam : ' => "Vitesse",
        'stad : ' => "Arnhem",
        'gespeeld : ' => 24,
        'gewonnen : ' => 10,
        'gelijk : ' => 7,
        'verloren : ' => 7,
        'punten : ' => 37,
        'doelsaldo ' => 12),
    array(
        'Plaats' => "8",
        'Clubnaam : ' => "Ado",
        'stad : ' => "Den haag",
        'gespeeld : ' => 24,
        'gewonnen : ' => 10,
        'gelijk : ' => 5,
        'verloren : ' => 9,
        'punten : ' => 35,
        'doelsaldo ' => -3),
    array(
        'Plaats' => "9",
        'Clubnaam : ' => "Heerenveen ",
        'stad : ' => "Heerenveen",
        'gespeeld : ' => 24,
        'gewonnen : ' => 8,
        'gelijk : ' => 8,
        'verloren : ' => 8,
        'punten : ' => 32,
        'doelsaldo ' => -4),
    array(
        'Plaats' => "10",
        'Clubnaam : ' => "VVV",
        'stad : ' => "Venlo",
        'gespeeld : ' => 24,
        'gewonnen : ' => 7,
        'gelijk : ' => 10,
        'verloren : ' => 7,
        'punten : ' => 31,
        'doelsaldo ' => -5),
    array(
        'Plaats' => "11",
        'Clubnaam : ' => "Excelsior",
        'stad : ' => "Hengelo",
        'gespeeld : ' => 24,
        'gewonnen : ' => 8,
        'gelijk : ' => 5,
        'verloren : ' => 11,
        'punten : ' => 29,
        'doelsaldo ' => -6),
    array(
        'Plaats' => "12",
        'Clubnaam : ' => "Heracles",
        'stad : ' => "Rotterdam",
        'gespeeld : ' => 24,
        'gewonnen : ' => 7,
        'gelijk : ' => 6,
        'verloren : ' => 11,
        'punten : ' => 27,
        'doelsaldo ' => -17),
    array(
        'Plaats' => "13",
        'Clubnaam : ' => "Groningen",
        'stad : ' => "Groningen",
        'gespeeld : ' => 24,
        'gewonnen : ' => 5,
        'gelijk : ' => 9,
        'verloren : ' => 10,
        'punten : ' => 24,
        'doelsaldo ' => -5),
    array(
        'Plaats' => "14",
        'Clubnaam : ' => "Willem ||",
        'stad : ' => "Tilburg",
        'gespeeld : ' => 24,
        'gewonnen : ' => 5,
        'gelijk : ' => 5,
        'verloren : ' => 14,
        'punten : ' => 20,
        'doelsaldo ' => -15),
    array(
        'Plaats' => "15",
        'Clubnaam : ' => "Nac",
        'stad : ' => "Breda",
        'gespeeld : ' => 24,
        'gewonnen : ' => 5,
        'gelijk : ' => 5,
        'verloren : ' => 14,
        'punten : ' => 20,
        'doelsaldo ' => -16),
    array(
        'Plaats' => "16",
        'Clubnaam : ' => "Fc Twente",
        'stad : ' => "Enschede",
        'gespeeld : ' => 24,
        'gewonnen : ' => 4,
        'gelijk : ' => 5,
        'verloren : ' => 15,
        'punten : ' => 17,
        'doelsaldo ' => -17),
    array(
        'Plaats' => "17",
        'Clubnaam : ' => "Roda JC",
        'stad : ' => "Kerkrade",
        'gespeeld : ' => 24,
        'gewonnen : ' => 4,
        'gelijk : ' => 5,
        'verloren : ' => 15,
        'punten : ' => 17,
        'doelsaldo ' => -27),
    array(
        'Plaats' => "18",
        'Clubnaam : ' => "Sparta",
        'stad : ' => "Almelo",
        'gespeeld : ' => 24,
        'gewonnen : ' => 3,
        'gelijk : ' => 6,
        'verloren : ' => 15,
        'punten : ' => 15,
        'doelsaldo ' => -28),

);
echo html_table($info);

