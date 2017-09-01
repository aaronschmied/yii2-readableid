<?php namespace aaronschmied\readableID;

use yii\behaviors\AttributeBehavior;

class ReadableIDBehavior extends AttributeBehavior {

    /**
     * Length of the generated ID
     * @var int
     */
    public $length = 12;

    /**
     * Array containing the chars to use
     * @var array
     */
    public $chars = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'k', 'm', 'n', 'p', 'r', 's', 't', 'w',
        'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'K', 'L', 'M', 'N', 'P',
        'Q', 'R', 'S', 'T', 'W', 'X', 'Y', 'Z', '2', '3', '4', '5', '6', '7', '8', '9',
    ];

    /**
     * Returns the value for the attribute
     * @method getValue
     * @param  \yii\base\Event  $event  The event that triggers the current attribute updating.
     * @return string                   The generated readable ID.
     */
    public function getValue($event)
    {
        $id = "";
        for ($l = 0; $l < $this->length; $l++) {
            $i = mt_rand(1, sizeof($this->chars))-1;
            $id .= $this->chars[$i];
        }
        return $id;
    }

}
