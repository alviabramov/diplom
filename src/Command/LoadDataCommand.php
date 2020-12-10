<?php

namespace App\Command;

use App\Common\Entity\Content;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\ORM\EntityManagerInterface;

class LoadDataCommand extends Command
{
    protected static $defaultName = 'data:load-data';

    protected function configure()
    {
        $this->setDescription('Loading data into a database');
    }

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $listUrl = [
            'sport'=> 'https://news.yandex.ru/sport.rss',
            'gadgets' =>'https://news.yandex.ru/gadgets.rss',
            'auto' => 'https://news.yandex.ru/auto.rss',
            'index' => 'https://news.yandex.ru/index.rss',
            'world' => 'https://news.yandex.ru/world.rss'
        ];

        foreach ($listUrl as $cat => $url) {

            $xml = simplexml_load_file($url);
            $channel = $xml->channel;
            $array = json_decode(json_encode($channel), true);
            $newArr = $array['item'];

            // ------------------------   заполнение БД  ------------------------------
            foreach ($newArr as $item) {
                //регулярка для уникального ID новости
                preg_match('/--[0-9A-Za-z]{32}/',$item['link'],$match);
                $idNews = $match[0];

                $repository = $this->em->getRepository(Content::class);

                $news = new Content();
                $news->setIdNews("$idNews");

                //проверка на уникальность idNews
                $newIdNews = $news->getIdNews();
                $oldIdNews = $repository->findOneBy(['idNews' => $newIdNews]);

                if ($oldIdNews) {
                    $this->em->flush();
                } else {
                    $news->setCategory("$cat");
                    $news->setTitle("$item[title]");
                    $news->setDescription("$item[description]");
                    $news->setLink("$item[link]");
                    $news->setPubDate("$item[pubDate]");

                    $this->em->persist($news);
                    $this->em->flush();
                }
            }
        }

        return Command::SUCCESS;
    }
}
