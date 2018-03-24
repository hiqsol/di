<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\di\tests;

use PHPUnit\Framework\TestCase;
use yii\di\Reference;
use yii\di\tests\code\EngineInterface;

/**
 * ReferenceTest contains tests for \yii\di\Reference
 */
class ReferenceTest extends TestCase
{
    public function testTo()
    {
        $ref = Reference::to(EngineInterface::class);
        $this->assertInstanceOf(Reference::class, $ref);
        $this->assertSame(EngineInterface::class, $ref->getId());
    }
}
