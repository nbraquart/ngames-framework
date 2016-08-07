<?php
/*
 * Copyright (c) 2014-2016 Nicolas Braquart
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is furnished
 * to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace Ngames\Framework;

/**
 *
 * @author Nicolas Braquart <nicolas.braquart+ngames@gmail.com>
 */
class Timer
{

    public $time;

    /**
     * Creates a new timer.
     * If no time provided, it is initialized with the current time.
     *
     * @param int $time
     *            timestamp to initialize the timer with
     */
    public function __construct($time = null)
    {
        $this->time = $time == null ? self::now()->time : $time;
    }

    /**
     * Return the timestamp
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Create a new timer for current timestamp
     * 
     * @return Timer
     */
    public static function now()
    {
        return new self(microtime(true));
    }
}
