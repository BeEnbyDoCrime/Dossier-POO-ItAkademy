<?php

namespace Model;

class Film extends Media
{
  protected $datas = [
    [
      'titre' => 'Le cinquième élément',
      'annee' => 1997,
      'synopsis' => "Egypte, 1914. Des extraterrestres récupèrent quatre pierres magiques, symboles des quatre éléments, jadis confiées à des prêtres. Avant de partir, les extraterrestres promettent que dans 300 ans, ils rapporteront les précieux cailloux. Au XXIIIe siècle, alors qu'ils font route vers la Terre, ils sont anéantis par la planète du Mal. Les habitants de ce monde maléfique, les Mangalores, s'emparent des pierres et foncent vers la Terre.",
      'genre' => 'Baston',
      'urlAffiche' => 'https://medias.unifrance.org/medias/74/0/74/format_page/media.jpg',
      'realisateur' => 0 //Luc Besson
    ],
    [
      'titre' => 'L\'Étrange Noël de monsieur Jack',
      'annee' => 1993,
      'synopsis' => "Jack est le roi des citrouilles de la ville Halloween. Un beau jour, il découvre la ville de Noël et décide de célébrer lui-même cette fête étrange. Il décide tout simplement de kidnapper le père Noël et de le remplacer par ses amis qui, au contraire du père Noël, sont terrifiants.",
      'genre' => 'Animation',
      'urlAffiche' => 'https://m.media-amazon.com/images/I/71UvWgIQNiL._AC_SY606_.jpg',
      'realisateur' => 1 //Tim burton
    ],
    [
      'titre' => 'Princess Bride',
      'annee' => 1987,
      'synopsis' => "Au Moyen Âge, dans le pays imaginaire de Florin, la belle Bouton d'Or se languit après le départ de son bien-aimé Westley, parti chercher fortune et qu'elle croit mort. Cinq ans plus tard, elle accepte d'épouser le prince Humperdinck pour qui elle n'éprouve aucun amour.",
      'genre' => 'Classique',
      'urlAffiche' => 'https://cinema-levagabond.jimdo.com/app/download/13588455324/princess+affiche+3.jpg?t=1507533064',
      'realisateur' => 2 //Rob Reiner
    ],
    [
      'titre' => 'Stardust, le mystère de l\'étoile',
      'annee' => 2007,
      'synopsis' => "Pour conquérir le coeur de son véritable amour, Tristan Thorn pénètre dans le royaume interdit afin de retrouver une étoile tombée du ciel qui a pris forme humaine.",
      'genre' => 'Fantasy',
      'urlAffiche' => 'https://fr.web.img5.acsta.net/medias/nmedia/18/62/85/03/18796692.jpg',
      'realisateur' => 3 //Neil Gaimann
    ],
    [
      'titre' => 'Le dîner de con',
      'annee' => 1998,
      'synopsis' => "Pierre, éditeur, participe chaque mercredi à un 'dîner de cons'. Le principe : chacun amène un 'con' et celui qui a déniché le plus spectaculaire est déclaré vainqueur. Ce soir, son invité est François Pignon. Passionné de modèles réduits en allumettes, ce dernier est également un véritable porteur de guigne.",
      'genre' => 'Français',
      'urlAffiche' => 'https://fr.web.img6.acsta.net/medias/nmedia/18/36/10/96/19649758.jpg',
      'realisateur' => 4 //Francis Veber
    ],
    [
      'titre' => 'Le voyage de Chihiro',
      'annee' => 2001,
      'synopsis' => "La drogue c'est mal, surtout à 10 ans. Au cours d'un voyage en voiture, la famille de Chihiro,10 ans, fait une halte dans un parc à thème qui semble abandonné. Ses parents découvrent des mets succulents dans un restaurant et commencent à manger. Ils se retrouvent alors transformés en cochons. Prise de panique, Chihiro s'enfuit et rencontre l'énigmatique Haku, qui lui explique le fonctionnement de l'univers dans lequel elle vient de pénétrer. Pour sauver ses parents, la fillette va devoir faire face à la terrible sorcière Yubaba.",
      'genre' => 'Animation',
      'urlAffiche' => 'https://fr.web.img6.acsta.net/medias/nmedia/00/02/36/71/chihiro.jpg',
      'realisateur' => 5 //Hayao Miyazaki
    ]
  ];

  
}

?>