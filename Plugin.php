<?php
/**
 * Leafpub: Simple, beautiful publishing. (https://leafpub.org)
 *
 * @link      https://github.com/Leafpub/leafpub
 * @copyright Copyright (c) 2016 Leafpub Team
 * @license   https://github.com/Leafpub/leafpub/blob/master/LICENSE.md (GPL License)
 */

namespace Leafpub\Plugins\QuickPost;

use Leafpub\Leafpub,
    Leafpub\Plugin\APlugin,
    Leafpub\Widget;

class Plugin extends APlugin {
    public function __construct($app){
        parent::__construct($app);
        Widget::addWidget([
            'name' => $this->getName(), 
            'class' => __CLASS__, 
            'image' => $this->getImage(), 
            'description' => $this->getDescription()
        ]);
        //$this->listenTo();
    }

    public static function renderWidget($data = null){
        return parent::render('show', $data, 'QuickPost');
    }
}