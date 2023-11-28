# Projeto Player
---
## O objetivo desse projeto é aplicarmos os conceitos e técnicos da Programação Orientada à Objetos no desenvolvimento de software.
---
### Tendo como base o escopo de um jogo simples, onde cada Player tem um único Inventário, sendo que esse inventário tem uma capacidade finita de guardar itens, capacidade essa definida por um valor inteiro e que conforme o jogador sobe de nível essa capacidade aumenta proporcionalmente em relação ao nível. 
---
### A capacidade máxima de cada inventário inicia em 20 e cada nível que o Player sobe a capacidade aumenta 3x o nível, por exemplo, se o Player sobe para o nível 2 sua capacidade aumenta em 6, pois nível * 3, logo 2 * 3, sendo esse valor somado na capacidade anterior. O Player tem a capacidade de coletar ou soltar itens presentes em seu inventário, não podendo ultrapassar a capacidade máxima definida pelo Inventários. 
---
### O Player pode ficar com o inventário vazio. Cada Item coletado pelo Player pode ter uma classe diferente, sendo 3 classes, Ataque, Defesa e Magia, onde cada classe se difere no nome classe e no tamanho do Item. Itens de ataque ocupam 7 espaços, itens de defesa ocupam 4 espaços e itens de magia ocupam 2 espaços. Você deve ter as classes Ataque, Defesa e Magia como subclasses de Item. 
---

### Crie um index.php que possa validar todas as operações, pelo menos dois players, dois itens de cada categoria, simule um inventário cheio e depois um Player subindo de nível