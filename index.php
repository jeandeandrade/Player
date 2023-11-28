<?php

require_once('Item.php');
require_once('Player.php');
require_once('Inventario.php');

// Criar instâncias dos itens
$itemAtaque1 = new Ataque("Espada", 7);
$itemAtaque2 = new Ataque("Arco", 7);
$itemDefesa1 = new Defesa("Escudo", 4);
$itemDefesa2 = new Defesa("Armadura", 4);
$itemMagia1 = new Magia("Pergaminho", 2);
$itemMagia2 = new Magia("Varinha", 2);

// Criar instâncias dos inventários
$inventario1 = new Inventario(20);
$inventario2 = new Inventario(20);

// Criar instâncias dos jogadores
$player1 = new Player("Jogador 1", 1, $inventario1);
$player2 = new Player("Jogador 2", 1, $inventario2);

// Coletar itens pelos jogadores
echo "Coletando itens para o Jogador 1...<br>";
echo $player1->coletarItem($itemAtaque1) . "<br>"; // Feedback sobre a operação
echo $player1->coletarItem($itemDefesa1) . "<br>"; // Feedback sobre a operação
echo $player1->coletarItem($itemMagia1) . "<br>"; // Feedback sobre a operação
echo $player1->coletarItem($itemDefesa1) . "<br>"; // Feedback sobre a operação
echo "Coletando itens para o Jogador 2...<br>";
echo $player2->coletarItem($itemAtaque2) . "<br>"; // Feedback sobre a operação
echo $player2->coletarItem($itemDefesa2) . "<br>"; // Feedback sobre a operação
echo $player2->coletarItem($itemMagia2) . "<br>"; // Feedback sobre a operação

// Subir o nível de um jogador
$player1->subirNivel();

// Exibir informações detalhadas sobre os inventários
echo "Estado do Inventário do Jogador 1:<br>";
echo "Capacidade Livre: " . $player1->getInventario()->capacidadeLivre() . "<br>";
echo "Itens no Inventário:<br>";
foreach ($player1->getInventario()->getItens() as $item) {
    echo "- " . $item->getName() . " (Tamanho: " . $item->getTamanho() . ")<br>";
}

echo "<br>Estado do Inventário do Jogador 2:<br>";
echo "Capacidade Livre: " . $player2->getInventario()->capacidadeLivre() . "<br>";
echo "Itens no Inventário:<br>";
foreach ($player2->getInventario()->getItens() as $item) {
    echo "- " . $item->getName() . " (Tamanho: " . $item->getTamanho() . ")<br>";
}
?>
