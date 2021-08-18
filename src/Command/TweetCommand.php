<?php

namespace App\Command;

use Abraham\TwitterOAuth\TwitterOAuth;
use App\Service\TweetService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class TweetCommand extends Command
{
    protected static $defaultName = 'app:tweet';
    private TweetService $tweetService;
    private ParameterBagInterface $getParams;

    public function __construct(string $name = null, TweetService $tweetService, ParameterBagInterface $getParams)
    {
        parent::__construct($name);
        $this->tweetService = $tweetService;
        $this->getParams = $getParams;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $connexion = new TwitterOAuth(
            $this->getParams->get('consumerKey'),
            $this->getParams->get('consumerSecret'),
            $this->getParams->get('accessToken'),
            $this->getParams->get('accessTokenSecret')
        );
        $connexion->post("statuses/update", ["status" => $this->tweetService->generateTitle()]);

        return Command::SUCCESS;
    }
}
