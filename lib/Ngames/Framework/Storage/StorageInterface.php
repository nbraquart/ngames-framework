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
namespace Ngames\Framework\Storage;

/**
 * Basic interface for all storage types.
 * 
 * @author Nicolas Braquart <nicolas.braquart+ngames@gmail.com>
 */
interface StorageInterface
{

    /**
     * Return true if the storage contains a value for the specified name.
     *
     * @param string $name            
     *
     * @return bool
     */
    public function has($name);

    /**
     * Sets the value for the name.
     *
     * @param string $name            
     * @param mixed $value            
     */
    public function set($name, $value);

    /**
     * Return the value for the name.
     *
     * @param string $name            
     * @param mixed $default            
     *
     * @return StorageInterface
     */
    public function get($name, $default = '');

    /**
     * Reset the storage.
     * After this method call, no more value are stored.
     */
    public function reset();

    /**
     * Clear the value for the field by name.
     *
     * @param string $name            
     */
    public function clear($name);
}
