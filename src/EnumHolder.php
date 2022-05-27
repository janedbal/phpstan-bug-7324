<?php

namespace Bug7324;

class EnumHolder
{

    private SomeEnum $enum;

    public function __construct(SomeEnum $enum)
    {
        $this->enum = $enum;
    }

    public function getEnum(): SomeEnum
    {
        return $this->enum;
    }



}
