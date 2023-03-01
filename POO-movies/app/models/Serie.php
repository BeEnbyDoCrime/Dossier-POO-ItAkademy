<?php

namespace Model;

class Serie extends Media
{

  protected $datas = [
    [
      'titre' => 'Wednesday',
      'annee' => 2022,
      'synopsis' => 'Une ado psycopathe dans une école de gens pas mieux',
      'genre' => 'C\'est beau',
      'realisateur' => 1, //Tim Burton
      'urlAffiche' => 'https://fr.web.img4.acsta.net/pictures/22/09/23/15/11/2942764.jpg',
      'saison' => 1,
      'episodes' => [
        '1' => 8
      ],
    ],
    [
      'titre' => 'Sandman',
      'annee' => 2022,
      'synopsis' => 'Les rêves sont franchement pas très très joyeux.',
      'genre' => 'Fantasy',
      'realisateur' => 3, //Neil Gaimann (oui je sais il a juste écris le comics, mais pour le bien de ce truc, on passera outre)
      'urlAffiche' => 'https://fr.web.img4.acsta.net/pictures/22/08/03/14/11/2923514.jpg',
      'saison' => 1,
      'episodes' => [
        '1' => 11
      ],
    ],
    [
      'titre' => 'Avatar le dernier maitre de l\'air',
      'annee' => 2005,
      'synopsis' => 'Un gamin de 10 ans survis à un génocide et sauve le monde 100 ans plus tard.',
      'genre' => 'Animation',
      'realisateur' => 6, //Michael Dante DiMartino et Bryan Konietzko
      'urlAffiche' => 'https://i.pinimg.com/originals/6a/29/ce/6a29ce4ca675cf56506a984639e6ce1e.jpg',
      'saison' => 3,
      'episodes' => [
        '1' => 20,
        '2' => 20,
        '3' => 20
      ],
    ],
    [
      'titre' => 'Sherlock Holmes',
      'annee' => 1984,
      'synopsis' => 'L\'art de retourner les cerveaux.',
      'genre' => 'Animation',
      'realisateur' => 5, //Hayao Miyazaki
      'urlAffiche' => 'https://m.media-amazon.com/images/I/712Fh8c-uZL.jpg',
      'saison' => 1,
      'episodes' => [
        '1' => 26
      ],
    ],
    [
      'titre' => 'Friends',
      'annee' => 1994,
      'synopsis' => 'Ils aiment beaucoup le café quand même.',
      'genre' => 'Comique',
      'realisateur' => 7, //David Crane
      'urlAffiche' => 'https://fr.web.img2.acsta.net/pictures/18/11/13/14/05/2764761.jpg',
      'saison' => 10,
      'episodes' => [
        '1' => 24,
        '2' => 24,
        '3' => 25,
        '4' => 24,
        '5' => 24,
        '6' => 25,
        '7' => 24,
        '8' => 24,
        '9' => 24,
        '10' => 18
      ],
    ],
    [
      'titre' => 'Le prince des dragons',
      'annee' => 2018,
      'synopsis' => 'C\'est queer et beau et pleins d\'action',
      'genre' => 'Animation',
      'realisateur' => 8, //Aaron Ehasz
      'urlAffiche' => 'https://fr.web.img2.acsta.net/pictures/20/02/28/16/50/2613068.jpg',
      'saison' => 4,
      'episodes' => [
        '1' => 9,
        '2' => 9,
        '3' => 9,
        '4' => 9
      ],
    ]
  ];
}

