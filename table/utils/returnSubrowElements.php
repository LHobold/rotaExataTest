<?php

/**
 * Checks if the subrow is an array, if so, join all elements in the array in a string with a line break, else, return the subrow string as it is
 *
 * @param mixed $subRow   The row thats going to be checked
 * 
 * @return string The checked row
 */
function returnSubrowElements($subRow)
{
    if (gettype($subRow) !== "array") {
        return $subRow;
    }

    // The map is to put "hyphen" before
    return implode("<br>", array_map(fn ($el) => "- $el", $subRow));
}
