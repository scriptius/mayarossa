<?php
/**
 * Created by PhpStorm.
 * User: Victor_PC
 * Date: 14.04.2016
 * Time: 21:41
 */

namespace app\commands;

use yii\console\Controller;

class MemoryController
    extends Controller
{
    public function actionTestInt()
    {
        $memoryBefore = memory_get_usage();
        echo 'memory before test:'.$memoryBefore.PHP_EOL;
        $i = 1;
        $j =1000000;
        do
        {
            $test[] = $i;
            ++$i;
        }
        while ($i <= $j);
        $memoryAfter = memory_get_usage();
        echo 'memory after test:'.$memoryAfter.PHP_EOL;
        echo 'array consist from '.$j.' elements'.PHP_EOL;
        echo 'One element type of int, used '.($memoryAfter-$memoryBefore)/$j.' Bytes';
        print_r(get_declared_classes());
        var_dump($new = new \ReflectionClass('yii\base\Object'));
        var_dump($new::IS_FINAL);
    }

}