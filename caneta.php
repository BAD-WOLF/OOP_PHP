<?php

class Caneta
{
    public $cor;

    public $tip;

    public $charge;

    public $capped;

    public $model;

    public function scribble()
    {

        if($this->capped) {

            return "unable to scribble, because the acne is covered";

        } else {

            --$this->charge;

            return "I'm doodling... ".PHP_EOL.

            "ink charge percentage is now $this->charge%".PHP_EOL;

        }

    }                                                                                                                                                                                                         public function cap()
    {

        if(!$this->capped) {

            $this->capped=true;

        }

        return "the pen is capped".PHP_EOL;

    }

    public function uncapped()
    {

        if($this->capped) {

            $this->capped=false;

        }

        return "the pen is uncapped".PHP_EOL;
        ;

    }

}

// ...
