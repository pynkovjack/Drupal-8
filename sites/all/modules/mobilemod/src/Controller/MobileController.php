<?php
namespace Drupal\mobilemod\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Объявляем наш класс-контроллер.
 */
class MobileController extends ControllerBase {


    public function helloWorld() {
        $output = array();

        $output['#title'] = 'HelloWorld page title';

        $output['#markup'] = 'Hello World!';

        return $output;
    }

}