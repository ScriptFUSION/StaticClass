<?php
namespace ScriptFUSION;

/**
 * Marks a class as only containing static methods.
 */
trait StaticClass
{
    /**
     * Prevents instantiation of this class.
     */
    final private function __construct()
    {
        // Intentionally empty.
    }
}
