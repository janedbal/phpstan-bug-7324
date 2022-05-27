<?php

namespace Bug7324;

class ExampleTest extends \PHPUnit\Framework\TestCase
{

    public function testFoo(): void {
        $holder = new EnumHolder(SomeEnum::SomeCase);

        self::assertSame(SomeEnum::SomeOtherCase, $holder->getEnum());
        self::assertSame(SomeEnum::SomeCase, $holder->getEnum());
        self::assertSame(SomeEnum::SomeCase, $holder->getEnum());
    }

}
