<?php

namespace App\Service;

class TweetService
{
    private array $subject = [
        "Cet artiste",
        "Cette artiste",
        "Cet artiste engagé",
        "Cette artiste engagée",
        "Ce designer",
        "Cette designeuse",
        "Ce graphiste",
        "Cette graphiste",
        "Cet illustrateur",
        "Cette illustratrice",
        "Ce créatif",
        "Ce photographe",
        "Cette photographe",
        "Il",
        "Elle",
        "Ce collectif d'artistes",
        "Cette maman créative",
        "Ce papa créatif",
        "Cette élève précoce",
        "Ce vieux monsieur",
        "Cette adorable mamie",
        "Cet adorable couple",
        "Ce peintre aveugle",
        "Ce génie de l'ilustration",
        "Ce génie de l'animation",
        "Ce street artist",
        "Cette star de TikTok",
        "Cette instagrameuse",
        "Cet instagramer",
        "Ce youtuber",
        "Cette youtubeuse",
        "Ce Twitcher",
        "Ce touche-à-tout",
        "Ce bricoleur",
    ];
    private array $action = [
        "dessine des",
        "reproduit des",
        "peint des",
        "détourne des photos de",
        "réimagine les",
        "parodie des",
        "fait des bandes-déssinées avec des",
        "met en scène des",
        "revisite des",
        "sublime des",
        "reproduit en collage créatif des",
        "peint sur des façade des portraits géants de",
        "se maquille en",
        "se déguise en",
        "se grime en",
        "retouche des",
        "cuisine des plats reproduisant des",
    ];
    private array $character = [
        "personnages des Simpsons",
        "personnages de South Park",
        "personnages de Rick & Morty",
        "personnages de la pop culture",
        "personnages de Dragon Ball",
        "personnages de Star Wars",
        "personnages de Fortnite",
        "personnages DC Comics",
        "personnages de manga célèbres",
        "personnages de Game of Thrones",
        "personnages de Breaking Bad",
        "personnages de The Office",
        "personnages de Friends",
        "personnages cultes de séries Netflix",
        "personnages de Stranger Things",
        "personnages de jeux vidéos",
        "personnages de films cultes",
        "princesses Disney",
        "super-héros Marvel",
        "minions",
        "Pokemon",
        "chats célèbres d'internet",
        "popstars iconiques",
        "dirigeants mondiaux",
        "rappeurs célèbres",
        "rockstars iconiques",
        "figures du féminisme",
        "figures historiques célèbres",
        "tableaux célèbres",
    ];
    private array $media = [
        "avec ses excréments",
        "avec son déjeuner",
        "avec du sable noir volcanique",
        "avec du marc de café équitable",
        "avec un handicap physique pour dénoncer le validisme",
        "avec des habits de samuraï",
        "avec un look hipster",
        "avec un look hippie",
        "avec un look des années 90",
        "avec un look flower power",
        "avec des habits médiévaux",
        "avec des costumes d'époque",
        "avec les graphismes de Minecraft",
        "avec les poils de son chien",
        "avec des déchets plastiques récupérés dans la nature",
        "de manière vintage",
        "de façon minimaliste",
        "façon cyberpunk",
        "façon film d'horreur pour Halloween",
        "pour alerter sur le changement climatique",
        "pour célébrer le polyamour",
        "pour dénoncer la corruption",
        "pour dénoncer les violences sexistes",
        "pour dénoncer la faim dans le monde",
        "pour apporter un message de paix",
        "pour célébrer le mois des fiertés",
        "pour alerter sur la santé mentale",
        "dans l'univers de Tim Burton",
        "dans l'univers de Myazaki",
        "dans l'univers de Winnie l'ourson",
        "dans l'univers de Pixar",
        "en pixel-art",
        "vivant dans l'ex-URSS",
        "en stop motion",
        "sous acide",
        "en s'inspirant de ses rêves",
    ];

    private function randomize(array $array): string
    {
        return $array[random_int(0, count($array) - 1)];
    }

    public function generateTitle(): string
    {
        return $this->randomize($this->subject)." ".$this->randomize($this->action)." ".$this->randomize(
                $this->character
            )." ".$this->randomize($this->media);
    }
}