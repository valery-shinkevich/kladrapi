<?php

namespace Kladr\Frontend\Controllers {

    use \Phalcon\Tag,
        \Phalcon\Mvc\Controller;

    class IntegrationController extends Controller
    {
        private $parts = array(
            'docs' => 'Документация «Кладр в облаке»',
            'jquery' => 'jQuery плагин для КЛАДР и ФИАС | Документация «Кладр в облаке»',
            'amiro' => 'AMIRO.CMS плагин для КЛАДР и ФИАС | Документация «Кладр в облаке»',
            'drupal' => 'DRUPAL плагин для КЛАДР и ФИАС | Документация «Кладр в облаке»',
            'dotnet' => '.NET C# плагин для КЛАДР и ФИАС | Документация «Кладр в облаке»',
            'php' => 'PHP плагин для КЛАДР и ФИАС | Документация «Кладр в облаке»',
            'bitrix' => 'Bitrix Битрикс плагин для КЛАДР и ФИАС | Документация «Кладр в облаке»',
            'nodejs' => 'Node Node.js плагин для КЛАДР и ФИАС | Документация «Кладр в облаке»',
            'java' => 'Java плагин для КЛАДР и ФИАС | Документация «Кладр в облаке»',
            'ones' => '1C Предприятие 8.2 плагин для КЛАДР и ФИАС | Документация «Кладр в облаке»',
        );


        public function initialize()
        {
            Tag::setTitle('Документация и интеграция с Кладр в облаке');
            $this->view->setVar('description', 'Описание интеграции с Кладр в облаке. Модули для jQuery, PHP, .Net, 1C-Bitrix');
            $this->view->setVar('keywords', 'КЛАДР, ФИАС, скачать КЛАДР, скачать ФИАС, скачать базу КЛАДР, скачать базу ФИАС, доступ к базе КЛАДР, доступ к базе ФИАС, КЛАДР онлайн, ФИАС онлайн, структура базы КЛАДР, структура базы ФИАС, описание базы КЛАДР, описание базы ФИАС, jQuery, php, net, 1c-bitrix');
            $this->view->setVar('parts', $this->parts);
        }

        public function indexAction()
        {
        }

        public function partsAction($name)
        {
            if(array_key_exists($name, $this->parts))
            {
                Tag::setTitle($this->parts[$name]);
                $this->view->setVar('embedded', false);
                $this->view->pick('integration/'.$name);
            }
            else
            {
                $this->view->pick('integration/index');
            }

        }


        public function onecAction()
        {
            Tag::setTitle('1C Документация и интеграция с Кладр в облаке');
        }

    }

}