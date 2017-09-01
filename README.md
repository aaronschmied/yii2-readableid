# ReadableID

When printing an ID in a non-monospace font, the letters can easily be mixed up. This package
tries to solve this problem, by defining a fixed array, which letters can be used to generate
said ID.

This ID is not collision-safe. If you need an ID which is guaranteed to be collision resistant, head over to https://github.com/endyjasmi/cuid.

## Usage

``` php
  ...
  use aaronschmied\readableID\ReadableIDBehavior;
  ...
  /**
   * @inheritdoc
   */
  public function behaviors () {
    return [
      'readable_id' => [
        'class' => ReadableIDBehavior::className(),
        'length' => 10,     // Optional, defaults to 12
        'chars' => [ ... ], // Optional
        'attributes' => [
          self::EVENT_BEFORE_INSERT => $this->primaryKey(),
        ],
      ]
    ];
  }


```
