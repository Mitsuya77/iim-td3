<?php

namespace Wmouc\IimTd3;
use Symfony\Component\DomCrawler\Crawler;

class Scrap
{
    public function getValorantAgents(): array
    {
        $url = 'https://playvalorant.com/fr-fr/agents/';
        // Récupérer le contenu HTML de la page
        $html = (string)file_get_contents($url);

        // Créer une instance de Crawler
        $crawler = new Crawler($html);

        // Utiliser les sélecteurs CSS pour extraire les nom des agents
        $valoAgents = $crawler->filter('.heading-07')->each(function (Crawler $node, $i){
            return $node->text();
        });

        return $valoAgents;
    }
}